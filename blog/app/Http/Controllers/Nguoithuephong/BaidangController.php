<?php

namespace App\Http\Controllers\Nguoithuephong;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Phongchothue;
use App\Models\Comment;

class BaidangController extends Controller
{
    public function baidang($id)
    {
        $data = Phongchothue::find($id);
        $data->view_count = $data->view_count+1;
        $data->save();
        $data1 = DB::table('phongchothues')->where('id',$id)->get();
        $data2 =  DB::table('comments')->join('users','comments.idnguoithuephong','=','users.id')->select('users.name','comments.comment')->where('idphongtro',$id)->where('duyetcomment',"Đã được duyệt")->get();
        return view("nguoithuephong.baidang",['data1'=>$data1,'data2'=>$data2]);
    }

    public function comment(Request $request, $id)
    {
        $data = Phongchothue::find($id);
        $new_comment = new Comment();
        $new_comment->idphongtro = $data->id;
        $new_comment->idnguoithuephong = $data->idchutro;
        $new_comment->comment = $request->new_comment;
        $new_comment->duyetcomment = "Chưa được duyệt";
        $new_comment->save();
        return redirect('/nguoithuephong/baidang/'.$id);
    }
}

