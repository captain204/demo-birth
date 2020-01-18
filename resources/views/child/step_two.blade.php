@extends('layouts.app')
@section('content')
<div class="signup-content">
    <div class="signup-img">
        <header class="masthead" style="background-image:('{{url('blog/img/home-bg.jpg')}}'')">
        <img src="{{url('regform/images/signup-img.jpg')}}" alt="">
    </div>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif
    <div class="signup-form">
        <form method="POST" action="/postregister-step2" class="register-form" id="register-form">
            {{ csrf_field()}}
            <h2>Birth Registration Form <b>Step 2/2</b></h2>
            <h2 class="text-center">Parent Information</h2>
            <div class="form-group">
                <label for="f_firstname">Fathers Firstname</label>
                <input type="text" name="f_firstname" id="f_firstname" placeholder="Fathers Firstname" required/>
            </div>
            <div class="form-group">
                <label for="f_surname">Fathers Surname</label>
                <input type="text" name="f_surname" id="f_surname" placeholder="Fathers Surname" required/>
            </div>
            <div class="form-group">
                <label for="f_national_id">Fathers NIN</label>
                <input type="text" name="f_national_id" id="f_national_id" placeholder="Fathers National Identity Number" required/>
            </div>
            <div class="form-group">
                <label for="m_maiden">Mothers Maiden Name</label>
                <input type="text" name="m_maiden" id="m_maiden" placeholder="Mothers Maiden Name" required/>
            </div>
            <div class="form-group">
                <label for="m_firstname">Mothers Firstname</label>
                <input type="text" name="m_firstname" id="m_firstname" placeholder="Mothers Firstname" required/>
            </div>
            <div class="form-group">
                <label for="m_lastname">Mothers Lastname</label>
                <input type="text" name="m_lastname" id="m_lastname" placeholder="Mothers Lastname" required/>
            </div>
            <div class="form-group">
                <label for="m_lastname">Mothers NIN</label>
                <input type="text" name="m_national_id" id="m_national_id" placeholder="Mothers National Identity Number" required/>
            </div>
            <div class="form-group">
                <label for="nationality">Nationality</label>
                <input type="text" name="nationality" id="nationality" placeholder="Nationality" required/>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" placeholder="Address" required/>
            </div>
            <div class="form-submit">
                <input type="submit" value="Submit" class="submit" name="submit" id="submit" />
            </div>
        </form>
    </div>
</div>
@endsection