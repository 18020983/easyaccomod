<?php

namespace App\Http\Controllers\Chutro;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class QuanlytindangController extends Controller
{
    
    public function quanlytindang(){
        $trangthaiphong = DB::table('phongchothues')->select('id','anh1','giaca','thoigiandang','handangbai','trangthaiphong')->where('duyetbaidang','=','Đã được duyệt')->get();
        
        $dachothue = DB::table('phongchothues')->select('id','anh1','giaca','thoigiandang','handangbai','trangthaiphong')->where('trangthaiphong','=','Đã cho thuê')->where('duyetbaidang','=','Đã được duyệt')->get();
        
        $chuachothue = DB::table('phongchothues')->select('id','anh1','giaca','thoigiandang','handangbai','trangthaiphong')->where('trangthaiphong','=','Chưa cho thuê')->where('duyetbaidang','=','Đã được duyệt')->get();
        
        $phongchuapheduyet = DB::table('phongchothues')->select('id','anh1','giaca','thoigiandang','handangbai','trangthaiphong')->where('duyetbaidang','=','Chưa được duyệt')->get();

        return view("chutro.quanlytindang",['trangthaiphong'=>$trangthaiphong,'dachothue'=>$dachothue,'chuachothue'=>$chuachothue,'phongchuapheduyet'=>$phongchuapheduyet]);
    }
}
