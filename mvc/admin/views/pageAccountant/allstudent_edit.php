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
                            while ($row = mysqli_fetch_assoc($data["editStudent"])) {
                                $i++;
                            ?>
                            <form action="students/allstudent_update/<?php echo $row["id_students"] ?>" method="POST">
                                <div class="row">
                                    <div class="form-group col-xl-3 col-md-5 col-sm-12">
                                        <div class="form-group">
                                            <label>Hình ảnh</label>
                                            <div class="img-avatar">
                                                <img src="mvc\photo\<?php echo $row["imgHV"]; ?>" alt=""
                                                    class="img-thumbnail">
                                            </div>

                                        </div>
                                        <div class="form-group">
                                            <!-- id="filer_example2" multiple="multiple" -->
                                            <input type="file" value="mvc\photo\<?php echo $row["imgHV"]; ?>"
                                                name="hinhanh" style="border: 1px solid black" id="abc">

                                            </input>
                                        </div>
                                    </div>
                                    <div class="form-group col-xl-5 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>ID</label>
                                            <input class="form-control" value="<?php echo $row["id_students"]; ?>"
                                                name="id_student" type="text" readonly="False">
                                        </div>
                                        <div class="form-group">
                                            <label>Ma HV</label>
                                            <input class="form-control" value="<?php echo $row["MaHV"]; ?>" name="ma_HV"
                                                type="text" readonly="False">
                                        </div>
                                        <div class="form-group">
                                            <label>Tên Học Viên</label>
                                            <!-- dòng value b-->
                                            <input class="form-control" name="tenhv"
                                                value="<?php echo $row["tenhv"]; ?>">
                                        </div>
                                        <div class=" form-group">
                                            <label>Ngày sinh </label>
                                            <!-- dòng value b-->
                                            <input class="form-control" title="ví dụ 2000/12/03"
                                                placeholder="Nhập Ngày sinh.." value="<?php echo $row["ngaysinh"]; ?>"
                                                name="ngaysinh" type="text">
                                        </div>

                                        <!-- required -->
                                        <!-- button   -->
                                        <div class="form-group">
                                            <!-- <button type="submit" value="" name="add_student" class="btn btn-primary">
                                                Thêm
                                                Học Viên </button> -->
                                            <button type="submit" name="edit_student" class="btn btn-primary"> Sửa
                                                Học
                                                Viên
                                            </button>
                                        </div>
                                        <i style="color: red;">Chú ý: Phần này của Chi Tiết Học Viên</i>
                                    </div>
                                    <div class="form-group col-xl-4 col-md-5 col-sm-12 border-left">
                                        <div class="form-group">
                                            <label>sdt</label>
                                            <input type="tel" value="<?php echo $row["sdt"]; ?>"
                                                pattern="[1-9]{1}[0-9]{9}" title="Nhập sdt với 10 số"
                                                placeholder="Mobile number" class="form-control" name="sdt">
                                        </div>
                                        <div class="form-group">
                                            <label>gmail</label>
                                            <input type="text" value="<?php echo $row["gmail"]; ?>"
                                                title="vd: abc@abc.com" placeholder="Nhập gmail của bạn"
                                                class="form-control" name="gmail">
                                        </div>
                                        <div class="form-group">
                                            <label>active</label>
                                            <select name="actived" class="form-control" required>
                                                <!-- <input type="text" class="form-control" name="actived"> -->
                                                <option value="1">Hoạt động</option>
                                                <option value="0">Ngừng</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->

                            </form>
                            <?php
                            }
                            ?>
                            <?php
                            if (isset($data["updateStudent"])) {
                                if ($data["updateStudent"] == true) { ?>
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
                                    <h5>Lịch sử đăng ký khóa học: </h5>
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
                                                <?php
                                                $i = 1;
                                                while ($row = mysqli_fetch_assoc($data["studentView_action"])) {
                                                ?>
                                                <tr>
                                                    <td>
                                                        <?php echo $i++; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo $row["MaHV"]; ?>
                                                    </td>
                                                    <td> <?php echo $row["tenkhoahoc"]; ?> </td>
                                                    <td> <?php $fomat = strtotime($row["ngaylap_hd"]);
                                                                echo date('d/m/Y', $fomat); ?> </td>
                                                    <td> <?php echo $row["ten_lop"]; ?> </td>
                                                    <td> <?php echo $row["id_bill"]; ?> </td>
                                                    <td>
                                                        <?php $fomat = strtotime($row["ngaylap_hd"]);
                                                            echo date('d/m/Y', $fomat); ?>
                                                    </td>
                                                    <td> <?php echo $row["total"]; ?> </td>
                                                    <td> <?php echo $row["tinhtrang"]; ?> </td>
                                                    <td> <?php echo $row["trangthai"]; ?> </td>
                                                    <!-- <td> <a href="students/allstudent_delete/<?php echo $row["id_students"]; ?>"
                                                            class="btn 
                                                                 btn-danger btn-sm btn-block mt-2"><i
                                                                class="fas fa-trash">
                                                            </i>
                                                            Delete </a></td> -->

                                                </tr>
                                                <?php }
                                                ?>

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