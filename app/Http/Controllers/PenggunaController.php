<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    
    function tampilan()
    {
        return view('pengguna.tampilan');
    }
}
