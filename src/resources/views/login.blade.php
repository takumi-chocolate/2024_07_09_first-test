@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}" >
@endsection

@section('content')

<div class="login">
    <div class="section__login">
        <h2 class="login__header">
            ログイン
        </h2>
    </div>
    <div class="login__form">
        <div class="login__form--email">
            <form action="/login" >
                @csrf
                <input type="email" name="email" value="{{ old('email') }}" placeholder="メールアドレス">
            </form>
        </div>
        <div class="login__form--password">
            <form action="/login" >
                @csrf
                <input type="password" name="password" value="{{ old('password') }}" placeholder="パスワード">
            </form>
        </div>
        <div class="login__form--button">
            <form action="/login" method="post">
                @csrf
                <button type="submit">ログイン</button>
            </form>
        </div>
        <div class="login__register">
            <p class="register__introduce">アカウントをお持ちでない方はこちらから</p>
        </div>
        <div class="register__redirect">
            <form action="/register" method="post">
                @csrf
                <p class="register--access">
                    <a href="/register" class="register__redirect--access">会員登録</a>
                </p>
            </form>
        </div>
    </div>
</div>
@endsection
<!-- リレーションの部分の復習をする -->