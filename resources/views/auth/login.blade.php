@extends('nav.header')
@section('title', 'Login')
@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f8f8;
        margin: 0;
        padding: 0;
    }

    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .login-form-container {
        background-color: white;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 600px;
    }

    .form-group {
        margin-bottom: 25px;
        position: relative;
    }

    label {
        font-weight: bold;
        margin-bottom: 18px;
        font-size: 18px;
    }

    .required {
        color: red;
    }

    input[type="text"],
    input[type="password"] {
        width: 100%;
        padding: 15px;
        font-size: 15px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    input[type="checkbox"] {
        margin-right: 5px;
    }

    .toggle-password {
        position: absolute;
        right: 15px;
        top: 45px;
        cursor: pointer;
        user-select: none;
        color: #777;
        font-size: 20px;
    }

    .submit-button {
        background-color: #7ed321;
        color: white;
        padding: 15px 0;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 18px;
        width: 150px;
        float: right;
    }

    .submit-button:hover {
        background-color: #6cb51f;
    }

    .forgot-password,
    .register-link {
        font-size: 16px;
        color: #555;
        text-decoration: none;
        display: block;
        margin-top: 10px;
    }

    .forgot-password:hover,
    .register-link:hover {
        text-decoration: underline;
    }
</style>

<div class="container">
    <div class="login-form-container">
        <form class="login-form">
            <div class="form-group">
                <label for="username">Username or Email <span class="required">*</span></label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password <span class="required">*</span></label>
                <input type="password" id="password" name="password" required>
                <span class="material-icons toggle-password" onclick="togglePasswordVisibility()">visibility</span>
            </div>
            <div class="form-group">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember Me</label>
            </div>
            <div class="form-group">
                <a href="#" class="forgot-password">Lost your password?</a>
            </div>
            <div class="form-group">
                <a href="#" class="register-link">Not a member yet? Register now.</a>
            </div>
            <button type="submit" class="submit-button">LOGIN</button>
        </form>
    </div>
</div>

<script>
    function togglePasswordVisibility() {
        const passwordField = document.getElementById('password');
        const toggleIcon = document.querySelector('.toggle-password');
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            toggleIcon.textContent = 'visibility_off';
        } else {
            passwordField.type = 'password';
            toggleIcon.textContent = 'visibility';
        }
    }
</script>
@endsection
