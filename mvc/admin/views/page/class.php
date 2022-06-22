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
            <?php
            if (isset($data["addClass"])) {
                if ($data["addClass"] == true) { ?>
            <?php
                    echo '<script language="javascript">alert("Đã thêm thành công!");<a href="Home/coursesDetail">tiếp tục thêm người dạy</a></script>';

                    ?>

            <?php  } else { ?>

            <?php echo '<script language="javascript">alert("Thêm thất bại!");</script>'; ?>
            <?php    }
            } ?>
            <div class="row row-length center-row">
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">
                    <div class="card mb-3">

                        <!-- end card-header -->
                        <?php
                        // $i = 1;
                        // while ($row = mysqli_fetch_array($data["editUser"])) {
                        // 
                        ?>

                        <form action="classdetail/class_insert" method="post" enctype="multipart/form-data">

                            <div class="modal-body box-class">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label> Mã Lớp: </label>
                                            <input class="form-control" value="" name="malop" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label> Tên Lớp: </label>
                                            <input class="form-control" value="" name="name" type="text" />
                                        </div>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Phòng Học:</label>
                                            <input class="form-control" name="phong" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label> Số lượng HV dự kiến: </label>
                                            <input class="form-control" value="" name="so_luongHV" type="text" />
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Mã Khóa Học :</label>
                                            <input class="form-control" value="" name="sourse_detail_id" type="text" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Trạng thái Hoạt động:</label>
                                            <select name="trangthai" class="form-control" required>
                                                <option value="Dự Kiến">Dự Kiến</option>
                                                <option value="Đang Học">Đang Học</option>
                                                <option value="Đã kết thúc">Đã kết thúc</option>
                                            </select>

                                        </div>
                                    </div>

                                </div>


                                <!-- <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Email verified</label>
                                            <select name="email_verified" class="form-control">
                                                <option value="1">YES</option>
                                                <option value="0">NO</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Active</label>
                                            <select name="active" class="form-control">
                                                <option value="1">YES</option>
                                                <option value="0">NO</option>
                                            </select>
                                        </div>
                                    </div>

                                </div> -->

                                <!-- <div class="form-group">
                                    <label>Avatar image (optional):</label>
                                    <br />
                                    <input type="file" name="image">
                                </div> -->

                            </div>

                            <div class="modal-footer">
                                <button type="submit" name="submit_add" class="btn btn-primary">Xác nhận</button>
                            </div>

                        </form>
                        <?php
                        // } 
                        ?>
                        <?php
                        if (isset($data["addClass"])) {
                            if ($data["addClass"] == true) { ?>
                        <h4 class="alert alert-success">
                            <?php echo 'Thành công'; ?>
                        </h4>
                        <?php  } else { ?>
                        <h4 class="alert alert-warning">
                            <?php echo 'Thất bại'; ?>
                        </h4>
                        <?php    }
                        } ?>
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
                                                Danh sách lớp học hiện tại
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" role="tabpanel"
                                        aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <table id="dataTable" class="table table-bordered table-hover display"
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>STT</th>
                                                        <th>Tên Lớp</th>
                                                        <th>Mã Lớp</th>
                                                        <th>Phòng</th>
                                                        <th>Số Lượng HV dự kiến</th>
                                                        <th>Mã Khóa Học</th>
                                                        <th>Trạng Thái</th>
                                                    </tr>
                                                </thead>
                                                <?php
                                                $i = 1;
                                                while ($row = mysqli_fetch_assoc($data["class_all"])) {
                                                ?>
                                                <tbody>
                                                    <tr>
                                                        <th><?php echo $row["id_class"] ?></th>
                                                        <td><?php echo $row["ten_lop"]; ?></td>
                                                        <td><?php echo $row["malop"]; ?></td>
                                                        <td><?php echo $row["phong"]; ?></td>
                                                        <td><?php echo $row["so_luongHV"]; ?></td>
                                                        <td><?php echo $row["ma_KH"]; ?></td>
                                                        <td><?php echo $row["trangthai"]; ?></td>

                                                        <td>
                                                            <a href="classdetail/class_edit/<?php echo $row["id_class"]; ?>"
                                                                class="btn btn-primary btn-sm btn-block"><i
                                                                    class="far fa-edit"></i>
                                                                Edit</a>
                                                            <a href="classdetail/class_delete/<?php echo $row["id_class"]; ?>"
                                                                class="btn btn-danger btn-sm btn-block mt-2"><i
                                                                    class="fas fa-trash"></i> Delete</a>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                                <?php

                                                } ?>
                                            </table>
                                            <div> Chi tiết lớp học</div>
                                            <table id="dataTable" class="table table-bordered table-hover display"
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Mã lớp học</th>
                                                        <th>Tên Khóa Học</th>
                                                        <th>Giáo Viên PT</th>
                                                        <th>Phòng</th>
                                                        <th>Lịch Học</th>
                                                        <th>Ca Học</th>
                                                        <th>Thời Gian</th>
                                                        <th>Buổi</th>
                                                        <th>Số Lượng Thời Gian</th>
                                                        <th>Số Lượng Tiết Học</th>
                                                        <th>Ngày Khai Giảng</th>
                                                        <th>Chức Năng</th>
                                                    </tr>
                                                </thead>
                                                <?php
                                                $i = 1;
                                                while ($row1 = mysqli_fetch_assoc($data["class_all_detail"])) {
                                                ?>
                                                <tbody>
                                                    <tr>
                                                        <th><?php echo $row1["malop"] ?></th>
                                                        <td><?php echo $row1["tenkhoahoc"]; ?></td>
                                                        <td><?php if ($row1["MaGV"] == null) {
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
                                                                    echo $row1["MaGV"];
                                                                } ?>
                                                        </td>
                                                        <td><?php echo $row1["phong"]; ?></td>
                                                        <td><?php echo $row1["lichhoc"]; ?></td>
                                                        <td><?php echo $row1["cahoc"]; ?></td>
                                                        <td><?php echo $row1["giohoc"]; ?></td>
                                                        <td><?php echo $row1["buoi"]; ?></td>
                                                        <td><?php echo $row1["sl_tuan"]; ?></td>
                                                        <td><?php echo $row1["sl_tiet"]; ?></td>
                                                        <td><?php echo $row1["ngaykhaigiang"]; ?></td>
                                                        <td>
                                                            <a href="classdetail/class_edit/<?php echo $row1["id_class"]; ?>"
                                                                class="btn btn-primary btn-sm btn-block"><i
                                                                    class="far fa-edit"></i>
                                                                Edit</a>
                                                            <a href="classdetail/class_delete/<?php echo $row1["id_class"]; ?>"
                                                                class="btn btn-danger btn-sm btn-block mt-2"><i
                                                                    class="fas fa-trash"></i> Delete</a>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                                <?php

                                                } ?>
                                            </table>
                                            <!-- <p>
                                              <?php
                                                // echo $row["id_class"] . '</br>';
                                                // echo $row["tenkhoahoc"] . '</br>';
                                                // echo $row["phong"] . '</br>';
                                                // echo $row["lichhoc"] . '</br>';
                                                // echo $row["thoigian"] . '</br>';
                                                // echo $row["buoi"] . '</br>';
                                                // echo $row["sl_tuan"] . '</br>';
                                                // echo $row["sl_tiet"] . '</br>';
                                                // echo $row["ngaykhaigiang"] . '</br>';
                                                ?>
                                            </p> -->
                                        </div>
                                    </div>
                                </div>
                                <?php
                                //  } 
                                ?>
                                <!-- <div class="card">
                                                <div class="card-header" role="tab" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <a class="collapsed" data-toggle="collapse" href="#collapseTwo"
                                                            aria-expanded="false" aria-controls="collapseTwo">
                                                            Collapsible Group Item #2
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo"
                                                    data-parent="#accordion">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                                        dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                        tempor, sunt aliqua put a bird
                                                        on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                                        keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                        proident. Ad vegan excepteur butcher vice lomo.
                                                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                                        nesciunt you probably haven't heard of them accusamus labore sustainable
                                                        VHS.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" role="tab" id="headingThree">
                                                    <h5 class="mb-0">
                                                        <a class="collapsed" data-toggle="collapse" href="#collapseThree"
                                                            aria-expanded="false" aria-controls="collapseThree">
                                                            Collapsible Group Item #3
                                                        </a>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" role="tabpanel"
                                                    aria-labelledby="headingThree" data-parent="#accordion">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                                        richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                                        dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                                        tempor, sunt aliqua put a bird
                                                        on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                                        keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                                        proident. Ad vegan excepteur butcher vice lomo.
                                                        Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                                        nesciunt you probably haven't heard of them accusamus labore sustainable
                                                        VHS.
                                                    </div>
                                                </div>
                                            </div> -->
                            </div>

                        </div>
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
                                                <?php echo $row["ten_lop"]; ?>
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
                                                            <th>Số Lượng HV</th>

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
                                <!-- <div class="card">
                                    <div class="card-header" role="tab" id="headingTwo">
                                        <h5 class="mb-0">
                                            <a class="collapsed" data-toggle="collapse" href="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">
                                                Collapsible Group Item #2
                                            </a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo"
                                        data-parent="#accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard
                                            dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon
                                            tempor, sunt aliqua put a bird
                                            on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim
                                            keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                                            proident. Ad vegan excepteur butcher vice lomo.
                                            Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth
                                            nesciunt you probably haven't heard of them accusamus labore sustainable
                                            VHS.
                                        </div>
                                    </div>
                                </div> -->

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
                                                            <th>Tên khóa học</th>
                                                            <th>Phòng học</th>
                                                            <th>Khung giờ</th>
                                                            <th>Ca học</th>
                                                            <th>Số lượng dự kiến</th>
                                                            <th>số lượng đăng ký</th>
                                                            <th>Ngày khai giảng</th>

                                                        </tr>
                                                    </thead>
                                                    <?php
                                                    $i = 1;
                                                    while ($row3 = mysqli_fetch_array($data["countStudentReal"])) {
                                                    ?>
                                                    <tbody>
                                                        <tr><?php $i++; ?>
                                                            <th>
                                                                <?php echo $row3["malop"]; ?></th>
                                                            <td> <?php echo $row3["ten_lop"]; ?></td>
                                                            <td> <?php echo $row3["phong"]; ?></td>
                                                            <td> <?php echo $row3["giohoc"]; ?></td>
                                                            <td> <?php echo $row3["cahoc"]; ?></td>
                                                            <td> <?php echo $row3["lichhoc"]; ?></td>

                                                            <td><input type="number" class="form-control"
                                                                    id="exampleInputNumber1"
                                                                    aria-describedby="numberlHelp"
                                                                    placeholder="Enter number"
                                                                    value="<?php echo $row3["so_luongHV"]; ?>">

                                                            </td>
                                                            <td> <?php
                                                                        if (["sl_Real"] <= 3) { ?>
                                                                <p style="color: red;">
                                                                    <?php echo  '<strong>' . $row3["sl_Real"] . '</strong><i>' . ' (Chưa đủ điều kiện mở lớp)'; ?>
                                                                </p>
                                                                <?php } else if ($row3["sl_Real"] >= $row3["so_luongHV"]) {
                                                                    ?>
                                                                <i style="color: blue;">
                                                                    <?php echo 'Full: ' . $row3["sl_Real"];
                                                                        } else {
                                                                            echo $row3["sl_Real"];
                                                                        } ?>
                                                                </i>
                                                            </td>
                                                            <td> <?php echo $row3["ngaykhaigiang"]; ?></td>
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