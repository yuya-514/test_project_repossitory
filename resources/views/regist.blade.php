@extends('layouts.user')

@section('title', 'ユーザー新規登録画面')

@section('content')
<div class="container">
    <div class="row">
        <h1>ユーザー新規登録画面</h1>
        <form action="{{ route('regist.submit') }}" method="post">
            @csrf

            <div class="form-group">
                <input type="text" class="form-control" id="password" name="password" placeholder="パスワード">
                @if($errors->has('password'))
                    <p>{{ $errors->first('password') }}</p>
                @endif
            </div>

            <div class="form-group">
            <input type="text" class="form-control" id="email" name="email" placeholder="メールアドレス" value="{{ old('email') }}">
                @if($errors->has('email'))
                    <p>{{ $errors->first('email') }}</p>
                @endif
            </div>
            <div class = "form-submit">
                <button type="submit" class="btn btn-regist" name="regist">新規登録</button>
                <button type="submit" class="btn btn-back" name="login-back" formaction="login">戻る</button>
            </div>
        </form>
    </div>
</div>
@endsection
