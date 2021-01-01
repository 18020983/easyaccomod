<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class CapnhatthongtinController extends Controller
{
    public function thongtinform($id)
    {
        return view('admin.updatethongtin');
    }

    public function updatethongtin(Request $request,$id)
    {
        $thongtin = User::find($id);
        $thongtin->name = $request->name;
        $thongtin->hoten = $request->hoten;
        $thongtin->sodienthoai = $request->sodienthoai;
        $thongtin->email = $request->email;
        $thongtin->socmnd = $request->socmnd;
        $thongtin->diachi = $request->diachi;
        $thongtin->save();
        return redirect('/admin/thongtincanhan');
    }
}
