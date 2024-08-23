@extends('nav.header')

@section('content')
<style>
    
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
@endsection
