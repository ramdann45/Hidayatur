<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UmrohController;
use App\Http\Controllers\UmrohUzbekistanController;
use App\Http\Controllers\UmrohDubaiController;
use App\Http\Controllers\UmrohMesirController;
use App\Http\Controllers\UmrohTurkiController;
use App\Http\Controllers\WisataIslamiController;
use Illuminate\Support\Facades\DB;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

// FORM BOOKING
Route::post('/form-booking', [HomeController::class, 'formBooking'])->name('form.booking');

// subscribe
Route::post('/subscriber', [AdminController::class, 'subscriberUpload'])->name('subscriber.upload');


Route::get('/dashboard', function () {
    $subs = DB::table('subscriber')->count();
    $booking = DB::table('booking_tour')->count();
    $notRespon = DB::table('booking_tour')->where('response', 0)->count();

    return view('admin.index', compact('subs', 'booking', 'notRespon'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // LANDING PAGE
    // hero image
    Route::get('/hero-image', [AdminController::class, 'heroImage'])->name('hero.image');
    Route::post('/hero-image', [AdminController::class, 'heroImageUpload'])->name('hero.image.upload');
    Route::delete('/hero-image/{id}', [AdminController::class, 'heroImageDelete'])->name('hero.image.delete');
    Route::get('/hero-image/{id}', [AdminController::class, 'heroImageShow'])->name('hero.image.show');
    Route::post('/hero-image/update', [AdminController::class, 'heroImageUpdate'])->name('hero.image.update');

    // penawaran terbatas
    Route::get('/penawaran-terbatas', [AdminController::class, 'penawaranTerbatas'])->name('penawaran.terbatas');
    Route::get('/show-penawaran-terbatas/{id}', [AdminController::class, 'showPenawaranTerbatas'])->name('show.penawaran.terbatas');
    Route::post('/show-penawaran-terbatas/update', [AdminController::class, 'updatePenawaranTerbatas'])->name('show.penawaran.terbatas');

    // Our services
    Route::get('/our-services', [AdminController::class, 'ourServices'])->name('our.services');
    Route::post('/our-services', [AdminController::class, 'ourServicesUpload'])->name('our.services.upload');
    Route::delete('/our-services/{id}', [AdminController::class, 'ourServicesDelete'])->name('our.services.delete');
    Route::get('/our-services/{id}', [AdminController::class, 'ourServicesShow'])->name('our.services.show');
    Route::post('/our-services/update', [AdminController::class, 'ourServicesUpdate'])->name('our.services.update');

    // Wisata Terbaru
    Route::get('/wisata-terbaru', [AdminController::class, 'wisataTerbaru'])->name('wisata.terbaru');
    Route::post('/wisata-terbaru', [AdminController::class, 'wisataTerbaruUpload'])->name('wisata.terbaru.upload');
    Route::delete('/wisata-terbaru/{id}', [AdminController::class, 'wisataTerbaruDelete'])->name('wisata.terbaru.delete');
    Route::get('/wisata-terbaru/{id}', [AdminController::class, 'wisataTerbaruShow'])->name('wisata.terbaru.show');
    Route::post('/wisata-terbaru/update', [AdminController::class, 'wisataTerbaruUpdate'])->name('wisata.terbaru.update');

    // Paket Umroh
    Route::get('/pilihan-paket-umroh', [AdminController::class, 'paketUmroh'])->name('paket.umroh');
    Route::post('/pilihan-paket-umroh', [AdminController::class, 'paketUmrohUpload'])->name('paket.umroh.upload');
    Route::delete('/pilihan-paket-umroh/{id}', [AdminController::class, 'paketUmrohDelete'])->name('paket.umroh.delete');
    Route::get('/pilihan-paket-umroh/{id}', [AdminController::class, 'paketUmrohShow'])->name('paket.umroh.show');
    Route::post('/pilihan-paket-umroh/update', [AdminController::class, 'paketUmrohUpdate'])->name('paket.umroh.update');

    // Paket Umroh Plus
    Route::get('/pilihan-paket-umroh-plus', [AdminController::class, 'paketUmrohPlus'])->name('paket.umroh.plus');
    Route::post('/pilihan-paket-umroh-plus', [AdminController::class, 'paketUmrohPlusUpload'])->name('paket.umroh.plus.upload');
    Route::delete('/pilihan-paket-umroh-plus/{id}', [AdminController::class, 'paketUmrohPlusDelete'])->name('paket.umroh.plus.delete');
    Route::get('/pilihan-paket-umroh-plus/{id}', [AdminController::class, 'paketUmrohPlusShow'])->name('paket.umroh.plus.show');
    Route::post('/pilihan-paket-umroh-plus/update', [AdminController::class, 'paketUmrohPlusUpdate'])->name('paket.umroh.plus.update');

    // Testimoni
    Route::get('/testimoni', [AdminController::class, 'testimoni'])->name('testimoni');
    Route::post('/testimoni', [AdminController::class, 'testimoniUpload'])->name('testimoni.upload');
    Route::delete('/testimoni/{id}', [AdminController::class, 'testimoniDelete'])->name('testimoni.delete');
    Route::get('/testimoni/{id}', [AdminController::class, 'testimoniShow'])->name('testimoni.show');
    Route::post('/testimoni/update', [AdminController::class, 'testimoniUpdate'])->name('testimoni.update');

    // LOGO PERUSAHAAN
    Route::get('/logo-perusahaan', [AdminController::class, 'logoPerusahaan'])->name('logo.perusahaan');
    Route::get('/logo-perusahaan/{id}', [AdminController::class, 'logoPerusahaanShow'])->name('logo.perusahaan.show');
    Route::post('/logo-perusahaan/update', [AdminController::class, 'logoPerusahaanUpdate'])->name('logo.perusahaan.update');

    // Subscriber
    Route::get('/subscriber', [AdminController::class, 'subscriber'])->name('subscriber');

    // Booking Tour
    Route::get('/booking-tour', [HomeController::class, 'bookingTour'])->name('booking.tour');
    Route::post('/booking-tour/{id}', [HomeController::class, 'bookingTourUpdate'])->name('booking.tour.update');

    // GALERI
    Route::get('/admin-galeri', [AdminController::class, 'galeri'])->name('galeri');
    Route::post('/admin-galeri', [AdminController::class, 'galeriUpload'])->name('galeri.upload');
    Route::delete('/admin-galeri/{id}', [AdminController::class, 'galeriDelete'])->name('galeri.delete');

    // PROFILE
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // PAKET UMROH RAMADHAN
    Route::get('/umroh-ramadhan/paket-1', [UmrohController::class, 'paketSatu'])->name('paket.satu');
    Route::get('/umroh-ramadhan/paket-2', [UmrohController::class, 'paketDua'])->name('paket.dua');
    Route::get('/umroh-ramadhan/paket-3', [UmrohController::class, 'paketTiga'])->name('paket.tiga');
    Route::get('/umroh-ramadhan/paket-4', [UmrohController::class, 'paketEmpat'])->name('paket.empat');
    // CRUD
    Route::post('/umroh-ramadhan/paket-1', [UmrohController::class, 'paketSatuUpdate'])->name('paket.satu.update');
    Route::post('/umroh-ramadhan/paket-2', [UmrohController::class, 'paketDuaUpdate'])->name('paket.dua.update');
    Route::post('/umroh-ramadhan/paket-3', [UmrohController::class, 'paketTigaUpdate'])->name('paket.tiga.update');
    Route::post('/umroh-ramadhan/paket-4', [UmrohController::class, 'paketEmpatUpdate'])->name('paket.empat.update');

    // PAKET UMROH UZBEKISTAN
    Route::get('/umroh-uzbekistan/paket-1', [UmrohUzbekistanController::class, 'paketSatu'])->name('paket.satu.uzbekistan');
    Route::post('/umroh-uzbekistan/paket-1', [UmrohUzbekistanController::class, 'paketSatuUpdate'])->name('paket.satu.uzbekistan.update');

    // PAKET UMROH DUBAI
    Route::get('/umroh-dubai/paket-1', [UmrohDubaiController::class, 'paketSatu'])->name('paket.satu.dubai');
    Route::get('/umroh-dubai/paket-2', [UmrohDubaiController::class, 'paketDua'])->name('paket.dua.dubai');

    Route::post('/umroh-dubai/paket-1', [UmrohDubaiController::class, 'paketSatuUpdate'])->name('paket.satu.dubai.update');
    Route::post('/umroh-dubai/paket-2', [UmrohDubaiController::class, 'paketDuaUpdate'])->name('paket.dua.dubai.update');

    // PAKET UMROH MESIR
    Route::get('/umroh-mesir/paket-1', [UmrohMesirController::class, 'paketSatu'])->name('paket.satu.mesir');
    Route::get('/umroh-mesir/paket-2', [UmrohMesirController::class, 'paketDua'])->name('paket.dua.mesir');
    Route::get('/umroh-mesir/paket-3', [UmrohMesirController::class, 'paketTiga'])->name('paket.tiga.mesir');

    Route::post('/umroh-mesir/paket-1', [UmrohMesirController::class, 'paketSatuUpdate'])->name('paket.satu.mesir.update');
    Route::post('/umroh-mesir/paket-2', [UmrohMesirController::class, 'paketDuaUpdate'])->name('paket.dua.mesir.update');
    Route::post('/umroh-mesir/paket-3', [UmrohMesirController::class, 'paketTigaUpdate'])->name('paket.tiga.mesir.update');

    // PAKET UMROH TURKI
    Route::get('/umroh-turki/paket-1', [UmrohTurkiController::class, 'paketSatu'])->name('paket.satu.turki');
    Route::get('/umroh-turki/paket-2', [UmrohTurkiController::class, 'paketDua'])->name('paket.dua.turki');
    Route::get('/umroh-turki/paket-3', [UmrohTurkiController::class, 'paketTiga'])->name('paket.tiga.turki');
    Route::get('/umroh-turki/paket-4', [UmrohTurkiController::class, 'paketEmpat'])->name('paket.empat.turki');

    Route::post('/umroh-turki/paket-1', [UmrohTurkiController::class, 'paketSatuUpdate'])->name('paket.satu.turki.update');
    Route::post('/umroh-turki/paket-2', [UmrohTurkiController::class, 'paketDuaUpdate'])->name('paket.dua.turki.update');
    Route::post('/umroh-turki/paket-3', [UmrohTurkiController::class, 'paketTigaUpdate'])->name('paket.tiga.turki.update');
    Route::post('/umroh-turki/paket-4', [UmrohTurkiController::class, 'paketEmpatUpdate'])->name('paket.empat.turki.update');

    // WISATA ISLAMI
    Route::get('/wisata-islami/tour-balkan', [WisataIslamiController::class, 'tourBalkan'])->name('wisata.islami.balkan.admin');
    Route::get('/wisata-islami/tour-mongolia', [WisataIslamiController::class, 'tourMongolia'])->name('wisata.islami.mongolia.admin');
    Route::get('/wisata-islami/tour-india', [WisataIslamiController::class, 'tourIndia'])->name('wisata.islami.india.admin');
    Route::get('/wisata-islami/tour-beijing', [WisataIslamiController::class, 'tourBeijing'])->name('wisata.islami.beijing.admin');
    Route::get('/wisata-islami/tour-dubai', [WisataIslamiController::class, 'tourDubai'])->name('wisata.islami.dubai.admin');
    Route::get('/wisata-islami/tour-korea', [WisataIslamiController::class, 'tourKorea'])->name('wisata.islami.korea.admin');

    Route::post('/wisata-islami/tour-balkan', [WisataIslamiController::class, 'tourBalkanUpdate'])->name('wisata.islami.balkan.admin.update');
    Route::post('/wisata-islami/tour-mongolia', [WisataIslamiController::class, 'tourMongoliaUpdate'])->name('wisata.islami.mongolia.admin.update');
    Route::post('/wisata-islami/tour-india', [WisataIslamiController::class, 'tourIndiaUpdate'])->name('wisata.islami.india.admin.update');
    Route::post('/wisata-islami/tour-beijing', [WisataIslamiController::class, 'tourBeijingUpdate'])->name('wisata.islami.beijing.admin.update');
    Route::post('/wisata-islami/tour-dubai', [WisataIslamiController::class, 'tourDubaiUpdate'])->name('wisata.islami.dubai.admin.update');
    Route::post('/wisata-islami/tour-korea', [WisataIslamiController::class, 'tourKoreaUpdate'])->name('wisata.islami.korea.admin.update');
});

// BLOGS CONTROLLER
Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');

// GALERI CONTROLLER
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');

// CONTACT CONTROLLER
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact.index');

// Paket Perjalanan
Route::get('/paket-perjalanan/umroh', [UmrohController::class, 'index'])->name('umroh.index');
Route::get('/paket-perjalanan/umroh/{slug}', [UmrohController::class, 'childPage'])->name('umroh.child');

Route::get('/paket-perjalanan/umroh-plus', [UmrohController::class, 'umrohPlus'])->name('umroh.plus.index');
Route::get('/paket-perjalanan/umroh-plus/uzbekistan/{slug}', [UmrohController::class, 'umrohPlusUzbekistan'])->name('umroh.plus.uzbekistan');
Route::get('/paket-perjalanan/umroh-plus/dubai/{slug}', [UmrohController::class, 'umrohPlusDubai'])->name('umroh.plus.dubai');
Route::get('/paket-perjalanan/umroh-plus/mesir/{slug}', [UmrohController::class, 'umrohPlusMesir'])->name('umroh.plus.mesir');
Route::get('/paket-perjalanan/umroh-plus/turki/{slug}', [UmrohController::class, 'umrohPlusTurki'])->name('umroh.plus.turki');

Route::get('/paket-perjalanan/wisata-islami', [WisataIslamiController::class, 'index'])->name('wisata.islami');
Route::get('/paket-perjalanan/wisata-islami/balkan', [WisataIslamiController::class, 'balkan'])->name('wisata.islami.balkan');
Route::get('/paket-perjalanan/wisata-islami/mongolia', [WisataIslamiController::class, 'mongolia'])->name('wisata.islami.mongolia');
Route::get('/paket-perjalanan/wisata-islami/beijing', [WisataIslamiController::class, 'beijing'])->name('wisata.islami.beijing');
Route::get('/paket-perjalanan/wisata-islami/india', [WisataIslamiController::class, 'india'])->name('wisata.islami.india');
Route::get('/paket-perjalanan/wisata-islami/dubai', [WisataIslamiController::class, 'dubai'])->name('wisata.islami.dubai');
Route::get('/paket-perjalanan/wisata-islami/korea', [WisataIslamiController::class, 'korea'])->name('wisata.islami.korea');


require __DIR__ . '/auth.php';
