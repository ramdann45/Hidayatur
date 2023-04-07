<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // HERO IMAGE
    public function heroImage()
    {
        $hero = DB::table('hero_img')->orderByDesc('id')->get();

        return view('admin.landing-page.hero-image', compact('hero'));
    }

    public function heroImageUpload(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|min:3|max:30',
            'img_input' => 'mimes:png,jpg,jpeg|max:5000|required',
        ]);

        $file = $request->file('img_input');
        $filename = date('YmdHi') . '-' . $file->getClientOriginalName();
        $file->move(public_path('assets/img/lp-update'), $filename);

        $title = $request->input('title');

        DB::table('hero_img')->insert([
            'src' => 'assets/img/lp-update/' . $filename,
            'nama' => $title
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Foto Berhasil Di Upload!'
        ]);
    }

    public function heroImageDelete($id)
    {
        DB::table('hero_img')->where('id', $id)->delete();

        return response()->json([
            'success' => 'Data berhasil dihapus!'
        ]);
    }

    public function heroImageShow($id)
    {
        $data = DB::table('hero_img')->where('id', $id)->first();

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public function heroImageUpdate(Request $request)
    {
        // Validasi input
        $request->validate([
            'id_update' => 'required|integer',
            'title_update' => 'required|min:3|max:30',
            'img_input' => 'mimes:png,jpg,jpeg|max:5000',
        ]);

        $id = $request->input('id_update');
        $nama = $request->input('title_update');
        $oldImg = DB::table('hero_img')->where('id', $id)->first();

        if ($request->hasFile('img_input')) {

            $file = $request->file('img_input');
            $filename = date('YmdHi') . '-' . $file->getClientOriginalName();
            $file->move(public_path('assets/img/lp-update'), $filename);

            DB::table('hero_img')->where('id', $id)->update([
                'nama' => $nama,
                'src' => 'assets/img/lp-update/' . $filename,
            ]);
        } else {
            DB::table('hero_img')->where('id', $id)->update([
                'nama' => $nama,
                'src' => $oldImg->src,
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Di Ubah!'
        ]);
    }


    // PENAWARAN TERBATAS
    public function penawaranTerbatas()
    {
        $penawaran = DB::table('penawaran_terbatas')->get();

        return view('admin.landing-page.penawaran-terbatas', compact('penawaran'));
    }

    public function showPenawaranTerbatas($id)
    {
        $data = DB::table('penawaran_terbatas')->where('id', $id)->first();

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public function updatePenawaranTerbatas(Request $request)
    {
        // Validasi input
        $request->validate([
            'id_update' => 'required|integer',
            'title_update' => 'required|min:5',
            'img_input' => 'mimes:png,jpg,jpeg|max:5000',
        ]);

        $id = $request->input('id_update');
        $title = $request->input('title_update');
        $image = $request->file('img_input');

        if ($image) {
            $file = $request->file('img_input');
            $filename = date('YmdHi') . '-' . $file->getClientOriginalName();
            $file->move(public_path('assets/img/paket/paket-1'), $filename);

            DB::table('penawaran_terbatas')
                ->where('id', $id)
                ->update([
                    'image' => 'assets/img/paket/paket-1/' . $filename,
                    'title' => $title,
                ]);
        } else {
            // Update data tanpa gambar
            DB::table('penawaran_terbatas')->where('id', $id)->update([
                'title' => $title
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Diubah!'
        ]);
    }

    // OUR SERVICES
    public function ourServices()
    {
        $services = DB::table('our_services')->get();

        return view('admin.landing-page.our-services', compact('services'));
    }

    public function ourServicesUpload(Request $request)
    {
        // Validasi input
        $request->validate([
            'img_input' => 'mimes:png,jpg,jpeg|max:5000|required',
        ]);

        $file = $request->file('img_input');
        $filename = date('YmdHi') . '-' . $file->getClientOriginalName();
        $file->move(public_path('assets/img/paket/paket-2'), $filename);

        DB::table('our_services')->insert([
            'src' => 'assets/img/paket/paket-2/' . $filename,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Foto Berhasil Di Upload!'
        ]);
    }

    public function ourServicesDelete($id)
    {
        DB::table('our_services')->where('id', $id)->delete();

        return response()->json([
            'success' => 'Data berhasil dihapus!'
        ]);
    }

    public function ourServicesShow($id)
    {
        $data = DB::table('our_services')->where('id', $id)->first();

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public function ourServicesUpdate(Request $request)
    {
        // Validasi input
        $request->validate([
            'id_update' => 'required|integer',
            'img_update' => 'mimes:png,jpg,jpeg|max:5000',
        ]);

        $id = $request->input('id_update');

        $file = $request->file('img_update');
        $filename = date('YmdHi') . '-' . $file->getClientOriginalName();
        $file->move(public_path('assets/img/paket/paket-2'), $filename);

        DB::table('our_services')->where('id', $id)->update([
            'src' => 'assets/img/paket/paket-2/' . $filename,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Foto Berhasil Di Ubah!'
        ]);
    }

    // Wisata Terbaru
    public function wisataTerbaru()
    {
        $terbaru = DB::table('wisata_terbaru')->get();

        return view('admin.landing-page.wisata-terbaru', compact('terbaru'));
    }

    public function wisataTerbaruUpload(Request $request)
    {
        // Validasi input
        $request->validate([
            'img_input' => 'mimes:png,jpg,jpeg|max:5000|required',
        ]);

        $file = $request->file('img_input');
        $filename = date('YmdHi') . '-' . $file->getClientOriginalName();
        $file->move(public_path('assets/img/paket/paket-3'), $filename);

        DB::table('wisata_terbaru')->insert([
            'src' => 'assets/img/paket/paket-3/' . $filename,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Foto Berhasil Di Upload!'
        ]);
    }

    public function wisataTerbaruDelete($id)
    {
        DB::table('wisata_terbaru')->where('id', $id)->delete();

        return response()->json([
            'success' => 'Data berhasil dihapus!'
        ]);
    }

    public function wisataTerbaruShow($id)
    {
        $data = DB::table('wisata_terbaru')->where('id', $id)->first();

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public function wisataTerbaruUpdate(Request $request)
    {
        // Validasi input
        $request->validate([
            'id_update' => 'required|integer',
            'img_update' => 'mimes:png,jpg,jpeg|max:5000',
        ]);

        $id = $request->input('id_update');

        $file = $request->file('img_update');
        $filename = date('YmdHi') . '-' . $file->getClientOriginalName();
        $file->move(public_path('assets/img/paket/paket-3'), $filename);

        DB::table('wisata_terbaru')->where('id', $id)->update([
            'src' => 'assets/img/paket/paket-3/' . $filename,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Foto Berhasil Di Ubah!'
        ]);
    }

    // Paket Umroh
    public function paketUmroh()
    {
        $umroh = DB::table('paket_umroh')->get();

        return view('admin.landing-page.paket-umroh', compact('umroh'));
    }

    public function paketUmrohUpload(Request $request)
    {
        // Validasi input
        $request->validate([
            'img_input' => 'mimes:png,jpg,jpeg|max:5000|required',
        ]);

        $file = $request->file('img_input');
        $filename = date('YmdHi') . '-' . $file->getClientOriginalName();
        $file->move(public_path('assets/img/paket/paket-4'), $filename);

        DB::table('paket_umroh')->insert([
            'src' => 'assets/img/paket/paket-4/' . $filename,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Foto Berhasil Di Upload!'
        ]);
    }

    public function paketUmrohDelete($id)
    {
        DB::table('paket_umroh')->where('id', $id)->delete();

        return response()->json([
            'success' => 'Data berhasil dihapus!'
        ]);
    }

    public function paketUmrohShow($id)
    {
        $data = DB::table('paket_umroh')->where('id', $id)->first();

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public function paketUmrohUpdate(Request $request)
    {
        // Validasi input
        $request->validate([
            'id_update' => 'required|integer',
            'img_update' => 'mimes:png,jpg,jpeg|max:5000',
        ]);

        $id = $request->input('id_update');

        $file = $request->file('img_update');
        $filename = date('YmdHi') . '-' . $file->getClientOriginalName();
        $file->move(public_path('assets/img/paket/paket-4'), $filename);

        DB::table('paket_umroh')->where('id', $id)->update([
            'src' => 'assets/img/paket/paket-4/' . $filename,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Foto Berhasil Di Ubah!'
        ]);
    }

    // Paket Umroh Plus
    public function paketUmrohPlus()
    {
        $umrohPlus = DB::table('paket_umroh_plus')->get();

        return view('admin.landing-page.paket-umroh-plus', compact('umrohPlus'));
    }

    public function paketUmrohPlusUpload(Request $request)
    {
        // Validasi input
        $request->validate([
            'img_input' => 'mimes:png,jpg,jpeg|max:5000|required',
        ]);

        $file = $request->file('img_input');
        $filename = date('YmdHi') . '-' . $file->getClientOriginalName();
        $file->move(public_path('assets/img/paket/paket-5'), $filename);

        DB::table('paket_umroh_plus')->insert([
            'src' => 'assets/img/paket/paket-5/' . $filename,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Foto Berhasil Di Upload!'
        ]);
    }

    public function paketUmrohPlusDelete($id)
    {
        DB::table('paket_umroh_plus')->where('id', $id)->delete();

        return response()->json([
            'success' => 'Data berhasil dihapus!'
        ]);
    }

    public function paketUmrohPlusShow($id)
    {
        $data = DB::table('paket_umroh_plus')->where('id', $id)->first();

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public function paketUmrohPlusUpdate(Request $request)
    {
        // Validasi input
        $request->validate([
            'id_update' => 'required|integer',
            'img_update' => 'mimes:png,jpg,jpeg|max:5000',
        ]);

        $id = $request->input('id_update');

        $file = $request->file('img_update');
        $filename = date('YmdHi') . '-' . $file->getClientOriginalName();
        $file->move(public_path('assets/img/paket/paket-5'), $filename);

        DB::table('paket_umroh_plus')->where('id', $id)->update([
            'src' => 'assets/img/paket/paket-5/' . $filename,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Foto Berhasil Di Ubah!'
        ]);
    }

    // Testimoni
    public function testimoni()
    {
        $testimoni = DB::table('testimoni')->get();

        return view('admin.landing-page.testimoni', compact('testimoni'));
    }

    public function testimoniUpload(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_add' => 'required|min:3',
            'pekerjaan_add' => 'required|min:3',
            'testimoni_add' => 'required|min:5',
            'img_input' => 'mimes:png,jpg,jpeg|max:5000|nullable',
        ]);

        $filename = 'default.png';
        if ($request->hasFile('img_input')) {
            $file = $request->file('img_input');
            $filename = date('YmdHi') . '-' . $file->getClientOriginalName();
            $file->move(public_path('assets/img/testimoni'), $filename);
        }

        $nama = $request->input('nama_add');
        $pekerjaan = $request->input('pekerjaan_add');
        $testi = $request->input('testimoni_add');

        DB::table('testimoni')->insert([
            'nama' => $nama,
            'pekerjaan' => $pekerjaan,
            'testimoni' => $testi,
            'img' => 'assets/img/testimoni/' . $filename,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Di Upload!'
        ]);
    }

    public function testimoniDelete($id)
    {
        DB::table('testimoni')->where('id', $id)->delete();

        return response()->json([
            'success' => 'Data berhasil dihapus!'
        ]);
    }

    public function testimoniShow($id)
    {
        $data = DB::table('testimoni')->where('id', $id)->first();

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public function testimoniUpdate(Request $request)
    {
        // Validasi input
        $request->validate([
            'id_update' => 'required|integer',
            'nama_update' => 'required|min:3',
            'pekerjaan_update' => 'required|min:3',
            'testimoni_update' => 'required|min:3',
            'img_update' => 'nullable|mimes:png,jpg,jpeg|max:5000',
        ]);

        $id = $request->input('id_update');
        $nama = $request->input('nama_update');
        $pekerjaan = $request->input('pekerjaan_update');
        $testi = $request->input('testimoni_update');

        $testimoni = DB::table('testimoni')->where('id', $id)->first();

        if ($request->hasFile('img_update')) {

            $file = $request->file('img_update');
            $filename = date('YmdHi') . '-' . $file->getClientOriginalName();
            $file->move(public_path('assets/img/testimoni'), $filename);

            DB::table('testimoni')->where('id', $id)->update([
                'nama' => $nama,
                'pekerjaan' => $pekerjaan,
                'testimoni' => $testi,
                'img' => 'assets/img/testimoni/' . $filename,
            ]);
        } else {
            // Menggunakan gambar sebelumnya
            DB::table('testimoni')->where('id', $id)->update([
                'nama' => $nama,
                'pekerjaan' => $pekerjaan,
                'testimoni' => $testi,
                'img' => $testimoni->img,
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Di Ubah!'
        ]);
    }

    // LOGO PERUSAHAAN
    public function logoPerusahaan()
    {
        $logo = DB::table('logo_perusahaan')->get();

        return view('admin.logo-perusahaan.index', compact('logo'));
    }

    public function logoPerusahaanShow($id)
    {
        $data = DB::table('logo_perusahaan')->where('id', $id)->first();

        return response()->json([
            'success' => true,
            'data' => $data
        ]);
    }

    public function logoPerusahaanUpdate(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_update' => 'required|min:3',
            'img_update' => 'nullable|mimes:png,jpg,jpeg|max:5000',
        ]);

        $nama = $request->input('nama_update');

        $logo = DB::table('logo_perusahaan')->where('id', 1)->first();

        if ($request->hasFile('img_update')) {

            $file = $request->file('img_update');
            $filename = date('YmdHi') . '-' . $file->getClientOriginalName();
            $file->move(public_path('assets/img/logo'), $filename);

            DB::table('logo_perusahaan')->where('id', 1)->update([
                'nama' => $nama,
                'src' => 'assets/img/logo/' . $filename,
            ]);
        } else {
            // Menggunakan gambar sebelumnya
            DB::table('logo_perusahaan')->where('id', 1)->update([
                'nama' => $nama,
                'src' => $logo->src,
            ]);
        }

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Di Ubah!'
        ]);
    }

    // SUBSCRIBER
    public function subscriber()
    {
        $subs = DB::table('subscriber')->get();
        return view('admin.subscriber.index', compact('subs'));
    }

    public function subscriberUpload(Request $request)
    {
        // Validasi input
        $validate = $request->validate([
            'email' => 'required|min:5',
        ]);

        // Menambahkan waktu pengisian
        $currentTime = date('d-m-Y');
        $validate['created_at'] = $currentTime;

        DB::table('subscriber')->insert($validate);

        return response()->json([
            'success' => true,
            'message' => 'Berhasil Subscribe!'
        ]);
    }

    public function galeri()
    {
        $galeri = DB::table('galeri')->get();
        return view('admin.galeri.index', compact('galeri'));
    }

    public function galeriUpload(Request $request)
    {
        // Validasi input
        $request->validate([
            'img_input' => 'mimes:png,jpg,jpeg|max:5000|required',
        ]);

        $file = $request->file('img_input');
        $filename = date('YmdHi') . '-' . $file->getClientOriginalName();
        $file->move(public_path('assets/img/galeri'), $filename);

        DB::table('galeri')->insert([
            'nama' => $filename,
            'src' => 'assets/img/galeri/' . $filename,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Foto Berhasil Di Upload!'
        ]);
    }

    public function galeriDelete($id)
    {
        DB::table('galeri')->where('id', $id)->delete();

        return response()->json([
            'success' => 'Foto berhasil dihapus!'
        ]);
    }
}
