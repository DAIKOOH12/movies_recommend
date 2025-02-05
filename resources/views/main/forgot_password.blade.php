@extends('layout.account_master')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center height-self-center vh-100">
        <div class="col-lg-5 col-md-12 align-self-center">
            <div class="user-login-card bg-body">
                <p>
                    Please enter your username or email address. You will receive a link to create a new password via email.
                </p>
                <form action="https://templates.iqonic.design/streamit-dist/frontend/html/post">
                    <div class="mb-5">
                        <label class="text-white fw-500 mb-2">Username or Email Address</label>
                        <input type="text" class="form-control rounded-0" required="">
                    </div>
                    <div class="iq-button">
                        <a href="#" class="btn text-uppercase position-relative">
                            <span class="button-text">Get new password</span>
                            <i class="fa-solid fa-play"></i>
                        </a>
                    </div>
                    <div class="seperator d-flex justify-content-center align-items-center">
                        <span class="line"></span>
                    </div>
                    <div class="iq-button">
                        <a href="{{route('signinform')}}" class="btn text-uppercase position-relative">
                            <span class="button-text">log in</span>
                            <i class="fa-solid fa-play"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection