<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PathToFileController;
use App\Http\Controllers\UserController;
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
'nkn-index',
'nkn-news',
'in-development',
'map'


];



foreach($publicStaticRoutesRegistry as $publicStaticRoute) {
    Route::get('/'.$publicStaticRoute, function() use($publicStaticRoute){


        return view($publicStaticRoute);
    });
}

Route::get('/', function() {
    return view('index');
});

Route::get('/our-status', function() {
    return view('our-status');
});

/* admin board methods */
$adminBoardRoutes = ['/articles' => ArticleController::class, '/path-to-file' => PathToFileController::class, '/users' => UserController::class];


foreach(array_keys($adminBoardRoutes) as $route) {

    Route::get($route, [$adminBoardRoutes[$route], 'getAll']);
    Route::post($route, [$adminBoardRoutes[$route], 'create']);
    Route::put($route.'/{id}', [$adminBoardRoutes[$route], 'update']);
    Route::get($route.'/{id}', [$adminBoardRoutes[$route], 'getOneById']);
    Route::delete($route.'/{id}', [$adminBoardRoutes[$route], 'delete']);

}

Route::get('/admin-articles', ['uses' => ArticleController::class.'@getAllArticlesAdmin']);
Route::get('/admin-create-article', ['uses' => ArticleController::class.'@getArticleCreationForm']);
Route::get('/admin-edit-article/{id}', ['uses' => ArticleController::class.'@getArticleEditForm']);

Route::get('/admin-users', ['uses' => UserController::class.'@getAllUsersAdmin']);
Route::get('/admin-create-user', ['uses' => UserController::class.'@getUserCreationForm']);
Route::get('/admin-map', ['uses' => ArticleController::class.'@getAdminMapView']);



