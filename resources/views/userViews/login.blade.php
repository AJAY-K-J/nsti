@extends('layouts.app')

@section('page-content')

    <div class="registration-form mt-5">
        <form>
            <h5><center>User Login</center></h5>

            <div class="form-icon">
                <span><i class="fas fa-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" id="password" placeholder="Password">
            </div>

            <div class="form-group">
                <button type="button" class="btn btn-block create-account">Login</button>
            </div>
        </form>
        <div class="social-media">
            <h5></h5>
            <div class="social-icons">

            </div>
        </div>
    </div>

@endsection

