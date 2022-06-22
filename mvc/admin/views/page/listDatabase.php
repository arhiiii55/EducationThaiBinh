<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">DataTables</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">DataTables</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="fas fa-table"></i> Học Viên Đã Đăng Ký Khóa Học</h3>
                            Danh Sách học Viên Đăng ký khóa học.
                            <!-- <a target="_blank" href="https://datatables.net/">(more details)</a> -->
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="dataTable" class="table table-bordered table-hover display"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên học Viên</th>
                                            <th>Trường</th>
                                            <th>sdt</th>
                                            <th>gmail</th>
                                            <th>Mã khóa học</th>
                                            <th>Khóa Học Đăng Ký</th>
                                            <th>Học Phí</th>
                                            <th>Ngày Khai Giảng</th>
                                            <th>Ngày Kết Thúc</th>
                                        </tr>
                                    </thead>
                                    <?php
                                    $i = 1;
                                    while ($row1 = mysqli_fetch_assoc($data["showstudent"])) {
                                    ?>
                                    <tbody>
                                        <tr><?php $i++; ?>
                                            <th>
                                                <?php echo $row1["id_students"] ?></th>
                                            <td> <?php echo $row1["tenhv"]; ?></td>
                                            <td><?php echo $row1["truong"]; ?></td>
                                            <td><?php echo $row1["sdt"]; ?></td>
                                            <td><?php echo $row1["gmail"]; ?></td>
                                            <td><?php echo $row1["id_sourse_detail"]; ?></td>
                                            <td><?php echo $row1["tenkhoahoc"]; ?></td>
                                            <td> <?php echo $row1["price"] ?></td>
                                            <td><?php echo $row1["ngaykhaigiang"]; ?> </td>
                                            <td><?php echo $row1["ngayketthuc"]; ?></td>
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
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="fas fa-table"></i> Thông Tin Khóa học </h3>
                            Thông tin Giáo viên, lớp học và cả khóa học hiện tại
                            <!-- <a target="_blank" href="https://datatables.net/">(more details)</a> -->
                        </div>

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
                        <!-- end card-body-->

                    </div>
                    <!-- end card-->

                </div>

            </div>
            <!-- end row-->

        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->

</div>
<!-- END content-page -->


<script>
$(document).on('ready', function() {
    var table = $('#dataTable').DataTable({
        data: dataSet
    });
});
</script>