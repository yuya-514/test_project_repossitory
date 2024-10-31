<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Company extends Model
{
    public function getDetail() {
        $companies = DB::table('companies')->get();

        return $companies;
    }
    public function getEdit() {
        $companies = DB::table('companies')->get();

        return $companies;
    }
}