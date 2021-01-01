<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout() {
		Auth::logout();
		return redirect('/home');
	}
}
