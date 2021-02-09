<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class userController extends Controller
{
    public function register(){
        //command for retrieving records from the mysql database
   
           $register =  DB::SELECT("SELECT * FROM employee_tbl");
           return view('register',['register' => $register]);
       }

       public function insertUser(Request $request){
        //initialization
        $firstname=$request->input('firstname');
        $lastname=$request->input('lastname');
        $password=$request->input('password');
        $email=$request->input('email');
        //mysql insert command
        DB::INSERT("INSERT into employee_tbl(firstname,lastname,password,email)VALUES(?,?,?,?)", [$firstname,$lastname,$password,$email]);
        $register =  DB::SELECT("SELECT * FROM employee_tbl");
           return view('register',['register' => $register]);

    }
}
