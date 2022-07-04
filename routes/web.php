<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;


//frontend Pages Routes
Route::get('/',[FrontendController::class,'showHomePage']) -> name('home.page');
Route::get('/login',[FrontendController::class,'showLoginPage']) -> name('login.page'); 



//patients features routes
Route::get('patient-register',[FrontendController::class,'showPatientRegisterPage']) -> name('patient.register');







//doctors features routes
Route::get('doctor-register',[FrontendController::class,'showDoctorRegisterPage']) -> name('doctor.register');