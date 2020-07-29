// CÚ PHÁP JQUERY
$(document).ready(function () {
    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $('.btn-close-menu').toggleClass('action');
    });
});
// JAVASCRIPT
// ADMIN-SETTING
// DESK_TOP
document.getElementById("btn-admin").onclick = function () {
    document.getElementById("popup-admin").classList.toggle("show-popup");
    document.getElementById("btn-admin").classList.toggle("admin-active");
}

// BACK-TO-TOP
$(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        //thực hiện lệnh điều kiện Khi lăn chuột xuống dưới hơn 00px
        $('.back-to-top').fadeIn(); //Xuất hiện nút
    } else {
        $('.back-to-top').fadeOut(); //Ẩn nút
    }
});
$('.back-to-top').click(function () {
    $("html, body").animate({
        scrollTop: 0
    }, 0); //Animation giúp hoạt ảnh scroll ngược lên đầu trang sẽ mượt hơn
    return false;
});

// HIỂN THỊ TÊN FILE
$(".custom-file-input").on("change", function () {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});

// HIỂN THỊ ẢNH
function viewSmaillImg() {
    var fileInput = document.getElementById('customFile');
    var filePath = fileInput.value;//lấy giá trị input theo id
    if (fileInput.files && fileInput.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            document.getElementById('showSmallImg').innerHTML = '<img style="width:180px;" src="' + e.target.result + '"/>';
        };
        reader.readAsDataURL(fileInput.files[0]);
    }
}

// SINH LỆNH HOẠT ĐỘNG CÔNG TÁC
$(document).ready(function () {
    // hàm đếm số lượng text field đang có trên màn hình
    function countItem() {
        var items = $("#form-hd-ct").children().length;
        return items;
    }
    // thêm text field, giới hạn chỉ có tối đa 10 cái
    $("#add-hd-ct").click(function () {
        var n = countItem();
        if (n == 43) {
            alert("Cho phép tối đa 10");
        } else {
            n++;
            $("#form-hd-ct").append(
                '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">' +
                    '<div class="form-group">' +
                        '<input class="form-control mb-10" type="month" name="tghoatdongbatdau[]" placeholder="Thời gian bắt đầu">' +
                    '</div>' +
                '</div>' +

                '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">' +
                    '<div class="form-group">' +
                        '<input class="form-control mb-10" type="month" name="tghoatdongketthuc[]" placeholder="Thời gian kết thúc">' +
                    '</div>' +
                '</div>' +

                '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">' +
                    '<div class="form-group">' +
                        '<textarea class="form-control mb-10" type="text" rows="2" name="motacongtac[]" placeholder="Làm gì, chức vụ, đơn vị công tác"></textarea>' +
                    '</div>' +
                '</div');
        }
    });
});
// SINH LỆNH ĐÀO TẠO BỒI DƯỠNG
$(document).ready(function () {
    // hàm đếm số lượng text field đang có trên màn hình
    function countItem() {
        var items = $("#form-dt-bd").children().length;
        return items;
    }
    // thêm text field, giới hạn chỉ có tối đa 10 cái
    $("#add-dt-bd").click(function () {
        var n = countItem();
        if (n == 43) {
            alert("Cho phép tối đa 10");
        } else {
            n++;
            $("#form-dt-bd").append(
                '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">' +
                    '<div class="form-group">' +
                        '<span class="badge badge-danger">New</span>' +
                    '</div>' +
                '</div>' +

                '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">' +
                    '<div class="form-group">' +
                        '<label class="mb-10"><span class="tc-red">a.</span> Tên trường:</label>' +
                        '<input class="form-control mb-10" type="text" name="tentruong[]" placeholder="Tên trường">' +
                    '</div>' +
                '</div>' +

                '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">' +
                    '<div class="form-group">' +
                        '<label class="mb-10"><span class="tc-red">b.</span> Thời gian bắt đầu:</label>' +
                        '<input class="form-control mb-10" type="month" name="tghocbatdau[]" placeholder="Thời gian bắt đầu">' +
                    '</div>' +
                '</div>' +

                '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">' +
                    '<div class="form-group">' +
                        '<label class="mb-10"><span class="tc-red">c.</span> Thời gian kết thúc:</label>' +
                        '<input class="form-control mb-10" type="month" name="tghocketthuc[]" placeholder="Thời gian kết thúc">' +
                    '</div>' +
                '</div>' +

                '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">' +
                    '<div class="form-group">' +
                        '<label class="mb-10"><span class="tc-red">d.</span> Ngành học hoặc tên lớp học:</label>' +
                        '<input class="form-control " type="text" name="nganhhoc[]" placeholder="Ngành học hoặc tên lớp học">' +
                    '</div>' +
                '</div>' +

                '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3">' +
                    '<div class="form-group">' +
                        '<label class="mb-10"><span class="tc-red">e.</span> Hình thức học:</label>' +
                        '<input class="form-control" type="text" name="hinhthuchoc[]" placeholder="Hình thức học">' +
                    '</div>' +
                '</div>' +

                '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 mb-10">' +
                    '<label class="mb-10"><span class="tc-red">f.</span> Văn bản, chứng chỉ:</label>' +
                    '<input class="form-control" type="text" name="chungchi[]" placeholder="Văn bản, chứng chỉ">' +
                '</div>');
        }
    });
});

