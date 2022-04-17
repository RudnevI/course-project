<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends CrudController
{

    protected $model = Article::class;

    public function getAllArticlesAdmin() {
        return view('admin-articles', ['articles' => $this->getAll()]);
    }
    public function getArticleCreationForm() {

        return view('admin-create-article');
    }

    public function getArticleEditForm($id) {
        return view('admin-update-article', ['article' => $this->getOneById($id)]);
    }

    public function create(Request $request) {
        parent::create($request);
        return redirect('/admin-articles');

    }
}
