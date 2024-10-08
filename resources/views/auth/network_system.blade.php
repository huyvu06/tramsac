@extends('nav.header')

@section('title', 'Hệ thống mạng lưới')

@section('content')
    <style>
        /* Đảm bảo rằng body có khoảng cách đủ để tránh bị che khuất bởi navbar */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            /* Thêm padding-top để tạo khoảng cách cho thanh navbar */
             /* Điều chỉnh khoảng cách tùy thuộc vào chiều cao của navbar */
        }

        .container {
            margin-top:15px;
            display: flex;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
            width: 80%; /* Thêm chiều rộng cho container */
            max-width: 1200px; /* Giới hạn chiều rộng tối đa */
           
        }

        .map {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .map img {
            max-width: 100%;
            height: auto;
        }

        .form {
            flex: 1;
            padding: 20px;
        }

        .form h2 {
            margin-top: 0;
            position: relative;
            padding-bottom: 10px;
            padding-left: 80px;
        }

        .form h2::after {
            content: '';
            display: block;
            width: 100%;
            height: 2px;
            background-color: #000;
            position: absolute;
            bottom: 0;
            left: 0;
        }

        .form label {
            display: block;
            margin: 10px 0 5px;
        }

        .form input, .form select, .form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form button {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .form button:hover {
            background-color: #0056b3;
        }
    </style>

    <div class="container">
        <div class="map">
            <img src="../images/map.jpg" alt="Bản đồ Việt Nam">
        </div>
        <div class="form">
            <h2>Đăng Ký Trở Thành Đối Tác</h2>
            <form>
                <label for="name">Họ và tên:</label>
                <input type="text" id="name" name="name" required>

                <label for="phone">Số điện thoại:</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="region">Khu vực:</label>
                <select id="region" name="region">
                    <option value="north">Miền Bắc</option>
                    <option value="central">Miền Trung</option>
                    <option value="south">Miền Nam</option>
                </select>

                <button type="submit">GỬI ĐĂNG KÝ</button>
            </form>
        </div>
    </div>
@endsection
