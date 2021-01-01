<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuanlycommentController extends Controller
{
    public function quanly()
    {
        $data = DB::table('comments')->where('duyetcomment','Chưa được duyệt')->get();
        return view("admin.quanlycomment",['data'=>$data]);
    }
}
