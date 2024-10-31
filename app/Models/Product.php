<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    public function getList() {
        $products = DB::table('products')->get();

        return $products;
    }

    public function seachProduct($data) {
        DB::table('products')->insert([
            'keyword' => $data->keyword,
            'product-name' => $data->product_name,
        ]);
    }
}