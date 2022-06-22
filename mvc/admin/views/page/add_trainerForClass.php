z<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">

                        <button type="button" onclick="back()">
                            <h1 class="main-title float-left"><a href="Home/classPage">Back</a>
                        </button>
                        </h1>
                        <ol class=" breadcrumb float-right">
                            <li class="breadcrumb-item active">thông tin</li>
                        </ol>
                        <div>
                            <!-- aria-labelledby="modal_add_user" aria-hidden="" id="modal_add_user -->
                            <!-- class="modal fade custom-modal" tabindex="-1" role="dialog" -->
                            <div class=" modal-dialog">
                                <div class="modal-content">
                                    <form action="course/courseDeitail_trainer" method="post"
                                        enctype="multipart/form-data">

                                        <div class="modal-header">
                                            <h5 class="modal-title">Thêm GV phụ trách lớp </h5>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">

                                            <div class="row">

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Mã Giáo Viên</label>
                                                        <select name="id_trainer" class="form-control">
                                                            <?php
                                                            $i = 1;
                                                            while ($row3 = mysqli_fetch_array($data["showstrainer"])) {
                                                                $i++;
                                                            ?>
                                                            <option name="id_trainer"
                                                                value="<?php echo $row3["id_trainer"] ?>">
                                                                <?php echo '[' . $row3["MaGV"] . '] ' . $row3["ten_gv"] ?>
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
                                                        <label>Mã khóa học theo lớp:</label>

                                                        <select name="id_sourse_detail" class="form-control">
                                                            <?php
                                                            $i = 1;
                                                            while ($row = mysqli_fetch_array($data["class_all"])) {
                                                                $i++;
                                                            ?>
                                                            <option value=" <?php echo $row["id_sourse_detail"]; ?>">
                                                                <?php echo '[' . $row["ma_KH"] . '] ' . $row["tenkhoahoc"] ?>
                                                            </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Mã Lớp :</label>
                                                        <select name="class_id" class="form-control">
                                                            <?php
                                                            $i = 1;
                                                            while ($row4 = mysqli_fetch_array($data["class_all_id"])) {
                                                                $i++;
                                                            ?>
                                                            <option value="<?php echo $row4["id_class"]; ?>">
                                                                <?php echo '[' . $row4["id_class"] . '] ' . $row4["ten_lop"] ?>
                                                            </option>
                                                            <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Tình trạng:</label>
                                                        <select name="tinhtrang" class="form-control">
                                                            <option value="Dự Kiến">Dự Kiến
                                                            </option>
                                                            <option value="Đang Học">Đang Học
                                                            </option>
                                                            <option value="Kết Thúc">Kết Thúc
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="submit" name="submit_add" class="btn btn-primary">Xác
                                                nhận</button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- END container-fluid -->

    </div>

</div>