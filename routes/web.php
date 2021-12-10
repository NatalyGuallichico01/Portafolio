<?php
use App\Http\Controllers\PortafolioController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();


Route::get('portafolio',[PortafolioController::class,'index'])->middleware('auth')->name('portafolio');
Route::get('portafolio/create',[PortafolioController::class,'create'])->middleware('auth')->name('create');
Route::post('portafolio/create',[PortafolioController::class,'store'])->middleware('auth')->name('store');
Route::get('portafolio/{id}',[PortafolioController::class,'show'])->middleware('auth')->name('show');
Route::get('portafolio/edit/{id}',[PortafolioController::class,'edit'])->name('edit');
Route::put('portafolio/{portafolio}',[PortafolioController::class,'update'])->name('update');
Route::delete('portafolio/{portafolio}',[PortafolioController::class,'destroy'])->name('destroy');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*use App\Http\Controllers\PortafolioController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::name('portafolio')->get('portafolio', [App\Http\Controllers\PortafolioController::class, 'index']);
Route::get('portafolio', [PortafolioController::class,'index'])->name('portafolio');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/