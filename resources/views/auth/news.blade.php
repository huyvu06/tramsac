@extends('nav.header')
@section('title', 'News')
@section('content')
    <style>
        /* Giới hạn chiều cao của hình ảnh trong carousel */
        .carousel-inner img {
            max-height: 400px;
            /* Điều chỉnh giá trị này tùy theo nhu cầu của bạn */
            object-fit: cover;
            /* Giữ tỷ lệ khung hình của ảnh và cắt phần thừa nếu cần */
        }
    </style>
    <div id="newsCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../images/tram-sac-12.jpg" class="d-block w-100" alt="Image 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>VinFast tham dự EVS35 – Ra mắt VF 8 và VF 9 tại Châu Âu</h5>
                    <p>Hội nghị và Triển lãm Xe điện Quốc Tế là sự kiện nổi tiếng và...</p>
                    <a href="#" class="btn btn-light">Continue Reading</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../images/tram-sac-11.jpg" class="d-block w-100" alt="Image 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Hyundai dừng phân phối dòng xe Kona tại Việt Nam</h5>
                    <p>Theo thông tin từ Hyundai, nhà máy tại Việt Nam đang gặp vấn đề về...</p>
                    <a href="#" class="btn btn-light">Continue Reading</a>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#newsCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#newsCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Main Content Section -->
    <div class="container mt-4">
        <div class="row">
            <!-- News List -->
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <img src="../images/tram-sac-2.jpg" class="card-img-top" alt="News Image 1">
                            <div class="card-body">
                                <h5 class="card-title"><a href="./details">VinFast tham dự EVS35</a></h5>
                                <p class="card-text">Ra mắt VF 8 và VF 9 tại Châu Âu.</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <img src="../images/tram-sac-5.jpg" class="card-img-top" alt="News Image 2">
                            <div class="card-body">
                                <h5 class="card-title">Hyundai dừng phân phối dòng xe Kona</h5>
                                <p class="card-text">Theo thông tin từ Hyundai, nhà máy tại Việt Nam đang gặp vấn đề về...
                                </p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Posts Sidebar -->
            <div class="col-md-4">
                <h5>Bài viết mới</h5>
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="#">VinFast tham dự EVS35 – Ra mắt VF 8 và VF 9 tại Châu Âu</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">Hyundai dừng phân phối dòng xe Kona tại Việt Nam</a>
                    </li>
                    <li class="list-group-item">
                        <a href="#">Chào tất cả mọi người!</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
