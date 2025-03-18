<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Middleware\IsAdmin;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// routes/web.php
Route::middleware(['auth', 'password.confirm'])->group(function () {
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings');
    Route::post('/settings', [SettingsController::class, 'update'])->name('settings.update');
});

// routes/web.php
Route::middleware('auth')->group(function () {
    Route::get('/confirm-password', [ConfirmPasswordController::class, 'showConfirmForm'])
         ->name('password.confirm');
    Route::post('/confirm-password', [ConfirmPasswordController::class, 'confirm']);
});

Route::middleware([IsAdmin::class])->group(function () {
    Route::get('/admin-dashboard', function () {
        return view('admin.dashboard');
    });

    // Autres routes réservées aux administrateurs
});

require __DIR__.'/auth.php';




Route::get('/', [AccueilController::class, 'accueil'])->name('app_accueil');


Route::get('/presentation', [AccueilController::class, 'presentation'])->name('app_presentation');

Route::get('/residente', [AccueilController::class, 'residente'])->name('app_residente');

Route::get('/club', [AccueilController::class, 'club'])->name('app_club');

Route::get('/inscription', [AccueilController::class, 'inscription'])->name('app_inscription');

Route::get('/contact', [AccueilController::class, 'contact'])->name('app_contact');



Route::get('/contact', [ContactController::class, 'index'])->name('app_contact');
Route::post('/contact', [ContactController::class, 'sendMessage'])->name('contact.send');


// Route::match(['get','post'],'/login',[LoginController::class, 'login'])->name('app_login');
// Route::match(['get','post'],'/register',[LoginController::class, 'register'])->name('app_register');




// Routes pour l'authentification
Route::get('/login', [LoginController::class, 'login'])->name('login'); 
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate'); // Traiter la connexion

Route::get('/register', [LoginController::class, 'register'])->name('register'); 
Route::post('/register', [LoginController::class, 'store'])->name('register.store'); // Traiter l'inscription

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/create-admin', [AdminController::class, 'createAdmin']);



