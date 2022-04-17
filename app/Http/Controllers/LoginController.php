<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request, $remember) {
        $credentials = $request->validate([
            'name' => ['required'],
            'password' => ['required', 'min:6']
        ]);

        if(Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->back();
        }

        return back()->withErrors(['name' => 'Неверные данные для входа'])->onlyInput();
    }
}
