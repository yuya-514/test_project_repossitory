<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function showDetail() {
        $model = new Company();
        $companies = $model->getDetail();

        return view('detail', ['companies' => $companies]);
    }
    public function showEdit() {
        $model = new Company();
        $companies = $model->getEdit();

        return view('edit', ['companies' => $companies]);
    }
}