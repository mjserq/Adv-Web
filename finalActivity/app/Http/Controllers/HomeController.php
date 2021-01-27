<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index(){
        return view('index');
    }
    public function display(){
        return view('display');
    }

     public function submit(Request $request){
        
        $name = $request->input('name');
        $fname = $request->input('father_name');
        $address = $request->input('address');
        $gender = $request->input('gender');
        $state = $request->input('state');
        $city = $request->input('city');
        $birthdate = $request->input('birth_date');
        $course = $request->input('course');
        $pincode = $request->input('pincode');
        $email = $request->input('email');
        return view('display',['name' => $name, 'fname' => $fname,'address' => $address, 'gender' => $gender, 'state' => $state, 'city' => $city, 'birthdate' => $birthdate, 'course' => $course, 'pincode' => $pincode, 'email' => $email ]);
    }
}