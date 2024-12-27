<?php

use App\Http\Controllers\AnneeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CotisationController;
use App\Http\Controllers\DepenseController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PageController::class, 'authentification'])->name('authentification');
Route::get('register', [PageController::class, 'register'])->name('register');
Route::post('Authentification', [AuthController::class, 'login'])->name('login');
Route::post('deconnexion', [AuthController::class, 'logout'])->name('logout');

Route::resource('gestion_membres', UserController::class);

Route::get("/link", function () {
    $targetFolder = storage_path("app/public");
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
    symlink($targetFolder, $linkFolder);
});

Route::middleware(['auth'])->group(function () {
    Route::get('dashbord', [PageController::class, 'dashboard'])->name('dashboard');

    Route::resource('gestion_cotisations', CotisationController::class);
    Route::get('cotisation_ponctuelle', [CotisationController::class, 'ponctuelle'])->name('cotisation_ponctuelle');
    Route::get('mes_cotisations', [UserController::class, 'my_find'])->name('find_cotisation');
    Route::get('delete_cotisation/{id}', [CotisationController::class, 'destroy']);

    Route::resource('gestion_depenses', DepenseController::class);
    Route::get('delete_depense/{id}', [DepenseController::class, 'destroy']);


    Route::post('change_password/{id}', [UserController::class, 'change_password']);
    Route::post('add_profil_image/{id}', [UserController::class, 'profil_image']);
    Route::get('delete_user/{id}', [UserController::class, 'destroy']);
    Route::get('detail_users/{id}', [UserController::class, 'profile']);
    Route::post('change_role/{id}', [UserController::class, 'change_role']);
    Route::post('active_compte/{id}', [UserController::class, 'active_compte']);
    Route::get('Liste_attente', [UserController::class, 'liste_attente'])->name('liste_attente');

    Route::get('nos_galeries', [PageController::class, 'galerie'])->name('galerie');

    Route::resource('gestion_annees', AnneeController::class);
    Route::post('ouverte_statut/{id}', [AnneeController::class, 'ouverte']);
    Route::post('fermer_statut/{id}', [AnneeController::class, 'fermee']);
});
