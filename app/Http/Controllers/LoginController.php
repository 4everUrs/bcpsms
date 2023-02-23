<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function home()
    {
        if (Auth::user()->user_level == 0) {
            return redirect()->route('adminDashboard');
        } elseif (Auth::user()->user_level == 1) {
            return redirect()->route('hr1Dashboard');
        } elseif (Auth::user()->user_level == 2) {
            return redirect()->route('hr2Dashboard');
        } elseif (Auth::user()->user_level == 3) {
            return redirect()->route('employeeDashboard');
        }
    }
}
