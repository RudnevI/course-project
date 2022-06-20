<?php

namespace Tests\Unit;

use App\Models\Article;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Tests\TestCase;


abstract class BaseCrudTest extends TestCase
{

    use RefreshDatabase;
    protected $controller;



    private function getController()
    {
        return new ($this->controller)();
    }

    public function test_get_all()
    {
        $res = $this->getController()->getAll();
        $this->assertTrue($res instanceof Paginator);
    }

    public function test_get_all_unpaginated()
    {
        $res = $this->getController()->getAllUnpaginated();
        $this->assertTrue($res instanceof Collection);
    }

    public function test_get_one()
    {
        $instance = $this->getController()->createInstanceFromFactory();
        $res = $this->getController()->getOneById($instance->id);
        $model = $this->getController()->getModel();
        $this->assertTrue($res instanceof $model);
    }


    public function test_create()
    {
        $original = $this->getController()->createInstanceFromFactory();
        $instance = $original;
        $original->delete();
        $request = new Request();
        $attributes = $instance->getFillable();
        $input = [];
        foreach ($attributes as $attribute) {
            if ($attribute === 'password') {
                $input += ['password' => $instance->password];
                continue;
            }
            $input += [$attribute => $instance->toArray()[$attribute]];
        }
        if (array_key_exists('id', $input)) {
            unset($input['id']);
        }
        $request->merge($input);
        // foreach ($instance->getAttributes() as $key => $value) {
        //     $request->request->set($key, $value);
        // }
        $res = $this->getController()->createParent($request);
        $created = ($this->getController()->getModel())::where('id', '=', $res)->first();
        $this->assertNotNull($created);
    }

    public function test_update()
    {
        $original = $this->getController()->createInstanceFromFactory();
        $new = $this->getController()->createInstanceFromFactory();
        $new->delete();
        $request = new Request();
        $attributes = $original->getFillable();
        $input = [];
        foreach ($attributes as $attribute) {
            if ($attribute === 'password') {
                $input += ['password' => $new->password];
                continue;
            }
            $input += [$attribute => $new->toArray()[$attribute]];
        }
        if (array_key_exists('id', $input)) {
            unset($input['id']);
        }
        $request->merge($input);
        $this->getController()->update($request, $original->id);
        $updated = ($this->getController()->getModel())::where('id', '=', $original->id)->first();
        foreach ($input as $key => $value) {
            $this->assertEquals($updated[$key], $value);
        }
    }

    public function test_delete()
    {
        $original = $this->getController()->createInstanceFromFactory();
        $this->getController()->delete($original->id);
        $res = ($this->getController()->getModel())::where('id', '=', $original->id)->first();

        $this->assertNull($res);
    }
}
