<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    public function getLogin() {
        $uers = DB::table('users')->get();

        return $uers;
    }
    public function loginUser($data) {
        // 登録処理
        DB::table('users')->insert([
            'password' => $data->password,
            'email' => $data->email,
        ]);
    }
    public function getRegist() {
        $regists = DB::table('users')->get();

        return $regists;
    }
    public function registUser($data) {
        // 登録処理
        DB::table('users')->insert([
            'password' => $data->password,
            'email' => $data->email,
        ]);
    }
}
