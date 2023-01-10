<?php

use App\Http\Controllers\AboutUs\AboutUsController;
use App\Http\Controllers\admin\AdminChampionController;
use App\Http\Controllers\admin\AdminCompetitionController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\AdminRegistration;
use App\Http\Controllers\ChampionController;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Contracts\Session\Session;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';


Route::get('/', function () {
    return view('home');
});
Route::get('/About', function () {
    return view('about');
});

Route::get('/Competition', [CompetitionController::class, 'index']);
Route::get('/AboutUs', [AboutUsController::class, 'AboutUs']);

Route::get('/Registration', [RegistrationController::class, 'index']);
Route::post('/Registration', [RegistrationController::class, 'regis'])->name('registration.regis');
Route::get('/done', [RegistrationController::class, 'regDone'])->name('registration.done');

Route::get('/Champion', [ChampionController::class, 'index'])->name('champion');
Route::get('/Champion/{id}', [ChampionController::class, 'show']);


Route::middleware(['auth'])->group(function () {
    // admin
    // team
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/{id}/edit', [AdminController::class, 'edit'])->name('admin.edit');
    Route::get('/admin/{id}/show', [AdminController::class, 'show'])->name('admin.show');
    Route::put('/admin/{id}/edit', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/admin/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
    // group
    Route::get('/admin/Competition', [AdminCompetitionController::class, 'index'])->name('competition');
    Route::get('/admin/grups/{id}', [AdminCompetitionController::class, 'grups'])->name('group.edit');
    Route::put('/admin/grups/{id}', [AdminCompetitionController::class, 'grupUpdate'])->name('group.update');
    // jadwal
    Route::get('/admin/jadwal/{id}', [AdminCompetitionController::class, 'jadwal'])->name('jadwal.edit');
    Route::put('/admin/jadwal/{id}', [AdminCompetitionController::class, 'jadwalUpdate'])->name('jadwal.update');
    Route::get('/admin/jadwal', [AdminCompetitionController::class, 'jadwalAdd']);
    Route::post('/admin/jadwal', [AdminCompetitionController::class, 'jadwalAdds'])->name('jadwal.add');

    // registration
    Route::get('/admin/Registration', [AdminRegistration::class, 'index'])->name('admin.registration');
    Route::post('admin/Registration', [AdminRegistration::class, 'create'])->name('registration.create');

    Route::get('admin/Registration/grup', [AdminRegistration::class, 'grup']);
    Route::post('admin/Registration/grup', [AdminRegistration::class, 'creategrup'])->name('registration.grupCreate');
    Route::get('admin/Registration/grup/{id}/edit', [AdminRegistration::class, 'grupEdit'])->name('registration.grupEdit');
    Route::put('admin/Registration/grup/{id}/edit', [AdminRegistration::class, 'grupUpdate'])->name('registration.grupUpdate');
    Route::delete('admin/Registration/grup/{id}/delete', [AdminRegistration::class, 'grupDelete'])->name('registration.grupDelete');


    Route::get('/admin/Rgistration/{id}/edit', [AdminRegistration::class, 'edit'])->name('registration.edit');
    Route::put('admin/Registration/{id}/edit', [AdminRegistration::class, 'update'])->name('registration.update');

    Route::delete('/admin/Registration/{id}/edit', [AdminRegistration::class, 'delete'])->name('registration.delete');

    // champion
    Route::get('/admin/Champion', [AdminChampionController::class, 'index'])->name('admin.champion');
    Route::post('/admin/Champion', [AdminChampionController::class, 'tambahkan'])->name('champion.add');
    Route::get('/admin/Champion/edit/{id}', [AdminChampionController::class, 'edit'])->name('champion.edit');
    Route::put('/admin/Champion/edit/{id}', [AdminChampionController::class, 'update'])->name('champion.update');
    Route::delete('/admin/Champion/delete/{id}', [AdminChampionController::class, 'delete'])->name('champion.delete');

    // post


    // profile to change password


    // logout
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
});


Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'action'])->name('login.action');
