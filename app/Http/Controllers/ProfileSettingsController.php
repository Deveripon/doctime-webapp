<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Patient;
use Illuminate\Support\Facades\Hash;

class ProfileSettingsController extends Controller
{

    //show password change page=================================
    public function showChangePatientPasswordPage()
    {
        return view('patients.changePassword');
    }


    //change patient password==========================================

    public function changePassword(Request $request)
    {
        //form validation
      $this -> validate($request,[
            'old_pass'  => 'required',
            'new_pass'  => 'required|confirmed',
      ]);


      //checking old password
      if(password_verify($request -> old_pass,Auth::guard('patient')-> user()-> password)){

       $patient_data =  Patient::findOrFail(Auth::guard('patient') ->user() -> id);

       //upadte new password
       $patient_data -> update([
            'password'  =>  Hash::make($request ->new_pass),
       ]);

       return back() -> with('success','Password Changed Successfully');

      }else{
        return back()->with('warning','Old password Does not match!');
      }  
    }


    //show profile settings pages
    public function showPatientProfileSettingsPage()
    {
      return view('patients.profile-settings');
    }






    
}
