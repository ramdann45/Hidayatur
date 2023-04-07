<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $penawaran = DB::table('penawaran_terbatas')->get();
        $services = DB::table('our_services')->get();
        $terbaru = DB::table('wisata_terbaru')->get();
        $umroh = DB::table('paket_umroh')->get();
        $umrohPlus = DB::table('paket_umroh_plus')->get();
        $testi = DB::table('testimoni')->get();
        $logo = DB::table('logo_perusahaan')->get();
        $heroimg = DB::table('hero_img')->orderByDesc('id')->get();
        $title = "Home";

        return view('index', compact('penawaran', 'services', 'terbaru', 'umroh', 'umrohPlus', 'testi', 'heroimg', 'logo', 'title'));
    }

    public function bookingTour()
    {
        $booking = DB::table('booking_tour')->orderBy('created_at', 'desc')->get()->reverse();

        return view('admin.booking-tour.index', compact('booking'));
    }

    public function formBooking(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|min:3',
            'nomer-hp' => 'required|min:5',
            'email' => 'required|min:5',
            'kategori' => 'required',
            'deskripsi' => 'nullable',
        ]);

        $nama = $request->input('nama');
        $noHp = $request->input('nomer-hp');
        $email = $request->input('email');
        $kategori = $request->input('kategori');
        $deskripsi = $request->input('deskripsi');

        DB::table('booking_tour')->insert([
            'nama' => $nama,
            'no_hp' => $noHp,
            'email' => $email,
            'destinasi' => $kategori,
            'deskripsi' => $deskripsi,
            'created_at' => date('d-m-Y'),
            'response' => 0,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Berhasil Booking. Admin Kami akan segera Menghubungi Anda!'
        ]);
    }

    public function bookingTourUpdate($id)
    {
        DB::table('booking_tour')->where('id', $id)->update([
            'response' => 1,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Perubahan Status Berhasil'
        ]);
    }
}
