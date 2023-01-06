<?php

use App\Http\Controllers\ConsultController;
use App\Http\Controllers\DiseaseController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\IndicationController;
use App\Http\Controllers\IndicationOfDiseaseController;
use App\Http\Controllers\ProfileController;
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

require __DIR__ . '/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// route Indications
Route::Resource('indication', IndicationController::class)->middleware('auth');

// Route Disease
Route::Resource('disease', DiseaseController::class)->middleware('auth');

// Route Indication of Disease
// Route::get('indication/{indication}/disease', [IndicationController::class, 'disease'])->name('indication.disease')->middleware('auth');

// Route::get('disease/{disease}/indication', [DiseaseController::class, 'indication'])->name('disease.indication')->middleware('auth');

Route::Resource('indicationofdisease', IndicationOfDiseaseController::class)->middleware('auth');

Route::Resource('consult', ConsultController::class)->middleware('auth');

Route::Resource('history', HistoryController::class)->middleware('auth');
