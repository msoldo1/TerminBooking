<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard',
    [App\Http\Controllers\AdminController::class,'index'])->middleware(['auth'])->middleware(['role'])->name('admin.index');
Route::get('/admin/igraci',
    [App\Http\Controllers\AdminController::class,'listaigraci'])->middleware(['auth'])->middleware(['role'])->name('admin.igraci');
Route::get('/admin/igraci-izbrisano',
    [App\Http\Controllers\AdminController::class,'listaigraciizbrisano'])->middleware(['auth'])->middleware(['role'])->name('admin.igraci-izbrisano');
Route::get('/admin/tvrtke',
    [App\Http\Controllers\AdminController::class,'listatvrtki'])->middleware(['auth'])->middleware(['role'])->name('admin.tvrtke');
Route::get('/admin/tvrtke-izbrisano',
    [App\Http\Controllers\AdminController::class,'listatvrtkiizbrisano'])->middleware(['auth'])->middleware(['role'])->name('admin.tvrtke-izbrisano');

//Igrac rute
Route::get('/igraci', [\App\Http\Controllers\IgracController::class, 'index'])->name('igrac.index');
Route::get('/igraci/tvrtke', [\App\Http\Controllers\IgracController::class, 'tvrtke'])->name('igrac.tvrtka');
Route::get('/igraci/dvorane/{id}', [\App\Http\Controllers\IgracController::class, 'dvorane'])->name('igrac.dvorane');
Route::get('/igraci/termini/{id}', [\App\Http\Controllers\IgracController::class, 'termini'])->name('igrac.termini');
Route::get('/igraci/rezervacija/{id}', [\App\Http\Controllers\IgracController::class, 'rezerviraj'])->name('igrac.rezerviraj');
Route::get('/igraci/delete/{id}',[\App\Http\Controllers\IgracController::class, 'destroy'])->name('delete.igrac');
Route::get('/igraci/add/{id}',[\App\Http\Controllers\IgracController::class, 'add'])->name('add.igrac');
Route::get('/listatermina',[\App\Http\Controllers\IgracController::class, 'listatermina'])->name('igrac.listatermina');


//Igraci rute
Route::get('/dodajigraca/{id}', [\App\Http\Controllers\IgracController::class, 'pozovi'])->name('igraci.index');
Route::post('/dodajigraca', [\App\Http\Controllers\IgracController::class,'dodavanje'])->name('igraci.dodavanje');



//Tvrtka rute
Route::get('/tvrtke/delete/{id}',[\App\Http\Controllers\TvrtkaController::class, 'destroy'])->name('delete.tvrtka');
Route::get('/tvrtke/add/{id}',[\App\Http\Controllers\TvrtkaController::class, 'add'])->name('add.tvrtka');

//Dvorane rute
Route::get('/dvorane', [\App\Http\Controllers\DvoranaController::class, 'index'])->name('dvorane.index');
Route::get('/dvorane/create', [\App\Http\Controllers\DvoranaController::class, 'create'])->name('dvorane.create');
Route::post('/dvorane', [\App\Http\Controllers\DvoranaController::class,'store'])->name('dvorane.store');
Route::get('/dvorane/{dvorana}', [\App\Http\Controllers\DvoranaController::class,'show'])->name('dvorane.show');
Route::get('/dvorane/delete/{dvorana}',[\App\Http\Controllers\DvoranaController::class, 'destroy'])->name('dvorane.delete');
Route::get('dvorane/{dvorana}/edit', [\App\Http\Controllers\DvoranaController::class, 'edit'])->name('dvorane.edit');
Route::patch('/dvorane/{dvorana}', [\App\Http\Controllers\DvoranaController::class, 'update'])->name('dvorane.update');

//Termini rute
Route::get('/termini/dvorane/{dvorana}', [\App\Http\Controllers\TerminController::class, 'index'])->name('termini.index');
Route::get('/termini/create', [\App\Http\Controllers\TerminController::class, 'create'])->name('termini.create');
Route::post('/termini', [\App\Http\Controllers\TerminController::class,'store'])->name('termini.store');
Route::get('/termini/{termin}', [\App\Http\Controllers\TerminController::class,'show'])->name('termini.show');
Route::get('/termini/delete/{termin}',[\App\Http\Controllers\TerminController::class, 'destroy'])->name('termini.delete');
Route::get('termini/{termin}/edit', [\App\Http\Controllers\TerminController::class, 'edit'])->name('termini.edit');
Route::patch('/termini/{termin}', [\App\Http\Controllers\TerminController::class, 'update'])->name('termini.update');



Route::get('/user/logout', [Controller::class,'Logout'])->name('user.logout');
Route::get('/login',[Controller::class,'Login'])->name('user.login');

Route::get('/restricted', [App\Http\Controllers\HomeController::class, 'restricted'])->middleware(['role']);

Route::get('/igrac', [App\Http\Controllers\IgracController::class,'index'])->name('igrac.index');
Route::get('/tvrtka', [App\Http\Controllers\TvrtkaController::class,'index'])->name('tvrtka.index');


require __DIR__.'/auth.php';
