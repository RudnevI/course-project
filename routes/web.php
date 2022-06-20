<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\LoginController;
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


$publicStaticRoutesRegistry = config('publicRoutes');



foreach ($publicStaticRoutesRegistry as $publicStaticRoute) {
    Route::get('/' . $publicStaticRoute, function () use ($publicStaticRoute) {


        return view($publicStaticRoute);
    });
}

Route::get('/', function () {
    return view('index');
});



/* admin board methods */
$adminBoardRoutes = ['articles' => ArticleController::class, 'path-to-file' => PathToFileController::class, 'users' => UserController::class];


foreach (array_keys($adminBoardRoutes) as $route) {

    Route::middleware(['auth', 'admin'])->group(function () use ($route, $adminBoardRoutes) {
        Route::get($route, [$adminBoardRoutes[$route], 'getAll']);
        Route::post($route, [$adminBoardRoutes[$route], 'create']);
        Route::put($route . '/{id}', [$adminBoardRoutes[$route], 'update'])->name($route . 'update');
        Route::get($route . '/{id}', [$adminBoardRoutes[$route], 'getOneById']);
        Route::delete($route . '/{id}', [$adminBoardRoutes[$route], 'delete']);
    });
}

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin-articles', ['uses' => ArticleController::class . '@getAllArticlesAdmin']);
    Route::get('/admin-create-article', ['uses' => ArticleController::class . '@getArticleCreationForm']);
    Route::get('/admin-update-article/{id}', ['uses' => ArticleController::class . '@getArticleEditForm']);

    Route::get('/admin-users', ['uses' => UserController::class . '@getAllUsersAdmin']);
    Route::get('/admin-create-user', ['uses' => UserController::class . '@getUserCreationForm']);
    Route::get('/admin-map', ['uses' => ArticleController::class . '@getAdminMapView']);
    Route::get('/admin-update-user/{id}', ['uses' => UserController::class . '@getUserUpdateForm']);
});
Route::get('/chat', function () {
    return view('chat');
})->middleware('auth');
Route::post('/login', ['uses' => LoginController::class . '@authenticate'])->name('login');
Route::get('/article/{url}', ['uses' => ArticleController::class . '@getArticle'])->name('article');
