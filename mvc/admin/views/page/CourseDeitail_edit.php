<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Khóa Học</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item active">Tất cả thông tin khóa học</li>
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
                            while ($row = mysqli_fetch_array($data["editSourseDeitail"])) {
                                $i++;
                            ?>
                            <form action="course/coursesDetail_update/<?php echo $row["id_sourse_detail"]; ?>"
                                method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="form-group col-xl-7 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>ID </label>
                                            <input class="form-control" value="<?php echo $row["id_sourse_detail"]; ?>"
                                                name="id" type="text" readonly="Fasle">
                                        </div>
                                        <div class="form-group">
                                            <label>Mã Khóa Học</label>
                                            <input class="form-control" value="<?php echo $row["ma_KH"]; ?>" name="makh"
                                                type="text" required>
                                        </div>
                                        <div class="form-group">
                                            <label>Chương Trình Đạo Tạo</label>
                                            <input class="form-control" value="<?php echo $row["edusource_id"]; ?>"
                                                name="edu" type="text" required>
                                            <!-- <select name="" class="form-control" required>
                                                <option value="1">lập Trình Font-End</option>
                                                <option value="2">lập Trình Back-End</option>
                                                <option value="3">Tiếng Anh</option>
                                                <option value="4">Tiếng Nhật</option>
                                            </select> -->
                                        </div>

                                        <div class="form-group">
                                            <label>Tên Khóa Học</label>
                                            <input class="form-control" value="<?php echo $row["tenkhoahoc"]; ?>"
                                                name="tenkh" type="text" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Nội Dung</label>
                                            <input class="form-control" value="<?php echo $row["mota"]; ?>" name="mota"
                                                type="text" required>
                                            <!-- <input class="form-control" name="title" type="text" required> -->
                                            <!-- <textarea rows="3" value=" "
                                                class="form-control editor" name="mota"></textarea> -->
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="submit_edit" class="btn btn-primary">Sửa thông
                                                tin
                                            </button>
                                            <a href="Home/coursesDetail">
                                                <button type="button" class="btn btn-primary">xem thông tin lại</button>
                                            </a>

                                        </div>
                                        <i style="color: red;">Chú ý: Phần này của Chi Tiết Khóa Học</i>
                                    </div>

                                    <div class="form-group col-xl-5 col-md-6 col-sm-12 border-left">
                                        <div class="form-group">
                                            <label>Thời gian</label>
                                            <input class="form-control" value="<?php echo $row["day_id"]; ?>"
                                                name="day_id" type="text" required>
                                            <!-- <select name="time_id" class="form-control" required>
                                                <option value="1">Thứ: 2 - 4 -6</option>
                                                <option value="2">thứ: 3 - 5 -7</option>
                                                <option value="3">Thứ: 7 - CN</option>
                                            </select> -->
                                        </div>
                                        <div class="form-group">
                                            <label>Số lượng tuần</label>
                                            <input type="text" class="form-control"
                                                value="<?php echo $row["sl_tuan"]; ?> " name="sl_tuan">
                                        </div>
                                        <div class="form-group">
                                            <label>Số lượng tiết dạy</label>
                                            <input type="text" class="form-control"
                                                value="<?php echo $row["sl_tiet"]; ?> " name="sl_tiet">
                                        </div>
                                        <div class="form-group">
                                            <label>Ngày Khai Giảng</label>
                                            <input type="text" class="form-control"
                                                value="<?php echo $row["ngaykhaigiang"]; ?>" name="ngaykhaigiang">
                                        </div>

                                        <div class="form-group">
                                            <label>Ngày Kết Thúc dự kiến</label>
                                            <input type="text" class="form-control"
                                                value="<?php echo $row["ngayketthuc"]; ?> " name="ngayketthuc">
                                        </div>
                                        <div class="form-group">
                                            <label>trạng thái hoạt động </label>
                                            <select name="actived" class="form-control">
                                                <!-- <input type="text" class="form-control" name="actived"> -->
                                                <option value="1">Hoạt Động</option>
                                                <option value="0">Ngừng</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>giá</label>
                                            <input type="text" value="<?php echo $row["price"]; ?> "
                                                class="form-control" name="price">
                                        </div>
                                    </div>

                                </div><!-- end row -->
                            </form>
                            <?php
                            }
                            ?>
                            <?php
                            if (isset($data["updateSourseDeitail"])) {
                                if ($data["updateSourseDeitail"] == true) { ?>
                            <?php
                                    echo '<script language="javascript">alert("Đã update thành công!");</script>';
                                    ?>
                            <?php  } else { ?>
                            <h4 class="alert alert-warning">
                                <?php echo 'không tải được'; ?>
                            </h4>
                            <?php    }
                            } ?>


                        </div>
                        <!-- end card-body -->

                    </div>
                    <!-- end card -->

                </div>
                <!-- end col -->
            </div>
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="fas fa-table"></i> Thời Khóa Biểu Ca Học</h3>
                            Hiển thị lịch học cụ thể cho từng khóa học</br>
                            <strong style="color: red;">lưu ý bạn xóa
                                mục này là các khóa lớp hiện tại của bạn bị
                                xóa</strong>
                        </div>
                        <div class="card-body">

                            <table class="table table-responsive-xl table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Ca Học</th>
                                        <th>Lịch Học</th>
                                        <th>Giờ Học</th>
                                        <th>Buổi Học</th>
                                        <th>Loại Ngày Học</th>
                                        <th style="width:100px;">action</th>
                                    </tr>
                                </thead>
                                <?php
                                $i = 1;
                                while ($row = mysqli_fetch_assoc($data["timeabledays"])) {
                                ?>
                                <tbody>
                                    <tr><?php $i++; ?>
                                        <td><?php echo $i++; ?>
                                        <td><?php echo $row["cahoc"] ?> </td>
                                        <td><?php echo $row["lichhoc"] ?></td>
                                        <td><?php echo $row["giohoc"] ?></td>
                                        <td><?php echo $row["buoi"] ?></td>
                                        <td><?php echo $row["loaingayhoc"] ?></td>
                                        <td><a href="course/timeableDays_delete/<?php echo $row["id_days"] ?>"
                                                class="btn btn-danger btn-sm btn-block mt-2"><i
                                                    class="fas fa-trash"></i> Delete</a>
                                        </td>
                                    </tr>
                                </tbody>
                                <?php } ?>
                            </table>

                        </div>
                    </div>
                    <!-- end card-->
                </div>
            </div>


        </div>
        <!-- END container-fluid -->

    </div>

</div>