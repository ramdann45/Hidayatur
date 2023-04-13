<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WisataIslamiController extends Controller
{
    public function index()
    {
        $title = "Wisata Islami";
        $logo = DB::table('logo_perusahaan')->get();
        $balkan = DB::table('tour_balkan')->where('id', 1)->first();
        $mongolia = DB::table('tour_mongolia')->where('id', 1)->first();
        $beijing = DB::table('tour_beijing')->where('id', 1)->first();
        $india = DB::table('tour_india')->where('id', 1)->first();
        $dubai = DB::table('tour_dubai')->where('id', 1)->first();
        $korea = DB::table('tour_korea')->where('id', 1)->first();

        return view('paket-perjalanan.wisata-islami.index', compact('title', 'logo', 'balkan', 'mongolia', 'beijing', 'india', 'dubai', 'korea'));
    }

    public function balkan()
    {
        $title = "Wisata Islami Balkan";
        $logo = DB::table('logo_perusahaan')->get();
        $data = DB::table('tour_balkan')->where('id', 1)->first();

        return view('paket-perjalanan.wisata-islami.child.balkan', compact('data', 'title', 'logo'));
    }

    public function mongolia()
    {
        $title = "Wisata Islami Mongolia";
        $logo = DB::table('logo_perusahaan')->get();
        $data = DB::table('tour_mongolia')->where('id', 1)->first();

        return view('paket-perjalanan.wisata-islami.child.mongolia', compact('data', 'title', 'logo'));
    }

    public function beijing()
    {
        $title = "Wisata Islam Beijing China";
        $logo = DB::table('logo_perusahaan')->get();
        $data = DB::table('tour_beijing')->where('id', 1)->first();

        return view('paket-perjalanan.wisata-islami.child.china', compact('data', 'title', 'logo'));
    }

    public function india()
    {
        $title = "Wisata Islam India";
        $logo = DB::table('logo_perusahaan')->get();
        $data = DB::table('tour_india')->where('id', 1)->first();

        return view('paket-perjalanan.wisata-islami.child.india', compact('data', 'title', 'logo'));
    }

    public function dubai()
    {
        $title = "Wisata Islam Dubai Abu Dhabi";
        $logo = DB::table('logo_perusahaan')->get();
        $data = DB::table('tour_dubai')->where('id', 1)->first();

        return view('paket-perjalanan.wisata-islami.child.dubai', compact('data', 'title', 'logo'));
    }

    public function korea()
    {
        $title = "Wisata Islam Korea Selatan";
        $logo = DB::table('logo_perusahaan')->get();
        $data = DB::table('tour_korea')->where('id', 1)->first();

        return view('paket-perjalanan.wisata-islami.child.korea', compact('data', 'title', 'logo'));
    }
}
