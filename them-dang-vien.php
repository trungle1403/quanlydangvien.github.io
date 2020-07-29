<?php
require_once('./header.php');
require_once('./db_connect.php');
require_once('./include/function.php');

?>
<div class="page-content">
    <section class="breadcrumb-container bg-blue">
        <h5>Thêm mới đảng viên</h5>
        <nav aria-label="Page breadcrumb">
            <ol class="breadcrumb">
                <!-- <li class="breadcrumb-item active" aria-current="page">Item 1</li> -->
                <li class="breadcrumb-item">Thêm đảng viên</li>
            </ol>
        </nav>
    </section>
    <!-- main-content -->
    <div class="main-content" style="background: #fff;">
        <!-- FORM -->
        <form action="" method="" class="them-dang-vien">
            <!-- ROW-1 -->
            <ul class="nav nav-pills" style="border-bottom: 1px solid #eee;">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#thong-tin-ca-nhan"><b>I. Thông tin cá nhân</b></a>
                </li>
                <li class="nav-item" id="tab1">
                    <a class="nav-link" data-toggle="pill" href="#qua-trinh-cong-tac"><b>II. Quá trình công tác đào tạo</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#thong-tin-chi-tiet"><b>III. Đặc điểm lịch sử, quan hệ</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#hoan-canh-kinh-te"><b>IV. Hoàn cảnh kinh tế</b></a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- THÔNG TIN CÁ NHÂN -->
                <div class="tab-pane active" id="thong-tin-ca-nhan">
                    <!-- ROW-1 -->
                    <div class="row mt-10" style="text-align: center;">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h4><b>Hoàn thành thông tin cá nhân dưới đây</b></h4>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Ảnh đại diện -->
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                            <label class="mb-10"> Ảnh đại diện:</label>
                            <div class="custom-file">
                                <input required type="file" class="custom-file-input" id="customFile" name="filehinhanh" onchange="viewSmaillImg()">
                                <label class="custom-file-label mb-20" for="customFile">Chọn ảnh</label>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-20">
                        <!-- Họ và tên -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                            <div class="form-group">
                                <label class="mb-10"><span class="tc-red">01.</span> Họ và tên đang dùng:</label>
                                <input required class="form-control" type="text" name="hotendangdung" placeholder="Nhập họ và tên đang dùng">
                            </div>
                        </div>
                        <!-- Giới tính -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                            <div class="form-group">
                                <label class="mb-10"><span class="tc-red">02.</span> Giới tính:</label>
                                <select name="gioitinh" required class="form-control">
                                    <option value="">Chọn giới tính</option>
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- END-ROW-1 -->
                    <!-- ROW-2 -->
                    <div class="row">
                        <!-- Họ và tên -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                            <div class="form-group">
                                <label class="mb-10"><span class="tc-red">03.</span> Họ và tên khai sinh:</label>
                                <input  required  class="form-control" type="text" name="hotenkhaisinh" placeholder="Nhập họ và tên đang dùng">
                            </div>
                        </div>
                        <!-- Ngày sinh -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                            <div class="form-group">
                                <label class="mb-10"><span class="tc-red">04.</span> Ngày sinh:</label>
                                <input  required class="form-control" type="date" name="ngaysinh">
                            </div>
                        </div>
                        
                    </div>
                    <!-- END-ROW-2 -->
                    <!-- ROW-3 -->
                    <div class="row">
                        <!-- Nới sinh -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="form-group">
                                <label class="mb-10"><span class="tc-red">05.</span> Nơi sinh:</label>
                                <textarea name="noisinh" required class="form-control" rows="2" placeholder="Nhập nơi sinh của bạn"></textarea>
                            </div>
                        </div>
                        <!-- Quê quán-->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="form-group">
                                <label class="mb-10"><span class="tc-red">06.</span> Quê quán:</label>
                                <textarea name="quequan" required class="form-control" rows="2" placeholder="Nhập quê quán của bạn"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- END-ROW-3 -->
                    <!-- ROW-4 -->
                    <div class="row ">
                        <!-- Nơi thường trú-->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="form-group">
                                <label class="mb-10"><span class="tc-red">07.1.</span> Nơi thường trú:</label>
                                <textarea name="noithuongtru" required class="form-control" rows="2" placeholder="Nhập nơi thường trú của bạn"></textarea>
                            </div>
                        </div>
                        <!-- Nơi tạm trú-->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="form-group">
                                <label class="mb-10"><span class="tc-red">07.2.</span> Nơi tạm trú:</label>
                                <textarea name="noitamtru" required class="form-control" rows="2" placeholder="Nhập nơi tạm trú của bạn"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- END-ROW-4 -->
                    <div class="row">
                        <!-- Dân tộc -->
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label class="mb-10"><span class="tc-red">08.</span> Dân tộc:</label>
                                <select name="dantoc" required class="form-control">
                                    <option value="">Chọn dân tộc</option>
                                    <option value="Kinh">Kinh</option>
                                    <option value="Tày">Tày</option>
                                </select>
                            </div>
                        </div>
                        <!-- Tôn giáo -->
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label class="mb-10"><span class="tc-red">09.</span> Tôn giáo:</label>
                                <select name="tongiao" required class="form-control">
                                    <option value="">Chọn tôn giáo</option>
                                    <option value="Phật giáo">Phật giáo</option>
                                    <option value="Thiên chúa">Thiên chúa</option>
                                    <option value="Không có">Không có</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!-- ROW-5 -->
                    <div class="row">
                        <!-- Thành phàn gia đình -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label class="mb-10"><span class="tc-red">10.</span> Thành phần gia đình</label>
                                <input required class="form-control" type="text" name="thanhphangiadinh" placeholder="Nhập thành phần gia đình">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Nghề nghiệp hiện nay -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label class="mb-10"><span class="tc-red">11.</span> Nghề nghiệp hiện nay:</label>
                                <input required class="form-control" type="text" name="nghenghiep" placeholder="Nghề nghiệp hiện nay">
                            </div>
                        </div>
                    </div>
                    <!-- END-ROW-5 -->
                    <!-- ROW-6 -->
                    <div class="bd-row mt-20">
                        <div class="row">
                            <!-- Ngày vào Đảng -->
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group">
                                    <label class="mb-10"><span class="tc-red">12.</span> Ngày vào Đảng:</label>
                                    <input required class="form-control" type="date" name="ngayvaodang">
                                </div>
                            </div>
                            <!-- Tại chi bộ -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                                <div class="form-group">
                                    <label class="mb-10"><span class="tc-red"></span> Tại Chi bộ:</label>
                                    <input required class="form-control" type="text" name="chibo" placeholder="Nhập Chi bộ">
                                </div>
                            </div>
                        </div>
                        <!-- ROW-7 -->
                        <div class="row">
                            <!-- Người giới thiệu thứ 1 -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="mb-10"><span class="tc-red">a.1.</span> Người giới thiệu thứ 1:</label>
                                    <input class="form-control" type="text" name="nguoi1" placeholder="Nhập người giới thiệu 1">
                                </div>
                            </div>
                            <!-- Chức vụ, đơn vị -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                                <div class="form-group">
                                    <label class="mb-10"><span class="tc-red">a.2.</span> Chức vụ, đơn vị:</label>
                                    <input class="form-control" type="text" name="chucvunguoi1" placeholder="Nhập Chức vụ, đơn vị">
                                </div>
                            </div>
                        </div>
                        <!-- ROW-8 -->
                        <div class="row">
                            <!-- Người giới thiệu thứ 2 -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="mb-10"><span class="tc-red">b.1.</span> Người giới thiệu thứ 2:</label>
                                    <input class="form-control" type="text" name="nguoi2" placeholder="Nhập người giới thiệu 2">
                                </div>
                            </div>
                            <!-- Chức vụ, đơn vị -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                                <div class="form-group">
                                    <label class="mb-10"><span class="tc-red">b.2.</span> Chức vụ, đơn vị:</label>
                                    <input class="form-control" type="text" name="chucvunguoi2" placeholder="Nhập Chức vụ, đơn vị">
                                </div>
                            </div>
                        </div>
                        <!-- ROW-9 -->
                        <div class="row">
                            <!-- Ngày có thẩm quyền ra quyết định kết nạp -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="mb-10"><span class="tc-red">c.1.</span> Ngày có thẩm quyền ra quyết định kết nạp:</label>
                                    <input required class="form-control" type="date" name="ngayquyetdinh">
                                </div>
                            </div>
                            <!-- Ngày chính thức -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="mb-10"><span class="tc-red">c.2.</span> Ngày chính thức:</label>
                                    <input required class="form-control" type="date" name="ngaychinhthuc">
                                </div>
                            </div>
                        </div>
                        <!-- ROW-10 -->
                        <div class="row">
                            <!-- Tại chi bộ -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label class="mb-10"><span class="tc-red">c.3.</span> Tại Chi bộ:</label>
                                    <input required class="form-control" type="text" name="chibochinhthuc" placeholder="Nhập Chi bộ">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ROW-11 -->
                    <div class="row" style="margin-top: 20px;">
                        <!-- Ngày được tuyển dụng -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                            <div class="form-group">
                                <label class="mb-10"><span class="tc-red">13.1.</span> Ngày được tuyển dụng:</label>
                                <input class="form-control" type="date" name="ngaytuyendung">
                            </div>
                        </div>
                        <!-- Cơ quan tuyển dụng -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                            <div class="form-group">
                                <label class="mb-10"><span class="tc-red">13.2.</span> Cơ quan tuyển dụng:</label>
                                <input class="form-control" type="text" name="coquantuyendung" placeholder="Nhập Cơ quan tuyển dụng">
                            </div>
                        </div>
                    </div>
                    <!-- ROW-12 -->
                    <div class="row">
                        <!-- Ngày vào đoàn TNCS HCM -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                            <div class="form-group">
                                <label class="mb-10"><span class="tc-red">14.</span> Ngày vào Đoàn TNCS Hồ Chí Minh:</label>
                                <input required class="form-control" type="date" name="ngayvaodoan">
                            </div>
                        </div>
                    </div>
                    <!-- ROW-13 -->
                    <div class="row">
                        <!-- Tham gia các tổ chức xã hộ khác -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label class="mb-10"><span class="tc-red">15.</span> Tham gia các tổ chức xã hộ khác:</label>
                                <textarea class="form-control" rows="2" name="tochucxahoi" placeholder="Nhập tham gia các tổ chức xã hộ khác"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- END-ROW-13 -->
                    <!-- ROW-14 -->
                    <div class="row">
                        <!-- Ngày nhập ngũ -->
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                            <div class="form-group">
                                <label class="mb-10"><span class="tc-red">16.1.</span> Ngày nhập ngũ:</label>
                                <input class="form-control" type="date" name="ngaynhapngu">
                            </div>
                        </div>
                        <!-- Ngày xuất ngũ -->
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                            <div class="form-group">
                                <label class="mb-10"><span class="tc-red">16.2.</span> Ngày xuất ngũ, chuyển ngành:</label>
                                <input class="form-control" type="date" name="ngayxuatngu">
                            </div>
                        </div>
                    </div>
                    <!-- ROW-16 -->
                    <div class="bd-row mb-10">
                        <div class="row">
                            <!-- Trình độ hiện nay -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <label class="mb-10"><span class="tc-red">17.</span> Trình độ hiện nay:</label>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="mb-10">- Giáo dục phổ thông:</label>
                                    <input class="form-control" type="text" name="trinhdophothong" placeholder="Nhập trình độ phổ thông VD: 12/12...">
                                </div>
                            </div>
                            <!-- Giáo dục nghề nghiệp -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="mb-10">- Giáo dục nghề nghiệp:</label>
                                    <input class="form-control" type="text" name="trinhdonghenghiep" placeholder="Nhập nghề nghiệp VD: Nghề Điện...">
                                </div>
                            </div>
                            <!-- Giáo dục đại học và sau đại học -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="mb-10">- Giáo dục đại học và sau đại học:</label>
                                    <input class="form-control" type="text" name="trinhdodaihoc" placeholder="Nhập Giáo dục đại học và sau đại họ">
                                </div>
                            </div>
                            <!-- Học vị -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="mb-10">- Học vị:</label>
                                    <input class="form-control" type="text" name="hocvi" placeholder="Nhập Học vị">
                                </div>
                            </div>
                            <!-- Học hàm -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="mb-10">- Học hàm:</label>
                                    <input class="form-control" type="text" name="hocham" placeholder="Nhập Học hàm">
                                </div>
                            </div>
                            <!-- Lý luận chính trị -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="mb-10">- Lý luận chính trị:</label>
                                    <input class="form-control" type="text" name="lyluanchinhtri" placeholder="Nhập Lý luận chính trị">
                                </div>
                            </div>
                            <!-- Ngoại ngữ -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="mb-10">- Ngoại ngữ:</label>
                                    <input class="form-control" type="text" name="ngoaingu" placeholder="Nhập Ngoại ngữ">
                                </div>
                            </div>
                            <!-- Tin học -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="mb-10">- Tin học:</label>
                                    <input class="form-control" type="text" name="tinhoc" placeholder="Nhập Tin học">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END-ROW-16 -->
                    <!-- ROW-17 -->
                    <div class="bd-row mt-20">
                        <div class="row">
                            <!-- Tình trạng sức khoẻ -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="mb-10"><span class="tc-red">18.</span> Tình trạng sức khoẻ:</label>
                                    <input class="form-control" type="text" name="suckhoe" placeholder="Nhập Tình trạng sức khoẻ">
                                </div>
                            </div>
                            <!-- Thương binh loại -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="mb-10">- Thương binh loại:</label>
                                    <input class="form-control" type="text" name="thuongbinhloai" placeholder="Nhập Thương binh loại">
                                </div>
                            </div>
                            <!-- Gia đình liệt sĩ -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group mb-10" style="display:flex;align-items:center">
                                    <label>- Gia đình liệt sĩ: </label>
                                    <input name="giadinhlietsi" value="Gia đình liệt sĩ" class="ml-20" type="checkbox">
                                </div>
                            </div>
                            <!-- Gia đình có công với cách mạng -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group mb-10" style="display:flex;align-items:center">
                                    <label>- Gia đình có công với cách mạng: </label>
                                    <input name="giadinhcocong" value="Gia đình có công với cách mạng" class="ml-20" type="checkbox">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END-ROW-17 -->
                    <!-- ROW-18 -->
                    <div class="row mt-20">
                        <!-- Số CMND -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="form-group">
                                <label class="mb-10"><span class="tc-red">19.</span> Số CMND hoặc số căn cước:</label>
                                <input required class="form-control" type="number" name="cmnd" placeholder="Nhập Số CMND hoặc số căn cước">
                            </div>
                        </div>
                         <!-- Được miễn công tác và SHĐ ngày -->
                         <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                            <div class="form-group">
                                <label class="mb-10"><span class="tc-red">20.</span> Được miễn công tác và SHĐ ngày:</label>
                                <input class="form-control" type="date" name="ngaymiencongtac" placeholder="Nhập Được miễn công tác và SHĐ ngày">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-10" style="text-align: center;">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <b>Hết, còn 3 phần!</b>
                        </div>
                    </div>
                    <!-- END-THÔNG TIN CÁ NHÂN -->
                </div>
                <!-- II. QUÁ TRÌNH CÔNG TÁC ĐÀO TẠO -->
                <div class="tab-pane fade" id="qua-trinh-cong-tac">
                    <!-- ROW-TITLE -->
                    <div class="row mt-10" style="text-align: center;">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h4> <b>Hoàn thành các thông tin sau:</b></h4>
                        </div>
                    </div>
                    
                    
                    <!-- ROW-17 -->
                    <div class="bd-row">
                        <div class="row" id="form-hd-ct">
                            <!-- Tóm tắt quá trình hoạt động và công tác -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label><span class="tc-red">21.</span> Tóm tắt quá trình hoạt động và công tác:</label>
                                </div>
                            </div>
                            <!-- Các sự kiện thời gian -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                                    <label class="mb-10"><span class="tc-red">a.</span> Thời gian bắt đầu:</label>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                                    <label class="mb-10"><span class="tc-red">b.</span> Thời gian kết thúc:</label>
                            </div>
                            <!-- Các sự kiện hoạt động -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                    <label class="mb-10"><span class="tc-red">c.</span> Làm gì, chức vụ, đơn vị công tác:</label>
                            </div>
                            <!-- feild -->
                             <!-- Thời gian bắt đầu -->
                             <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                                <div class="form-group">
                                    <input class="form-control mb-10" type="month" name="tghoatdongbatdau[]" placeholder="Thời gian bắt đầu">
                                </div>
                            </div>
                            <!-- Thời gian kết thúc -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                                <div class="form-group">
                                    <input class="form-control mb-10" type="month" name="tghoatdongketthuc[]" placeholder="Thời gian kết thúc">
                                </div>
                            </div>
                            <!-- Các sự kiện hoạt động feild-->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <textarea  class="form-control mb-10" type="text" rows="2" name="motacongtac[]" placeholder="Làm gì, chức vụ, đơn vị công tác"></textarea>
                                </div>
                            </div>
                        </div>
                       <!-- Button - sinh feild -->
                       <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-10">
                                <a href="javascript:void(0)" id="add-hd-ct" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Thêm quá trình hoạt động khác</a>
                            </div>
                        </div>
                    </div>
                    <!-- END-ROW-17 -->
                    <!-- ROW-18 -->
                    <div class="bd-row mt-20">
                        <!-- Đào tạo, bồi dưỡng về chuyên môn, nghiệp vụ, lý luận chính trị, ngoại ngữ -->
                        <div class="row" id="form-dt-bd">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label >
                                        <span class="tc-red">22.</span>
                                        Đào tạo, bồi dưỡng về chuyên môn, nghiệp vụ, lý luận chính trị, ngoại ngữ:
                                    </label>
                                </div>
                            </div>
                    <!-- END-ROW-18 -->
                            <!-- Tên trường -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="mb-10"><span class="tc-red">a.</span> Tên trường:</label>
                                    <input  class="form-control mb-10" type="text" name="tentruong[]" placeholder="Tên trường">
                                    </div>
                            </div>
                            <!-- Thời gian bắt đầu -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                                <div class="form-group">
                                    <label class="mb-10"><span class="tc-red">b.</span> Thời gian bắt đầu:</label>
                                    <input  class="form-control mb-10" type="month" name="tghocbatdau[]" placeholder="Thời gian bắt đầu">
                                </div>
                            </div>
                            <!-- Thời gian két thúc-->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                                <div class="form-group">
                                    <label class="mb-10"><span class="tc-red">c.</span> Thời gian kết thúc:</label>
                                    <input  class="form-control mb-10" type="month" name="tghocketthuc[]" placeholder="Thời gian kết thúc">
                                </div>
                            </div>
                            <!-- Ngành học hoặc tên lớp học -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                                <div class="form-group">
                                    <label class="mb-10"><span class="tc-red">d.</span> Ngành học hoặc tên lớp học:</label>
                                    <input  class="form-control " type="text" name="nganhhoc[]" placeholder="Ngành học hoặc tên lớp học">
                                </div>
                            </div>
                            <!-- Hình thức học -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">
                                <div class="form-group">
                                    <label class="mb-10"><span class="tc-red">e.</span> Hình thức học:</label>
                                    <input  class="form-control" type="text" name="hinhthuchoc[]" placeholder="Hình thức học">
                                </div>
                            </div>
                            <!-- Văn bản, chứng chỉ -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 mb-10">
                                <label class="mb-10"><span class="tc-red">f.</span> Văn bản, chứng chỉ:</label>
                                <input  class="form-control" type="text" name="chungchi[]" placeholder="Văn bản, chứng chỉ">
                            </div>
                             <!--END - FEILD NHẬP DỮ LIỆU -->
                        </div>
                        <!-- Button - sinh feild -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-10">
                                <a href="javascript:void(0)" id="add-dt-bd" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Thêm quá trình đào tạo khác</a>
                            </div>
                        </div>
                    </div>
                    <!-- END-ROW-18 -->
                    <!-- ROW-19 -->
                    <div class="row mt-20">
                        <!-- Khen thưởng  -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label class="mb-10"><span class="tc-red">23.</span> Khen thưởng (huân chương, huy chương, bằng khen):</label>
                                <textarea  class="form-control" rows="2" name="khenthuong" placeholder="Nhập Khen thưởng"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- END-ROW-19 -->
                    <!-- ROW-20 -->
                    <div class="row">
                        <!-- Huy hiệu -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label><span class="tc-red">24.</span> Đã được tặng huy hiệu Đảng:</label>
                            </div>
                        </div>
                    </div>
                    <div class="bd-row">
                        <!-- Năm -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="display: flex;flex-wrap:wrap">
                            <div class="form-group mb-10 mr-20" style="display:flex;align-items:center">
                                <label>30 năm</label>
                                <input name="30nam" value="30 năm" class="ml-10" type="checkbox">
                            </div>
                            <div class="form-group mb-10 mr-20" style="display:flex;align-items:center">
                                <label>40 năm </label>
                                <input name="40nam" value="40 năm" class="ml-10" type="checkbox">
                            </div>
                            <div class="form-group mb-10 mr-20" style="display:flex;align-items:center">
                                <label>45 năm </label>
                                <input name="45nam" value="45 năm" class="ml-10" type="checkbox">
                            </div>
                            <div class="form-group mb-10 mr-20" style="display:flex;align-items:center">
                                <label>50 năm </label>
                                <input name="50nam" value="50 năm" class="ml-10" type="checkbox">
                            </div>
                            <div class="form-group mb-10 mr-20" style="display:flex;align-items:center">
                                <label>55 năm </label>
                                <input name="55nam" value="55 năm" class="ml-10" type="checkbox">
                            </div>
                            <div class="form-group mb-10 mr-20" style="display:flex;align-items:center">
                                <label>60 năm </label>
                                <input name="60nam" value="60 năm" class="ml-10" type="checkbox">
                            </div>
                            <div class="form-group mb-10 mr-20" style="display:flex;align-items:center">
                                <label>65 năm </label>
                                <input name="65nam" value="65 năm" class="ml-10" type="checkbox">
                            </div>
                            <div class="form-group mb-10 mr-20" style="display:flex;align-items:center">
                                <label>70 năm </label>
                                <input name="70nam" value="70 năm" class="ml-10" type="checkbox">
                            </div>
                            <div class="form-group mb-10 mr-20" style="display:flex;align-items:center">
                                <label>75 năm </label>
                                <input name="75nam" value="75 năm" class="ml-10" type="checkbox">
                            </div>
                            <div class="form-group mb-10 mr-20" style="display:flex;align-items:center">
                                <label>80 năm </label>
                                <input name="80nam" value="80 năm" class="ml-10" type="checkbox">
                            </div>
                            <div class="form-group mb-10 mr-20" style="display:flex;align-items:center">
                                <label>85 năm </label>
                                <input name="85nam" value="85 năm" class="ml-10" type="checkbox">
                            </div>
                            <div class="form-group mb-10 mr-20" style="display:flex;align-items:center">
                                <label>90 năm </label>
                                <input name="90nam" value="90 năm" class="ml-10" type="checkbox">
                            </div>
                        </div>
                    </div>
                    <!-- END-ROW-20 -->
                    <!-- ROW-21 -->
                    <div class="row mt-20">
                        <!--Danh hiệu được phong  -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label class="mb-10"><span class="tc-red">25.</span>
                                    Danh hiệu được phong (chiến sĩ thi đua, anh hùng "LL vũ trang, lao động, nhà báo, nghệ sĩ, thầy thuốc "nhân dân ưu tú"):
                                </label>
                                <textarea  class="form-control" rows="2" name="danhhieu" placeholder="Nhập danh hiệu được phong"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- END-ROW-21 -->
                    <!-- ROW-22 -->
                    <div class="row">
                        <!--Kỷ luật  -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label class="mb-10"><span class="tc-red">26.</span> Kỷ luật (Đảng, chính quyền, pháp luật):</label>
                                <textarea  class="form-control" rows="2" name="kyluat" placeholder="Nhập kỷ luật (nếu có)"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- END-ROW-22 -->
                    <div class="row mt-10" style="text-align: center;">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <b>Hết, còn 2 phần!.</b>
                        </div>
                    </div>
                </div>
                <!-- END-QUÁ TRÌNH CÔNG TÁC ĐÀO TẠO -->
                <!-- ĐẶC ĐIỂM LỊCH SỬ BẢN THÂN -->
                <div class="tab-pane fade" id="thong-tin-chi-tiet">
                    <!-- ROW-TITLE -->
                    <div class="row mt-10" style="text-align: center;">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h4><b>Hoàn thành các thông tin sau:</b></h4>
                        </div>
                    </div>
                    <!-- ROW-23 -->
                    <div class="row mt-10">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <label class="mb-10"><span class="tc-red">27.</span> ĐẶC ĐIỂM LỊCH SỬ BẢN THÂN</label>
                        </div>
                    </div>
                    <!-- END-ROW-23 -->
                    <div class="bd-row mt-10">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <label class="mb-10"><span class="tc-red">a.</span> Bị xoá tên trong danh sách đảng viên:</label>
                            </div>
                            <!-- Ngày xoá tên -->
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group ml-10">
                                    <label class="mb-10">Thời gian:</label>
                                    <input class="form-control" type="date" name="ngayxoaten">
                                </div>
                            </div>
                            <!-- Tại chi bộ -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                                <div class="form-group ml-10">
                                    <label class="mb-10"> Tại Chi bộ:</label>
                                    <input class="form-control" type="text" name="chibolucxoaten" placeholder="Nhập Chi bộ">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ROW-24 -->
                    <div class="bd-row mt-20">
                        <div class="row">
                            <!-- Được kết nạp lại vào Đảng -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <label class="mb-10"><span class="tc-red">b.</span> Được kết nạp lại vào Đảng:</label>
                            </div>
                            <!-- Ngày vào Đảng lần thứ 2 -->
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group ml-10">
                                    <label class="mb-10">- Ngày vào Đảng lần thứ 2:</label>
                                    <input class="form-control" type="date" name="ngayketnaplai">
                                </div>
                            </div>
                            <!-- Tại chi bộ -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                                <div class="form-group ml-10">
                                    <label class="mb-10"> Tại Chi bộ:</label>
                                    <input class="form-control" type="text" name="chiboketnaplai" placeholder="Nhập Chi bộ">
                                </div>
                            </div>
                            <!-- Người giới thiệu thứ 1 -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                <div class="form-group ml-10">
                                    <label class="mb-10">Người giới thiệu 1:</label>
                                    <input class="form-control" type="text" name="nguoigtlai1" placeholder="Nhập người giới thiệu 2">
                                </div>
                            </div>
                            <!-- Chức vụ, đơn vị -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                                <div class="form-group ml-10">
                                    <label class="mb-10">Chức vụ, đơn vị:</label>
                                    <input class="form-control" type="text" name="chucvunguoigtlai1" placeholder="Nhập chức vụ, đơn vị">
                                </div>
                            </div>
                            <!-- Người giới thiệu thứ 2 -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                <div class="form-group ml-10">
                                    <label class="mb-10">Người giới thiệu 2:</label>
                                    <input class="form-control" type="text" name="nguoigioithieulai2" placeholder="Nhập người giới thiệu 2">
                                </div>
                            </div>
                            <!-- Chức vụ, đơn vị -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                                <div class="form-group ml-10">
                                    <label class="mb-10">Chức vụ, đơn vị:</label>
                                    <input class="form-control" type="text" name="chucvunguoigtlai2" placeholder="Nhập chức vụ, đơn vị">
                                </div>
                            </div>
                             <!-- Ngày chính thức lần thứ 2 -->
                             <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group ml-10">
                                    <label class="mb-10">- Ngày chính thức lần thứ 2:</label>
                                    <input class="form-control" type="date" name="ngaychinhthucketnaplai">
                                </div>
                            </div>
                            <!-- Tại chi bộ -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                                <div class="form-group ml-10">
                                    <label class="mb-10"> Tại Chi bộ:</label>
                                    <input class="form-control" type="text" name="chibochinhthucketnaplai" placeholder="Nhập chi bộ">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END-ROW-24 -->
                    <!-- ROW-25 -->
                    <div class="bd-row mt-20">
                        <div class="row">
                            <!-- Ngày được khôi phục Đảng tịch: -->
                            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                <div class="form-group ml-10">
                                    <label class="mb-10"><span class="tc-red">c.</span> Ngày được khôi phục Đảng tịch:</label>
                                    <input class="form-control" type="date" name="ngaykhoiphuc">
                                </div>
                            </div>
                            <!-- Tại chi bộ -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                                <div class="form-group ml-10">
                                    <label class="mb-10"> Tại Chi bộ:</label>
                                    <input class="form-control" type="text" name="chibokhoiphuc" placeholder="Nhập Chi bộ">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END-ROW-25 -->
                    <!-- ROW-26 -->
                    <div class="row mt-20 ">
                        <!--  Bị xử lý theo pháp luật -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label class="mb-10"><span class="tc-red">d.</span>
                                    Bị xử lý theo pháp luật (ngày, tháng, năm, bị chính quyền nào xử lý, hình thức xử lý, nơi thi hành án...):
                                </label>
                                <textarea class="form-control" rows="2" name="viphamphapluat" placeholder="Nhập chi tiết"></textarea>
                            </div>
                        </div>
                        <!-- Bản thân có làm việc trong chế độ cũ -->
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="form-group">
                                <label class="mb-10"><span class="tc-red">e.</span> Bản thân có làm việc trong chế độ cũ (ngày, tháng, năm, chức vụ, nơi làm việc...):</label>
                                <textarea class="form-control" rows="2" name="lamviectrongchedocu" placeholder="Nhập chi tiết"></textarea>
                            </div>
                        </div>
                    </div>
                    <!-- END-ROW-26 -->
                    <!-- ROW-27 -->
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <label class="mb-10"><span class="tc-red">28.</span> QUAN HỆ VỚI NƯỚC NGOÀI</label>
                        </div>
                    </div>
                    <!-- END-ROW-27 -->
                    <div class="bd-row mt-10">
                        <!-- -ROW-28 -->
                        <div class="row" id="form-qh-nn">
                            <!--  Đã đi nước ngoài -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label class="mb-10"><span class="tc-red">a.</span>
                                        Đã đi nước ngoài (Nước nào, lý do, thời gian ra nước ngoài)
                                    </label>
                                    <input placeholder="Nhập chi tiết" class="form-control" type="text" name="chitietdinuocngoai[]">
                                </div>
                            </div>
                            <!-- Tham gia hoặc có quan hệ với các tổ chức chính trị, kinh tế, xã hộ nào ở nước ngoài -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label class="mb-10"><span class="tc-red">b.</span>
                                        Tham gia hoặc có quan hệ với các tổ chức chính trị, kinh tế, xã hộ nào ở nước ngoài:</label>
                                    <input class="form-control" type="text" name="tochuconuocngoai[]" placeholder="Nhập các tổ chức đã tham gia"></input>
                                </div>
                            </div>
                            <!-- Có người thân ở nước ngoài -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label class="mb-10"><span class="tc-red">c.</span> Có người thân ở nước ngoài (Tên người, quan hệ, ở nước nào):</label>
                                    <input class="form-control" type="text" name="nguoithanonuocngoai[]" placeholder="Nhập người thân ở nước ngoài"></input>
                                </div>
                            </div>
                        </div>
                        <!-- Button - sinh feild -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-10">
                                <a href="javascript:void(0)" id="add-qh-nn" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Thêm quan hệ khác</a>
                            </div>
                        </div>
                        <!-- END-ROW-28 -->
                    </div>
                    <!-- ROW-29 -->
                    <div class="row mt-20">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <label class="mb-10"><span class="tc-red">29.</span>
                            QUAN HỆ GIA ĐÌNH (cha, mẹ đẻ, cha, mẹ vợ (chồng), vợ (chồng), các con, anh chị em ruột)</label>
                        </div>
                    </div>
                    <!-- END-ROW-29 -->
                    <div class="bd-row mt-10">
                        <!-- -ROW-30 -->
                        <div class="row" id="from-qh-gd">
                            <!-- Quan hệ -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="mb-10"><span class="tc-red">a.</span> Quan hệ:</label>
                                    <input class="form-control mb-10" type="text" name="quanhenguoithan[]" placeholder="Nhập quan hệ"></input>
                                </div>
                            </div>
                            <!-- Họ và tên -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="mb-10"><span class="tc-red">b.</span> Họ và tên:</label>
                                    <input class="form-control mb-10" type="text" name="hotennguoithan[]" placeholder="Nhập họ và tên"></input>
                                </div>
                            </div>
                            <!-- Năm sinh -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                                <div class="form-group">
                                    <label class="mb-10"><span class="tc-red">c.</span> Năm sinh:</label>
                                    <input class="form-control" type="date" name="namsinhnguoithan[]">
                                </div>
                            </div>
                            <!-- Chi tiết -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label class="mb-10"><span class="tc-red">d.</span> Quê quán, nơi ở hiện nay (trong, ngoài nước), nghệ nghiệp, chức danh, chức vụ, đơn vị công tác:</label>
                                    <textarea class="form-control mb-10" rows="2" name="chitietnguoithan[]" placeholder="Nhập quê quán, nơi ở hiện nay (trong, ngoài nước), nghệ nghiệp, chức danh, chức vụ, đơn vị công tác"></textarea>
                                </div>
                            </div>
                        </div>
                        <!-- Button - sinh feild -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-10">
                                <a href="javascript:void(0)" id="add-qh-gd" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Thêm quan hệ khác</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-20" style="text-align: center;">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <b>Hết, còn 1 phần nữa!</b>
                        </div>
                    </div>
                </div>
                <!-- END -ĐẶC ĐIỂM LỊCH SỬ CỦA BẢN THÂN -->
                <!-- HOÀN CẢNH KINH TẾ -->
                <div class="tab-pane fade" id="hoan-canh-kinh-te">
                    <!-- ROW-TITLE -->
                    <div class="row mt-10" style="text-align: center;">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <h4><b>Hoàn thành các thông tin sau:</b></h4>
                        </div>
                    </div>
                    <!-- ROW-31 -->
                    <div class="row mt-10">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <label class="mb-10"><span class="tc-red">30.</span> HOÀN CẢNH KINH TẾ CỦA BẢN THÂN VÀ GIA ĐÌNH</label>
                        </div>
                    </div>
                    <!-- END-ROW-31 -->
                    <div class="bd-row mt-10">
                        <div class="row">
                            <!-- Tổng thu nhập của hộ gia đình -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group ">
                                    <label class="mb-10">- Tổng thu nhập của hộ gia đình (trong 1 năm) đơn vị đồng:</label>
                                    <input class="form-control" type="number" name="tongthunhap" placeholder="Nhập tổng thu nhập của hộ gia đình (trong 1 năm) đơn vị đồng">
                                </div>
                            </div>
                            <!-- Bình quân 1 người/hộ -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="mb-10">- Bình quân 1 người/hộ:</label>
                                    <input class="form-control" type="number" name="thunhapbinhquan" placeholder="Nhập bình quân 1 người/hộ (đồng)">
                                </div>
                            </div>
                            <!-- Nhà ở-->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <label class="mb-10">- Nhà ở:</label>
                            </div>
                            <!-- Được cấp, được thuê, loại nhà-->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group ml-10">
                                    <label class="mb-10">+ Được cấp, được thuê, loại nhà:</label>
                                    <input class="form-control" type="text" name="nhaduoccap" placeholder="Được cấp, được thuê, loại nhà">
                                </div>
                            </div>
                            <!-- Tổng diện tích sử dụng-->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group ml-10">
                                    <label class="mb-10">+ Tổng diện tích sử dụng m<sup>2</sup>:</label>
                                    <input class="form-control" type="number" name="dientichnhaduoccap" placeholder="Nhập tổng diện tích sử dụng">
                                </div>
                            </div>
                            <!-- Nhà tự mua, tự xây, loại nhà -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group ml-10">
                                    <label class="mb-10">+ Nhà tự mua, tự xây, loại nhà:</label>
                                    <input class="form-control" type="text" name="nhatumua" placeholder="Nhà tự mua, tự xây, loại nhà">
                                </div>
                            </div>
                            <!-- Tổng diện tích sử dụng -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group ml-10">
                                    <label class="mb-10">+ Tổng diện tích sử dụng m<sup>2</sup>:</label>
                                    <input class="form-control" type="number" name="dientichnhatumua" placeholder="Nhập tổng diện tích sử dụng">
                                </div>
                            </div>
                            <!-- Đất ở -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <label class="mb-10">- Đất ở:</label>
                            </div>
                            <!-- Đất được cấp -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group ml-10">
                                    <label class="mb-10">+ Đất được cấp:<sup>2</sup>:</label>
                                    <input class="form-control" type="number" name="datduoccap" placeholder="Nhập diện tích đất được cấp">
                                </div>
                            </div>
                            <!-- Đất tự mua -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group ml-10">
                                    <label class="mb-10">+ Đất tự mua:<sup>2</sup>:</label>
                                    <input class="form-control" type="number" name="dattumua" placeholder="Nhập diện tích đất tự mua">
                                </div>
                            </div>
                            <!-- Hoạt động kinh tế -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label class="mb-10">- Hoạt động kinh tế:</label>
                                    <input class="form-control" type="text" name="hoatdongkinhte" placeholder="Hoạt động kinh tế">
                                </div>
                            </div>
                            <!-- Diện tích đất kinh doanh trang trại ha -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="mb-10">- Diện tích đất kinh doanh trang trại (ha):</label>
                                    <input class="form-control" type="number" name="dientichdatkd" placeholder="Nhập diện tích đất kinh doanh trang trại đơn vị (ha)">
                                </div>
                            </div>
                            <!-- Số lao động thuê mướn (người) -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <label class="mb-10">- Số lao động thuê mướn (người):</label>
                                    <input class="form-control" type="number" name="sllaodong" placeholder="Nhập số lao động thuê mướn (người)">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="form-tai-san">
                            <!-- Những tài sản có giá trị (50 triệu đồng trở lên) -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <label class="mb-10">- Những tài sản có giá trị (50 triệu đồng trở lên):</label>
                            </div>
                            <!-- Tài sản -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <label class="mb-10">+ Tài sản:</label>
                            </div>
                            <!-- Giá trị -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <label class="mb-10">+ Giá trị (đồng):</label>
                            </div>
                            <!-- FEILD NHẬP -->
                            <!-- Tài sản -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="taisan[]" placeholder="Nhập tên tài sản">
                                </div>
                            </div>
                            <!-- Giá trị -->
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="form-group">
                                    <input class="form-control" type="number" name="giatritaisan[]" placeholder="Nhập giá trị (đồng)">
                                </div>
                            </div>
                        </div>
                        <!-- Button - sinh feild -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-10">
                                <a href="javascript:void(0)" id="add-tai-san" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Thêm tài sản khác</a>
                            </div>
                        </div>
                    </div>
                    <!-- Xác nhận thêm -->
                    <div class="row mt-20" style="text-align: center;">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <button type="submit" name="" class="btn btn-danger">Lưu thông tin</button>
                        </div>
                    </div>
                </div>
                <!-- END- HOÀN CẢNH KINH TẾ -->
            </div>
        </form>
        <!-- END FROM -->
    </div>
</div>
<?php
require_once('./footer.php');
?>