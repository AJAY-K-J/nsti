@extends('layouts.authLayout.app')

@section('content')

    <div class="registration-form mt-5">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <h2 class="text-center mb-5 text-muted ">Candidate Login</h2>

            <div class="form-icon">
                <span><i class="fas fa-user"></i></span>
            </div>



            <div class="form-group">
                <input id="username" type="text" placeholder="Enter Your Username" class="form-control item @error('username') is-invalid @enderror" name="username"
                    value="{{ old('username') }}" required autocomplete="username" autofocus>

                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>



                <div class="form-group">
                    <input id="password" type="password" placeholder="Enter Your Password" class="form-control item @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>



                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input  " type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>


                    <div class="form-group">
                        <button type="submit" class="btn btn-block create-account">
                            {{ __('Login') }}
                        </button>
                    </div></div>

        </form>
        <div class="social-media mt-2">
            @if (Route::has('password.request'))
            <a class="btn btn-link" style="text-decoration: none" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        @endif
            <h5 class=" mt-3">Don't have an account?<a href="{{ route('register') }}" style="text-decoration: none; color:#7c818d;"><strong> Click here to Register</strong></h5></a>

    </div>
    </div>




@endsection
