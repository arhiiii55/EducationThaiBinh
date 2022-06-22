z<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Khóa Học</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item active">Tất cả thông tin khóa học</li>
                        </ol>
                        <div class="modal fade custom-modal" tabindex="-1" role="dialog"
                            aria-labelledby="modal_add_user" aria-hidden="true" id="modal_add_user">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="" method="post" enctype="multipart/form-data">

                                        <div class="modal-header">
                                            <h5 class="modal-title">Học Viên đăng ký khóa học</h5>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">

                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Mã Giáo Viên</label>
                                                        <select name="id_trainer" class="form-control">
                                                            <?php
                                                            $i = 1;
                                                            while ($row3 = mysqli_fetch_array($data["showstrainer"])) {
                                                                $i++;
                                                            ?>
                                                            <option name="id_trainer"
                                                                value="<?php echo $row3["id_trainer"] ?>">
                                                                <?php echo '[' . $row3["MaGV"] . '] ' . $row3["ten_gv"] ?>
                                                            </option>
                                                            <?php } ?>
                                                            <!-- <option value="0">NO</option> -->
                                                        </select>
                                                        <!-- <input class="form-control" name="id_students"
                                                                    type="text" /> -->
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Mã Khóa Học Theo Lớp:</label>

                                                        <select name="id_sourse_detail" class="form-control">
                                                            <?php
                                                            $i = 1;
                                                            while ($row = mysqli_fetch_array($data["class_all"])) {
                                                                $i++;
                                                            ?>
                                                            <option value=" <?php echo $row["id_sourse_detail"]; ?>">
                                                                <?php echo '[' . $row["id_sourse_detail"] . '] ' . $row["tenkhoahoc"] ?>
                                                            </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Mã Lớp :</label>
                                                        <select name="class_id" class="form-control">
                                                            <?php
                                                            $i = 1;
                                                            while ($row4 = mysqli_fetch_array($data["class_all_id"])) {
                                                                $i++;
                                                            ?>
                                                            <option value="<?php echo $row4["id_class"]; ?>">
                                                                <?php echo '[' . $row4["id_class"] . '] ' . $row4["ten_lop"] ?>
                                                            </option>
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Tình Trạng:</label>
                                                        <select name="tinhtrang" class="form-control">
                                                            <option value="Dự Kiến">Dự Kiến
                                                            </option>
                                                            <option value="Đang Học">Đang Học
                                                            </option>
                                                            <option value="Kết Thúc">Kết Thúc
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="submit" name="submit_add" class="btn btn-primary">Xác
                                                Nhận</button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row center-row">

                <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
                    <div class="row center-row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3><i class="fas fa-table"></i> Bảng thông tin học viên</h3>
                                    <p> Thông tin tất cả chương trình khóa học đào tạo
                                    </p>

                                </div>


                                <div class="card-body">

                                    <div id="accordion" role="tablist">
                                        <?php
                                        // $i = 1;
                                        // while ($row = mysqli_fetch_array($data["class_all"])) {
                                        //     $i++;
                                        ?>
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingOne">
                                                <h5 class="mb-0">
                                                    <a data-toggle="collapse" href="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                        Thông tin chương trình đào tạo
                                                        <?php echo $row["ten_lop"]; ?>
                                                    </a>
                                                </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show" role="tabpanel"
                                                aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="dataTable"
                                                            class="table table-bordered table-hover display"
                                                            style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>STT</th>
                                                                    <th>Tên Chương Trình Đào Tạo</th>
                                                                    <th>Mã Khóa Đào Tạo</th>
                                                                    <th>Mô Tả</th>
                                                                    <th>Thời Gian Tạo</th>
                                                                    <th style="min-width:60px;">Action</th>
                                                                </tr>
                                                            </thead>
                                                            <?php
                                                            $i = 1;
                                                            while ($row = mysqli_fetch_assoc($data["eduCourse"])) {
                                                            ?>
                                                            <tbody>
                                                                <tr><?php $i++; ?>
                                                                    <th>CTDT:
                                                                        <?php echo $row["id_eduSource"] ?></th>
                                                                    <td><?php echo $row["ten_daotao_khoahoc"] ?> </td>
                                                                    <td><?php echo $row["ma"] ?> </td>
                                                                    <td><?php echo $row["mota"] ?></td>
                                                                    <td><?php echo $row["datetime"] ?></td>
                                                                </tr>
                                                            </tbody>
                                                            <?php } ?>
                                                        </table>
                                                        <?php
                                                        if (isset($data["delete_eduCourse"])) {
                                                            if ($data["delete_eduCourse"] == true) {
                                                                echo '<script language="javascript">alert("Xóa thành công!");</script>';
                                                            } else {
                                                                echo '<script language="javascript">alert("Xóa thất bại!");</script>';
                                                            }
                                                        } ?>
                                                    </div>
                                                    <!-- end table-responsive-->

                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        //  } 
                                        ?>

                                        <!-- /*phần này là chi tiết khóa học  */ -->
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <a class="collapsed" data-toggle="collapse" href="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        Thông Tin Khóa Học
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" role="tabpanel"
                                                aria-labelledby="headingTwo" data-parent="#accordion">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <p>Thông tin chi tiết các khóa học đang mở lớp và giảng dạy </p>
                                                        <table id="dataTable"
                                                            class="table table-bordered table-hover display"
                                                            style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>ID</th>
                                                                    <th>Mã CTĐT</th>
                                                                    <th>Mã Khóa Học</th>
                                                                    <th>Hình Ảnh </th>
                                                                    <th>Tên Khóa Học</th>
                                                                    <th>Nội Dung</th>
                                                                    <th>Thời Khóa Biểu</th>
                                                                    <th>Thời Khóa Biểu</th>
                                                                    <th>Khung Giờ</th>
                                                                    <th>Số Lượng tuần</th>
                                                                    <th>Số Tiết Học</th>
                                                                    <th>Ngày Khai Giảng</th>
                                                                    <th>Ngày Kết Thúc</th>
                                                                    <th>Trạng Thái Hoạt Động</th>
                                                                    <th>Giáo Viên</th>
                                                                    <th>Học Phí</th>
                                                                    <th style="min-width:100px;">Action</th>

                                                                </tr>
                                                            </thead>
                                                            <?php
                                                            $i = 1;
                                                            while ($row = mysqli_fetch_assoc($data["ShowCourseDetail"])) {
                                                            ?>
                                                            <tbody>
                                                                <tr><?php $i++; ?>
                                                                    <th>
                                                                        <?php echo $row["id_sourse_detail"]; ?></th>
                                                                    <td>CTDT: <?php echo $row["edusource_id"]; ?></td>
                                                                    <td> <?php echo $row["ma_KH"]; ?></td>
                                                                    <td> <img style="width: 80px;"
                                                                            src="mvc\photo\<?php echo $row["img_KH"] ?>"
                                                                            alt="" name="hinhanh" class="img-thumbnail">
                                                                    </td>
                                                                    <td> <?php echo $row["tenkhoahoc"]; ?></td>
                                                                    <td><?php echo $row["mota"]; ?></td>
                                                                    <td><?php echo $row["lichhoc"]; ?></td>
                                                                    <td><?php echo $row["cahoc"]; ?></td>
                                                                    <td><?php echo $row["giohoc"]; ?></td>
                                                                    <td><?php echo $row["sl_tuan"]; ?></td>
                                                                    <td><?php echo $row["sl_tiet"]; ?></td>
                                                                    <td><?php $fomat = strtotime($row["ngaykhaigiang"]);
                                                                            echo date('d-m-Y', $fomat); ?></td>
                                                                    <td><?php $fomat = strtotime($row["ngayketthuc"]);
                                                                            echo date('d-m-Y', $fomat); ?></td>
                                                                    <td><?php echo $row["trangthai"]; ?></td>
                                                                    <td>
                                                                        <?php if ($row["MaGV"] == null) {
                                                                            ?>
                                                                        <p style="color: red;">
                                                                            <?php echo "Chưa có giáo viên "; ?>
                                                                            <a href="course/courseDeitail_trainer"
                                                                                class="btn btn-primary btn-sm btn-block"><i
                                                                                    class="far fa-edit"></i>
                                                                                thêm giáo viên</a>
                                                                        </p>
                                                                        <?php
                                                                            } else {
                                                                                echo $row["MaGV"];
                                                                            } ?>
                                                                    </td>
                                                                    <td><?php echo number_format($row["price"]); ?></td>
                                                                    <td>
                                                                        <a href="course/coursesDetail_edit_AC/<?php echo $row["id_sourse_detail"]; ?>"
                                                                            class="btn btn-primary btn-sm btn-block"><i
                                                                                class="far fa-edit"></i>
                                                                            Edit</a>
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
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingThree">
                                                <h5 class="mb-0">
                                                    <a data-toggle="collapse" href="#collapseThree" aria-expanded="true"
                                                        aria-controls="collapseThree">
                                                        Giáo viên phụ trách các lớp
                                                        <?php echo $row["ten_lop"]; ?>
                                                    </a>
                                                </h5>
                                            </div>

                                            <div id="collapseThree" class="collapse show" role="tabpanel"
                                                aria-labelledby="headingThree" data-parent="#accordion">
                                                <div class="card-body">
                                                    <div class="table-responsive">
                                                        <table id="dataTable"
                                                            class="table table-bordered table-hover display"
                                                            style="width:100%">
                                                            <thead>
                                                                <tr>
                                                                    <th>ID Khóa Học </th>
                                                                    <th>Tên Khóa Học </th>
                                                                    <th>Tên Giáo Viên</th>
                                                                    <th>Số Điện Thoại</th>
                                                                    <th>Gmail</th>
                                                                    <th>Ngày Khai Giảng</th>
                                                                    <th>Ngày Kết Thúc</th>
                                                                    <th>Tên Lớp</th>
                                                                    <th>Phòng Học</th>
                                                                    <th>Số Lượng Học Sinh</th>

                                                                </tr>
                                                            </thead>
                                                            <?php
                                                            $i = 1;
                                                            while ($data2 = mysqli_fetch_array($data["ShowAllOfCourse"])) {
                                                            ?>
                                                            <tbody>
                                                                <tr><?php $i++; ?>
                                                                    <th>
                                                                        <?php echo $data2["id_sourse_detail"]; ?></th>
                                                                    <td> <?php echo $data2["tenkhoahoc"]; ?></td>
                                                                    <td> <?php echo $data2["ten_gv"]; ?></td>
                                                                    <td> <?php echo $data2["sdt"]; ?></td>
                                                                    <td> <?php echo $data2["gmail"]; ?></td>
                                                                    <td> <?php echo $data2["ngaykhaigiang"]; ?></td>
                                                                    <td> <?php echo $data2["ngayketthuc"]; ?></td>
                                                                    <td> <?php echo $data2["ten_lop"]; ?></td>
                                                                    <td> <?php echo $data2["phong"]; ?></td>
                                                                    <td> <?php echo $data2["so_luongHV"]; ?></td>

                                                                </tr>
                                                            </tbody>
                                                            <?php } ?>
                                                        </table>
                                                    </div>
                                                    <!-- end table-responsive-->

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <div class="card mb-3">
                                                <div class="card-header">
                                                    <h3><i class="fas fa-table"></i> Thời Khóa Biểu Ca Học</h3>
                                                    Hiển thị lịch học cụ thể cho từng khóa học</br>
                                                    <strong style="color: red;">lưu ý bạn xóa
                                                        mục này là các khóa lớp hiện tại của bạn bị
                                                        xóa</strong>
                                                </div>

                                                <div class="card-body">

                                                    <table class="table table-responsive-xl table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>Ca Học</th>
                                                                <th>Lịch Học</th>
                                                                <th>Giờ Học</th>
                                                                <th>Buổi Học</th>
                                                                <th>Loại Ngày Học</th>
                                                            </tr>
                                                        </thead>
                                                        <?php
                                                        $i = 1;
                                                        while ($row = mysqli_fetch_assoc($data["timeabledays"])) {
                                                        ?>
                                                        <tbody>
                                                            <td><?php echo $i++; ?>
                                                            <td><?php echo $row["cahoc"] ?> </td>
                                                            <td><?php echo $row["lichhoc"] ?></td>
                                                            <td><?php echo $row["giohoc"] ?></td>
                                                            <td><?php echo $row["buoi"] ?></td>
                                                            <td><?php echo $row["loaingayhoc"] ?></td>
                                                            </td>
                                                        </tbody>
                                                        <?php } ?>
                                                    </table>

                                                </div>
                                            </div>
                                            <!-- end card-->
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- end card-->
                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>

            <div class="row">

            </div>
        </div>
        <!-- END container-fluid -->

    </div>

</div>