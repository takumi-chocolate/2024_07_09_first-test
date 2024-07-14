<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;

class RegisteredUserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('/register', ['users' => $users]);
    }
    

    public function create(Request $request) {
        /*$form = $request->all();
        User::create($form);
        return view('/register');*/
    }
    /*bladefileのformタグに対応するようにコーディングする*/
    /*indexとcreateとstoreの違いを確認googleで調べる*/


    /*public function store(RegisterUserRequest $request) {
        $users = $request->only(['name', 'email', 'password']);
        User::create($users);
        return redirect('/register/login');
    }*/

    
}
