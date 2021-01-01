<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;

class DuyetcommentController extends Controller
{
    public function duyetbai($id)
    {
        $data = DB::table('comments')->join('phongchothues','phongchothues.id' , '=' ,'comments.idphongtro')
        ->join('users','users.id','=','comments.idnguoithuephong')->where('comments.id',$id)->get();
        return view("admin.duyetcomment",['data'=>$data]);
    }

    public function postduyetcomment(Request $request, $id)
    {
        $thongtin = Comment::find($id);
        if($request->duyetbai == "Duyệt bài")$thongtin->duyetcomment = "Đã được duyệt";
        else $thongtin->duyetcomment = "Hủy bài đăng";
        $thongtin->save();
        return redirect('admin/quanlycomment');
    }
}
