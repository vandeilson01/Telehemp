<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EspecialistasController;
use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;
use App\Mail\TestEmail;
use Illuminate\Support\Facades\Mail;


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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/especialistas', [HomeController::class, 'specialist'])->name('specialist');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/como-podemos-te-ajudar', [HomeController::class, 'help'])->name('home.help');
Route::get('/pergunte-aos-especialistas', [HomeController::class, 'askASpecialist'])->name('home.ask-a-specialist');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/especialist',[EspecialistasController::class, 'index'] )->middleware(['auth', 'verified'])->name('especialist');
Route::get('/especialist/create',[EspecialistasController::class, 'create'] )->middleware(['auth', 'verified'])->name('especialist.create');
Route::post('/especialist/update/{id}',[EspecialistasController::class, 'update'] )->middleware(['auth', 'verified'])->name('especialist.update');
Route::post('/especialist/store',[EspecialistasController::class, 'store'] )->middleware(['auth', 'verified'])->name('especialist.store');
Route::get('/especialist/show/{id}',[EspecialistasController::class, 'show'] )->middleware(['auth', 'verified'])->name('especialist.show');
Route::get('/especialist/edit/{id}',[EspecialistasController::class, 'edit'] )->middleware(['auth', 'verified'])->name('especialist.edit');
Route::post('/especialist/destroy',[EspecialistasController::class, 'destroy'] )->middleware(['auth', 'verified'])->name('especialist.destroy');

Route::get('/categoria',[CategoriasController::class, 'index'] )->middleware(['auth', 'verified'])->name('categoria');
Route::get('/categoria/create',[CategoriasController::class, 'create'] )->middleware(['auth', 'verified'])->name('categoria.create');
Route::post('/categoria/update/{id}',[CategoriasController::class, 'update'] )->middleware(['auth', 'verified'])->name('categoria.update');
Route::post('/categoria/store',[CategoriasController::class, 'store'] )->middleware(['auth', 'verified'])->name('categoria.store');
Route::get('/categoria/show/{id}',[CategoriasController::class, 'show'] )->middleware(['auth', 'verified'])->name('categoria.show');
Route::get('/categoria/edit/{id}',[CategoriasController::class, 'edit'] )->middleware(['auth', 'verified'])->name('categoria.edit');
Route::post('/categoria/destroy',[CategoriasController::class, 'destroy'] )->middleware(['auth', 'verified'])->name('categoria.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/enviar_email', [MailController::class, 'envio']);
Route::post('/novidades_email', [MailController::class, 'novidades']);

Route::get('/testroute', function() {
    $name = "Funny Coder";

    // The email sending is done using the to method on the Mail facade
    Mail::to('testreceiver@gmail.com')->send(new MyTestEmail($name));
});
 

require __DIR__.'/auth.php';
