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

            <?php
            if (isset($data["updateClass"])) {
                if ($data["updateClass"] == true) {
                    echo '<script language="javascript">alert("Đã update thành công!");</script>';
                } else {
                    echo '<script language="javascript">alert("update thất bại!");</script>';
                }
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
                        <?php
                        $i = 1;
                        while ($row = mysqli_fetch_array($data["editClass"])) {
                            $i++;
                        ?>
                        <form action="" method="post" enctype="multipart/form-data">

                            <div class="modal-body box-class">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label> Mã Lớp: </label>
                                            <input class="form-control" value="<?php echo $row["malop"]; ?>"
                                                name="malop" type="text" disabled />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label> Tên Lớp: </label>
                                            <input class="form-control" value="<?php echo $row["ten_lop"]; ?>"
                                                name="name" type="text" disabled />
                                        </div>
                                    </div>


                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Phòng Học:</label>
                                            <input class="form-control" value="<?php echo $row["phong"]; ?>"
                                                name="phong" type="text" disabled />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label> Số lượng HV dự kiến: </label>
                                            <input class="form-control" value="<?php echo $row["so_luongHV"]; ?>"
                                                name="so_luongHV" type="text" disabled />
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Mã Khóa Học :</label>
                                            <input class="form-control" value="<?php echo $row["sourse_detail_id"]; ?>"
                                                name="sourse_detail_id" type="text" disabled />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Trạng thái Hoạt động:</label>
                                            <input class="form-control" value="<?php echo $row["trangthai"]; ?>"
                                                name="trangthai" type="text" disabled />
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <?php
                        }
                            ?>
                        </form>

                        <div class="card-body">

                            <div id="accordion" role="tablist">

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
                                                        <th>Mã Lớp Học</th>
                                                        <th>Tên Khóa Học</th>
                                                        <th>Phòng</th>
                                                        <th>Lịch Học</th>
                                                        <th>Thời gian</th>
                                                        <th>Ca Học</th>
                                                        <th>Lượng Thời Gian</th>
                                                        <th>Lượng Tiết Học</th>
                                                        <th>Ngày Khai Giảng</th>

                                                    </tr>
                                                </thead>
                                                <?php
                                                    $i = 1;
                                                    while ($row = mysqli_fetch_assoc($data["class_all_detail"])) {
                                                    ?>
                                                <tbody>
                                                    <tr>
                                                        <th><?php echo $row["id_class"] ?></th>
                                                        <th><?php echo $row["malop"] ?></th>
                                                        <td><?php echo $row["tenkhoahoc"]; ?></td>
                                                        <td><?php echo $row["phong"]; ?></td>
                                                        <td><?php echo $row["lichhoc"]; ?></td>
                                                        <td><?php echo $row["giohoc"]; ?></td>
                                                        <td><?php echo $row["buoi"]; ?></td>
                                                        <td><?php echo $row["sl_tuan"]; ?></td>
                                                        <td><?php echo $row["sl_tiet"]; ?></td>
                                                        <td><?php $fomat = strtotime($row["ngaykhaigiang"]);
                                                                    echo date('d/m/Y ', $fomat); ?></td>

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
                            </div>
                        </div>
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
        </div>
        <!-- END container-fluid -->
    </div>
    <!-- END content -->
</div>
</div>
<!-- END content -->
</div>