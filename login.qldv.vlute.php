<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- BOOSTRAP -->
     <link rel="stylesheet" href="./bootstrap-4.5.0-dist/css/bootstrap.min.css">
    <!-- GOOGLE FONTS-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
    <script src="./bootstrap-4.5.0-dist/jquery/jquery-3.4.1.js"></script>
    <script src="./bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>
    <title>Form Login</title>
    <style>
*, h3 {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    background: #1949B5;
    height: 100vh;
}
h3 {color: #1949B5;text-shadow: 0 0 2px #c5c5c5;}
.pd-20 {padding: 10px 0 20px;}
.mt-20 {margin-top: 20px;}
.mb-10 {margin-bottom: 10px;}
.panel {display: flex; align-items: center;}
.panel h3 {font-weight: 700;margin: 5px auto 0;}
.bg-white {background: #fff;}
.container {
    max-width: 800px;
    padding: 20px;
    text-align: center;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.title {
    text-align:center; 
    border-bottom: 1.5px solid #1949B5;
    border-radius: 7px 7px 0 0;
    margin: 0 5px;
}
.main-form {border-radius: 0 0 7px 7px;margin: 0 5px;}
.img {
    display: flex;
    align-items: center;
}
img {
    display: block;
    margin: auto;
}
.nav-item a {color: #1949B5;}
.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    background: #1949B5;
    color: #fff;
}
.btn-primary {background: #1949B5;}
.vlute-logo {
   font-size: 40px;
   font-weight: 900;
}
@media screen and (max-width: 768px) {
    img {
        width: 90px;
    }
    .panel h3 { font-size: 22px;}
    .nav-item a { font-size: 12px;}
    .tab-content h3 { font-size: 20px;}
}
</style>
</head>
<body>
    <div class="container">
        <div class="row bg-white pd-20 title">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                <h3 class="vlute-logo">VLUTE</h3>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8 panel">
                <h3>HỆ THỐNG QUẢN LÝ ĐẢNG VIÊN</h3>
            </div>
        </div>
        <div class="row pd-20 bg-white main-form">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 mb-10 img">
                <img width="150px" src="./image/logo-doan.png" alt="">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-selected="true"><b>ĐĂNG NHẬP</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"  aria-selected="false"><b>ĐỔI MẬT KHẨU</b></a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active text-align form-new " id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading mt-20">ĐĂNG NHẬP HỆ THỐNG</h3>
                        <div class="row register-form mt-20">
                            <div class="col-md-12">
                                <form method="post">
                                    <div class="form-group">
                                        <input type="text" name="" class="form-control" placeholder="Nhập tài khoản"  required=""/>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="" class="form-control" placeholder="Nhập mật khẩu" required=""/>
                                    </div>
                                    <input type="submit" name="" class="btn btn-primary" value="Đăng nhập" />
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show text-align form-new" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <h3  class="register-heading mt-20">ĐỔI MẬT KHẨU</h3>
                        <div class="row register-form mt-20">
                            <div class="col-md-12">
                                <form method="post">
                                    <div class="form-group">
                                        <input type="text" name="" class="form-control" placeholder="Nhập tài khoản"  required="" />
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="" class="form-control" placeholder="Mật khẩu củ" required=""/>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="" class="form-control" placeholder="Mật khẩu mới" required=""/>
                                    </div>
                                    <input type="submit" name="" class="btn btn-danger" value="Đổi mật khẩu" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
