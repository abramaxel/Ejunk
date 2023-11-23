<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
// use App\Http\Controllers\PenggunaController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(AuthController::class)->group(function () {
	Route::get('register', 'register')->name('register');
	Route::post('register', 'registerSimpan')->name('register.simpan');

	 Route::get('login', 'login')->name('login');
	 Route::post('login', 'loginAksi')->name('login.aksi');


	Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::get('/', function () {
	return view('auth.login');
});

Route::middleware('auth')->group(function () {

    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::prefix('staff')->middleware(['auth', 'staff'])->group(function () {
        Route::get('dashboard', function () {
            return view('staff.dashboard');
        })->name('staff.dashboard');
    });
    
    Route::prefix('bank')->middleware(['auth', 'bank'])->group(function () {
        Route::get('dashboard', function () {
            return view('bank.dashboard');
        })->name('bank.dashboard');
    });
    
    
});






Route::get('/dataPengguna', [App\Http\Controllers\PenggunaController::class, 'index']);
Route::get('/peta', [App\Http\Controllers\PenggunaController::class, 'peta']);
Route::get('/formEditPengguna/{idPengguna}', [App\Http\Controllers\PenggunaController::class, 'formEditPengguna']);
// Route::post('/addPengguna', [App\Http\Controllers\PenggunaController::class, 'addPengguna']);
Route::delete('/delete/{idPengguna}', [App\Http\Controllers\PenggunaController::class, 'deletePengguna']);


Route::get('/dataSampah', [App\Http\Controllers\SampahController::class, 'index']);
Route::post('/addSampah', [App\Http\Controllers\SampahController::class, 'addSampah']);
Route::get('/formEditSampah/{id}', [App\Http\Controllers\SampahController::class, 'formEditSampah']);
Route::post('/editSampah/{id}', [App\Http\Controllers\SampahController::class, 'editSampah']);
Route::delete('/delete/{id}', [App\Http\Controllers\SampahController::class, 'deleteSampah']);



Route::get('/dataPengambilan', [App\Http\Controllers\PengambilanController::class, 'index']);
Route::post('/addPengambilan', [App\Http\Controllers\PengambilanController::class, 'addPengambilan']);
Route::get('/formEditPengambilan/{id_pengambilan}', [App\Http\Controllers\PengambilanController::class, 'formEditPengambilan']);
Route::post('/editPengambilan/{id_pengambilan}', [App\Http\Controllers\PengambilanController::class, 'editPengambilan']);
Route::delete('/delete/{id_pengambilan}', [App\Http\Controllers\PengambilanController::class, 'deletePengambilan']);

