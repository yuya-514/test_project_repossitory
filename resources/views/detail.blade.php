@extends('layouts.product')

@section('title', '商品情報詳細画面')

@section('content')
<div class="container">
    <h1>商品情報詳細画面</h1>
    

    <div class="links">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>商品画像</th>
                    <th>商品名</th>
                    <th>メーカー</th>
                    <th>価格</th>
                    <th>在庫</th>
                    <th>コメント</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($companies as $companies)
                <tr>
                    <td>{{ $company->id }}</td>
                    <td>{{ $company->img_path }}</td>
                    <td>{{ $company->company_id }}</td>
                    <td>{{ $company->product_name }}</td>
                    <td>{{ $company->price }}</td>
                    <td>{{ $company->stock }}</td>
                    <td>{{ $company->comment }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class = "form-submit">
        <button type="submit" class="btn btn-regist">新規登録</button>
        <button type="submit" class="btn btn-back">戻る</button>
    </div>
</div>
@endsection
