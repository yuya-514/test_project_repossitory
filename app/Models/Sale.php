<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sale extends Model
{
    public function getSale() {
        $products = DB::table('products')->get();

        return $products;
    }

    public function saleSubmit($data) {
        DB::table('products')->insert([
            'company-id' => $data->company_id,
            'product-name' => $data->product_name,
            'price' => $data->price,
            'stock' => $data->stock,
            'comment' => $data->comment,
            'img-path' => $data->img_path,
        ]);
    }
}