// SINH FEILD QUAN HỆ NƯỚC NGOÀI
$(document).ready(function () {
    // hàm đếm số lượng text field đang có trên màn hình
    function countItem() {
        var items = $("#form-qh-nn").children().length;
        return items;
    }
    // thêm text field, giới hạn chỉ có tối đa 10 cái
    $("#add-qh-nn").click(function () {
        var n = countItem();
        if (n == 84) {
            alert("Cho phép tối đa 20");
        } else {
            n++;
            $("#form-qh-nn").append(
                '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">' +
                    '<div class="form-group">' +
                        '<span class="badge badge-danger">New</span>' +
                    '</div>' +
                '</div>' +

                ' <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">' +
                    '<div class="form-group">' +
                        '<label class="mb-10"><span class="tc-red">a.</span> Đã đi nước ngoài (Nước nào, lý do, ngày ra nước ngoài):</label>' +
                        '<input class="form-control" type="text" name="chitietdinuocngoai[]" placeholder="Nhập chi tiết"></input>' +
                    '</div>' +
                '</div>' +
                
                '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">' +
                    '<div class="form-group">' +
                        '<label class="mb-10"><span class="tc-red">b.</span>' +
                        'Tham gia hoặc có quan hệ với các tổ chức chính trị, kinh tế, xã hộ nào ở nước này:</label>' +
                        '<input class="form-control" type="text" name="tochuconuocngoai[]" placeholder="Nhập các tổ chức đã tham gia"></input>' +
                    '</div>' +
                '</div>' +

                '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">' +
                    '<div class="form-group">' +
                        '<label class="mb-10"><span class="tc-red">c.</span> Có người thân ở nước ngoài (Tên người, quan hệ, ở nước nào):</label>' +
                        '<input class="form-control" type="text" name="nguoithanonuocngoai[]" placeholder="Nhập tên người, quan hệ, ở nước nào"></input>' +
                    '</div>' +
                '</div>');
        }
    });
});
// SINH FEILD QUAN HỆ GIA ĐÌNH
$(document).ready(function () {
    // hàm đếm số lượng text field đang có trên màn hình
    function countItem() {
        var items = $("#from-qh-gd").children().length;
        return items;
    }
    // thêm text field, giới hạn chỉ có tối đa 10 cái
    $("#add-qh-gd").click(function () {
        var n = countItem();
        if (n == 84) {
            alert("Cho phép tối đa 20");
        } else {
            n++;
            $("#from-qh-gd").append(
                '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">' +
                    '<div class="form-group">' +
                        '<span class="badge badge-danger">New</span>' +
                    '</div>' +
                '</div>' +

                '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">' +
                    '<div class="form-group">' +
                        '<label class="mb-10"><span class="tc-red">a.</span> Quan hệ:</label>' +
                        '<input class="form-control mb-10" type="text" name="quanhenguoithan[]" placeholder="Nhập quan hệ"></input>' +
                    '</div>' +
                '</div>' +

                '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">' +
                    '<div class="form-group">' +
                        '<label class="mb-10"><span class="tc-red">b.</span> Họ và tên:</label>' +
                        '<input class="form-control mb-10" type="text" name="hotennguoithan[]" placeholder="Nhập họ và tên"></input>' +
                    '</div>' +
                '</div>' +

                '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">' +
                    '<div class="form-group">' +
                        '<label class="mb-10"><span class="tc-red">c.</span> Năm sinh:</label>' +
                        '<input class="form-control" type="date" name="namsinhnguoithan[]">' +
                    '</div>' +
                '</div>' +

                '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">' +
                    '<div class="form-group">' +
                        '<label class="mb-10"><span class="tc-red">d.</span> Quê quán, nơi ở hiện nay (trong, ngoài nước), nghệ nghiệp, chức danh, chức vụ, đơn vị công tác:</label>' +
                        ' <textarea class="form-control mb-10" rows="2" name="chitietnguoithan[]" placeholder="Nhập quê quán, nơi ở hiện nay (trong, ngoài nước), nghệ nghiệp, chức danh, chức vụ, đơn vị công tác"></textarea>' +
                    '</div>' +
                '</div>'

            );
        }
    });
});

// SINH FEILD TÀI SẢN
$(document).ready(function () {
    // hàm đếm số lượng text field đang có trên màn hình
    function countItem() {
        var items = $("#form-tai-san").children().length;
        return items;
    }
    // thêm text field, giới hạn chỉ có tối đa 10 cái
    $("#add-tai-san").click(function () {
        var n = countItem();
        if (n == 29) {
            alert("Cho phép tối đa 10");
        } else {
            n++;
            $("#form-tai-san").append(
                '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">' +
                    '<div class="form-group">' +
                        '<input class="form-control" type="text" name="taisan[]" placeholder="Nhập tên tài sản">' +
                    '</div>' +
                '</div>' +

                '<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">' +
                    '<div class="form-group">' +
                        '<input class="form-control" type="number" name="giatritaisan[]" placeholder="Nhập giá trị (đồng)">' +
                    '</div>' +
                '</div>');
        }
    });
});