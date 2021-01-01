<?php

namespace App\Http\Controllers\Chutro;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\phongchothue;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;


class DangtinmoiController extends Controller
{
    public function dangtinmoi()
    {   
        $tinhs = DB::table('devvn_tinhthanhpho')->get();
        return view("chutro.dangtinmoi", ['tinhs'=>$tinhs]);
    }
    public function tinhhuyen(Request $request){
        $matp = $request->get('name');    
        $huyens = DB::table('devvn_quanhuyen')->where('matp', $matp)->get();
        // echo $huyens;
        return response(['data'=>$huyens]);
    }
    public function Themtinmoi(Request $request, $id){
        $new = new phongchothue();
        $new->idchutro = $id;
        $new->thanhpho = $request->province_id;
        $new->quan = $request->district_id;
        $new->diachi = $request->street_number;
        $new->loaiphong = $request->loai_chuyen_muc;
        $new->mota = $request->noi_dung;
        $new->thongtinlienhe = $request->phone;
        $new->giaca = $request->gia;
        $new->dientich = $request->dien_tich;
        $new->doituongchothue = $request->doi_tuong;
        $new->goithoigian = $request->package_type;
        $new->songay = $request->total;
        $new->phongtam = ($request->radio1)." - ".($request->radio2);
        $new->phongbep = $request->radio3;
        $new->dieuhoa = $request->radio4;
        $new->bancong = $request->radio5;
        $new->chungchu = $request->radio6;
        $new->view_count = 0;
        $new->trangthaiphong = "Chưa cho thuê";
        $new->duyetbaidang = "Chưa được duyệt";
        $new->thoigiandang = Carbon::now('Asia/Ho_Chi_Minh');

        if($new->goithoigian == "Đăng theo tháng")
        {
            $str = $new->songay;
            $time = explode(" ", $str);
            $new->handangbai = Carbon::now('Asia/Ho_Chi_Minh')->addMonths($time[0]);     ;
        }
        if($new->goithoigian == "Đăng theo ngày")
        {
            $str = $new->songay;
            $time = explode(" ", $str);
            $new->handangbai = Carbon::now('Asia/Ho_Chi_Minh')->addDays($time[0]);     ;
        }
        if($new->goithoigian == "Đăng theo tuần")
        {
            $str = $new->songay;
            $time = explode(" ", $str);
            $new->handangbai = Carbon::now('Asia/Ho_Chi_Minh')->addWeeks($time[0]);     ;
        }

        if($request->file('anh1') == null || $request->file('anh2') == null || $request->file('anh3') == null) 
        {
            echo "chua co anh";
        }
        else{
            $file1 = $request->file('anh1');
            $request->file('anh1')->move('anhphongtro',$file1->getClientOriginalName());
            $new->anh1 = $file1->getClientOriginalName();

            $file2 = $request->file('anh2');
            $request->file('anh2')->move('anhphongtro',$file2->getClientOriginalName());
            $new->anh2 = $file2->getClientOriginalName();

            $file3 = $request->file('anh3');
            $request->file('anh3')->move('anhphongtro',$file3->getClientOriginalName());
            $new->anh3 = $file3->getClientOriginalName();
        }  
        
        $new->sotien = ($new->thoigiandang)->diffInDays($new->handangbai)*1000;
        
        $new -> save();
        return redirect('chutro/dangtinmoi/'.$id)->with('success', 'Đăng ký thành công');;
    }
}

