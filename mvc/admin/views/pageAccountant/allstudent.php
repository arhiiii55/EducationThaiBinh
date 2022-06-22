    <div class="content-page">

        <!-- Start content -->
        <div class="content">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="breadcrumb-holder">
                            <h1 class="main-title float-left">Học Viên</h1>

                            <!-- btn btn-primary btn-sm btn-block -->
                            <ol class="breadcrumb float-right">
                                <li class="breadcrumb-item active">Tất cả thông tin học viên</li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!-- <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Documentation</h4>
                    <ol class="breadcrumb float-right">
                        <li class="breadcrumb-item active">Tất cả thông tin Học Viên</li>

                    </ol>

                </div> -->
                <!-- end row -->

                <div class="row center-row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                        <div class="card mb-3">
                            <div class="card-header">
                                <h3><i class="fas fa-table"></i> Bảng thông tin Học viên</h3>
                                <p> Quản lý học viên gồm thông tin cơ bản của học viên và những học viên đã đăng ký khóa
                                    học
                                </p>
                                <a href="students/studentPage/<?php echo $_SESSION["id_account"] . '/' . $_SESSION["role_id"]; ?>"
                                    class="">
                                    <button class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target="#modal_add_user">
                                        <i class="fas fa-user-plus" aria-hidden="true">
                                        </i> Thêm Học Viên</button>
                                </a>
                                <!-- <li class="breadcrumb-item active">
                            </li> -->
                                <!-- <span class="pull-left">
                            </span> -->
                            </div>
                            <div class="card-body">
                                <div id="accordion" role="tablist">
                                    <?php
                                    // $i = 1;
                                    // while ($row = mysqli_fetch_array($data["class_all"])) {
                                    //     $i++;
                                    ?>
                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingTwo">
                                            <h5 class="mb-0">
                                                <a data-toggle="collapse" href="#collapseTwo" aria-expanded="true"
                                                    aria-controls="collapseTwo">
                                                    Thông tin các học viên trong học viện
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="collapseTwo" class="collapse show" role="tabpanel"
                                            aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                <div clazss="table-responsive">
                                                    <input type="search" name="search_st" class="search_st form-control"
                                                        placeholder="Nhập vào tên học viên" id="search_st">
                                                    <table id="output_search"
                                                        class="table table-bordered table-hover display"
                                                        style="width:100%">
                                                        <!-- <ul id="output_search"></ul> -->
                                                        <thead>
                                                            <tr>
                                                                <th>STT</th>
                                                                <th>Mã Học Viên</th>
                                                                <th>Hình Ảnh</th>
                                                                <th>Tên Học Viên</th>
                                                                <th>Ngày Sinh</th>
                                                                <!-- <th>Trường</th> -->
                                                                <th>Số Điện Thoại</th>
                                                                <th>Gmail</th>
                                                                <th>Trạng Thái</th>
                                                                <th style="min-width:60px;">action</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <?php
                                                            $i = 1;
                                                            while ($row1 = mysqli_fetch_assoc($data["showstudent"])) {
                                                            ?>
                                                            <tr>
                                                                <th><?php echo $row1["id_students"] ?></th>
                                                                <td><?php echo $row1["MaHV"] ?></td>
                                                                <td> <img style="width: 80px;"
                                                                        src="mvc\photo\<?php echo $row1["imgHV"] ?>"
                                                                        alt="" name="hinhanh" class="img-thumbnail">
                                                                </td>
                                                                <td> <?php echo $row1["tenhv"]; ?></td>
                                                                <td> <?php echo $row1["ngaysinh"]; ?></td>
                                                                <td><?php echo $row1["sdt"]; ?></td>
                                                                <td><?php echo $row1["gmail"]; ?></td>
                                                                <td><?php echo $row1["actived"]; ?></td>
                                                                <!-- <td>
                                                                <input type="submit" class="btn btn-primary" value="DS Học Viên">
                                                             </td> -->
                                                                <td>
                                                                    <a href="students/allstudent_edit/<?php echo $row1["id_students"] . '/' . $_SESSION["role_id"]; ?>"
                                                                        class="btn btn-primary btn-sm btn-block"><i
                                                                            class="far fa-edit"></i>
                                                                        Show</a>

                                                                    <a href="students/allstudent_delete/<?php echo $row1["id_students"]; ?>"
                                                                        class="btn 
                                                              btn-danger btn-sm btn-block mt-2"><i
                                                                            class="fas fa-trash">
                                                                        </i>
                                                                        Delete </a>
                                                                </td>
                                                            </tr>

                                                        </tbody>
                                                        <?php

                                                            } ?>
                                                        <?php
                                                    if (isset($data["deleteStudent"])) {
                                                        if ($data["deleteStudent"] == true) { ?>
                                                        <h4 class="alert alert-success">
                                                            <?php echo 'xóa thành công'; ?>
                                                        </h4>
                                                        <?php  } else { ?>
                                                        <h4 class="alert alert-warning">
                                                            <?php echo 'xóa thất bại'; ?>
                                                        </h4>
                                                        <?php    }
                                                    } ?>
                                                    </table>
                                                </div>
                                                <!-- end table-responsive-->

                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    //  } 
                                    ?>
                                    <div class="card">
                                        <div class="card-header" role="tab" id="headingThree">
                                            <h5 class="mb-0">
                                                <a class="collapsed" data-toggle="collapse" href="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Những Học viên đăng ký khóa học
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" role="tabpanel"
                                            aria-labelledby="headingThree" data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <p style="color: red;">Cho biết tình trạng học phí , Học đang học
                                                        khóa
                                                        học
                                                        nào </p>
                                                    <div class="row">
                                                        <div class="col-lg-3">
                                                            <div class="form-group">
                                                                <p>Tìm kiếm theo Khóa học:</p>
                                                                <input type="search" name="search_st"
                                                                    class="search_st form-control"
                                                                    placeholder="Nhập vào mã khóa học" id="search_st">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="form-group">
                                                                <p>Tìm kiếm theo Học Viên:</p>
                                                                <input type="search" name="search_st"
                                                                    class="search_st form-control"
                                                                    placeholder="Nhập vào mã học viên" id="search_st">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <table id="output_search"
                                                        class="table table-bordered table-hover display"
                                                        style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Mã HV</th>
                                                                <th>Hình ảnh</th>
                                                                <th>Tên học Viên</th>
                                                                <th>Mã khóa học</th>
                                                                <th>Khóa Học Đăng Ký</th>
                                                                <th>Học Phí</th>
                                                                <th>Ngày Khai Giảng</th>
                                                                <th>Ngày Kết Thúc</th>
                                                                <th>tinh trạng</th>
                                                                <th>chức năng</th>
                                                            </tr>
                                                        </thead>
                                                        <?php
                                                        $i = 1;
                                                        while ($row1 = mysqli_fetch_assoc($data["showDSstudent"])) {
                                                        ?>
                                                        <tbody>
                                                            <tr><?php $i++; ?>
                                                                <th>
                                                                    <?php echo $row1["id_students"] ?></th>
                                                                <td><?php echo $row1["MaHV"] ?></td>
                                                                <td> <img style="width: 80px;"
                                                                        src="mvc\photo\<?php echo $row1["imgHV"] ?>"
                                                                        alt="" name="hinhanh" class="img-thumbnail">
                                                                </td>
                                                                <td> <?php echo $row1["tenhv"]; ?></td>

                                                                <td><?php echo $row1["ma_KH"]; ?>
                                                                </td>
                                                                <td><?php echo $row1["tenkhoahoc"]; ?></td>
                                                                <td> <?php echo $row1["price"] ?></td>
                                                                <td><?php echo $row1["ngaykhaigiang"]; ?> </td>
                                                                <td><?php echo $row1["ngayketthuc"]; ?></td>
                                                                <td>
                                                                    <?php if ($row1["tinhtrang"] != 'Đã đóng tiền') {
                                                                        ?>
                                                                    <p style="color: red;">
                                                                        <?php echo "Chưa Đóng Tiền"; ?>
                                                                        <a href="Bill/allbill_edit/<?php echo $row1["id_bill"] ?>"
                                                                            class="btn btn-primary btn-sm btn-block"><i
                                                                                class="far fa-edit"></i>
                                                                            Thanh Toán</a>
                                                                    </p>
                                                                    <?php
                                                                        } else {
                                                                            echo  $row1["tinhtrang"];
                                                                        } ?>
                                                                </td>
                                                                <td>
                                                                    <a href="students/allstudent_edit/<?php echo $row1["id_students"]; ?>"
                                                                        class="btn 
                                                                 btn-primary btn-sm btn-block mt-2"><i
                                                                            class="fas fa-edit">
                                                                        </i>
                                                                        Show </a>
                                                                    <a href="students/allstudent_delete/<?php echo $row1["id_students"]; ?>"
                                                                        class="btn 
                                                                 btn-danger btn-sm btn-block mt-2"><i
                                                                            class="fas fa-trash">
                                                                        </i>
                                                                        Delete </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <?php } ?>
                                                    </table>
                                                </div>
                                                <!-- end table-responsive-->

                                            </div>
                                            <div class="card-body">

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- end card-->
                    </div>
                </div>

            </div>

            <!-- END container-fluid -->

        </div>

    </div>

    <script type="text/javascript">
$(document).ready(function() {
    $(".search_st").keyup(function() {
        var search_st = $('.search_st').val();
        $.ajax({
            url: "ajax/search",
            method: "POST",
            data: {
                data: search_st
            },
            success: function(data) {
                $("#output_search").html('');
                $("#output_search").html(data);
            }
        });

    });
});
    </script>