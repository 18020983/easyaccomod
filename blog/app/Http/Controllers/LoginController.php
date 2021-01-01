<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginform()
    {
        return view("nguoithuephong.login");
    }

    public function login(Request $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password,  'doituong' => 'Người thuê trọ' ])) {
            // nếu đăng nhập thành công thì chuyển hướng về home
            $this->validate($request, array(
                'email' => 'required|email',
                'password' => 'required|min:1'
            ));
            return redirect('nguoithuephong/home');
        }
        elseif(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'doituong' => 'Chủ nhà trọ','duyettaikhoan'=>'Đã được duyệt'])){
            $this->validate($request, array(
                'email' => 'required|email',
                'password' => 'required|min:1'
            ));
            return redirect('chutro/home');
        }
        elseif(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'doituong' => "Admin" ])){
            $this->validate($request, array(
                'email' => 'required|email',
                'password' => 'required|min:1'
            ));
            return redirect('admin/home');
        }
        else{
            return Redirect::to('/login')->withInput()->withErrors("Email sai");
            
        }
        return Redirect::to('/login')->withInput()->withErrors("Email sai");
    }
}

