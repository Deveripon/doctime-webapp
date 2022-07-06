<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileSettingsController extends Controller
{
    public function changePatientPassword()
    {
        return view('patients.changePassword');
    }


    //change patient password

    public function changePassword(Request $request)
    {
      $this -> validate($request,[
            'old_pass'  => 'required',
            'new_pass'  => 'required|confirmed',
      ]);
        return $request->all();
    }


    
}
