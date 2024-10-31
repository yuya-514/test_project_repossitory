<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function showList() {
        $model = new Product();
        $products = $model->getList();

        return view('list', ['products' => $products]);
    }

    public function listSeach(ProductRequest $request) {

        DB::beginTransaction();

        try {
            $model = new Product();
            $model->listProduct($request);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return back();
        }

        return redirect(route('list'));
    }
}
