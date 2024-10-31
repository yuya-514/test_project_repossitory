@extends('layouts.product')

@section('title', '商品情報編集画面')

@section('content')
<div class="container">
    <h1>商品情報編集画面</h1>

    <div class="form-list" action="#" method="post">
        @csrf
        <div class="form-regist">
            <label for="product-id">ID</label>
            <input type="text" class="form-control" id="product-id" name="product-id" value="{{ old('') }}">
         </div>
            
        <div class="form-regist">
            <label for="product-name">商品名</label>
            <input type="text" class="form-control" id="product-name" name="product-name" value="{{ old('') }}">
         </div>

        <div class="form-regist">
            <label for="maker-name">メーカー名</label>
            <input type="text" class="form-control" id="maker-name" name="maker-nake" value="{{ old('') }}">
        </div>
            <div class="form-regist">
            <label for="price">価格</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ old('') }}">
        </div>

        <div class="form-regist">
            <label for="stock">在庫数</label>
            <input type="text" class="form-control" id="stock" name="stock" value="{{ old('') }}">
        </div>

        <div class="form-regist">
            <label for="comment">コメント</label>
            <input type="text" class="form-control" id="comment" name="comment" value="{{ old('') }}">
        </div>

        <div class="form-regist">
            <label for="img-path">商品画像</label>
            <input type="file" class="form-control" id="img-path" name="img-path" value="{{ old('') }}">
        </div>

        <div class = "form-submit">
                <button type="submit" class="btn btn-regist">新規登録</button>
                <button type="submit" class="btn btn-back">戻る</button>
        </div>
    </div>
</div>
@endsection

