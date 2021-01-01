<?php

namespace App\Http\Controllers\Chutro;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThongbaoController extends Controller
{
    public function thongbao($id)
    {   
        $data = DB::table('phongchothues')->select('id','thoigiandang','handangbai','loaiphong','sotien')->where('idchutro','=',$id)->where('duyetbaidang','=','Đã được duyệt')->get();
        $data1 = DB::table('phongchothues')->select('id','thoigiandang','handangbai','loaiphong','sotien')->where('idchutro','=',$id)->where('duyetbaidang','Đã bị hủy')->get();
        
        return view("chutro.thongbao", ['data' => $data,'data1'=>$data1]);
    }
}
