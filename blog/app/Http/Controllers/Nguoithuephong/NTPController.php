<?php

namespace App\Http\Controllers\Nguoithuephong;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NTPController extends Controller
{
    public function home(Request $request)
    {
        $data = DB::table('phongchothues')->get();
        return view("nguoithuephong.homeuser",['data'=>$data]);
    }
}
