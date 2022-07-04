<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PatientAuthController extends Controller
{

    //patient registration
    public function patientRegister(Request $request)
    {
        $this -> validate($request,[
            'name'  => 'required',
            'email'  => 'required|unique:patients|email',
            'cell'  => 'required|unique:patients|digits_between:11,16|starts_with:01,8801,+8801',
            'password'  => 'required|confirmed',
        ]);
      $patient = Patient::create([
            'name'                => $request -> name,
            'email'               => $request -> email,
            'cell'                => $request -> cell,
            'password'            => Hash::make($request -> password),
        ]);


        return redirect() -> route('login.page')->with('success',"Your Registration Success! Now Please Login");
    }



    //patient login method
    public function patientLogin(Request $request)
    {
        $this -> validate($request,[
            'emailormobile'    => 'required',
            'password'           => 'required',
        ],[
            'emailormobile.required'  => 'Input Email Or Mobile Number',
        ]
    );

    if(Auth::guard('patient')-> attempt(['email' => $request->emailormobile,'password' => $request->password])||
    Auth::guard('patient')-> attempt(['cell' => $request->emailormobile,'password' => $request->password])){

        return redirect()-> route('patient.dashboard');
    }else{
        return back()->with('danger','Wrong Email or Phone Or Password');
    }

    }

    public function patientLogout()
    {
        Auth::guard('patient') -> logout();
        return redirect()->route('login.page');
    }



}
