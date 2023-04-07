<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UmrohController extends Controller
{
    public function index()
    {
        $title = "Umroh";
        $logo = DB::table('logo_perusahaan')->get();
        $allPaket = DB::table('umroh_ramadhan')->get();

        return view('paket-perjalanan.umroh.index', compact('title', 'logo', 'allPaket'));
    }

    public function childPage($slug)
    {
        $title = $slug;
        $logo = DB::table('logo_perusahaan')->get();
        $allPaket = DB::table('umroh_ramadhan')->where('slug', $slug)->first();

        return view('paket-perjalanan.umroh.child-page.child', compact('title', 'logo', 'allPaket'));
    }

    public function umrohPlus()
    {
        $title = "Umroh Plus";
        $logo = DB::table('logo_perusahaan')->get();
        $allPaket = DB::table('umroh_ramadhan')->get();
        $uzb = DB::table('umroh_uzbekistan')->get();
        $dubai = DB::table('umroh_dubai')->get();
        $mesir = DB::table('umroh_mesir')->get();
        $turki = DB::table('umroh_turki')->get();

        return view('paket-perjalanan.umroh-plus.index', compact('title', 'logo', 'allPaket', 'uzb', 'dubai', 'mesir', 'turki'));
    }

    public function umrohPlusUzbekistan($slug)
    {
        $title = $slug;
        $logo = DB::table('logo_perusahaan')->get();
        $uzb = DB::table('umroh_uzbekistan')->where('slug', $slug)->first();

        return view('paket-perjalanan.umroh-plus.uzbekistan.index', compact('title', 'logo', 'uzb'));
    }

    public function umrohPlusDubai($slug)
    {
        $title = $slug;
        $logo = DB::table('logo_perusahaan')->get();
        $uzb = DB::table('umroh_dubai')->where('slug', $slug)->first();

        return view('paket-perjalanan.umroh-plus.dubai.index', compact('title', 'logo', 'uzb'));
    }

    public function umrohPlusMesir($slug)
    {
        $title = $slug;
        $logo = DB::table('logo_perusahaan')->get();
        $uzb = DB::table('umroh_mesir')->where('slug', $slug)->first();

        return view('paket-perjalanan.umroh-plus.mesir.index', compact('title', 'logo', 'uzb'));
    }

    public function umrohPlusTurki($slug)
    {
        $title = $slug;
        $logo = DB::table('logo_perusahaan')->get();
        $uzb = DB::table('umroh_turki')->where('slug', $slug)->first();

        return view('paket-perjalanan.umroh-plus.turki.index', compact('title', 'logo', 'uzb'));
    }

    // CRUD

}
