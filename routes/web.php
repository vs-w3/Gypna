<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SpecialityController;
use App\Http\Controllers\SpecialityUserController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\UserController;
use App\Http\Livewire\Pages\Member\MemberShow;
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
    return md5('123456789');

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
    //Route::get('membership',                  [MemberController::class, 'getMembership'])->name('getMembership');
    //Route::post('membership',                 [MemberController::class, 'postMembership'])->name('postMembership');

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

    /**
    * ------------------------------------------------------------------------
    * Profile Routes
    * ------------------------------------------------------------------------
    */
    Route::get('/user/{user}/profile',        [ProfileController::class, 'show'])->middleware('auth');
    
    Route::get('add/user/speciality',         [SpecialityUserController::class, 'getAddSpecialityUser'])->name('addUserSpeciality');
    Route::post('add/user/speciality',        [SpecialityUserController::class, 'postAddSpecialityUser']);



    /**
    * ------------------------------------------------------------------------
    * Member Routes
    * ------------------------------------------------------------------------
    */
    Route::get('members',                    [MemberController::class, 'index']);
    Route::get('members/{user}',             [MemberController::class, 'show']);
    //Route::get('/member/{user}',             MemberShow::class);
    
    
    /**
    * ------------------------------------------------------------------------
    * Events Routes
    * ------------------------------------------------------------------------
    */
    Route::get('events',                      [EventController::class, 'index'])->name('app-event-index');
    Route::get('events/{event}',              [EventController::class, 'show'])->name('app-event-show');

});

Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function(){

    /**
    * ------------------------------------------------------------------------
    * User Routes
    * ------------------------------------------------------------------------
    */
    Route::get('users',                   [UserController::class, 'adminIndex']);

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
    Route::get('edit/speciality/{speciality}',        [SpecialityController::class, 'getEditSpeciality'])->name('admin-speciality-edit');
    Route::post('edit/speciality/{speciality}',       [SpecialityController::class, 'postEditSpeciality']);
    Route::get('delete/speciality/{speciality}',      [SpecialityController::class, 'getDeleteSpeciality'])->name('admin-speciality-delete');

    /**
    * ------------------------------------------------------------------------
    * Event Routes
    * ------------------------------------------------------------------------
    */
    Route::get('events',                            [EventController::class, 'adminIndex'])->name('admin-events');
    Route::get('events/add',                        [EventController::class, 'create'])->name('admin-event-add');
    Route::post('events/add',                       [EventController::class, 'store'])->name('admin-event-store');
    Route::get('events/edit/{event}',               [EventController::class, 'edit'])->name('admin-event-edit');
    Route::post('events/edit/{event}',              [EventController::class, 'update'])->name('admin-event-update');
    

    /**
    * ------------------------------------------------------------------------
    * Topic Routes
    * ------------------------------------------------------------------------
    */
    Route::get('topics',                            [TopicController::class, 'adminIndex']);
    Route::get('topics/add',                        [TopicController::class, 'create']);
    Route::post('topics/add',                       [TopicController::class, 'store'])->name('admin-topic-store');
    Route::get('topics/edit/{topic}',               [TopicController::class, 'edit']);
    Route::post('topics/edit/{topic}',              [TopicController::class, 'update']);
    Route::get('topics/delete/{topic}',             [TopicController::class, 'destroy']);

});





Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
