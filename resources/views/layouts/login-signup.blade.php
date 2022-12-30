<?php

$logged_user = session()->get('logged_user');
$username = session()->get('username');
$roles = session()->get('role');

?>

<!-- STYLESHEET -->
<link rel="stylesheet" href="{{ asset('css/login-signup.css') }}">

<!-- Loading square for squar.red network -->
<span class="loader"><span class="loader-inner"></span></span>

<div class="cont">
    <form action="user_login" method="post"></form>
        <div class="form sign-in">
            <h2>Welcome back,</h2>
            <label>
                <span>Email</span>
                <input type="email" />
            </label>
            <label>
                <span>Password</span>
                <input type="password" />
            </label>
            <p class="forgot-pass">Forgot password?</p>
            <button type="button" class="submit">Sign In</button>
        </div>
    </form>
    <div class="sub-cont">
        <div class="img">
            <div class="img__text m--up">
                <h2>New here?</h2>
                <p>Sign up and discover great amount of new opportunities!</p>
            </div>
            <div class="img__text m--in">
                <h2>One of us?</h2>
                <p>If you already has an account, just sign in. We've missed you!</p>
            </div>
            <div class="img__btn">
                <span class="m--up">Sign Up</span>
                <span class="m--in">Sign In</span>
            </div>
        </div>
        <form action="user_register" method="post"></form>
            <div class="form sign-up">
                <h2>Be one of the communities,</h2>
                <label>
                    <span>Name</span>
                    <input type="text" />
                </label>
                <label>
                    <span>Email</span>
                    <input type="email" />
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" />
                </label>
                <button type="button" class="submit">Sign Up</button>
            </div>
        </form>
    </div>
</div>

<script src="{{ asset('js/login-signup.js') }}"></script>
