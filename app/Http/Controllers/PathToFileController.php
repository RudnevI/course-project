<?php

namespace App\Http\Controllers;

use App\Models\PathToFile;
use Illuminate\Http\Request;

class PathToFileController extends CrudController
{
    protected $model = PathToFile::class;

    public function create(Request $request)
    {
        parent::createParent($request);
    }
}
