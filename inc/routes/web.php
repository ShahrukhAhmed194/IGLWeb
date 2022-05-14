<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\OTPController;
use App\Http\Controllers\PersonalInfoController;
use App\Http\Controllers\WorkExpController;
use App\Http\Controllers\settingsController;
use App\Http\Controllers\FamilyInfoController;
use App\Http\Controllers\ReferenceController;
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

Route::get('/', function () {
    return view('frontend.pages.index');
});

// Route::get('/admin', function () {
//     return view('backend.admin.dashboard');
// });

Route::get('igl/home',[PageController::class, 'showHome'])->name('home');
Route::get('igl/about',[PageController::class, 'showAbout'])->name('about');
Route::get('igl/services',[PageController::class, 'showServices'])->name('services');
Route::get('igl/service', [PageController::class, 'showService'])->name('service');
Route::get('igl/team',[PageController::class, 'showTeam'])->name('team');
Route::get('igl/blog',[PageController::class, 'showBlog'])->name('blog');
Route::get('igl/career', [PageController::class,'showCareer'])->name('career');

Route::post('igl/change',[OTPController::class, 'changeData'])->name('change');
Route::post('check-otp',[OTPController::class, 'checkOtp'])->name('check-otp');

Route::post('applicant/personalInfo',[PersonalInfoController::class, 'personalInfo'])->name('info');
Route::get('select_district',[PersonalInfoController::class, 'districtSelection'])->name('select_district');
Route::get('select_upazila',[PersonalInfoController::class, 'upazilaSelection'])->name('select_upazila');

Route::get('igl/experience',[WorkExpController::class, 'showExperience'])->name('show-exp');
Route::post('applicant/workexperience',[WorkExpController::class, 'saveExperience'])->name('save-exp');

Route::get('igl/family/info',[FamilyInfoController::class, 'showFamilyInfo'])->name('show-family');
Route::post('applicant/family',[FamilyInfoController::class, 'saveFamilyInfo'])->name('save-family');

Route::get('igl/reference/info',[ReferenceController::class, 'showReferenceInfo'])->name('show-reference');
Route::post('applicant/reference',[ReferenceController::class, 'saveReferenceInfo'])->name('save-reference');

Route::get('igl/updateInfo/{phone}',[settingsController::class, 'showSettings'])->name('settings');
Route::get('igl/updateInfo2/{phone}',[settingsController::class, 'showSettings2'])->name('settings2');
Route::get('igl/updateInfo3/{phone}',[settingsController::class, 'showSettings3'])->name('settings3');
Route::get('igl/updateInfo4/{phone}',[settingsController::class, 'showSettings4'])->name('settings4');
Route::get('igl/updateInfo5/{phone}',[settingsController::class, 'showSettings5'])->name('settings5');

Route::post('igl/updateUser',[settingsController::class, 'updateUser'])->name('userUpdate');
Route::post('igl/updatePersonalInfo',[settingsController::class, 'updatePersonalInfo'])->name('infoUpdate');
Route::post('igl/updateExperience',[settingsController::class, 'updateExperience'])->name('expUpdate');
Route::post('igl/updateFamilyInfo',[settingsController::class, 'updateFamilyInfo'])->name('familyUpdate');
Route::post('igl/updateReference',[settingsController::class, 'updateReference'])->name('referenceUpdate');
Route::post('igl/changePassword',[settingsController::class, 'changePassword'])->name('update.password');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    session(['status' => 'value']);
    return view('dashboard');
})->name('dashboard');

