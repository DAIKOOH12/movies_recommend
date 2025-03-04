@extends('layout.account_master')

@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center height-self-center vh-100">
        <div class="col-lg-5 col-md-12 align-self-center" style="background-color: grey !important;padding:12px">
            <div class="user-login-card bg-body">
                @if($errors->any())
                @foreach($errors->all() as $error)
                <p style="color:red;min-width:100%;margin:3px 0">*{{ $error }}</p>
                @endforeach
                @endif
                <p>
                    Input new password to recover yourr account
                </p>
                <form action="/mvr/update" method="post">
                    <div class="mb-5">
                        <label class="text-white fw-500 mb-2">Your Email</label>
                        <input type="email" class="form-control rounded-0" name="email" value="{{$email}}" readonly>
                    </div>
                    <div class="mb-5">
                        <label class="text-white fw-500 mb-2">New Password</label>
                        <input type="password" class="form-control rounded-0" name="password" required="">
                    </div>
                    <div class="mb-5">
                        <label class="text-white fw-500 mb-2">Confirm Password</label>
                        <input type="password" class="form-control rounded-0" name="re-password" required="">
                    </div>
                    @csrf
                    <input type="hidden" name="token" value="{{$token}}">
                    <div class="iq-button">
                        <button type="submit" class="btn text-uppercase position-relative">
                            <span class="button-text">Update Password</span>
                        </button>
                    </div>
                    <div class="seperator d-flex justify-content-center align-items-center"></div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection