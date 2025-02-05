@extends('layout.account_master')

@section('content')
<!-- authorization form -->
<form action="#" class="sign__form">
    <a href="index.html" class="sign__logo">
        <img src="{{asset('assets')}}/main/img/logo.svg" alt="">
    </a>

    <div class="sign__group">
        <input type="text" class="sign__input" placeholder="Email">
    </div>

    <div class="sign__group sign__group--checkbox">
        <input id="remember" name="remember" type="checkbox" checked="checked">
        <label for="remember">I agree to the <a href="privacy.html">Privacy policy</a></label>
    </div>

    <button class="sign__btn" type="button"><span>Recover</span></button>

    <span class="sign__text">We will send a password to your Email</span>
</form>
<!-- end authorization form -->
@endsection