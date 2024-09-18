<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Auth\Events\Registered;

class RegisteredUserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('/register', ['users' => $users]);
    }
    

    public function create(RegisterRequest $request) {
        $form = $request->all();
        User::create($form);
        return redirect('/');
    }
    /*bladefileのformタグに対応するようにコーディングする*/
    /*エラー$fillable　バリデーションを学びなおす　→　今まで詰まっていたエラーが解決できるかもしれない*/


    /*public function store(RegisterUserRequest $request) {
        $users = $request->only(['name', 'email', 'password']);
        User::create($users);
        return redirect('/register/login');
    }*/

    
}
