<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuanlytaikhoanController extends Controller
{
    public function quanlytaikhoan()
    {
        $data = DB::table('users')->select('id','name','duyettaikhoan')->where('doituong','Chủ nhà trọ')->where('duyettaikhoan','Chưa được duyệt')->get();
        $data1 = DB::table('users')->select('id','name','duyettaikhoan')->where('doituong','Chủ nhà trọ')->where('duyettaikhoan','Đã được duyệt')->get();
        
        return view("admin.quanlytaikhoan",['data'=>$data,'data1'=>$data1]);
    }
}
