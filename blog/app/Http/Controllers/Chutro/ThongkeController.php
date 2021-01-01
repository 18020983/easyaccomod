<?php

namespace App\Http\Controllers\Chutro;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThongkeController extends Controller
{
    public function thongke()
    {
        $data = DB::table('phongchothues')->orderBy('view_count', 'desc')->limit(1)->get();
        return view("chutro.thongke", ['data' => $data]);
    }
}
