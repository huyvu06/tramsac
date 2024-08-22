<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-form-container {
            background-color: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 600px;
            /* Tăng chiều rộng */
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
            /* Tăng padding để input lớn hơn */
            font-size: 8px;
            /* Tăng kích thước font chữ */
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
            /* Điều chỉnh vị trí cho phù hợp với input lớn hơn */
            cursor: pointer;
            user-select: none;
            color: #777;
            font-size: 20px;
            /* Tăng kích thước icon */
        }

        .submit-button {
            background-color: #7ed321;
            color: white;
            padding: 15px 0;
            /* Điều chỉnh padding */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 18px;
            /* Tăng kích thước chữ */
            width: 150px;
            /* Điều chỉnh chiều rộng nút */
            float: right;
            /* Đặt nút về phía bên phải */
        }

        .submit-button:hover {
            background-color: #6cb51f;
        }

        .forgot-password,
        .register-link {
            font-size: 16px;
            /* Tăng kích thước chữ */
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
</head>

<body>
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

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>