@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register">
    <div class="section__register">
        <h2 class="register__header">
            会員登録
        </h2>
    </div>
    <div class="register__form">
        <div class="register__form--name">
            <form action=""  method="post">
                @csrf
                <input type="text" name="name" value="{{ old('name') }}" placeholder="名前">
            </form>
        </div>
        <div class="register__form--email">
            <form action=""  method="post">
                @csrf
                <input type="email" name="email" value="{{ old('email') }}" placeholder="メールアドレス">
            </form>
        </div>
        <div class="register__form--password">
            <form action=""  method="post">
                @csrf
                <input type="password" name="password" value="{{ old('password') }}" placeholder="パスワード">
            </form>
        </div>
        <div class="register__form--true-password">
            <form action=""  method="post">
                @csrf
                <input type="password" name="true password" value="{{ old('true password' )}}" placeholder="確認用パスワード">
            </form>
        </div>
        <div class="register__form--button">
            <form action="" method="post">
                @csrf
                <button>会員登録</button>
            </form>
        </div>
        <div class="register__login">
            <p class="login__introduce">アカウントをお持ちの方はこちらから</p>
        </div>
        <div class="login__redirect">
            <p class="login--access">
                <a href="/login" class="login__redirect--access">ログイン</a>
            </p>
        </div>
    </div>
</div>
@endsection
