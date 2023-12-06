<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SemuaController;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\CountdownController;
use App\Http\Controllers\IdentitassekolahController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

// == Start Guest ==
Route::get('/', [CountdownController::class, "index"])->name("count_down")->middleware("guest");

Route::get('/login_user', [SemuaController::class, 'cekCountdown'])->name("login")->middleware("guest");
Route::get('/login_admin', function () {
    $pesan = Session::get('pesan');
    return view('admin.login')->with([
        "pesan" => $pesan,
    ]);
})->name("login_admin")->middleware("guest");

Route::post('/login_user', [SemuaController::class, 'login_user'])->middleware("guest");
Route::post('/login_admin', [SemuaController::class, 'login_admin'])->middleware("guest");
// == End Guest ==

// == Start User ==
Route::get('/pilihKetuaOsis', [SemuaController::class, 'pilihKetuaOsis'])->name("pilihKetuaOsis")->middleware("userTidakHadir"); //User yang blm memilih
Route::get('/pilihKetuaOsis/{id_kandidat}', [SemuaController::class, 'detailKandidat'])->name("detail.kandidat")->middleware("userTidakHadir"); //User yang blm memilih
Route::get('/sudahMemilih', function () {
    return view('user.sudahMemilih');
})->name("sudahMemilih")->middleware("userHadir"); //User yang memilih
Route::get('/lihatHasilPemilihan', [SemuaController::class, 'lihatHasilPemilihan'])->name("lihatHasilPemilihan")->middleware("userHadir"); //User yang memilih
Route::get('pilih/{id}', [SemuaController::class, 'pilih'])->name("pilih")->middleware("userTidakHadir");
// == End User ==

// == Start Admin ==
Route::get('/dashboard', [SemuaController::class, 'dashboard'])->name("dashboard")->middleware("admin");
Route::get('/identitasSekolah', [SemuaController::class, 'identitasSekolah'])->name("identitasSekolah")->middleware("admin");
// Route::get('/kelas', [SemuaController::class, 'kelas'])->name("kelas")->middleware("admin");
Route::get('/kandidatKetuaOsis', [SemuaController::class, 'kandidatKetuaOsis'])->name("kandidatKetuaOsis")->middleware("admin");
Route::get('/dataDpt', [SemuaController::class, 'dataDpt'])->name("dataDpt")->middleware("admin");
Route::get('/hasilPemilihan', [SemuaController::class, 'hasilPemilihan'])->name("hasilPemilihan")->middleware("admin");
Route::get('/daftarHadir', [SemuaController::class, 'daftarHadir'])->name("daftarHadir")->middleware("admin");
Route::get('/laporanPilketos', [SemuaController::class, 'laporanPilketos'])->name("laporanPilketos")->middleware("admin");
Route::get('/pengaturan', [SemuaController::class, 'pengaturan'])->name("pengaturan")->middleware("admin");
Route::post('/importDpt', [SemuaController::class, 'importDpt'])->name("importDpt")->middleware('admin');

//Proses Pembuatan Data
Route::get('delete/class/{id}', [KelasController::class, 'delete'])->name("delete.class")->middleware("admin");
Route::get('deleteAll/class', [KelasController::class, 'deleteAll'])->name("deleteAll.class")->middleware("admin");
Route::get('delete/kandidat/{id}', [KandidatController::class, 'delete'])->name("delete.kandidat")->middleware("admin");

//Buat Dpt
Route::post('crudDpt', [SemuaController::class, 'storeDpt'])->name("store.dpt")->middleware("admin");
Route::put('crudDpt/{id}', [SemuaController::class, 'updateDpt'])->name("update.dpt")->middleware("admin");
Route::get('delete/dpt/{id}', [SemuaController::class, 'deleteDpt'])->name("delete.dpt")->middleware("admin");
Route::get('generatePasswordDpt', [SemuaController::class, 'generatePasswordDpt'])->middleware("admin");
//
Route::resource('crudCountdown', CountdownController::class)->middleware("admin");
Route::resource('crudIdentitasSekolah', IdentitassekolahController::class)->middleware("admin");
Route::resource('crudClass', KelasController::class)->middleware("admin");
Route::resource('crudKandidat', KandidatController::class)->middleware("admin");

Route::get('/resetDataKandidat', [SemuaController::class, 'resetDataKandidat'])->name("resetDataKandidat")->middleware("admin");
Route::get('/resetDataDpt', [SemuaController::class, 'resetDataDpt'])->name("resetDataDpt")->middleware("admin");
Route::get('/resetSemuaData', [SemuaController::class, 'resetSemuaData'])->name("resetSemuaData")->middleware("admin");

// == End Admin ==

// == Start Logout ==
Route::get('/logout', function () {
    Auth::logout();
    return redirect('login_user');
})->name("logout");
// == End Logout ==
