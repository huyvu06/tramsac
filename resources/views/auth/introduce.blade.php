@extends('nav.header')
@section('title', 'Introduce')
@section('content')

<style>
    .header-image {
    background-image: url('../images/tram-sac-8.jpg');
    background-size: cover; /* Thay đổi từ cover thành contain nếu bạn muốn giữ nguyên tỷ lệ ảnh */
    background-position: center;
    background-repeat: no-repeat; /* Đảm bảo ảnh không bị lặp */
    height: 500px;
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    position: relative;
}
    .header-image h1 {
        font-size: 3rem;
        font-weight: bold;
        margin-bottom: 20px;
    }
    .content-overlay {
        position: absolute;
        bottom: 0;
        width: 100%;
        background: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
        color: white;
        padding: 20px;
    }
    .principles {
        background-color: #0be7f1;
        color: red;
        text-align: center;
        padding: 20px;
        margin-top: -20px;
    }
    .principles h2 {
        margin-bottom: 0;
    }
    .map {
        background-color: #8ff76e;
        padding: 20px;
        
        text-align: center;
    }
    .map iframe {
        width: 50%;
        height: 300px;
        border: none;
    }
    footer {
        background-color: black;
        color: white;
        padding: 10px;
        text-align: center;
    }
</style>

<!-- Header Section with Content Overlay -->
<div class="header-image">
    <h1>GIỚI THIỆU VỀ TRẠM SẠC</h1>
    <div class="content-overlay">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>Chúng tôi chuyên sửa chữa và bảo hành các dòng xe như: Audi, Acura, BMW, Porsche, Landrover Jaguar, Rolls-Royce, Bentley... Với đội ngũ kỹ thuật viên chuyên nghiệp cùng trang thiết bị hiện đại VIỆN AUTO là trung tâm sửa chữa ô tô uy tín được nhiều khách hàng biết đến trên cả nước.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Principles Section -->
<div class="principles">
    <h2>5 TIÊU CHÍ VÀNG</h2>
    <p>INNOVATION - SUSTAINABLE - AGILITY - INTEGRITY - UNITY</p>
    <p>SÁNG TẠO - BỀN VỮNG - LINH HOẠT - LIÊM CHÍNH - ĐOÀN KẾT</p>
</div>

<!-- Map Section -->
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.4226764426547!2d106.69305671480025!3d10.775653692321214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752929258a7b0d%3A0xf472d71e62b36261!2sTo%C3%A0%20nh%C3%A0%20V%C4%83n%20ph%C3%B2ng%20Symphony%20Office%20Building!5e0!3m2!1svi!2s!4v1598412023327!5m2!1svi!2s"></iframe>
</div>

<!-- Footer Section -->
<footer>
    <p>Copyright 2024 © Trạm Sạc</p>
</footer>

@endsection
