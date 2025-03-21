<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\AnnouncementController;
use App\Http\Middleware\AbsenceRequestController;


Auth::routes(); // Routes de connexion et d'inscription

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

// Routes protégées par le middleware admin
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('admin/announcements', [AnnouncementController::class, 'index'])->name('admin.announcements.index');
    Route::get('admin/announcements/create', [AnnouncementController::class, 'create'])->name('admin.announcements.create');
    Route::post('admin/announcements', [AnnouncementController::class, 'store'])->name('admin.announcements.store');
    Route::get('admin/announcements/{announcement}/edit', [AnnouncementController::class, 'edit'])->name('admin.announcements.edit');
    Route::put('admin/announcements/{announcement}', [AnnouncementController::class, 'update'])->name('admin.announcements.update');
    Route::delete('admin/announcements/{announcement}', [AnnouncementController::class, 'destroy'])->name('admin.announcements.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('user/absence_form', [AbsenceRequestController::class, 'create'])->name('user.absence_form');
    Route::post('user/absence_form', [AbsenceRequestController::class, 'store']);
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




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
