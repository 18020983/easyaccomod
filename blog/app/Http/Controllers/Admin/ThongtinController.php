<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThongtinController extends Controller
{
    public function thongtincanhan()
    {
        return view("admin.thongtincanhan");
    }

    public function getsuathongtincanhan(Request $request)
    {
        $thongtin = User::find($id);
        $thongtin->hoten = $request->hoten;
        $thongtin->sodienthoai = $request->sodienthoai;
        $thongtin->email = $request->email;
        $thongtin->socmnd = $request->socmnd;
        $thongtin->diachi = $request->diachi;
        $thongtin->save();
        return view("admin.thongtincanhan");
    }
}
