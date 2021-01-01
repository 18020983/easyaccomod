<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests;

class SigninController extends Controller
{
    public function signin()
    {
        return view("nguoithuephong.dangky");
    }

    public function insertsignin(Request $request)
    {
        $thongtin = new User();
        // $thongtin = $request->validate([
        //     'hoten' => 'required|min:1',
        //     'sodienthoai' => 'required|min:1',
        //     'email' => 'required|min:1',
        //     'socmnd' => 'required|min:1',
        //     'diachi' => 'required|min:1',
        //     'name' => 'required|min:1',
        //     'password' => 'required|min:1',
        // ]);

        // $this->validate($request, array(
        //     'hoten' => 'required|min:1',
        //     'sodienthoai' => 'required|min:1',
        //     'email' => 'required|min:1',
        //     'socmnd' => 'required|min:1',
        //     'diachi' => 'required|min:1',
        //     'name' => 'required|min:1',
        //     'password' => 'required|min:1',
        // ));


        // $this->validate($request, array(
            
        // ));


        $thongtin->hoten = $request->hoten;
        $thongtin->sodienthoai = $request->sodienthoai;
        $thongtin->email = $request->email;
        $thongtin->socmnd = $request->socmnd;
        $thongtin->diachi = $request->diachi;
        $thongtin->doituong = $request->doituong;
        $thongtin->name = $request->tendangnhap;
        $thongtin->duyettaikhoan = "Chưa được duyệt";
        $thongtin->password = bcrypt($request->matkhau);
        $thongtin->save();
        return redirect('/home');
    }
}
