<div class="content-page">
    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Học Viên</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item active">Tất cả thông tin Học Viên</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                    <div class="card mb-3">
                        <div class="card-body">
                            <?php
                            $i = 1;
                            while ($row = mysqli_fetch_assoc($data["editStaff"])) {
                                $i++;
                            ?>
                            <form action="staffdetail/update_staff/<?php echo $row["id_staff"] ?>" method="POST">
                                <div class="row">
                                    <!-- <div class="form-group col-xl-3 col-md-5 col-sm-12">
                                        <div class="form-group">
                                            <label>Hình ảnh</label>
                                            <div class="img-avatar">
                                                <img src="mvc\photo\" alt="" class="img-thumbnail">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            id="filer_example2" multiple="multiple"
                                            <input type="file" value="mvc\photo\" name="hinhanh"
                                                style="border: 1px solid black" id="abc">

                                            </input>
                                        </div>
                                    </div> -->
                                    <div class="form-group col-xl-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Mã Nhân Viên</label>
                                            <input class="form-control" value="<?php echo $row["maNV"]; ?>" name="manv"
                                                type="text" readonly="False">
                                        </div>
                                        <div class="form-group">
                                            <label>Tên Nhân Viên</label>
                                            <input class="form-control" value="<?php echo $row["tenNV"]; ?>"
                                                name="tennv" type="text">
                                        </div>
                                        <div class="form-group">
                                            <label>chức Danh</label>
                                            <!-- dòng value b-->
                                            <input class="form-control" name="chucdanh"
                                                value="<?php echo $row["chucdanh"]; ?>">
                                        </div>


                                        <!-- required -->
                                        <!-- button   -->
                                        <div class="form-group">
                                            <!-- <button type="submit" value="" name="add_student" class="btn btn-primary">
                                                Thêm
                                                Học Viên </button> -->
                                            <button type="submit" name="submit_update" class="btn btn-primary"> Sửa
                                                Nhân
                                                Viên
                                            </button>
                                        </div>
                                        <i style="color: red;">Chú ý: </i>
                                    </div>
                                    <div class="form-group col-xl-6 col-md-5 col-sm-12 border-left">
                                        <div class=" form-group">
                                            <label>Số Điện Thoại </label>
                                            <!-- dòng value b-->
                                            <input class="form-control" value="<?php echo $row["sdtNV"]; ?>" name="sdt"
                                                type="tel">
                                        </div>
                                        <div class="form-group">
                                            <label>Gmail Nhân Viên</label>
                                            <input type="text" value="<?php echo $row["gmailNV"]; ?>"
                                                class="form-control" name="gmail">
                                        </div>
                                        <div class="form-group">
                                            <label>Vị Trí</label>
                                            <input type="text" value="<?php echo $row["loai_NV"]; ?>"
                                                class="form-control" name="loainv">
                                        </div>
                                        <div class="form-group">
                                            <label>Mô Tả Công Việc</label>
                                            <input type="text" value="<?php echo $row["motaCV"]; ?>"
                                                class="form-control" name="mota">
                                        </div>

                                    </div>
                                </div>
                                <!-- end row -->

                            </form>
                            <?php
                            }
                            ?>
                            <?php
                            if (isset($data["updateStaff"])) {
                                if ($data["updateStaff"] == true) { ?>
                            <?php
                                    echo '<script language="javascript">alert("Đã upload thành công!");</script>';
                                    ?>

                            <?php  } else { ?>
                            <h4 class="alert alert-warning">
                                <?php echo 'Thêm thất bại'; ?>
                            </h4>
                            <?php    }
                            } ?>
                            <hr>
                            <div class="col-md-12">
                                <div class="invoice-title text-left mb-3">
                                    <h5>Lịch sử Hoạt Động: </h5>
                                </div>
                                <hr>
                                <h6 style="color:darkblue;">Khóa học đã đăng ký: </h6>
                                <div class="card-body">

                                    <div class="row">
                                        <hr>
                                        <table id="output_search" class="table table-bordered table-hover display"
                                            style="width:100%">
                                            <!-- <ul id="output_search"></ul> -->
                                            <thead>
                                                <tr>
                                                    <th>STT</th>
                                                    <th>Ma Học Viên</th>
                                                    <th>Khóa Học</th>
                                                    <th>Thời gian đăng ký</th>
                                                    <th>Lớp</th>
                                                    <th>Mã HĐ</th>
                                                    <th>Ngày Lập HĐ</th>
                                                    <th>Học Phí</th>
                                                    <th>Tình trạng Học Phí</th>
                                                    <th>active</th>
                                                    <!-- <th>button</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
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
<script>
let a = document.getElementById("abc").value;
console.log(a);
</script>