<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Giảng Viên</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"></li>
                            <!-- <li class="breadcrumb-item active">Tables</li> -->
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="fas fa-table"></i> Thông Tin Giáo Viên </h3>
                            Thông tin Giáo viên đầy đủ của học viện.
                            <!-- <a target="_blank" href="https://datatables.net/">(more details)</a> -->
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="dataTable" class="table table-bordered table-hover display"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID giáo viên </th>
                                            <th>Hình ảnh</th>
                                            <th>Tên giáo viên </th>
                                            <th>Mã giáo viên </th>
                                            <th>Mã Nhân Viên</th>
                                            <th>Chức vụ</th>
                                            <th>Đơn vị công tác</th>
                                            <th>Thành tích</th>
                                            <th>Kinh Nghiệm</th>
                                            <th>Số điện thoại</th>
                                            <th>Gmail</th>
                                            <th>Active</th>
                                            <th>Tài Khoản</th>
                                            <th style="min-width:60px;">action</th>

                                        </tr>
                                    </thead>
                                    <?php
                                    $i = 1;
                                    while ($row = mysqli_fetch_assoc($data["showDSTrainer"])) {
                                    ?>
                                    <tbody>
                                        <tr><?php $i++; ?>
                                            <th>
                                                <?php echo $row["id_trainer"]; ?></th>
                                            <th> <img style="width: 80px;"
                                                    src="mvc\photo\<?php echo $row["img_trainer"] ?>" alt=""
                                                    name="hinhanh" class="img-thumbnail"></th>
                                            <td> <?php echo $row["ten_gv"]; ?></td>
                                            <td> <?php echo $row["maNV"]; ?></td>
                                            <td> <?php echo $row["MaGV"]; ?></td>
                                            <td> <?php echo $row["chucvu"]; ?></td>
                                            <td> <?php echo $row["dv_congtac"]; ?></td>
                                            <td> <?php echo $row["thanhtich"]; ?></td>
                                            <td> <?php echo $row["kinhnghiem"]; ?></td>
                                            <td> <?php echo $row["sdt"]; ?></td>
                                            <td> <?php echo $row["gmail"]; ?></td>
                                            <td> <?php echo $row["actived"]; ?></td>
                                            <td> <?php echo $row["ten_taikhoan"]; ?></td>
                                            <td>

                                                <a href="trainers/trainer_ACview/<?php echo $row["id_trainer"]; ?>"
                                                    class="btn btn-primary btn-sm btn-block"><i class="far fa-edit"></i>
                                                    View</a>

                                            </td>

                                        </tr>
                                    </tbody>
                                    <?php } ?>
                                </table>
                            </div>
                            <!-- end table-responsive-->

                        </div>
                        <!-- end card-body-->

                    </div>
                    <!-- end card-->

                </div>

            </div>

        </div>
        <!-- END container-fluid -->

    </div>

</div>