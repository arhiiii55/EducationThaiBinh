<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">lớp hoc</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">lớp Học</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <!-- 
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Documentation</h4>
                <p>Toggle the visibility of content across your project with a few classes and our JavaScript plugins.
                    You can find examples and documentation about Bootstrap Collapse here: <a target="_blank"
                        href="http://getbootstrap.com/docs/4.3/components/collapse/">Bootstrap
                        Collapse Documentation</a></p>
            </div> -->
            <div class="row row-length center-row">
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">

                    <div class="card mb-3 border-box">
                        </br>
                        <h4 style="text-align: center;"> <strong style="color: cadetblue;"> Lịch dạy</strong></h4></br>
                        <!-- end card-header -->
                        <?php
                        $i = 1;
                        while ($row2 = mysqli_fetch_assoc($data["editclass_getIdTrainer"])) {
                            $i++;
                        ?>

                        <form style="border: 1px solid blanchedalmond" action="" method="post"
                            enctype="multipart/form-data">

                            <div class="modal-body box-class border-box-test">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label> Tên Lớp: </label>
                                            <strong><?php echo $row2["ten_lop"]; ?></strong>

                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label> Mã Lớp: </label>
                                            <strong><?php echo $row2["malop"]; ?></strong>

                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Phòng Học:</label>
                                            <strong><?php echo $row2["phong"]; ?></strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Phòng Học:</label>
                                            <strong><?php echo $row2["cahoc"]; ?></strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label> Số lượng HV dự kiến: </label>
                                            <strong><?php echo $row2["so_luongHV"]; ?></strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Mã Khóa Học :</label>
                                            <strong><?php echo $row2["ma_KH"]; ?></strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Trạng thái Hoạt động:</label>
                                            <strong><?php echo $row2["trangthai"]; ?></strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Tên Khóa Học :</label>
                                            <strong><?php echo $row2["tenkhoahoc"]; ?></strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Khung giờ:</label>
                                            <strong><?php echo $row2["giohoc"]; ?></strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>lịch học:</label>
                                            <strong><?php echo $row2["lichhoc"]; ?></strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Ngày khai giảng</label>
                                            <strong><?php echo $row2["ngaykhaigiang"]; ?></strong>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label> Ngày dự kiến kết thúc:</label>
                                            <strong><?php echo $row2["ngayketthuc"]; ?></strong>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                        <?php
                        }
                        ?>
                    </div>
                    <!-- end card -->

                </div>
                <!-- end col -->

            </div>

            <div class="row center-row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="far fa-file-image"></i> Bảng Thông tin Lớp Học</h3>
                            Quản lý lớp học gồm các giáo viên phụ trách các lớp, Phòng học, tên lớp và số lượng sinh
                            viên
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
                                                Giáo viên phụ trách các lớp
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="collapseTwo" class="collapse show" role="tabpanel"
                                        aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="dataTable" class="table table-bordered table-hover display"
                                                    style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>ID Khóa Học </th>
                                                            <th>Tên Khóa Học </th>
                                                            <th>Tên Giáo Viên</th>
                                                            <th>SĐT</th>
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
                                <?php
                                //  } 
                                ?>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingThree">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                Thông kê tất cả thông tin lớp học bao gồm số lượng sinh viên trong lớp
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel"
                                        aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="dataTable" class="table table-bordered table-hover display"
                                                    style="width:100%">
                                                    <thead>
                                                        <tr>
                                                            <th>Mã lớp</th>
                                                            <th>Tên Lớp học </th>
                                                            <th>Phòng học</th>
                                                            <th>Khung Giờ</th>
                                                            <th>Ngày Học</th>
                                                            <th>Thời khóa biểu</th>
                                                            <th>Số Học viên dự kiến</th>
                                                            <th>số lượng sinh viên đăng ký</th>
                                                            <th>Ngày khai giảng</th>

                                                        </tr>
                                                    </thead>
                                                    <?php
                                                    $i = 1;
                                                    while ($data2 = mysqli_fetch_array($data["countStudentReal"])) {
                                                    ?>
                                                    <tbody>
                                                        <tr><?php $i++; ?>
                                                            <th>
                                                                <?php echo $data2["id_class"]; ?></th>
                                                            <td> <?php echo $data2["ten_lop"]; ?></td>
                                                            <td> <?php echo $data2["phong"]; ?></td>
                                                            <td> <?php echo $data2["giohoc"]; ?></td>
                                                            <td> <?php echo $data2["lichhoc"]; ?></td>
                                                            <td> <?php echo $data2["sl_tuan"]; ?></td>
                                                            <td> <?php echo $data2["so_luongHV"]; ?></td>
                                                            <td> <?php echo $data2["sl_Real"]; ?></td>
                                                            <td> <?php echo $data2["ngaykhaigiang"]; ?></td>
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
    <!-- END content -->

</div>