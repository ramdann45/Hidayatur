<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {

        $logo = DB::table('logo_perusahaan')->get();
        $title = "All Blogs";

        return view('blogs', compact('logo', 'title'));
    }
}
