<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home')</title> <!-- Hiển thị tiêu đề động -->
    <!-- Include Bootstrap CSS -->
    <!-- <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sign.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('css/network_system.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user_manual.css') }}" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
       
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


.container {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.form-container {
    width: 100%;
    max-width: 500px; /* Giảm kích thước của form */
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    background: #fff; /* Thay đổi nền thành trắng để nổi bật hơn */
}

.form-container h1 {
    margin-bottom: 20px;
    font-size: 10px; /* Giảm kích thước tiêu đề */
    text-align: center;
}

.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

.form-group textarea {
    resize: vertical;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
}

button:hover {
    background-color: #0056b3;
}

    </style>
</head>

<body>
<div class="container">
        <form class="form-container">
            <h1>Đối Tác Chiến Lược</h1>
            <div class="form-group">
                <label for="name">Họ Và Tên(*):</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="phone">Số Điện Thoại(*):</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="email">Email(*):</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="name_tramsac">Tên Trạm Sạc(*):</label>
                <input type="text" id="name_tramsac" name="name_tramsac" required>
            </div>
            <div class="form-group">
                <label for="content">Nội Dung:</label>
                <input type="text" id="content" name="content">
            </div>
            <div class="form-group">
                <label for="map">Kinh Độ & Vĩ Độ:</label>
                <input type="text" id="map" name="map">
            </div>
            <div class="form-group">
                <label for="address">Địa chỉ:</label>
                <textarea id="address" name="address" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Gửi</button>
        </form>
    </div>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>