<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminController;
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


Route::get('test', function(){
    session()->flash();

});




/**
 * ------------------------------------------------------------------------
 * Member Routes
 */
Route::redirect('/', '/ka');

Route::group(['prefix' => '{locale?}', 'where' => ['locale' => 'ka|en']], function() {
    /**
    * ------------------------------------------------------------------------
    * Main Routes
    * ------------------------------------------------------------------------
    */
    Route::get('/',                           [MainController::class, 'index'])->name('home');
    /**
    * ------------------------------------------------------------------------
    * Member Routes
    * ------------------------------------------------------------------------
    */
    Route::get('membership',                  [MemberController::class, 'getMembership'])->name('getMembership');
    Route::post('membership',                 [MemberController::class, 'postMembership'])->name('postMembership');

    /**
    * ------------------------------------------------------------------------
    * Partner Routes
    * ------------------------------------------------------------------------
    */
    Route::get('partnership',                 [PartnerController::class, 'getPartnership'])->name('getPartnership');
    Route::post('partnership',                [PartnerController::class, 'postPartnership'])->name('postPartnership');

 
    /**
    * ------------------------------------------------------------------------
    * About Us Routes
    * ------------------------------------------------------------------------
    */
    Route::get('aboutus',                     [AboutUsController::class, 'index']);

});

Route::group(['prefix' => 'admin'], function(){

    /**
    * ------------------------------------------------------------------------
    * Admin Routes
    * ------------------------------------------------------------------------
    */
    Route::get('/',                       [AdminController::class, 'index']);

    /**
    * ------------------------------------------------------------------------
    * About Us Routes
    * ------------------------------------------------------------------------
    */
    Route::get('aboutus',                         [AboutUsController::class, 'getAdminAboutUs']);
    Route::get('add/aboutus',                     [AboutUsController::class, 'getAddAboutUs']);
    Route::post('add/aboutus',                    [AboutUsController::class, 'postAddAboutUs']);
    Route::get('edit/aboutus/{aboutus}',          [AboutUsController::class, 'getEditAboutUs']);
    Route::post('edit/aboutus/{aboutus}',         [AboutUsController::class, 'postEditAboutUs']);
    Route::get('delete/aboutus/{aboutus}',        [AboutUsController::class, 'getDeleteAboutUs']);

    /**
    * ------------------------------------------------------------------------
    * Speciality Routes
    * ------------------------------------------------------------------------
    */
    Route::get('specialities',                        [SpecialityController::class, 'getSpecialities']);
    Route::post('specialities',                       [SpecialityController::class, 'postDTSpeciality'])->name('datatables');
    Route::get('speciality/{id}',                     [SpecialityController::class, 'getSpeciality']);
    Route::get('add/speciality',                      [SpecialityController::class, 'getAddSpeciality']);
    Route::post('add/speciality',                     [SpecialityController::class, 'postAddSpeciality']);
    Route::get('edit/speciality/{speciality}',        [SpecialityController::class, 'getEditSpeciality']);
    Route::post('edit/speciality/{speciality}',       [SpecialityController::class, 'postEditSpeciality']);
    Route::get('delete/speciality/{speciality}',      [SpecialityController::class, 'getDeleteSpeciality']);

});





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
