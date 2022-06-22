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
                                <span class="pull-right">
                                    <button class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target="#modal_add_user">
                                        <i class="fas fa-user-plus" aria-hidden="true"></i>
                                        đăng ký khóa học</button>
                                </span>
                                <div class="modal fade custom-modal" tabindex="-1" role="dialog"
                                    aria-labelledby="modal_add_user" aria-hidden="true" id="modal_add_user">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="Bill/student_resgiter" method="post"
                                                enctype="multipart/form-data">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Học Viên đăng ký khóa
                                                        học</h5>
                                                    <button type="button" class="close" data-dismiss="modal">
                                                        <span aria-hidden="true">&times;</span>
                                                        <span class="sr-only">Close</span>
                                                    </button>
                                                </div>

                                                <div class="modal-body">

                                                    <div class="row">

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Id đăng ký</label>
                                                                <select name="id_student" class="form-control">
                                                                    <?php
                                                                    $i = 1;
                                                                    while ($row3 = mysqli_fetch_array($data["showstudent"])) {
                                                                        $i++;
                                                                    ?>
                                                                    <option name="id_student"
                                                                        value="<?php echo $row3["id_students"] ?>">
                                                                        <?php echo '[' . $row3["MaHV"] . '] ' . $row3["tenhv"] ?>
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
                                                                <label>Mã khóa học:</label>

                                                                <select name="id_course" class="form-control">
                                                                    <?php
                                                                    $i = 1;
                                                                    while ($row = mysqli_fetch_array($data["courseDetail"])) {
                                                                        $i++;
                                                                    ?>
                                                                    <option
                                                                        value=" <?php echo $row["id_sourse_detail"]; ?>">
                                                                        <?php echo '[' . $row["id_sourse_detail"] . ']' . $row["tenkhoahoc"]; ?>
                                                                    </option>
                                                                    <?php } ?>
                                                                </select>
                                                                <!-- <input class="form-control" name="id_sourse_detail"
                                                                    type="text" placeholder="vui lòng nhập vào đây" /> -->
                                                                <!-- <div class="card-body">
                                                                                    <input type="text" class="form-control"
                                                                                        name="singledatepicker" />
                                                                                </div> -->
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
                                                    <button type="submit" name="submit_add_test"
                                                        class="btn btn-primary">Xác
                                                        nhận</button>
                                                </div>

                                            </form>

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
                            <form
                                action="students/allstudent_insert/<?php echo $_SESSION["id_account"] . '/' . $_SESSION["role_id"] ?>"
                                method="POST" enctype="multipart/form-data">
                                <div class=" row">
                                    <div class="form-group col-xl-3 col-md-5 col-sm-12">
                                        <div class="form-group">
                                            <!-- // id="filer_example2" multiple="multiple" -->
                                            <label>Hình ảnh</label>
                                            <input class="form-control" name="hinhanh" type="file"
                                                style="border: 1px solid black">
                                        </div>
                                        <div class="form-group">
                                            <label>Ma HV</label>
                                            <!-- dòng value b-->
                                            <input class="form-control" value="" name="ma_HV" type="text">
                                        </div>
                                        <!-- <div class="card-header"> -->
                                    </div>
                                    <div class=" form-group col-xl-5 col-md-6 col-sm-12 border-left">

                                        <div class="form-group">
                                            <label>Tên Học Viên</label>
                                            <!-- dòng value b-->
                                            <input class="form-control" value="" name="tenhv" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>Ngày sinh </label>
                                            <!-- dòng value b-->
                                            <input class="form-control" title="ví dụ 2000/12/03"
                                                placeholder="Nhập Ngày sinh.." value="" name="ngaysinh" type="date">
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" name="add_student" class="btn btn-primary"> Thêm
                                                Học Viên </button>
                                        </div>
                                        <i style="color: red;">Chú ý: Phần này của Chi Tiết Học Viên</i>
                                    </div>

                                    <div class="form-group col-xl-4 col-md-5 col-sm-12 border-left">
                                        <div class="form-group">
                                            <label>số điện thoại</label>
                                            <!-- pattern="[1-9]{1}[0-9]{9}"  -->
                                            <input type="text" title="Nhập sdt với 10 số" placeholder="Mobile number"
                                                class=" form-control" name="sdt">
                                        </div>
                                        <div class="form-group">
                                            <label>gmail</label>
                                            <input type="text" title="vd: abc@abc.com" placeholder="Nhập gmail của bạn"
                                                class="form-control" name="gmail">
                                        </div>
                                        <div class="form-group">
                                            <label>active</label>
                                            <select name="actived" class="form-control">
                                                <!-- <input type="text" class="form-control" name="actived"> -->
                                                <option value="1">Hoạt động</option>
                                                <option value="0">Ngừng</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

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