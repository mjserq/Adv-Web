  
@extends('layouts.master')
@section('Title','Sign Up Form by Colorlib')
@section('section')
    <div class="main">
        <div class="container">
            <div class="signup-content">
                <div class="display-img">
                    <img src="images/signup-img.jpg" style="width: 700px">
                </div>
            <div class="display-form">
                <form action="/display" method="POST" class="register-form" id="register-form">
                 @csrf
                    
                    <h2>student registration form</h2>
                             
                     <div class="form-row">
                            <div class="form-group">
                              <label for="name"> &emsp;Name :</label>&emsp; {{ $name ?? '' }}
                            </div>
                            
                            <div class="form-group">
                                <label for="father_name">&emsp;Father Name :</label>&emsp; {{ $fname ?? '' }}
                            </div>
                             </div>
                        
                            <div class="form-group">
                                <label for="address">&emsp;Address :</label> &emsp; {{ $address ?? '' }}
                            </div>
                        
                            <div class="form-group">
                                <label for="gender" >&emsp;Gender :</label> &emsp; {{ $gender ?? '' }}
                            </div>
                        
                            <div class="form-row">
                                <div class="form-group">
                                   <label for="state">&emsp;State :</label> &emsp;  {{ $state ?? '' }} 

                                  <br><br>
                            <div class="form-group">
                                    <label for="city">City :</label>
                                <div class="form-select"> {{ $city ?? '' }}
                            </div>
                            </div>

                        
                            <div class="form-group">
                                    <label for="birth_date">DOB :</label> {{ $birthdate ?? '' }}
                            </div>
                             <div class="form-group">
                                    <label for="pincode">Pincode :</label> {{ $pincode ?? '' }}
                            </div>

                            <div class="form-group">
                                    <label for="course">Course :</label> {{ $course ?? '' }}
                            </div>

                            <div class="form-group">
                                    <label for="email">Email ID :</label> {{ $email ?? '' }}
                        </div>
                        
                        {{--


                            <div class="form-row">
                            Name:   {{ $name ?? '' }} 
                            Father's Name: {{ $name ?? '' }}  
                            Address: {{ $address ?? '' }} 
                            Gender: {{ $gender ?? '' }} 
                            State: {{ $state ?? '' }} 
                            City:   {{ $city ?? '' }} 
                            DOB:    {{ $birthdate ?? '' }} 
                            Pincode: {{ $pincode ?? '' }} 
                            Course: {{ $course ?? '' }} 
                            Email ID: {{ $email ?? '' }} 
                        </div> 

                        --}}
@endsection