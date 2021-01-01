<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DoimatkhauController extends Controller
{
    public function doimatkhauform($id)
    {
        return view("admin.doimatkhau");
    }

    public function doimatkhau(Request $request ,$id)
    {
        $user = User::find($id);
        if (Hash::check($request->old_password, $user->password)) { 
            $user->password = bcrypt($request->new_password);
            $user->save();
            return redirect('admin/thongtincanhan');
        }

        return redirect()->back();
    }
}



