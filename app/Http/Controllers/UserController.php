<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends CrudController
{
    protected $model = User::class;

    public function getAllUsersAdmin() {
        return view('admin-users', ['users' => $this->getAll()]);
    }

    public function getUserCreationForm() {
        return view('admin-create-user');
    }

    public function create(Request $request) {
        parent::create($request);
        return $this->getAllUsersAdmin();
    }
}
