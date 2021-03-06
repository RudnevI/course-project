<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\CulturalHeritageSite;
use App\Models\MapCoordinate;
use App\Models\PathToFile;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ArticleController extends CrudController
{

    protected $model = Article::class;

    public function getAllArticlesAdmin()
    {
        return view('admin-articles', ['articles' => $this->getAll()]);
    }
    public function getArticleCreationForm()
    {

        return view('admin-create-article');
    }

    public function getArticleEditForm($id)
    {
        return view('admin-update-article', ['article' => $this->getOneById($id)]);
    }

    public function create(Request $request)
    {
        parent::createParent($request);
        return redirect('/admin-articles');
    }

    public function getAdminMapView()
    {
        return view('admin-map', ['coordinates' => MapCoordinate::all()]);
        // return view('admin-map',['sites' => MapCoordinate::all()]);
    }

    public function getArticle($url)
    {
        $article = Article::where('url', '=', $url)->first();
        $pathsToFiles = PathToFile::where('article_id', '=', $article->id)->get();
        if ($article === null) throw new NotFoundHttpException();

        return view('article', ['article' => $article, 'pathsToFiles' => $pathsToFiles]);
    }
}
