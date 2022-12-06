<?php

namespace App\Http\Controllers\Admin\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login.login');
    }

    public function login(Request $request)
    {
        $username = ($request->email) ?? '';
        $password = md5($request->password) ?? '';
        $user = DB::table('tbl_admin')
            ->where('admin_email', $username)
            ->where('admin_password', $password)
            ->first();
        if (!empty($user)) {
            foreach ($user as $k => $value) {
                if (!empty($k) && !empty($value)) {
                    Session::put($k, $value);
                }
            }
            return redirect()->to('/admin/dashboard');
        } else {
            return redirect()->to('/login/index')->with('error', 'Tài khoản hoặc mật khẩu không chính xác');
        }
    }

    public function logout() {
        Session::flush();
        return redirect()->to('/login/index');
    }
}
