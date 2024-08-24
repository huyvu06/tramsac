@extends('nav.header')

@section('title', 'sign')

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
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            display: flex;
            width: 800px;
            overflow: hidden;
        }
        .form-container {
            flex: 1;
            padding: 40px;
        }
        h1 {
            font-size: 32px;
            margin-bottom: 30px;
            color: #333;
            padding-left: 100px;
        }
        .form-group {
            margin-bottom: 20px;
            position: relative;
        }
        .form-group input {
            width: 95%;
            padding: 10px 0;
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
        .form-group .toggle-password {
            right: 0px;
            top: 12px;
            cursor: pointer;
        }
        .checkbox-group {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        input{
          margin-left: 20px;
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
        .image-container {
            flex: 1;
            text-align: center;
            padding: 20px 40px 0 40px; /* Adjusted padding to give 40px margin */
        }
        .image-container img {
            width: 100%;
            border-radius: 10px;
        }
        .login-link {
            text-align: center;
            margin-top: 10px;
            font-size: 14px;
            color: #666;
        }
        .login-link a {
            color: #7cb9e8;
            text-decoration: none;
        }
</style>

<div class="container">
        <div class="form-container">
            <h1>Sign up</h1>
            <form>
                <div class="form-group">
                    <i class="fas fa-user"></i>
                    <input type="text" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <i class="fas fa-envelope"></i>
                    <input type="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" placeholder="Password" required>
                    <i class="fas fa-eye toggle-password" onclick="togglePassword()"></i>
                </div>
                <div class="form-group">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="repeat-password" placeholder="Repeat your password" required>
                    <i class="fas fa-eye toggle-password "  onclick="togglePassword('repeat-password')"></i>
                </div>
                <div class="checkbox-group">
                    <input type="checkbox" id="terms" required>
                    <label for="terms">I agree all statements in <a href="#">Terms of service</a></label>
                </div>
                <button type="submit">Register</button>
            </form>
        </div>
        <div class="image-container">
            <img src="{{asset('images/register.jpg')}}" alt="Sign up image">
            <div class="login-link">
                <a href="#">I am already member</a>
            </div>
        </div>
    </div>
    <script>
        function togglePassword(id = 'password') {
            const passwordField = document.getElementById(id);
            const toggleIcon = passwordField.nextElementSibling;
            const type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;
            toggleIcon.classList.toggle('fa-eye-slash');
        }
    </script>
@endsection
