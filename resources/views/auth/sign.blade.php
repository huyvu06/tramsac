@extends('nav.header')

@section('title', 'sign')

@section('content')
    <style>
       /* Đảm bảo rằng body chiếm toàn bộ chiều cao của viewport */
/* Đảm bảo rằng body chiếm toàn bộ chiều cao của viewport */
body {
    font-family: Arial, sans-serif;
    background-color: #f8f8f8;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}

/* Căn giữa form trong khu vực còn lại của viewport */
.content {
    display: flex;
    justify-content: center;
    align-items: center;
    flex: 1;
    margin-top: 80px; /* Khoảng cách từ navbar xuống, điều chỉnh nếu cần */
}

/* Định dạng form */
.registration-form {
    background-color: white;
    padding: 30px;
    margin:10% 20% 0px 30%;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 700px; /* Có thể điều chỉnh kích thước của form */
    max-width: 100%; /* Đảm bảo form không vượt quá kích thước của viewport */
}

/* Định dạng hàng và nhóm trong form */
.form-row {
    display: flex;
    justify-content: space-between;
}

.form-group {
    flex: 1;
    display: flex;
    flex-direction: column;
    margin-right: 20px;
}

.form-group:last-child {
    margin-right: 0;
}

label {
    font-weight: bold;
    margin-bottom: 8px;
    font-size: 16px;
}

.required {
    color: red;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    padding: 15px;
    font-size: 16px;
    border: 1px solid #ddd;
    border-radius: 3px;
}

input[type="password"] {
    padding-right: 40px;
}

.toggle-password {
    position: relative;
    right: 40px;
    top: -32px;
    cursor: pointer;
    user-select: none;
    color: #777;
    font-size: 18px;
}

.submit-button {
    background-color: #445a77;
    color: white;
    padding: 15px 30px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    display: block;
    margin: 20px auto 0; /* Căn giữa nút */
}
    </style>
    <form class="registration-form">
        <div class="form-row">
            <div class="form-group">
                <label for="username">Username <span class="required">*</span></label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="email">User Email <span class="required">*</span></label>
                <input type="email" id="email" name="email" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="password">User Password <span class="required">*</span></label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="confirm-password">Confirm Password <span class="required">*</span></label>
                <input type="password" id="confirm-password" name="confirm-password" required>
            </div>
        </div>
        <button type="submit" class="submit-button">SUBMIT</button>
    </form>
@endsection
