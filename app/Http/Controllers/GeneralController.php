<?php

namespace App\Http\Controllers;

use App\Models\GeneralInformartion;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class GeneralController extends Controller
{
    public function general(Request $request)
    {
        $key = GeneralInformartion::latest()->first();
        if ($key->general_id == $key->general_key) {
            return redirect('/login');
        } else {
            return redirect('/activate');
        }
    }
    public function activate()
    {
        $key = GeneralInformartion::latest()->first();
        if ($key->general_id == $key->general_key) {
            return redirect('/login');
        } else {
            return redirect('/activate');
        }
    }
    public function update(Request $request)
    {
        GeneralInformartion::latest()->first()->update([
            'general_id' => $request->key,
        ]);
        return redirect('/login');
    }
}
