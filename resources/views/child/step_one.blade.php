@extends('layouts.app')
@section('content')
<div class="signup-content">
    <div class="signup-img">
        <header class="masthead" style="background-image:('{{url('blog/img/home-bg.jpg')}}'')">
        <img src="{{url('regform/images/signup-img.jpg')}}" alt="">
    </div>
    <div class="signup-form">
        <form method="POST" class="register-form" id="register-form">
            <h2>Birth Registration Form <b>Step 1/2</b></h2>
            <h2 class="text-center">Child Information</h2>
            <div class="form-row">
                <div class="form-group">
                    <label for="name">Date Of Birth:</label>
                    <input type="date" name="date_birth" id="date_birth" required/>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="place_birth">Place Of Birth:</label>
                    <div class="form-select">
                        <select name="place_birth" id="place_birth">
                            <option value=""></option>
                            <option value="Jos">Jos</option>
                            <option value="Abuja">Abuja</option>
                        </select>
                        <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="child_firstname">Firstname</label>
                <input type="text" name="child_firstname" id="child_firstname" placeholder="Enter Child Firstname" required/>
            </div>
            <div class="form-group">
                <label for="child_middlename">Middlename</label>
                <input type="text" name="child_middlename" id="child_middlename" placeholder="Enter Child Middlename" required/>
            </div>
            <div class="form-group">
                <label for="child_lastname">Lastname</label>
                <input type="text" name="child_lastname" id="child_lastname" placeholder="Enter Child Lastname" required/>
            </div>
            <div class="form-group">
                <label for="child_weight">Child Weight</label>
                <input type="text" name="child_weight" id="child_weight" placeholder="Enter Child Weight" required/>
            </div>
            <div class="form-group">
                <label for="eye_color">Eye Color</label>
                <input type="text" name="eye_color" id="eye_color" placeholder="Enter Child Eye Color" required/>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="sex">Gender:</label>
                    <div class="form-select">
                        <select name="sex" id="sex">
                            <option value=""></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                    </div>
                </div>
            </div>
            <div class="form-submit">
                <input type="submit" value="Reset All" class="submit" name="reset" id="reset" />
                <input type="submit" value="Next" class="submit" name="submit" id="submit" />
            </div>
        </form>
    </div>
</div>
@endsection