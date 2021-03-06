<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Auth\PatientAuthController;
use App\Http\Controllers\ProfileSettingsController;


//frontend Pages Routes
Route::get('/',[FrontendController::class,'showHomePage']) -> name('home.page');
Route::get('/login',[FrontendController::class,'showLoginPage']) -> name('login.page') -> middleware('patient.redirect');



//patients features routes
Route::get('patient-register',[FrontendController::class,'showPatientRegisterPage']) -> name('patient.register') -> middleware('patient.redirect');
Route::get('patient-dashboard',[FrontendController::class,'showPatientDashboardPage'])-> name('patient.dashboard') -> middleware('patient');

//patient password changes routes
Route::get('change-password',[ProfileSettingsController::class,'showChangePatientPasswordPage']) -> name('password.change') -> middleware('patient');
Route::post('change-password',[ProfileSettingsController::class,'changePassword']) -> name('password.change')-> middleware('patient');
//patients profile settings Routes
Route::get('profile-settings',[ProfileSettingsController::class,'showPatientProfileSettingsPage']) -> name('profile.settings') -> middleware('patient');
Route::post('profile-settings',[ProfileSettingsController::class,'patientProfileSettings']) -> name('profile.settings') -> middleware('patient');


//Auth Routes For Patient
Route::post('patient-register',[PatientAuthController::class,'patientRegister']) -> name('patient.auth.register');
Route::post('patient-login',[PatientAuthController::class,'patientLogin']) -> name('patient.auth.login');
Route::get('patient-logout',[PatientAuthController::class,'patientLogout']) -> name('patient.logout');







//doctors features routes
Route::get('doctor-register',[FrontendController::class,'showDoctorRegisterPage']) -> name('doctor.register');



