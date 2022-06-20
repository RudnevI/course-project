<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\PathToFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Throwable;
use Illuminate\Support\Str;

class CrudController extends Controller
{
    protected $model;

    public function getModel()
    {
        return ($this->model);
    }

    public function getAll()
    {
        return $this->getModel()::orderBy('id', 'desc')->paginate(20);
    }

    public function getAllUnpaginated()
    {
        return $this->getModel()::all();
    }

    public function createInstanceFromFactory()
    {
        return ($this->getModel())::factory()->create();
    }

    public function createParent(Request $request)
    {
        try {

            if (array_key_exists('password', $request->all())) {
                $request->request->set('password', bcrypt($request->all()['password']));
            }

            $entity = $this->getModel()::create($request->all());
            if ($request->file('article-images') !== null) {
                $files = $request->file('article-images');
                foreach ($files as $file) {
                    $fileUuid = Str::orderedUuid();
                    $pathToFile = new PathToFile();
                    $file->storeAs('./', $fileUuid . '.' . $file->guessExtension(), options: ['disk' => 'public']);

                    $pathToFile->path = $fileUuid . '.' . $file->guessExtension();
                    $pathToFile->article_id = $entity->id;
                    $pathToFile->save();
                }
            }
            return $entity->id;
        } catch (Throwable $throwable) {
            dd($throwable->getMessage());
        }
    }

    public function getOneById($id)
    {
        try {
            return $this->getModel()::where('id', '=', $id)->first();
        } catch (Throwable $throwable) {
        }
    }

    public function update(Request $request, $id)
    {

        try {
            $entity = $this->getModel()::findOrFail($id);
            $entity->fill($request->all());
            $entity->save();
        } catch (Throwable $throwable) {
            dd($throwable->getMessage());
        }
        return redirect()->back();
    }

    public function delete($id)
    {
        try {
            $entity = $this->getModel()::findOrFail($id);
            if ($this->getModel() === Article::class) {
                $associatedImagePaths = PathToFIle::where('article_id', $entity->id)->get()->toArray();

                foreach ($associatedImagePaths as $path) {

                    Storage::delete($path['path']);
                }
            }
            $entity->delete();
        } catch (Throwable $throwable) {
            dd($throwable->getMessage());
        }
        return redirect()->back();
    }
}
