<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{

    //return home page
     public function showHomePage()
     {
       return view('frontend.home');
     }

     //return login page
     public function showLoginPage()
     {
       return view('frontend.login');
     }

     //patient register page
     public function showPatientRegisterPage()
     {
        return view('patients.register');
     }

     //doctor register pages
     public function showDoctorRegisterPage()
     {
      return view('doctors.register');
     }

     //patient dashboard page
     	function showPatientDashboardPage()
     {
       return view('patients.dashboard');
     }


}
