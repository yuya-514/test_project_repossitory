@extends('layouts.product')

@section('title', '商品新規登録画面')

@section('content')
<div class="container">
    <h1>商品新規登録画面</h1>
    <form action="{{ route('sale.submit') }}" method="post">
        <div class="form-list">
        @csrf

            <div class="form-regist">
                <label for="product-name">商品名*</label>
                <input type="text" class="form-control" id="product-name" name="product-name" value="{{ old('') }}">
                @if($errors->has('company-id'))
                    <p>{{ $errors->first('company-id') }}</p>
                @endif
            </div>

            <div class="form-regist">
                <label for="company-name">メーカー名*</label>
                <input type="text" class="form-control" id="company-name" name="company-name" value="{{ old('') }}">
                @if($errors->has('product-name'))
                    <p>{{ $errors->first('product-name') }}</p>
                @endif
            </div>
                <div class="form-regist">
                <label for="price">価格*</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('') }}">
                @if($errors->has('price'))
                    <p>{{ $errors->first('price') }}</p>
                @endif

            </div>

            <div class="form-regist">
                <label for="stock">在庫数*</label>
                <input type="text" class="form-control" id="stock" name="stock" value="{{ old('') }}">
                @if($errors->has('stock'))
                    <p>{{ $errors->first('stock') }}</p>
                @endif
            </div>

            <div class="form-regist">
                <label for="comment">コメント</label>
                <input type="text" class="form-control" id="comment" name="comment" value="{{ old('') }}">
                @if($errors->has('comment'))
                    <p>{{ $errors->first('comment') }}</p>
                @endif
            </div>

            <div class="form-regist">
                <label for="img-path">商品画像</label>
                <input type="file" class="form-control" id="img-path" name="img-path" value="{{ old('') }}">
                @if($errors->has('img-path'))
                    <p>{{ $errors->first('img-path') }}</p>
                @endif
            </div>

            <div class = "form-submit">
                <button type="submit" class="btn btn-regist" name="sale-regist">新規登録</button>
                <button type="submit" class="btn btn-back" name="back">戻る</button>
            </div>
        </from>
    </div>
</div>
@endsection
