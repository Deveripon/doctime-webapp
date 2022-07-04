<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Auth\PatientAuthController;


//frontend Pages Routes
Route::get('/',[FrontendController::class,'showHomePage']) -> name('home.page');
Route::get('/login',[FrontendController::class,'showLoginPage']) -> name('login.page'); 



//patients features routes
Route::get('patient-register',[FrontendController::class,'showPatientRegisterPage']) -> name('patient.register');

//Auth Routes For Patient
Route::post('patient-register',[PatientAuthController::class,'patientRegister']) -> name('patient.auth.register');
Route::post('patient-login',[PatientAuthController::class,'patientLogin']) -> name('patient.auth.login');







//doctors features routes
Route::get('doctor-register',[FrontendController::class,'showDoctorRegisterPage']) -> name('doctor.register');



