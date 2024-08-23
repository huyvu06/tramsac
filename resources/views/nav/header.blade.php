<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home')</title> <!-- Hiển thị tiêu đề động -->
    <!-- Include Bootstrap CSS -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sign.css') }}" rel="stylesheet">
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/network_system.css') }}" rel="stylesheet">
    <link href="{{ asset('css/user_manual.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #a6df4c;">
        <a href="./home"><img src="../images/logo.jpg" alt="" style="width: 80px; height:80px"></a>
<<<<<<< HEAD

        <div class="collapse navbar-collapse" id="collapsibleNavId">
=======
        
        <div class="collapse navbar-collapse " id="collapsibleNavId">
>>>>>>> origin/main
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle px-5" href="#" id="dropdownId" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" style="color: #707862;"> Giới Thiệu </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#"> Về chúng tôi </a>
                        <a class="dropdown-item" href="#"> Tin tức </a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle pr-5 " href="#" id="dropdownId" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" style="color: #707862;"> Dành cho khách hàng </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="./network_system"> Hệ Thống Mạng Lưới </a>
                        <a class="dropdown-item" href="./user_manual"> Hướng Dẫn Sự Dụng Trạm Sạc </a>
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" style="color: #707862;"> Dành Cho Đối Tác </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#"> Giải Pháp Quản Lý </a>
                        <a class="dropdown-item" href="#"> Đăng Ký Trạm Sạc </a>
                    </div>
                </li>
            </ul>

            <!-- Search bar -->
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="btn btn-outline-light mr-2" href="./login" role="button">Đăng nhập</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-light" href="./sign" role="button">Đăng ký</a>
                    </li>
                </ul>
            </form>

            <!-- Register and Login buttons -->

        </div>
    </nav>

    <!-- Include Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    @yield('content')
</body>

</html>
