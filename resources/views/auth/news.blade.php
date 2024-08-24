@extends('nav.header')
@section('title', 'News')
@section('content')
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }

    .main-content {
        max-width: 1200px;
        margin: auto;
        overflow: hidden;
    }

    .top-section {
        position: relative;
        color: white;
        text-align: left;
    }

    .date-box {
        position: absolute;
        top: 10px;
        left: 10px;
        background-color: #3498db;
        padding: 10px;
        font-size: 18px;
        text-align: center;
        line-height: 1.2;
        font-weight: bold;
        color: white;
    }

    .background-image {
        width: 100%;
        height: auto;
        display: block;
    }

    .overlay {
        position: absolute;
        bottom: 20px;
        left: 20px;
        right: 20px;
        background-color: rgba(0, 0, 0, 0.5);
        padding: 20px;
    }

    .overlay h2 {
        margin: 0;
        font-size: 24px;
    }

    .overlay p {
        margin: 10px 0;
    }

    .continue-button {
        display: inline-block;
        padding: 10px 20px;
        color: white;
        background-color: #3498db;
        text-decoration: none;
        font-weight: bold;
        margin-top: 10px;
    }

    .bottom-section {
        display: flex;
        justify-content: space-between;
        padding: 20px;
        background-color: white;
    }

    .post {
        display: flex;
        width: 60%;
        background-color: #f9f9f9;
        padding: 10px;
        border-radius: 8px;
        margin-right: 20px;
    }

    .date-box-small {
        background-color: #3498db;
        padding: 5px;
        font-size: 14px;
        font-weight: bold;
        text-align: center;
        margin-right: 10px;
        color: white;
    }

    .post-image {
        width: 80px;
        height: 80px;
        margin-right: 10px;
        border-radius: 4px;
    }

    .post-details h3 {
        margin: 0;
        font-size: 18px;
    }

    .recent-posts {
        width: 30%;
    }

    .recent-posts h3 {
        font-size: 20px;
        margin-bottom: 10px;
    }

    .recent-posts ul {
        list-style-type: none;
        padding: 0;
    }

    .recent-posts ul li {
        margin-bottom: 10px;
    }

    .recent-posts ul li a {
        text-decoration: none;
        color: #3498db;
    }

    .recent-posts ul li a:hover {
        text-decoration: underline;
    }
</style>
<div class="main-content">
    <div class="top-section">
        <div class="date-box">18<br>Th7</div>
        <img src="image.png" alt="Hyundai Car" class="background-image">
        <div class="overlay">
            <h2>Hyundai dừng phân phối dòng xe Kona tại Việt Nam</h2>
            <p>Theo thông tin từ Hyundai, nhà máy tại Việt Nam đang gặp vấn đề về [...]</p>
            <a href="#" class="continue-button">CONTINUE READING →</a>
        </div>
    </div>

    <div class="bottom-section">
        <div class="post">
            <div class="date-box-small">18<br>Th7</div>
            <img src="charging.png" alt="Charging Station" class="post-image">
            <div class="post-details">
                <h3>VinFast tham dự EVS35 – Ra mắt VF 8 và VF 9 tại Châu Âu</h3>
                <p>Hội nghị và Triển lãm Xe điện Quốc Tế là sự kiện nổi tiếng và [...]</p>
            </div>
        </div>
        <div class="recent-posts">
            <h3>Bài viết mới</h3>
            <ul>
                <li><a href="#">VinFast tham dự EVS35 – Ra mắt VF 8 và VF 9 tại Châu Âu</a></li>
                <li><a href="#">Hyundai dừng phân phối dòng xe Kona tại Việt Nam</a></li>
            </ul>
        </div>
    </div>
</div>
@endsection