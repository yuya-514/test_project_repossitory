@extends('layouts.product')

@section('title', '商品一覧画面')

@section('content')
<div class="container">
    <h1>商品一覧画面</h1>

    <div class="form_list">
        <form action="list" method="post">
            @csrf

            <div class="form-seach">
                <input type="text" class="form-control" id="keyword" name="keyword" placeholder="検索キーワード">
                @if($errors->has('keyword'))
                    <p>{{ $errors->first('keyword') }}</p>
                @endif
            </div>

            <div class="form-seach">
                <input type="text" class="form-control" id="product-name" name="product-name" placeholder="メーカー名">
                @if($errors->has('product-name'))
                    <p>{{ $errors->first('product-name') }}</p>
                @endif
            </div>

            <button type="submit" class="btn btn-login">検索</button>

            <div class="form-info">
                <thead>
                    <th>ID</th>
                    <th>商品画像</th>
                    <th>商品名</th>
                    <th>価格</th>
                    <th>在庫数</th>
                    <th>メーカー名</th>
                    <button type="submit" class="btn btn-regist">新規登録</button>
                </thead>
                <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id}}</td>
                        <td>{{ $product->img_path}}</td>
                        <td>{{ $product->company_id}}</td>
                        <td>{{ $product->price}}</td>
                        <td>{{ $product->stock}}</td>
                        <td>{{ $product->product_name}}</td>
                    </tr>
                @endforeach
                </tbody>
                <button type="submit" class="btn btn-detail">詳細</button>
                <button type="submit" class="btn btn-delete">削除</button>
            </div>
        </form>
    </div>
</div>
@endsection
