<div class="content-page">
    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">
            <!-- form đăng ký ẩn -->
            <div class="row center-row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Học Viên</h1>
                        <ol class="breadcrumb float-right">
                            <!-- <li class="breadcrumb-item active">Tất cả thông tin Học Viên</li> -->
                            <li class="breadcrumb-item active">
                                <div class="modal fade custom-modal" tabindex="-1" role="dialog"
                                    aria-labelledby="modal_add_user" aria-hidden="true" id="modal_add_user">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ol>
                        <div class="clearfix">
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row center-row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <div class="card mb-3">
                        <div class="card-body">
                            <form action="Bill/createBill" method="post" enctype="multipart/form-data">
                                <div class="modal-header">
                                    <h5 class="modal-title">Học Viên đăng ký khóa
                                        học</h5>
                                    <button type="button" class="close" data-dismiss="modal">
                                        <span aria-hidden="true">&times;</span>

                                    </button>
                                </div>

                                <div class="modal-body">

                                    <div class="row">

                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Id đăng ký</label>
                                                <input type="text" name="id_student" value="">
                                                <?php echo $row3["MaHV"] ;?>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Mã khóa học:</label>
                                                <select name="id_course" class="form-control">
                                                    <?php
                                                    $i = 1;
                                                    while ($row = mysqli_fetch_array($data["ShowCourseDetail"])) {
                                                        $i++;
                                                    ?>
                                                    <option value=" <?php echo $row["id_sourse_detail"]; ?>">
                                                        <?php echo '[' . $row["id_sourse_detail"] . ']' . $row["tenkhoahoc"]; ?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Tình trạng:</label>
                                                <select name="tinhtrang" class="form-control">
                                                    <!-- <input type="text" class="form-control" name="actived"> -->
                                                    <option value="Chưa Thanh Toán">Chưa Thanh toán
                                                    </option>
                                                </select>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" name="submit_add_test" class="btn btn-primary">Xác
                                        nhận</button>
                                </div>
                            </form>
                        </div>
                        <!-- end card-body -->

                    </div>
                    <!-- end card -->

                </div>
                <!-- end col -->
            </div>


        </div>

        <!-- END container-fluid -->

    </div>

</div>
<?php
if (isset($data["result_insert"])) {
    if ($data["result_insert"] == true) { ?>
<?php
        echo '<script language="javascript">alert("Đã thêm Học viên mới!");</script>';
        ?>

<?php  } else { ?>
<h4 class="alert alert-warning">
    <?php echo 'Thêm thất bại'; ?>
</h4>
<?php    }
} ?>