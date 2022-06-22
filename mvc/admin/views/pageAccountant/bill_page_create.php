<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Invoice</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Invoice</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="row">

                <div class="col-xs-12 col-lg-12">

                    <div class="card mb-3">

                        <div class="card-header">
                            <h3><i class="fas fa-table"></i> Invoice example</h3>
                        </div>

                        <div class="card-body">

                            <div class="container">

                                <div class="row">
                                    <?php
                                    $i = 1;
                                    while ($row = mysqli_fetch_assoc($data["editGetid_Bill"])) {
                                        $i++;
                                    ?>
                                    <div class="col-md-10">

                                        <div class="invoice-title text-center mb-3">
                                            <h2>Biên Lai Thu Học phí : </h2>
                                            <strong class="text-left">
                                                <span> Mã biên
                                                    lai:</span>
                                            </strong>
                                            <?php echo $row["id_bill"]; ?>
                                            <br>
                                            <strong>Thời gian
                                                lập
                                                Bill: </strong><?php
                                                                    $fomat = strtotime($row["ngaylap_hd"]);
                                                                    echo date('d-m-Y h:i a', $fomat); ?>
                                        </div>
                                        <hr>
                                        <div class="row">

                                            <div class="col-md-12">


                                                <form action="Bill/allbill_update/<?php echo $row["id_bill"] ?>"
                                                    method="post" enctype="multipart/form-data">

                                                    <div class="modal-body box-class">
                                                        <div class="form-group">
                                                            <label>Mã Học Viên</label>
                                                            <input class="form-control"
                                                                value="<?php echo $row["student_id"] ?>"
                                                                name="id_student" type="text" disabled />
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label> Mã Khóa Học: </label>
                                                                    <input class="form-control"
                                                                        value="<?php echo $row["sourse_detail_id"]; ?>"
                                                                        name="id_course" type="text" disabled />
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Ngày Lập Hóa Đơn:</label>
                                                                    <input class="form-control" value="<?php echo $row["ngaylap_hd"];
                                                                                                            ?>"
                                                                        name="ngay" type="date" />
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label>Thành Tiền:</label>
                                                                    <select name="total" class="form-control">
                                                                        <!-- <input type="text" class="form-control" name="actived"> -->
                                                                        <?php
                                                                            $i = 1;
                                                                            while ($row1 = mysqli_fetch_array($data["courseDetail"])) {
                                                                                $i++;

                                                                            ?>
                                                                        <option value="<?php echo $row1["price"] ?>">
                                                                            <?php echo $row1["id_sourse_detail"] . ' | ' . $row1["tenkhoahoc"] . ' | ' . $row1["price"] ?>
                                                                        </option>
                                                                        <?php
                                                                            } ?>

                                                                    </select>

                                                                </div>
                                                                <div class="form-group">
                                                                    <label> Thời Hạn Hóa Đơn: </label>
                                                                    <input class="form-control"
                                                                        value="<?php echo $row["thoihan"]; ?>"
                                                                        name="thoihan" type="text" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label>Tình Trạng:</label>
                                                                    <select name="tinhtrang" class="form-control">
                                                                        <option value="Đã đóng tiền">Đã đóng tiền
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <button type="submit" style="background-color: red;"
                                                        name="edit_bill" class=" btn btn-primary">Xác
                                                        nhận</button>

                                                </form>
                                                <?php
                                                }
                                                if (isset($data["update_bill"])) {
                                                    if ($data["update_bill"] == false) { ?> <?php
                                                                                            echo '<script language="javascript">alert("Đã upload thành công!");</script>';
                                                                                            ?>
                                                <?php  } else { ?> <h4 class="alert alert-warning">
                                                    <?php echo 'Thêm thất bại'; ?>
                                                </h4>
                                                <?php    }
                                                } ?>
                                                <hr>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-11 col-md-6">
                                                <h5>Hình Thức Thanh Toán:</h5>
                                                <address>
                                                    Tiền Mặt<br>
                                                    <strong style="color: blue;"><i>Đã Đóng tiền</i></strong>
                                                </address>

                                            </div>
                                            <div class="col-xs-12 col-md-6 text-right">
                                                <h5>Ngày Lập HĐ:</h5>
                                                <address><i><?php
                                                                $fomat = strtotime($row["ngaylap_hd"]);
                                                                echo date('d-m-Y', $fomat); ?></i>
                                                    <br>
                                                    <br>
                                                </address>
                                            </div>


                                        </div>

                                    </div>
                                </div>
                                <div class="modal-footer" style="justify-content: flex-start;">
                                    <a href="BBill/allbill_edit/<?php $row["id_bill"]; ?>"><button
                                            class="btn btn-primary btn-sm">
                                            <em class="fas fa-undo-alt" aria-hidden="true"></em>load lại.
                                        </button></a>
                                    <a hef="Bill/billPage">
                                        <button style="margin: 0rem 1rem;" class=" btn btn-primary btn-sm" name="">xem
                                            danh sách
                                            HĐ</button>
                                    </a>
                                    <a hef="Home/studentPage" class="">
                                        <button class="btn btn-primary btn-sm" data-toggle="modal"
                                            data-target="#modal_add_user">
                                            <i class="fas fa-user-plus" aria-hidden="true"></i>Tạo Học
                                            viên
                                        </button></a>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-11">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"><strong>Biên Lai </strong></h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-condensed">
                                                        <thead>
                                                            <tr>
                                                                <td><strong>Mã Khóa học</strong></td>
                                                                <td><strong>Tên Khóa học</strong></td>
                                                                <td class="text-center"><strong>Thành tiền</strong>
                                                                </td>
                                                                <td class="text-center">
                                                                    <strong>Số lượng</strong>
                                                                </td>
                                                                <td class="text-right"><strong>Tổng giá
                                                                        tiền</strong>
                                                                </td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr style="background-color:#dee2e6b8;">
                                                                <td>
                                                                    <?php echo $row["sourse_detail_id"]; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row["tenkhoahoc"]; ?>
                                                                </td>
                                                                <td class="text-center">
                                                                    <?php echo $row["price"]; ?></td>
                                                                <td class="text-center">1</td>
                                                                <td class="text-right">
                                                                    <?php echo number_format($row["total"]); ?>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line text-center">
                                                                    <strong>Tạm tính</strong>
                                                                </td>
                                                                <td class="thick-line text-right">
                                                                    <?php echo number_format($row["total"]); ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="no-line"></td>
                                                                <td class="no-line"></td>
                                                                <td class="no-line"></td>
                                                                <td class="no-line text-center">
                                                                    <strong>Discount: </strong>
                                                                </td>
                                                                <td style="color:red" class="no-line text-right">
                                                                    -10%
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="no-line"></td>
                                                                <td class="no-line"></td>
                                                                <td class="no-line"></td>
                                                                <td class="no-line text-center">
                                                                    <strong>Tổng</strong>
                                                                </td>
                                                                <strong>
                                                                    <td style="color: blue;" class="no-line text-right">
                                                                        <?php echo number_format($row["total"] - ($row["total"] * 0.1)); ?>
                                                                    </td>
                                                                </strong>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <?php  ?> -->
                        </div>
                        <!-- end card body -->

                    </div>
                    <!-- end card-->
                    <div class="card-body">

                        <div class="container">

                            <div class="row">

                                <div class="col-md-8">
                                    <div class="invoice-title text-left mb-3">
                                        <!-- <h2>Biên Lai Thu Học phí : </h2>
                                        <strong>Ngày
                                            lập
                                            Bill:</strong> April 17, 2018

                                    </div>
                                    <hr> -->
                                        <?php
                                        $i = 1;
                                        while ($row = mysqli_fetch_assoc($data["editGetid_Bill"])) {
                                            $i++;
                                        ?>
                                        <form action="Bill/allbill_edit/<?php echo $row["id_bill"] ?>" method="post"
                                            enctype="multipart/form-data">

                                            <div class="modal-body box-class">
                                                <div class="form-group">
                                                    <label>Mã Học Viên</label>
                                                    <input class="form-control" value="<?php echo $row["student_id"] ?>"
                                                        name="id_student" type="text" />
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label> Mã Khóa Học: </label>
                                                            <select name="id_course" class="form-control">
                                                                <?php
                                                                    $i = 1;
                                                                    while ($row = mysqli_fetch_array($data["ShowCourseDetail"])) {
                                                                        $i++;
                                                                    ?>
                                                                <!-- <input type="text" class="form-control" name="actived"> -->
                                                                <option value="<?php echo $row["id_sourse_detail"] ?>">
                                                                    <?php echo $row["id_sourse_detail"] . ' | ' . $row["tenkhoahoc"] ?>
                                                                </option>
                                                                <?php } ?>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Ngày lập Hóa đơn:</label>
                                                            <input class="form-control"
                                                                value="<?php echo $row["ngaylap_hd"] ?>" name="ngay"
                                                                type="date" />
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Thành tiền:</label>
                                                            <select name="total" class="form-control">
                                                                <!-- <input type="text" class="form-control" name="actived"> -->
                                                                <?php
                                                                    $i = 1;
                                                                    while ($row = mysqli_fetch_array($data["courseDetail"])) {
                                                                        $i++;
                                                                    ?>
                                                                <option value="<?php echo $row["price"] ?>">
                                                                    <?php echo $row["tenkhoahoc"] . ' | ' . $row["price"] ?>
                                                                </option>
                                                                <?php } ?>

                                                            </select>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Tình trạng:</label>
                                                            <input class="form-control"
                                                                value="<?php echo $row["tinhtranf"]; ?>"
                                                                name="tinhtrang" type="text" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>

                                    <div class="modal-footer">
                                        <a href="Bill/createBill_page"><button class="btn btn-primary btn-sm">
                                                <em class="fas fa-undo-alt" aria-hidden="true"></em>load lại.
                                            </button></a>
                                        <a hef="Home/allstudentPage">
                                            <button style="margin: 0rem 1rem;" class=" btn btn-primary btn-sm"
                                                name="">xem
                                                danh sách
                                                HĐ</button>
                                        </a>
                                        <a hef="Home/studentPage" class="">
                                            <button class="btn btn-primary btn-sm" data-toggle="modal"
                                                data-target="#modal_add_user">
                                                <i class="fas fa-user-plus" aria-hidden="true"></i>Tạo Học
                                                viên

                                            </button></a>
                                        <button type="submit" style="background-color: red;" name="edit_bill"
                                            class="btn btn-primary">Xác
                                            nhận</button>

                                    </div>

                                    </form>
                                    <?php
                                        }
                                        if (isset($data["resultCreate_bill"])) {
                                            if ($data["resultCreate_bill"] == true) { ?> <?php
                                                                                            echo '<script language="javascript">alert("Đã upload thành công!");</script>';
                                                                                            ?> <?php  } else { ?>
                                    <h4 class="alert alert-warning">
                                        <?php echo 'Thêm thất bại'; ?>
                                    </h4>
                                    <?php    }
                                                                                        } ?>
                                    <hr>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-->

                </div>
                <!-- end row-->


            </div>
            <!-- END container-fluid -->

        </div>
        <!-- END content -->

    </div>
    <!-- END content-page -->