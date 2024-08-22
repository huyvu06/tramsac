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

.registration-form {
    background-color: white;
    padding: 30px; /* Tăng padding để form lớn hơn */
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 700px; /* Tăng chiều rộng của form */
}

.form-row {
    display: flex;
    justify-content: space-between;
}

.form-group {
    flex: 1;
    display: flex;
    flex-direction: column;
    margin-right: 20px; /* Tăng khoảng cách giữa các trường */
}

.form-group:last-child {
    margin-right: 0;
}

label {
    font-weight: bold;
    margin-bottom: 8px; /* Tăng khoảng cách giữa label và input */
    font-size: 16px; /* Tăng kích thước chữ */
}

.required {
    color: red;
}

input[type="text"],
input[type="email"],
input[type="password"] {
    padding: 15px; /* Tăng padding cho input */
    font-size: 16px; /* Tăng kích thước chữ cho input */
    border: 1px solid #ddd;
    border-radius: 3px;
}

input[type="password"] {
    padding-right: 40px;
}

.toggle-password {
    position: relative;
    right: 40px; /* Điều chỉnh vị trí của biểu tượng */
    top: -32px;
    cursor: pointer;
    user-select: none;
    color: #777;
    font-size: 18px; /* Tăng kích thước biểu tượng */
}

.submit-button {
    background-color: #445a77;
    color: white;
    padding: 15px 30px; /* Tăng kích thước nút */
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    display: block;
    margin-left: auto; /* Đẩy nút sang bên phải */
    </style>
</head>

<body>
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

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>