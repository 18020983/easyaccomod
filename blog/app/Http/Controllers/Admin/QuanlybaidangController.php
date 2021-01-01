<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuanlybaidangController extends Controller
{
    public function quanlybaidang()
    {
        $data1 = DB::table('phongchothues')->select('id', 'loaiphong','thoigiandang','duyetbaidang')->where('duyetbaidang','Đã được duyệt')->get();
        $data = DB::table('phongchothues')->select('id', 'loaiphong','thoigiandang','duyetbaidang')->where('duyetbaidang','Chưa được duyệt')->get();
        
        return view("admin.quanlybaidang",['data'=>$data , 'data1'=>$data1]);
    }

    public function ql()
    {
        return view ("admin.quanlybaidang");
    }
}
