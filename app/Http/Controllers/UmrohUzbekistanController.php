<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UmrohUzbekistanController extends Controller
{
    public function paketSatu()
    {
        $data = DB::table('umroh_uzbekistan')->where('id', 1)->first();
        return view('admin.umroh-uzbekistan.paket-1', compact('data'));
    }

    public function paketSatuUpdate(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|min:5',
            'title-1' => 'required|min:3',
            'hari-1' => 'required|min:3',
            'title-2' => 'required|min:3',
            'hari-2' => 'required|min:3',
            'title-3' => 'required|min:3',
            'hari-3' => 'required|min:3',
            'title-4' => 'required|min:3',
            'hari-4' => 'required|min:3',
            'title-5' => 'required|min:3',
            'hari-5' => 'required|min:3',
            'title-6' => 'required|min:3',
            'hari-6' => 'required|min:3',
            'title-7' => 'required|min:3',
            'hari-7' => 'required|min:3',
            'title-8' => 'required|min:3',
            'hari-8' => 'required|min:3',
            'title-9' => 'required|min:3',
            'hari-9' => 'required|min:3',
            'title-10' => 'required|min:3',
            'hari-10' => 'required|min:3',
            'title-11' => 'required|min:3',
            'hari-11' => 'required|min:3',
            'title-12' => 'required|min:3',
            'hari-12' => 'required|min:3',
            'title-13' => 'required|min:3',
            'hari-13' => 'required|min:3',
            'img-input' => 'nullable|mimes:png,jpg,jpeg|max:10000',
        ]);

        $nama = $request->input('nama');
        $title_1 = $request->input('title-1');
        $hari_1 = $request->input('hari-1');
        $title_2 = $request->input('title-2');
        $hari_2 = $request->input('hari-2');
        $title_3 = $request->input('title-3');
        $hari_3 = $request->input('hari-3');
        $title_4 = $request->input('title-4');
        $hari_4 = $request->input('hari-4');
        $title_5 = $request->input('title-5');
        $hari_5 = $request->input('hari-5');
        $title_6 = $request->input('title-6');
        $hari_6 = $request->input('hari-6');
        $title_7 = $request->input('title-7');
        $hari_7 = $request->input('hari-7');
        $title_8 = $request->input('title-8');
        $hari_8 = $request->input('hari-8');
        $title_9 = $request->input('title-9');
        $hari_9 = $request->input('hari-9');
        $title_10 = $request->input('title-10');
        $hari_10 = $request->input('hari-10');
        $title_11 = $request->input('title-11');
        $hari_11 = $request->input('hari-11');
        $title_12 = $request->input('title-12');
        $hari_12 = $request->input('hari-12');
        $title_13 = $request->input('title-13');
        $hari_13 = $request->input('hari-13');

        $img_old = DB::table('umroh_uzbekistan')->where('id', 1)->first();

        if ($request->hasFile('img-input')) {

            $file = $request->file('img-input');
            $filename = date('YmdHi') . '-' . $file->getClientOriginalName();
            $file->move(public_path('assets/img/paket-perjalanan/umroh'), $filename);

            DB::table('umroh_uzbekistan')->where('id', 1)->update([
                'nama' => $nama,
                'title_1' => $title_1,
                'hari_1' => $hari_1,
                'title_2' => $title_2,
                'hari_2' => $hari_2,
                'title_3' => $title_3,
                'hari_3' => $hari_3,
                'title_4' => $title_4,
                'hari_4' => $hari_4,
                'title_5' => $title_5,
                'hari_5' => $hari_5,
                'title_6' => $title_6,
                'hari_6' => $hari_6,
                'title_7' => $title_7,
                'hari_7' => $hari_7,
                'title_8' => $title_8,
                'hari_8' => $hari_8,
                'title_9' => $title_9,
                'hari_9' => $hari_9,
                'title_10' => $title_10,
                'hari_10' => $hari_10,
                'title_11' => $title_11,
                'hari_11' => $hari_11,
                'title_12' => $title_12,
                'hari_12' => $hari_12,
                'title_13' => $title_13,
                'hari_13' => $hari_13,
                'img' => 'assets/img/paket-perjalanan/umroh/' . $filename,
            ]);
        } else {
            // Menggunakan gambar sebelumnya
            DB::table('umroh_uzbekistan')->where('id', 1)->update([
                'nama' => $nama,
                'title_1' => $title_1,
                'hari_1' => $hari_1,
                'title_2' => $title_2,
                'hari_2' => $hari_2,
                'title_3' => $title_3,
                'hari_3' => $hari_3,
                'title_4' => $title_4,
                'hari_4' => $hari_4,
                'title_5' => $title_5,
                'hari_5' => $hari_5,
                'title_6' => $title_6,
                'hari_6' => $hari_6,
                'title_7' => $title_7,
                'hari_7' => $hari_7,
                'title_8' => $title_8,
                'hari_8' => $hari_8,
                'title_9' => $title_9,
                'hari_9' => $hari_9,
                'title_10' => $title_10,
                'hari_10' => $hari_10,
                'title_11' => $title_11,
                'hari_11' => $hari_11,
                'title_12' => $title_12,
                'hari_12' => $hari_12,
                'title_13' => $title_13,
                'hari_13' => $hari_13,
                'img' => $img_old->img,
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Di Ubah!'
        ]);
    }
}
