<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimeController extends Controller
{
    public function index()
    {
        return view('attendance');
    }
    public function timein()
    {
        $this->dispatchBrowserEvent('open-modal');
    }
}
