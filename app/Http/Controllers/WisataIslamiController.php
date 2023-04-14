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

    // ADMIN
    public function tourBalkan()
    {
        $data = DB::table('tour_balkan')->where('id', 1)->first();
        return view('admin.wisata-islami.tour-balkan', compact('data'));
    }

    public function tourBalkanUpdate(Request $request)
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

        $img_old = DB::table('tour_balkan')->where('id', 1)->first();

        if ($request->hasFile('img-input')) {

            $file = $request->file('img-input');
            $filename = date('YmdHi') . '-' . $file->getClientOriginalName();
            $file->move(public_path('assets/img/wisata-islami'), $filename);

            DB::table('tour_balkan')->where('id', 1)->update([
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
                'img' => 'assets/img/wisata-islami/' . $filename,
            ]);
        } else {
            // Menggunakan gambar sebelumnya
            DB::table('tour_balkan')->where('id', 1)->update([
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
                'img' => $img_old->img,
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Di Ubah!'
        ]);
    }

    public function tourMongolia()
    {
        $data = DB::table('tour_mongolia')->where('id', 1)->first();
        return view('admin.wisata-islami.tour-mongolia', compact('data'));
    }

    public function tourMongoliaUpdate(Request $request)
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

        $img_old = DB::table('tour_mongolia')->where('id', 1)->first();

        if ($request->hasFile('img-input')) {

            $file = $request->file('img-input');
            $filename = date('YmdHi') . '-' . $file->getClientOriginalName();
            $file->move(public_path('assets/img/wisata-islami'), $filename);

            DB::table('tour_mongolia')->where('id', 1)->update([
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
                'img' => 'assets/img/wisata-islami/' . $filename,
            ]);
        } else {
            // Menggunakan gambar sebelumnya
            DB::table('tour_mongolia')->where('id', 1)->update([
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
                'img' => $img_old->img,
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Di Ubah!'
        ]);
    }

    public function tourBeijing()
    {
        $data = DB::table('tour_beijing')->where('id', 1)->first();
        return view('admin.wisata-islami.tour-beijing', compact('data'));
    }

    public function tourBeijingUpdate(Request $request)
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

        $img_old = DB::table('tour_beijing')->where('id', 1)->first();

        if ($request->hasFile('img-input')) {

            $file = $request->file('img-input');
            $filename = date('YmdHi') . '-' . $file->getClientOriginalName();
            $file->move(public_path('assets/img/wisata-islami'), $filename);

            DB::table('tour_beijing')->where('id', 1)->update([
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
                'img' => 'assets/img/wisata-islami/' . $filename,
            ]);
        } else {
            // Menggunakan gambar sebelumnya
            DB::table('tour_beijing')->where('id', 1)->update([
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
                'img' => $img_old->img,
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Di Ubah!'
        ]);
    }

    public function tourDubai()
    {
        $data = DB::table('tour_dubai')->where('id', 1)->first();
        return view('admin.wisata-islami.tour-dubai', compact('data'));
    }

    public function tourDubaiUpdate(Request $request)
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

        $img_old = DB::table('tour_dubai')->where('id', 1)->first();

        if ($request->hasFile('img-input')) {

            $file = $request->file('img-input');
            $filename = date('YmdHi') . '-' . $file->getClientOriginalName();
            $file->move(public_path('assets/img/wisata-islami'), $filename);

            DB::table('tour_dubai')->where('id', 1)->update([
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
                'img' => 'assets/img/wisata-islami/' . $filename,
            ]);
        } else {
            // Menggunakan gambar sebelumnya
            DB::table('tour_dubai')->where('id', 1)->update([
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
                'img' => $img_old->img,
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Di Ubah!'
        ]);
    }

    public function tourIndia()
    {
        $data = DB::table('tour_india')->where('id', 1)->first();
        return view('admin.wisata-islami.tour-india', compact('data'));
    }

    public function tourIndiaUpdate(Request $request)
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

        $img_old = DB::table('tour_india')->where('id', 1)->first();

        if ($request->hasFile('img-input')) {

            $file = $request->file('img-input');
            $filename = date('YmdHi') . '-' . $file->getClientOriginalName();
            $file->move(public_path('assets/img/wisata-islami'), $filename);

            DB::table('tour_india')->where('id', 1)->update([
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
                'img' => 'assets/img/wisata-islami/' . $filename,
            ]);
        } else {
            // Menggunakan gambar sebelumnya
            DB::table('tour_india')->where('id', 1)->update([
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
                'img' => $img_old->img,
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Di Ubah!'
        ]);
    }

    public function tourKorea()
    {
        $data = DB::table('tour_korea')->where('id', 1)->first();
        return view('admin.wisata-islami.tour-korea', compact('data'));
    }

    public function tourKoreaUpdate(Request $request)
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

        $img_old = DB::table('tour_korea')->where('id', 1)->first();

        if ($request->hasFile('img-input')) {

            $file = $request->file('img-input');
            $filename = date('YmdHi') . '-' . $file->getClientOriginalName();
            $file->move(public_path('assets/img/wisata-islami'), $filename);

            DB::table('tour_korea')->where('id', 1)->update([
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
                'img' => 'assets/img/wisata-islami/' . $filename,
            ]);
        } else {
            // Menggunakan gambar sebelumnya
            DB::table('tour_korea')->where('id', 1)->update([
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
                'img' => $img_old->img,
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Di Ubah!'
        ]);
    }
}
