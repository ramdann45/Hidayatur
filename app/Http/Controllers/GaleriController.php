<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GaleriController extends Controller
{
    public function index()
    {
        $logo = DB::table('logo_perusahaan')->get();
        $galeri = DB::table('galeri')->get();
        $title = "All Galeri";

        return view('galeri', compact('logo', 'galeri', 'title'));
    }
}
