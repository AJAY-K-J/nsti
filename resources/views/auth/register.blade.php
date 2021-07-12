
@extends('layouts.authLayout.app')

@section('content')

                    <div class="registration-form mt-5">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <h2 class="text-center mb-4 text-muted ">Registration</h2>
                        <div class="form-icon">
                            <span><i class="fas fa-user"></i></span>
                        </div>

                        {{--username  --}}

                            <div class="form-group">
                                <input id="username" type="text" placeholder="Enter Your Username" class="form-control item @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        {{--username end  --}}



                            <div class="form-group">
                                <input id="name" type="text" placeholder="Enter Your Fullname" class="form-control item @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                            <div class="form-group">
                                <input id="email" type="email" placeholder="Enter Your Email ID" class="form-control item @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>



                        {{--phone number  --}}

                            <div class="form-group">
                                <input id="phonenumber" type="text" placeholder="Enter Your Phone Number" class="form-control item @error('phonenumber') is-invalid @enderror" name="phonenumber" value="{{ old('phonenumber') }}" required autocomplete="phonenumber" autofocus>

                                @error('phonenumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        {{--phone number end  --}}

                            <div class="form-group">
                                <input id="password" type="password" placeholder="Enter Your Password" class="form-control item @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="form-group">
                                <input id="password-confirm" placeholder="Confirm Your Password" type="password" class="form-control item" name="password_confirmation" required autocomplete="new-password">
                            </div>


                            <div class="form-group ">
                                <button type="submit" class="btn btn-block create-account ">
                                    {{ __('Register') }}
                                </button>
                            </div>

                    </form>
                    <div class="social-media">
                        <h5>Already registered?<a href="{{ route('login') }}" style="text-decoration: none; color:#7c818d;"><strong> Click here to login.</strong></h5></a>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection

