<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterUserRequest;

class RegisteredUserController extends Controller
{
    /*public function index() {
        $users = User::all();
        return view('/register', ['users' => $users]);
    }*/
    

    public function create(Request $request) {
        $users = User::all();
        $form = $request->all();
        User::create($form);
        return view('/register', ['users' => $users]);
    }
    /*bladefileのformタグに対応するようにコーディングする*/
    /*indexとcreateとstoreの違いを確認googleで調べる*/


    public function store(RegisterUserRequest $request) {
        $user = $request->only(['name', 'email', 'password']);
        User::create($user);
        return redirect('/register/login');
    }

    
}
