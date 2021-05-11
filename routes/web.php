<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EsemenyController;
use App\Http\Controllers\SzekcioController;
use App\Http\Controllers\EloadoController;
use App\Http\Controllers\ModeratorokController;
use App\Http\Controllers\RegistController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SzekcioidoController;
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

 Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegistController::class, 'index'])->name('register');
Route::post('/register', [RegistController::class, 'store'])->name('register');
Route::get('speaker/{speaker}', [HomeController::class, 'view'])->name('speaker');

 

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/admin', [HomeController::class, 'index2'])->name('dashboard.dashboard');
//esemeny
Route::get('/admin/esemenyek', [EsemenyController::class, 'index'])->name('dashboard.esemenyek.index');
Route::get('/admin/esemenyek/create', [EsemenyController::class, 'create'])->name('dashboard.esemenyek.create');
Route::get('/admin/esemenyek/edit/{id}', [EsemenyController::class, 'edit'])->name('dashboard.esemenyek.edit');
Route::post('/admin/esemenyek/edit/{id}', [EsemenyController::class, 'update'])->name('dashboard.esemenyek.update');
Route::delete('/admin/esemenyek/delete/{id}', [EsemenyController::class, 'delete'])->name('dashboard.esemenyek.delete');
Route::post('/admin/esemenyek/store', [EsemenyController::class, 'store'])->name('dashboard.esemenyek.store');

//szekciok
Route::get('/admin/szekciok', [SzekcioController::class, 'index'])->name('dashboard.szekciok.index');
Route::get('/admin/szekciok/create', [SzekcioController::class, 'create'])->name('dashboard.szekciok.create');
Route::get('/admin/szekciok/edit/{id}', [SzekcioController::class, 'edit'])->name('dashboard.szekciok.edit');
Route::post('/admin/szekciok/edit/{id}', [SzekcioController::class, 'update'])->name('dashboard.szekciok.update');
Route::delete('/admin/szekciok/delete/{id}', [SzekcioController::class, 'delete'])->name('dashboard.szekciok.delete');
Route::post('/admin/szekciok/store', [SzekcioController::class, 'store'])->name('dashboard.szekciok.store');


Route::get('/admin/szekciok/idopont/edit/{id}', [SzekcioidoController::class, 'edit'])->name('dashboard.szekciok.idopont');
Route::post('/admin/szekciok/idopont/edit/{id}', [SzekcioidoController::class, 'update'])->name('dashboard.szekciok.update');
//eloadok
Route::get('/admin/eloadok', [EloadoController::class, 'index'])->name('dashboard.eloadok.index');
Route::get('/admin/eloadok/create', [EloadoController::class, 'create'])->name('dashboard.eloadok.create');
Route::get('/admin/eloadok/edit/{id}', [EloadoController::class, 'edit'])->name('dashboard.eloadok.edit');
Route::post('/admin/eloadok/edit/{id}', [EloadoController::class, 'update'])->name('dashboard.eloadok.update');
Route::delete('/admin/eloadok/delete/{id}', [EloadoController::class, 'delete'])->name('dashboard.eloadok.delete');
Route::post('/admin/eloadok/store', [EloadoController::class, 'store'])->name('dashboard.eloadok.store');
//moderatorok
Route::get('/admin/moderatorok', [ModeratorokController::class, 'index'])->name('dashboard.moderatorok.index');
Route::get('/admin/moderatorok/create', [ModeratorokController::class, 'create'])->name('dashboard.moderatorok.create');
Route::get('/admin/moderatorok/edit/{id}', [ModeratorokController::class, 'edit'])->name('dashboard.moderatorok.edit');
Route::post('/admin/moderatorok/edit/{id}', [ModeratorokController::class, 'update'])->name('dashboard.moderatorok.update');
Route::delete('/admin/moderatorok/delete/{id}', [ModeratorokController::class, 'delete'])->name('dashboard.moderatorok.delete');
Route::post('/admin/moderatorok/store', [ModeratorokController::class, 'store'])->name('dashboard.moderatorok.store');