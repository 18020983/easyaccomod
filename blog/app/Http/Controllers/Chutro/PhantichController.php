<?php

namespace App\Http\Controllers\Chutro;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PhantichController extends Controller
{

    public function phantich()
    {
        $data = DB::table('phongchothues')->orderBy('view_count', 'desc')->limit(1)->get();
        return view("chutro.thongbao", ['data' => $data]);
    }
}

