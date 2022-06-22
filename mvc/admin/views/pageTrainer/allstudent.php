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
                            <li class="breadcrumb-item active">Tất cả thông tin Học Viên</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Documentation</h4>
                <ol class="breadcrumb float-right">
                    <!-- <li class="breadcrumb-item active">Tất cả thông tin Học Viên</li> -->

                </ol>

            </div>
            <!-- end row -->

            <div class="row center-row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="fas fa-table"></i> Bảng Thông tin Học sinh thu thập được</h3>
                            <p> Quản lý học viên gồm thông tin cơ bản của học viên và những học viên đã đăng ký khóa học
                            </p>

                            <!-- <li class="breadcrumb-item active">
                            </li> -->
                            <!-- <span class="pull-left">
                            </span> -->




                        </div>
                        <div class="col-md-12">

                            <hr>
                            <div class="card-body">
                                <div class="invoice-title text-left mb-3">
                                    <h2>Danh Sách HV Trong Lớp: </h2>
                                    <strong></strong>
                                </div>
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
                                                    Thông Tin liên hệ Học Viên
                                                </a>
                                            </h5>
                                        </div>

                                        <div id="collapseTwo" class="collapse show" role="tabpanel"
                                            aria-labelledby="headingOne" data-parent="#accordion">
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table id="dataTable"
                                                        class="table table-bordered table-hover display"
                                                        style="width:100%">
                                                        <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>hình ảnh</th>
                                                                <th>Tên học Viên</th>
                                                                <th>Trường</th>
                                                                <th>Sdt</th>
                                                                <th>Gmail</th>
                                                                <th>Tên Lớp</th>
                                                                <th>active</th>
                                                                <!-- <th style="min-width:60px;">action</th> -->
                                                            </tr>
                                                        </thead>
                                                        <?php
                                                        $i = 1;
                                                        while ($row = mysqli_fetch_assoc($data["getClass_byIdTrainer_id"])) {
                                                        ?>
                                                        <tbody>
                                                            <tr>
                                                                <th><?php echo $row["MaHV"] ?></th>
                                                                <th> <img style="width: 80px;"
                                                                        src="mvc\photo\<?php echo $row["imgHV"] ?>"
                                                                        alt="" name="hinhanh" class="img-thumbnail">
                                                                </th>
                                                                <td> <?php echo $row["tenhv"]; ?></td>
                                                                <td><?php echo $row["ngaysinh"]; ?></td>
                                                                <td><?php echo $row["sdt"]; ?></td>
                                                                <td><?php echo $row["gmail"]; ?></td>
                                                                <td><?php echo $row["ten_lop"]; ?></td>
                                                                <td><?php echo $row["actived"]; ?></td>
                                                                <!-- <td>
                                                        <input type="submit" class="btn btn-primary" value="DS Học Viên">
                                                        </td> -->
                                                                <!-- <td>
                                                                    <a href="Home2/allstudent_edit/<?php echo $row["id_students"]; ?>"
                                                                        class="btn btn-primary btn-sm btn-block"><i
                                                                            class="far fa-edit"></i>
                                                                        Edit</a>

                                                                    <a href="Home2/allstudent_delete/<?php echo $row["id_students"]; ?>"
                                                                        class="btn 
                                                              btn-danger btn-sm btn-block mt-2"><i
                                                                            class="fas fa-trash">
                                                                        </i>
                                                                        Delete </a>
                                                                </td> -->
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