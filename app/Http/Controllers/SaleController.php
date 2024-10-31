<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Http\Requests\SaleRequest;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    public function showSale() {
        $model = new Sale();
        $sales = $model->getsale();

        return view('sale', ['sales' => $sales]);
    }

    public function saleSubmit(SaleRequest $request) {

        DB::beginTransaction();

        try {
            $model = new Sale();
            $model->saleProduct($request);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return back();
        }

        return redirect(route('sale'));
    }
}
