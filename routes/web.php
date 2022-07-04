<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Auth\PatientAuthController;


//frontend Pages Routes
Route::get('/',[FrontendController::class,'showHomePage']) -> name('home.page');
Route::get('/login',[FrontendController::class,'showLoginPage']) -> name('login.page'); 



//patients features routes
Route::get('patient-register',[FrontendController::class,'showPatientRegisterPage']) -> name('patient.register');
Route::get('patient-dashboard',[FrontendController::class,'showPatientDashboardPage'])-> name('patient.dashboard');

//Auth Routes For Patient
Route::post('patient-register',[PatientAuthController::class,'patientRegister']) -> name('patient.auth.register');
Route::post('patient-login',[PatientAuthController::class,'patientLogin']) -> name('patient.auth.login');
Route::get('patient-logout',[PatientAuthController::class,'patientLogout']) -> name('patient.logout');







//doctors features routes
Route::get('doctor-register',[FrontendController::class,'showDoctorRegisterPage']) -> name('doctor.register');



