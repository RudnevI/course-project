<?php

namespace App\Http\Controllers;

use App\Models\MapCoordinate;
use Illuminate\Http\Request;

class MapCoordinateController extends CrudController
{
    protected $model = MapCoordinate::class;

    public function create(Request $request)
    {
        parent::createParent($request);
        return redirect('/admin-map');
    }
}
