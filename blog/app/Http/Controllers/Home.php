<?php

namespace App\Http\Controllers;
use App\Models\phongchothue;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;



class Home extends Controller
{
    
    public function index()
    {
        $tinhs = DB::table('devvn_tinhthanhpho')->get();
        $data = DB::table('phongchothues')->get();
        return view("home.index",['data'=>$data, 'tinhs'=>$tinhs]);
        
    }
    // them mới cho tỉnh huyện phần tìm kiếm ở trang chủ
    public function tinhhuyen(Request $request){
        $matp = $request->get('name');    
        $huyens = DB::table('devvn_quanhuyen')->where('matp', $matp)->get();
        // echo $huyens;
        return response(['data'=>$huyens]);
    }

    public function timkiem(Request $request) {
        $gia_tren = 0;
        $gia_duoi = 0;
        if($request->gia_ca == "Dưới 1 triệu"){
            $gia_tren = 1000000;
            $gia_duoi = 0;
        }
        else if($request->gia_ca == "1 triệu - 2 triệu"){
            $gia_tren = 2000000;
            $gia_duoi = 1000000;
        }
        else if($request->gia_ca == "2 triệu - 3 triệu"){
            $gia_tren = 3000000;
            $gia_duoi = 2000000;
        }
        else if($request->gia_ca == "3 triệu - 5 triệu"){
            $gia_tren = 5000000;
            $gia_duoi = 3000000;
        }
        else if($request->gia_ca == "5 triệu - 10 triệu"){
            $gia_tren = 10000000;
            $gia_duoi = 5000000;
        }
        else if($request->gia_ca == "10 triệu - 50 triệu"){
            $gia_tren = 50000000;
            $gia_duoi = 10000000;
        }
        else{
            $gia_tren = 100000000;
            $gia_duoi = 0;
        }
        // lựa chọn diện tích
        $dientich_t = 0;
        $dientich_d = 0;
        if($request->dien_tich == "Dưới 20 m2"){
            $dientich_t = 20;
            $dientich_d = 0;
        }
        else if($request->dien_tich == "20 m2 - 30 m2"){
            $dientich_t = 30;
            $dientich_d = 20;
        }
        else if($request->dien_tich == "30 m2 - 50 m2"){
            $dientich_t = 50;
            $dientich_d = 30;
        }
        else if($request->dien_tich == "50 m2 - 100 m2"){
            $dientich_t = 100;
            $dientich_d = 50;
        }
        else{
            $dientich_t = 10000;
            $dientich_d = 100;
        }
        // echo($request->loaidichvu);
        // echo $request->tinh;
        // echo $request->huyen;
        // echo($gia_tren);
        // echo($gia_duoi);
        // echo($dientich_d);
        // echo($dientich_t);
        // echo($request->radio1);
        // echo($request->radio2);
        // echo($request->radio3);
        // echo($request->radio4);
        // echo($request->radio5);
        // echo($request->radio6);

        $data = DB::table('phongchothues')
        ->where( 'loaiphong', $request->loaidichvu)
        ->where( 'thanhpho', $request->tinh)
        ->where( 'quan', $request->huyen)
        ->where( 'giaca', '<=', $gia_tren)
        ->where( 'giaca', '>=', $gia_duoi)
        ->where( 'dientich', '<=', $dientich_t)
        ->where( 'dientich', '>=', $dientich_d)
        ->where( 'phongtam',($request->radio1)." - ".($request->radio2))
        ->where( 'phongbep', $request->radio3)
        ->where( 'dieuhoa', $request->radio4)
        ->where( 'bancong', $request->radio5)
        ->where( 'chungchu', $request->radio6)
        ->get();
        $tinhs = DB::table('devvn_tinhthanhpho')->get();
        return view("home.index",['data'=>$data, 'tinhs'=>$tinhs]);
    }

    public function baidang($id)
    {
        $data = Phongchothue::find($id);
        $data->view_count = $data->view_count+1;
        $data->save();
        $data1 = DB::table('phongchothues')->where('id',$id)->get();
        $data2 =  DB::table('comments')->join('users','comments.idnguoithuephong','=','users.id')->select('users.name','comments.comment')->where('idphongtro',$id)->where('duyetcomment',"Đã được duyệt")->get();
        return view("home.baidang",['data1'=>$data1,'data2'=>$data2]);
    }

    function inserttinmoi(Request $request)
    {   
        $new = new phongchothue();
        $new->idchutro = 1;//Đợi có front đang nhập đk;
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
        $new->trangthaiphong = "Đã cho thuê";
        $new->duyetbaidang = false;
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
        $new -> save();
        return view("home.dangtinmoi");
    }


    public function load()
    {
        return view("home.upanh");
    }


    public function quanlytindang(){
        $trangthaiphong = DB::table('phongchothues')->select('idphong','anh1','giaca','thoigiandang','handangbai','trangthaiphong')->where('duyetbaidang','=','1')->get();
        $dachothue = DB::table('phongchothues')->select('idphong','anh1','giaca','thoigiandang','handangbai','trangthaiphong')->where('trangthaiphong','=','Đã cho thuê')->where('duyetbaidang','=','1')->get();
        $chuachothue = DB::table('phongchothues')->select('idphong','anh1','giaca','thoigiandang','handangbai','trangthaiphong')->where('trangthaiphong','=','Chưa cho thuê')->where('duyetbaidang','=','1')->get();
        $phongchuapheduyet = DB::table('phongchothues')->select('idphong','anh1','giaca','thoigiandang','handangbai','trangthaiphong')->where('duyetbaidang','=','0')->get();
        return view("home.quanlytindang",['trangthaiphong'=>$trangthaiphong,'dachothue'=>$dachothue,'chuachothue'=>$chuachothue,'phongchuapheduyet'=>$phongchuapheduyet]);
    }    
}
