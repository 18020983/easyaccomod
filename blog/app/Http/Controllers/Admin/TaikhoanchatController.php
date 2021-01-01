<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Messages;
use App\Events\RedisEvent;
use Illuminate\Support\Facades\Auth;

class TaikhoanchatController extends Controller
{
    public function index()
    {
        $data = DB::table('users')->where('doituong','Chủ nhà trọ')->where('duyettaikhoan','Đã được duyệt')->get();
        return view("admin.taikhoanchat",['data'=>$data]);
    }
}
