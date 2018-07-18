<?php
namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller {

    public function getLogin()
    {
        return view('admin/auth');
    }

    public function postLogin(Request $request)
    {
        $password = $request->input('inputPassword');
        $name = $request->input('inputName');

        if (Auth::attempt(['name' => $name, 'password' => $password]))
        {
            return redirect()->intended('admin/index');
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return view('admin/auth');
    }

}