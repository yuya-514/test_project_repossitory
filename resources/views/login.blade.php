@extends('layouts.user')

@section('title', 'ユーザーログイン画面')

@section('content')
<div class="container">
    <div class="row">
        <h1>ユーザーログイン画面</h1>
        <form action="{{ route('login') }}" method="post">
            @csrf

            <div class="form-group">
                <input type="text" class="form-control" id="password" name="password" placeholder="パスワード">
                @if($errors->has('password'))
                    <p>{{ $errors->first('password') }}</p>
                @endif
            </div>

            <div class="form-group">
                <input type="text" class="form-control" id="email" name="email" placeholder="メールアドレス">
                @if($errors->has('email'))
                    <p>{{ $errors->first('email') }}</p>
                @endif
            </div>
            <div class = "form-submit">
                <a her="regist">
                    <button type="submit" class="btn btn-regist" name="regist-form">新規登録</button>
                </a>
                <button type="submit" class="btn btn-login" name="login">ログイン</button>
            </div>
        </form>
    </div>
</div>
@endsection
