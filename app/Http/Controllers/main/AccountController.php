<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Models\ResetPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class AccountController extends Controller
{
    public function index()
    {
        return view('main.login');
    }

    public function signUp()
    {
        $user_model = new User();

        return view('main.signup');
    }

    public function createUser(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'firstname' => 'required|string|max:255|regex:/^[a-zA-ZÀ-Ỹà-ỹ\s]+$/',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'username' => 'required|string|max:255|unique:users',
            'password' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $first_name = $request->input('firstname');
        $last_name = $request->input('lastname');
        $email = $request->input('email');
        $username = $request->input('username');
        $password = $request->input('password');


        $user_model = new User();
        $user_model->user_id = "user" . count(User::all()) + 1;
        $user_model->user_fullname = $last_name . ' ' . $first_name;
        $user_model->email = $email;
        $user_model->username = $username;
        $user_model->password = Hash::make($password);
        $user_model->role_id = "2";
        $user_model->save();

        Auth::login($user_model);

        return redirect()->route('index');
    }

    public function signInUser(Request $request)
    {
        $username = $request->input('account');
        $password = $request->input('password');

        $filter_type = filter_var($username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $credentials = [
            $filter_type => $username,
            'password' => $password
        ];

        if (Auth::attempt($credentials)) {
            Auth::login(Auth::user());
            return redirect()->route('index');
        }
        return back()->withErrors([
            'email' => 'Cannot find your account. Please retry to login!!!',
        ]);
    }

    public function signOut()
    {
        Auth::logout();
        return redirect()->route('signinform');
    }

    public function resetPassword()
    {
        return view('main.forgot_password');
    }
    public function sendResetEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|exists:users,email',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
            ? redirect()->route('signinform')->with(['message' => "An email has been sent to your email address."])
            : back()->withErrors(['email' => "Can't send email to your email address."]);
    }

    public function updateForm($token)
    {
        $email = request()->input('email');
        return view('main.renew_password', compact('email', 'token'));
    }

    public function updatePassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255|exists:users,email',
            'token' => 'required|string',
            'password' => 'required|string',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $reset_email = ResetPassword::where(['email' => $request->input('email')])->first();

        if ($reset_email && Hash::check($request->input('token'), $reset_email->token)) {
            User::where('email', $request->input('email'))->update(['password' => Hash::make($request->input('password'))]);
        }
        return redirect()->route('signinform');
    }
}
