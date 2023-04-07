<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function index()
    {
        $logo = DB::table('logo_perusahaan')->get();
        $title = "Contact Us";

        return view('contact', compact('logo', 'title'));
    }
}
