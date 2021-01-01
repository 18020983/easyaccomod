<?php

namespace App\Http\Controllers\Chutro;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Phongchothue;

class ChutroController extends Controller
{
    public function home()
    {
        $data = DB::table('phongchothues')->get();
        return view("chutro.homechutro",['data'=>$data]);
    }
}
