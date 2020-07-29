<!DOCTYPE html>
<html>

<head>
    <title>Quản lý đảng viên</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- BOOSTRAP -->
    <link rel="stylesheet" href="./bootstrap-4.5.0-dist/css/bootstrap.min.css">
    <!-- GOOGLE FONTS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="./style/style.css">
    <link rel="stylesheet" type="text/css" href="./style/responsive.css">
</head>
<body>
    <div class="wrapper">
        <div class="header-container mb-10">
            <div class="header-left">
                <h1><a href="#">VLUTE</a></h1>
            </div>
            <div class="header-center">
                <h4>Trường đại học sư phạm kỹ thuật vĩnh long</h4>
                <h6>Vinh Long University Of Technology Education</h6>
            </div>
            <div class="header-right">
            <?php 
            // if(empty($_SESSION["admin"])) { ?>
                <!-- <a href="#" class="btn-login">Đăng nhập</a> -->
            <?php //} else { ?>
                <div class="logined">
                    <a href="#" id="btn-admin"><i class="fas fa-angle-down"></i> Admin</a>
                    <div class="admin-box" id="popup-admin">
                        <div class="admin-info">
                            <img src="./image/admin-ui.png" alt="">
                            <h5>Admin</h5>
                            <p>Số tài khoản: <b>000123</b></p>
                            <p>Ngày tạo: <b>01/02/2020</b></p>
                        </div>
                        <div class="admin-action">
                            <a href="#" class="logout"><i class="fas fa-sign-out-alt"></i> Đăng xuất</a>
                            <a href="#" class="change-pass"><i class="fas fa-exchange-alt"></i> Đổi mật khẩu</a>
                        </div>
                    </div>
                </div>
            <?php //} ?>
            </div>
        </div>
        <!-- "wrap-content -->
        <div class="wrap-content">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header"  >
                    <?php if (isset($admin)) { ?>
                        <span id="btn-admin-mobile" ><img width="40px" src="./image/admin-ui.png" alt=""></span>
                        <h4>ADMIN</h4>
                    <?php } else { ?>
                        <a href="login.qldv.vlute.php"><img style="margin-left: 5px;" width="35px" src="./image/user.png" alt=""></a>
                        <h5 class="account"><a href="login.qldv.vlute.php" title="Đăng nhập"><b>ĐĂNG<span style="color:#fff">.</span>NHẬP</b></a></h5>
                    <?php } ?>
                </div>
                <ul class="list-unstyled">
                    <li id="admin-box-mobile">
                        <a href="">Logout</a>
                        <a href="">Đổi MK</a>
                    </li>
                    <li>
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="fas fa-home"></i>
                            <span>TRANG CHỦ</span>
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="#">Thống kê</a></li>
                            <li><a href="#">Báo cáo</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="ds-dang-vien.php">
                            <i class="fas fa-user-tie"></i>
                            <span>Danh sách đảng viên</span>
                        </a>
                    </li>
                    <li>
                        <a href="them-dang-vien.php">
                            <i class="fas fa-user-plus"></i>
                            <span>Thêm đảng viên</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse">
                            <i class="fas fa-print"></i>
                            <span>In hồ sơ</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse">
                            <i class="fas fa-tools"></i>
                            <span>Cấu hình hệ thống</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="collapse">
                            <i class="fas fa-user-cog"></i>
                            <span>Thông tin admin</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- Page Content Holder -->
            <div id="content">
                <div class="header-content">
                    <div class="btn-close-menu" id="sidebarCollapse">
                        <p></p>
                    </div>
                    <div class="header-menu">
                        <ul>
                            <li><a href="">Trang chủ</a></li>
                            <li><a href="ds-dang-vien.php">Đảng viên</a></li>
                            <li><a href="them-dang-vien.php">Thêm đảng viên</a></li>
                            <li><a href="">In hồ sơ</a></li>
                        </ul>
                    </div>
                    <div class="title">
                        <h4>HỆ THỐNG QUẢN LÝ ĐẢNG VIÊN</h4>
                    </div>
                    <div class="title-mobile">
                        <h4>VLUTE</h4>
                    </div>
                    <div class="setting">
                        <a href="#"><i class="fas fa-cogs"></i></a>
                    </div>
                </div>
<!-- dont move -->
<style>
    #admin-box-mobile {
        display: none;
        height: 0;
        overflow: hidden;
    }
    .show-popup-mb {
        height: auto !important;
    }
</style>
<script>
    // Không phãi lỗi, đây là một tính năng, do chưa đăng nhập
    document.getElementById("btn-admin-mobile").onclick = function () {
    document.getElementById("admin-box-mobile").classList.toggle("show-popup-mb");
}
</script>