<?php

namespace App\Http\Controllers\Chutro;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ThongtinController extends Controller
{
    public function thongtincanhan()
    {
        return view("chutro.thongtincanhan");
    }

    public function getsuathongtincanhan(Request $request)
    {
    }



}
