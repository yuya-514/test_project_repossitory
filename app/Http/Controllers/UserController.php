<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showLogin()  {
        $model = new User();
        $users = $model->getLogin();

        return view('login', ['users' => $users]);
    }

    public function loginSubmit(UserRequest $request) {

        DB::beginTransaction();

        try {
            $model = new User();
            $model->loginUser($request);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return back();
        }

        return redirect(route('login'));
    }

    public function showRegist() {
        return view('regist');
    }

    public function registSubmit(UserRequest $request) {

        DB::beginTransaction();

        try {
            $model = new User();
            $model->registUser($request);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            return back();
        }

        return redirect(route('regist'));
    }
}