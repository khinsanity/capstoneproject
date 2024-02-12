<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\applicationModel;
use Hash;
use Auth;

class applicationController extends Controller
{
    function applynowPOST(Request $request){
        $request->validate([
            'firstname' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'contact' => 'required',
            'birthday' => 'required',
            'gender' => 'required',
            'plan' => 'required',
            'email' => 'required|email|unique:application_models',
            'street' => 'required',
            'barangay' => 'required',
            'town' => 'required',
            'province' => 'required',
            'landmark' => 'required',
            'uploadid' => 'required',
            'idselfie' => 'required'       
        ]);
        
        $data['firstname'] = $request->firstname;
        $data['middlename'] = $request->middlename;
        $data['lastname'] = $request->lastname;
        $data['contact'] = $request->contact;
        $data['birthday'] = $request->birthday;
        $data['gender'] = $request->gender;
        $data['plan'] = $request->plan;
        $data['email'] = $request->email;
        $data['street'] = $request->street;
        $data['barangay'] = $request->barangay;
        $data['town'] = $request->town;
        $data['province'] = $request->province;
        $data['landmark'] = $request->landmark;
        $data['uploadid'] = $request->uploadid;
        $data['idselfie'] = $request->idselfie;
        

        $applicants = applicationModel::create($data);
        if(!$applicants){
            return redirect(route('applynow'))->with("error", "Application failed, please try again");
        }
        return redirect(route('applynow'))->with("success", "Application submitted, Please wait for email, text or call");
    }      
        
}

