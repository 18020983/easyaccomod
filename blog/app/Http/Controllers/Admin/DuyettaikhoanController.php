<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class DuyettaikhoanController extends Controller
{
    public function duyettaikhoanform($id)
    {
        $data = DB::table('users')->where('id',$id)->get();
        return view("admin.duyettaikhoan",['data'=>$data]);
    }

    public function pheduyet(Request $request,$id)
    {
        $thongtin = User::find($id);
        if($request->duyetbai == "Duyệt bài")$thongtin->duyettaikhoan = "Đã được duyệt";
        else $thongtin->duyettaikhoan = "Hủy tài khoản";
        $thongtin->save();
        return redirect('admin/quanlytaikhoan');
    }
}
