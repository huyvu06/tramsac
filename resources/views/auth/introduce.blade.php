@extends('nav.header')
@section('title', 'Introduce')
@section('content')

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        text-align: center;
    }

    .header {
        background-image: url('your-image-url.jpg');
        /* Thay thế bằng URL hình ảnh của bạn */
        background-size: cover;
        background-position: center;
        position: relative;
        height: 400px;
        /* Chiều cao của phần header */
        color: white;
        width: 100%;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        /* Màu nền mờ */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    .header h1 {
        font-size: 48px;
        margin: 0;
    }

    .header h2 {
        font-size: 36px;
        margin: 10px 0 0;
    }

    .header p {
        font-size: 18px;
        margin-top: 20px;
        text-align: center;
    }

    .footer {
        background-color: #00bcd4;
        color: white;
        padding: 20px;
    }

    .footer h3 {
        margin: 0 0 10px;
    }

    .footer ul {
        list-style-type: none;
        padding: 0;
    }

    .footer li {
        font-size: 18px;
        margin: 5px 0;
    }
</style>
</head>

<div class="container">
    <div class="header">
        <div class="overlay">
            <h1>GIỚI THIỆU VỀ</h1>
            <h2>trạm sạc</h2>
            <p>Chương trình này sẽ giới thiệu về trạm sạc điện cho xe hơi như Audi, BMW, Porsche, Land Rover,
                Jaguar, Rolls-Royce, Tesla... Về cách thức hoạt động, lợi ích và các thông tin liên quan.</p>
        </div>
    </div>
    <div class="footer" style="margin-top: 10px;">
        <h3>5 TIÊU CHÍ VÀNG</h3>
        <ul>
            <li>INNOVATION</li>
            <li>SUSTAINABLE</li>
            <li>AGILITY</li>
            <li>INTEGRITY</li>
            <li>UNITY</li>
        </ul>
    </div>
</div>
@endsection