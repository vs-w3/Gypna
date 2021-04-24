<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\SpecialityController;
use App\Models\Speciality;
use Illuminate\Support\Facades\App;
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


/**
 * ------------------------------------------------------------------------
 * Member Routes
 */
Route::redirect('/', '/ka');

Route::group(['prefix' => '{locale}'], function() {
    /**
    * ------------------------------------------------------------------------
    * Main Routes
    * ------------------------------------------------------------------------
    */
    Route::get('/',                            [MainController::class, 'index'])->name('home');
    /**
    * ------------------------------------------------------------------------
    * Member Routes
    * ------------------------------------------------------------------------
    */
    Route::get('membership',                   [MemberController::class, 'getMembership'])->name('getMembership');
    Route::post('membership',                  [MemberController::class, 'postMembership'])->name('postMembership');

    /**
    * ------------------------------------------------------------------------
    * Partner Routes
    * ------------------------------------------------------------------------
    */
    Route::get('partnership',                 [PartnerController::class, 'getPartnership'])->name('getPartnership');
    Route::post('partnership',                [PartnerController::class, 'postPartnership'])->name('postPartnership');

    /**
    * ------------------------------------------------------------------------
    * Speciality Routes
    * ------------------------------------------------------------------------
    */
    Route::get('test',                        [SpecialityController::class, 'getSpecialities']);
    Route::get('specialities',                [SpecialityController::class, 'getSpecialities']);
    Route::get('speciality/{id}',             [SpecialityController::class, 'getSpeciality']);
    Route::get('add/speciality/{id}',         [SpecialityController::class, 'getAddSpeciality']);
    Route::post('add/speciality/{id}',        [SpecialityController::class, 'postAddSpeciality']);
    Route::get('edit/speciality/{id}',        [SpecialityController::class, 'getEditSpeciality']);
    Route::post('edit/speciality/{id}',       [SpecialityController::class, 'postEditSpeciality']);
    Route::post('delete/speciality/{id}',     [SpecialityController::class, 'postDeleteSpeciality']);


});





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
