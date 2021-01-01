<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Phongchothue;

class DuyetbaidangController extends Controller
{
    public function duyetbai($id)
    {
        $data = DB::table('phongchothues')->where('id',$id)->get();
        return view("admin.duyetbaidang",['data'=>$data]);
    }

    public function duyetbaidang(Request $request, $id)
    {
        $thongtin = Phongchothue::find($id);
        if($request->duyetbai == "Duyệt bài")$thongtin->duyetbaidang = "Đã được duyệt";
        else $thongtin->duyetbaidang = "Hủy bài đăng";
        $thongtin->save();
        return redirect('admin/quanlybaidang');
    }
}
