<?php

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


$publicStaticRoutesRegistry = ['our-activity', 'about', 'communication',
'contacts', 'cultural-heritage', 'culture', 'education', 'faculties', 'hard-sciences',
'how-we-work', 'news', 'news-archive', 'our-status,', 'partners', 'social-sciences',
'news-page-1',
'news-page-2',
'news-page-3',
'news-page-4',
'news-page-5',
'news-page-6',
'news-page-7',


];



foreach($publicStaticRoutesRegistry as $publicStaticRoute) {
    Route::get('/'.$publicStaticRoute, function() use($publicStaticRoute){


        return view($publicStaticRoute);
    });
}

Route::get('/', function() {
    return view('index');
});


