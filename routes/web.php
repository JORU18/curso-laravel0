<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Dashboard\TestController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\TestController;

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

// Route::get('/', function () {
  
//     return view('welcome');

// });

Route::get('/', [TestController::class, 'index']);

Route::get('/custom', function () {
    $msj2="mensaje desde el servidor";
    $data=['msj'=>$msj2, "edad" => 15];
    return view('custom',$data);


});

Route::get('/escribeme', function(){

    return view('welcome');
}


)->name('contacto');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
