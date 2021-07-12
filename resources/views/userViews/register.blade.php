@extends('layouts.app')

@section('page-content')
<div class="registration-form">
    <h2 class="text-center mb-5 text-muted " >REGISTRATION</h2>
    <form>

        <div class="form-icon">
            <span><i class="fas fa-user"></i></span>
        </div>
        <div class="form-group">
            <input type="text" class="form-control item" id="username" placeholder="Username">
        </div>
        <div class="form-group">
            <input type="text" class="form-control item" id="fullname" placeholder="Fullname">
        </div>
        <div class="form-group">
            <input type="text" class="form-control item" id="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="text" class="form-control item" id="phone-number" placeholder="Phone Number">
        </div>
        <div class="form-group">
            <input type="password" class="form-control item" id="password" placeholder="Password">
        </div>
        <div class="form-group">
            <input type="password" class="form-control item" id="password-confirm" placeholder="Confirm Password">
        </div>



        <div class="form-group">
            <button type="button" class="btn btn-block create-account">REGISTER</button>
        </div>
    </form>
    <div class="social-media">
        <h5>Already registered?<a href="" style="text-decoration: none; color:#7c818d;"><strong> Click here to login.</strong></h5></a>
        <div class="social-icons">

        </div>
    </div>
</div>

@endsection
