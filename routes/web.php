<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdvertController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


//my last routes

// Route::get('/', [HomeController::class, 'view'])->name('home');
// Route::get('/login', [LoginController::class, 'view'])->name('login.user');
// Route::get('/register', [RegisterController::class, 'view'])->name('register.user');

// Route::get('/db', [DbController::class, 'showusers'] );
// Route::get('/dbinsertuser', [DbController::class, 'insertuser'] );
// Route::get('/dbinsertadvert', [DbController::class, 'insertadvert'] );



// Route::get('/user.show', [UserController::class, 'show'])->name('userslist');


Route::get('/advert.create.show', [AdvertController::class, 'showcreateadvert'])->name('newadvertshow');
Route::post('/advert.create', [AdvertController::class, 'create'])->name('newadvert');
Route::get('/advert.show', [AdvertController::class, 'show'])->name('advertslist');
Route::post('/advert.edit/{}', [AdvertController::class, 'edit'])->name('editadvert');
Route::post('/advert.edit.show', [AdvertController::class, 'showedit'])->name('editadvertshow');


// my last advert controller
