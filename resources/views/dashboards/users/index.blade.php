@extends('layouts.authLayout.app')

@section('content')

<div class="container-fluid ">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Welcome  {{ Auth::user()->name }}</div>


                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Please Fill Up Your Application Form')  }} {{--<h4>Welcome  {{ Auth::user()->name }}</h4>--}}
               </div>

                {{-- @livewire('application-form') --}}
<div id="userApp">
    <application-form></application-form>
</div>


            </div>
        </div>
    </div>
</div>




@endsection

