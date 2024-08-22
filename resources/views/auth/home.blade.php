@extends('nav.header')
@section('title', 'Home')
@section('content')

<style>
    .main-banner {
        background-color: #d4f4d4;
        padding: 20px;
        margin-top:10px;
        margin-bottom: 30px;
    }
    .main-banner img {
        max-width: 100%;
        height: auto;
    }
    .step-container {
            margin-bottom: 30px;
            margin-top: 25px;
        }
        .step-img {
            max-width: 100%;
            height: auto;
        }
        /* Alternating layout */
        .step-odd {
            padding-right: 0;
        }
        .step-even {
            padding-left: 0;
        }
    .support-section {
        background-color: #f4f4f4;
        padding: 20px;
        margin-top:10px;
        border-radius: 8px;
    }
    .support-section img {
        max-width: 100%;
        height: auto;
    }
    /* FAQ CSS */
    .faq-section ul {
        list-style-type: none;
        padding: 0;
    }

    .faq-section li {
        margin-bottom: 15px;
        cursor: pointer;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #fff;
        position: relative;
    }

    .faq-section .answer {
        display: none; /* Ẩn câu trả lời mặc định */
        padding: 10px;
        border-top: 1px solid #ddd;
        margin-top: 10px;
    }

    .faq-section .toggle-icon {
        position: absolute;
        right: 10px;
        top: 10px;
        font-size: 16px;
        color: #555;
        transition: transform 0.3s ease;
    }

    .faq-section .toggle-icon.open {
        transform: rotate(180deg);
    }
</style>

<!-- Main Banner Section -->
<div class="container main-banner">
    <div class="row">
        <div class="col-md-8">
            <h2>Trạm Sạc Điện Thông Minh – Tiện Lợi Cho Khách Hàng, Cơ Hội Cho Nhà Đầu Tư</h2>
            <p>Chào mừng đến với hệ thống trạm sạc điện thông minh của chúng tôi, nơi mang đến giải pháp sạc tiện lợi và hiệu quả cho người dùng, đồng thời mở ra cơ hội đầu tư hấp dẫn cho các nhà đầu tư. Khám phá ngay dịch vụ và tiềm năng phát triển cùng chúng tôi!</p>
            <a href="#" class="btn btn-success">Đăng Ký Ngay</a>
        </div>
        <div class="col-md-4">
            <img src="../images/he-thong-tram-sac.jpg" alt="Charging Station">
        </div>
    </div>
</div>

<!-- Steps Section -->
<div class="container steps">
        <h3 class="text-center">Hướng Dẫn Sử Dụng</h3>
        
        <div class="row step-container">
            <div class="col-md-6 step-odd text-left">
                <h4>Bước 1:</h4>
                <p>Tải app: <a href="https://tramsac.vn/">nhấn vào đây để tải </a></p>
            </div>
            <div class="col-md-6">
                <img src="../images/tram-sac-2.jpg" class="step-img" alt="Step 1">
            </div>
        </div>
        
        <div class="row step-container">
            <div class="col-md-6 order-md-2 step-even ">
                <h4>Bước 2:</h4>
                <p>Đăng Ký</p>
            </div>
            <div class="col-md-6 order-md-1">
                <img src="../images/tram-sac-5.jpg" class="step-img" alt="Step 2">
            </div>
        </div>
        
        <div class="row step-container">
            <div class="col-md-6 step-odd text-right">
                <h4>Bước 3:</h4>
                <p>Đăng Nhập</p>
            </div>
            <div class="col-md-6">
                <img src="../images/tram-sac-7.jpg" class="step-img" alt="Step 3">
            </div>
        </div>
        
        <div class="text-center">
            <a href="#" class="btn btn-success">Tải App Ngay</a>
        </div>
    </div>

<!-- Support Section -->
<div class="container support-section">
    <h3 class="text-center">Hỗ Trợ Tư Vấn</h3>
    <div class="row">
        <div class="col-md-6">
            <img src="../images/unnamed.jpg" alt="Support">
        </div>
        <div class="col-md-6">
            <form>
                <div class="form-group">
                    <label for="name">Họ Tên</label>
                    <input type="text" class="form-control" id="name" placeholder="Nhập họ tên của bạn">
                </div>
                <div class="form-group">
                    <label for="phone">Số Điện Thoại</label>
                    <input type="text" class="form-control" id="phone" placeholder="Nhập số điện thoại của bạn">
                </div>
                <div class="form-group">
                    <label for="customerType">Loại Khách Hàng</label>
                    <select class="form-control" id="customerType">
                        <option>Khách hàng</option>
                        <option>Nhà đầu tư</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Gửi Yêu Cầu</button>
            </form>
        </div>
    </div>
