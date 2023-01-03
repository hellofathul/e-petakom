<?php

$logged_user = session()->get('logged_user');
$username = session()->get('username');
$roles = session()->get('role');

?>

<!-- STYLESHEET -->
<link rel="stylesheet" href="{{ asset('css/login-signup.css') }}">
<link rel="stylesheet" href="{{ asset('css/animation-login.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/fontawesome.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
<!--Hey! This is the original version
of Simple CSS Waves-->

<div class="header">

    <!--Content before waves-->
    <div class="inner-header flex"></div>

    <!--Waves Container-->
    <div>
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
        </svg>
    </div>
    <!--Waves end-->

</div>
<!--Header ends-->

<!--Content starts-->
@if ($errors->any())
    <p class="alert alert-danger">Please check your input</p>
@endif

<div class="container" id="container">

    <!--SIGN UP FORM STARTS -->
    <div class="form-container sign-up-container">
        <form action={{ route('user-register') }} method="POST">
            @csrf
            <h1>Create Account</h1>
            <div class="social-container">
                <a href="{{ url('auth/facebook') }}" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your email for registration</span>
            <div class="dropdown-role">
                <label for="role">Select Role:</label>
                <select name="role" id="role" class="form-control">
                    <option value="Student">Student</option>
                    <option value="Lecturer">Lecturer</option>
                    <option value="Committee">Committee</option>
                </select>
            </div>
            <input id="username" placeholder="Username" type="username" name="username" />
            
            <input id="email" placeholder="Email" type="email" name="email"/>
            
            <input id="password" placeholder="Password" type="password" name="password"/>
            
            <input id="phone" placeholder="Mobile No" type="phone" name="phone"/>
            
            <button>Sign Up</button>
        </form>
    </div>

    <div class="form-container sign-in-container">
        <form action="{{ route('user-login') }}" method="POST">
            <h1>Sign in</h1>
            <div class="social-container">
                <a href="{{ url('auth/facebook') }}" class="social"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <span>or use your account</span>
            <input id="username" type="username" placeholder="Username" name="username" value="{{ old('username') }}" />
            @error('username')
                <span style="float: right;color: red">{{ $message }}</span>
            @enderror
            <input id="password" type="password" placeholder="Password" name="password">
            @error('password')
                <span style="float: right;color: red">{{ $message }}</span>
                <br>
            @enderror
            <a href="#">Forgot your password?</a>
            <button>Sign In</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
                <p>To keep connected with us please login with your personal info</p>
                <button class="ghost" id="signIn">Sign In</button>
            </div>
            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p>Enter your personal details and start journey with us</p>
                <button class="ghost" id="signUp">Sign Up</button>
            </div>
        </div>
    </div>
</div>

<!-- JAVASCRIPT -->
<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
    crossorigin="anonymous"></script>
<script src="{{ asset('js/login-signup.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
