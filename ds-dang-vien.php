<?php
require_once('./header.php');
require_once('./db_connect.php');
$item_per_page = (!empty($_GET['per_page'])) ? $_GET['per_page'] : 2;
$current_page = (!empty($_GET['page'])) ? $_GET['page'] : 1;
$offset = ($current_page - 1) * $item_per_page;
$totalRecords = mysqli_query($conn, "SELECT * FROM doan_vien");
$totalRecords = $totalRecords->num_rows;
$totalPages = ceil($totalRecords / $item_per_page);
$sql = mysqli_query($conn, "SELECT * FROM doan_vien ORDER BY ma_dv ASC LIMIT " . $item_per_page . " OFFSET " . $offset);
?>
<div class="page-content">
    <section class="breadcrumb-container bg-blue">
        <h5>Danh sách đảng viên</h5>
        <nav aria-label="Page breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Item 1</li>
                <li class="breadcrumb-item">Danh sách đảng viên</li>
            </ol>
        </nav>
    </section>
    <!-- main-content -->
    <div class="main-content">
        <div class="row btn-them-dv-mobile">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 dl-end btn-them-dv">
                <a href="them-dang-vien.php" class="btn btn-large btn-inline-block btn-success"><i class="fas fa-plus"></i> Thêm đảng viên</a>
            </div>
        </div>
        <!-- search -->
        <form action="#" method="POST">
            <div class="row search-container mt-10">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <label><b>Tìm kiếm đảng viên:</b></label>
                    <div class="input-group mb-10 mt-10">
                        <input type="text" class="form-control" placeholder="Nhập tên, mã đảng viên, tỉnh thành phố...">
                        <div class="input-group-append">
                            <button class="btn btn-warning" type="submit" style="color: #fff">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <label><b>Năm:</b></label>
                        <select class="form-control mt-10" id="sel1">
                            <option>2019-2020</option>
                            <option>2017-2018</option>
                            <option>2018</option>
                            <option>2017</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
        <div class="row mb-10">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 mb-10 tiem-kiem-desktop">
                <span>Kết quả tìm kiếm cho:</span>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 dl-end btn-them-dv btn-them-dv-desktop">
                <a href="them-dang-vien.php" class="btn btn-large btn-inline-block btn-success"><i class="fas fa-plus"></i> Thêm đảng viên</a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 mb-10 tiem-kiem-mobile">
                <span>Kết quả tìm kiếm cho:</span>
            </div>
        </div>
        <!-- Danh sach đoàn viên -->
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="table-responsive-xl table-show-doanvien">
                    <table class="table table-hover ">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Mã Đảng viên</th>
                                <th>Tên Đảng viên</th>
                                <th>Giới tính</th>
                                <th>Địa chỉ</th>
                                <th>SĐT</th>
                                <th>Ngày cập nhật</th>
                                <th>Thao tác</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                           // $num = 0;
                            //while ($doan_vien = mysqli_fetch_array($sql)) {
                            ?>
                                <tr>
                                    <td>1</td>
                                    <td>0012</td>
                                    <td><a style="color: blue" href="#">Nguyễn Văn A</a></td>
                                    <td>Nam</td>
                                    <td>Vĩnh Long</td>
                                    <td>123456789</td>
                                    <td>12:00:00</td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-primary">Xem</a>
                                        <a href="#" class="btn btn-sm btn-warning">Sửa</a>
                                        <a href="#" class="btn btn-sm btn-danger">Xóa</a>
                                    </td>
                                </tr>
                            <?php // } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php include('./include/pagination.php') ?>
    </div>
</div>
<?php
require_once('./footer.php');
?>