</div>

<!-- FAQ Section -->
<div class="container faq-section">
    <h3 class="text-center mb-4">Giải Đáp Thắc Mắc</h3>
    <div class="row">
        <div class="col-md-6">
            <h4 class="text-center">Người Dùng</h4>
            <ul>
                <li>
                    Trạm sạc điện có hỗ trợ các loại xe điện nào?
                    <span class="toggle-icon">▼</span>
                    <div class="answer">Trạm sạc của chúng tôi hỗ trợ nhiều loại xe điện khác nhau bao gồm xe máy điện, ô tô điện, và các phương tiện khác. Vui lòng kiểm tra danh sách chi tiết trên trang web của chúng tôi.</div>
                </li>
                <li>
                    Thời gian để sạc đầy pin là bao lâu?
                    <span class="toggle-icon">▼</span>
                    <div class="answer">Thời gian sạc đầy phụ thuộc vào loại phương tiện và dung lượng pin. Trung bình, việc sạc đầy có thể mất từ 30 phút đến 4 giờ.</div>
                </li>
                <li>
                    Tính năng an toàn của trạm sạc điện như thế nào?
                    <span class="toggle-icon">▼</span>
                    <div class="answer">Trạm sạc của chúng tôi được trang bị các tính năng an toàn như bảo vệ quá tải, bảo vệ ngắn mạch và hệ thống giám sát liên tục để đảm bảo an toàn trong quá trình sạc.</div>
                </li>
                <!-- Các câu hỏi khác -->
            </ul>
        </div>
        <div class="col-md-6">
            <h4 class="text-center">Đối Tác</h4>
            <ul>
                <li>
                    Thị trường tiềm năng cho dịch vụ sạc điện là như thế nào?
                    <span class="toggle-icon">▼</span>
                    <div class="answer">Thị trường dịch vụ sạc điện đang phát triển nhanh chóng với nhu cầu ngày càng cao từ người dùng và các nhà đầu tư, đặc biệt là trong các khu vực đô thị lớn.</div>
                </li>
                <li>
                    Lợi ích khi đầu tư vào trạm sạc điện là gì?
                    <span class="toggle-icon">▼</span>
                    <div class="answer">Đầu tư vào trạm sạc điện mang lại lợi ích lâu dài như doanh thu ổn định từ phí sử dụng, sự hỗ trợ từ chính phủ và tiềm năng tăng trưởng trong tương lai.</div>
                </li>
                <!-- Các câu hỏi khác -->
            </ul>
        </div>
    </div>
</div>

<!-- Partner Benefits Section -->
<div class="container partner-benefits-section my-5">
    <h4 class="text-center">Lợi Ích Của Khách Hàng Và Đối Tác Khi Sử Dụng</h4>
    <!-- Content for this section can be added as needed -->
</div>

<!-- Partners Section -->
<div class="container partners-section mb-5">
    <h4 class="text-center">Đối Tác Của Chúng Tôi</h4>
    <!-- Content for this section can be added as needed -->
</div>

<!-- Map Section -->
<div class="container map-section text-center">
    <iframe src="your-google-map-embed-url" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const faqItems = document.querySelectorAll('.faq-section li');

        faqItems.forEach(item => {
            item.addEventListener('click', function () {
                const answer = this.querySelector('.answer');
                const toggleIcon = this.querySelector('.toggle-icon');

                // Đóng tất cả các câu trả lời khác
                document.querySelectorAll('.faq-section .answer').forEach(a => {
                    if (a !== answer) {
                        a.style.display = 'none';
                    }
                });

                // Chuyển đổi hiển thị của câu trả lời hiện tại
                if (answer.style.display === 'block') {
                    answer.style.display = 'none';
                    toggleIcon.classList.remove('open');
                } else {
                    answer.style.display = 'block';
                    toggleIcon.classList.add('open');
                }
            });
        });
    });
</script>

@endsection
