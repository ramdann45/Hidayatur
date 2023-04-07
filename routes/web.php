<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UmrohController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');

// FORM BOOKING
Route::post('/form-booking', [HomeController::class, 'formBooking'])->name('form.booking');

// subscribe
Route::post('/subscriber', [AdminController::class, 'subscriberUpload'])->name('subscriber.upload');


Route::get('/dashboard', function () {
    return view('admin.index');
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
});

// BLOGS CONTROLLER
Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');

// GALERI CONTROLLER
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');

// CONTACT CONTROLLER
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact.index');

// Paket Pekerjaan
Route::get('/paket-pekerjaan/umroh', [UmrohController::class, 'index'])->name('umroh.index');
Route::get('/paket-pekerjaan/umroh/{slug}', [UmrohController::class, 'childPage'])->name('umroh.child');

Route::get('/paket-pekerjaan/umroh-plus', [UmrohController::class, 'umrohPlus'])->name('umroh.plus.index');
Route::get('/paket-pekerjaan/umroh-plus/uzbekistan/{slug}', [UmrohController::class, 'umrohPlusUzbekistan'])->name('umroh.plus.uzbekistan');
Route::get('/paket-pekerjaan/umroh-plus/dubai/{slug}', [UmrohController::class, 'umrohPlusDubai'])->name('umroh.plus.dubai');
Route::get('/paket-pekerjaan/umroh-plus/mesir/{slug}', [UmrohController::class, 'umrohPlusMesir'])->name('umroh.plus.mesir');
Route::get('/paket-pekerjaan/umroh-plus/turki/{slug}', [UmrohController::class, 'umrohPlusTurki'])->name('umroh.plus.turki');

require __DIR__ . '/auth.php';
