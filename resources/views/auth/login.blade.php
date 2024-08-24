@extends('nav.header')

@section('title', 'Login')

@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background-color: #f5f5f5;
    }

    .container {
        background-color: white;
        border-radius: 20px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        display: flex;
        width: 800px;
        overflow: hidden;
        padding: 40px;
    }

    .image-container {
        flex: 1;
        padding-right: 40px;
    }

    .image-container img {
        width: 100%;
        height: auto;
    }

    .form-container {
        flex: 1;
    }

    h1 {
        padding-left: 120px;
        font-size: 32px;
        margin-bottom: 30px;
        color: #333;
    }

    .form-group {
        margin-bottom: 20px;
        position: relative;
    }

    .form-group input {
        width: 76%;
        padding: 10px 40px 10px 40px;
        /* Padding for left and right icons */
        border: none;
        border-bottom: 1px solid #ddd;
        outline: none;
        font-size: 16px;
    }

    .form-group input::placeholder {
        color: #999;
    }

    .form-group i {
        position: absolute;
        top: 12px;
        color: #999;
    }

    .form-group .fa-user {
        left: 10px;
        /* Position icon on the left */
    }

    .form-group .fa-lock {
        left: 10px;
        /* Position icon on the left */
    }

    .form-group .fa-eye {
        right: 10px;
        /* Position eye icon on the right */
        cursor: pointer;
    }

    .checkbox-group {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .checkbox-group input {
        margin-right: 10px;
    }

    .checkbox-group label {
        font-size: 14px;
        color: #666;
    }

    button {
        background-color: #7cb9e8;
        color: white;
        border: none;
        padding: 12px 0;
        width: 100%;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }

    .create-account {
        text-align: center;
        margin-top: 20px;
        font-size: 14px;
        color: #666;
    }

    .create-account a {
        color: #333;
        text-decoration: none;
    }

    .social-login {
        margin-top: 20px;
        text-align: center;
    }

    .social-login span {
        font-size: 14px;
        color: #666;
        margin-right: 10px;
    }

    .social-icons {
        display: inline-block;
    }

    .social-icons a {
        display: inline-block;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        margin: 0 5px;
        text-align: center;
        line-height: 30px;
        color: white;
        font-size: 14px;
    }

    .facebook {
        background-color: #3b5998;
    }

    .twitter {
        background-color: #1da1f2;
    }

    .google {
        background-color: #db4437;
    }
</style>

<div class="container">
    <div class="image-container">
    <img src="{{asset('images/login.jpg')}}" alt="Person working on laptop">
    </div>
    <div class="form-container">
        <h1>Sign up</h1>
        <form>
            <div class="form-group">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Your Name" required>
            </div>
            <div class="form-group">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" placeholder="Password" required>
                <i class="fas fa-eye toggle-password" onclick="togglePassword()"></i>
            </div>
            <div class="checkbox-group">
                <input type="checkbox" id="remember" required>
                <label for="remember">Remember me</label>
            </div>
            <button type="submit">Log in</button>
        </form>
        <div class="create-account">
            <a href="#">Create an account</a>
        </div>
        <div class="social-login">
            <span>Or login with</span>
            <div class="social-icons">
                <a href="#" class="facebook">f</a>
                <a href="#" class="twitter">t</a>
                <a href="#" class="google">G</a>
            </div>
        </div>
    </div>
</div>
<script>
    function togglePassword() {
        const passwordField = document.getElementById('password');
        const toggleIcon = passwordField.nextElementSibling;
        const type = passwordField.type === 'password' ? 'text' : 'password';
        passwordField.type = type;
        toggleIcon.classList.toggle('fa-eye-slash');
    }
</script>
@endsection