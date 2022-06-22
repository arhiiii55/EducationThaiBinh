<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Nhân Viên</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Thêm Nhân Viên</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <!-- 
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Documentation</h4>
                <p>Toggle the visibility of content across your project with a few classes and our JavaScript plugins.
                    You can find examples and documentation about Bootstrap Collapse here: <a target="_blank"
                        href="http://getbootstrap.com/docs/4.3/components/collapse/">Bootstrap
                        Collapse Documentation</a></p>
            </div> -->
            <?php
            if (isset($data["addClass"])) {
                if ($data["addClass"] == true) { ?>
            <?php
                    echo '<script language="javascript">alert("Đã thêm thành công!");<a href="Home/coursesDetail">tiếp tục thêm người dạy</a></script>';

                    ?>

            <?php  } else { ?>

            <?php echo '<script language="javascript">alert("Thêm thất bại!");</script>'; ?>
            <?php    }
            } ?>

            <div class="row row-length center-row">
                <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
                    <div class="card mb-3">
                        <br>
                        <form action="staffdetail/insert_staff" method="POST" enctype="multipart/form-data">
                            <div class="row center-row">
                                <div class="form-group col-xl-5 col-md-5 col-sm-11 border-left">

                                    <div class="form-group">
                                        <label>Mã Nhân Viên </label>
                                        <!-- dòng value b-->
                                        <input class="form-control" value="" name="manv" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Tên Nhân Viên</label>
                                        <!-- dòng value b-->
                                        <input class="form-control" value="" name="tennv" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Chức Danh</label>
                                        <!-- pattern="[1-9]{1}[0-9]{9}"  -->
                                        <input type="text" title="" placeholder="" class=" form-control"
                                            name="chucdanh">
                                    </div>

                                    <div class="form-group">
                                        <button type="submit" name="submit_add" class="btn btn-primary"> Thêm
                                            Nhân Viên </button>
                                        <!-- <a href="Home/allstudentPage">
                                            <button type="button" name="" class=" btn btn-primary">Xem Danh
                                                Sách Sinh
                                            </button>
                                        </a> -->

                                    </div>
                                    <i style="color: red;">Chú ý: Điền đầy đủ form nhân viên </i>
                                </div>

                                <div class="form-group col-xl-5 col-md-5 col-sm-11 border-left">
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
                                        <label>Loại </label>
                                        <input type="text" title="" placeholder="" class="form-control" name="loainv">
                                    </div>
                                    <div class="form-group">
                                        <label>Mô Tả Công Việc</label>
                                        <!-- dòng value b-->
                                        <input class="form-control" value="" name="mota" type="text">
                                    </div>

                                </div>
                            </div>
                            <!-- end row -->

                        </form>
                        <?php
                        // } 
                        ?>
                        <div class="card-body">

                            <div id="accordion" role="tablist">
                                <?php
                                // $i = 1;
                                // while ($row = mysqli_fetch_array($data["class_all"])) {
                                //     $i++;
                                ?>
                                <div class="card">
                                    <div class="card-header" role="tab" id="headingOne">
                                        <h5 class="mb-0">
                                            <a data-toggle="collapse" href="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                Danh Sách Nhân Viên
                                            </a>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" role="tabpanel"
                                        aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            <div> Chi tiết lớp học</div>
                                            <table id="dataTable" class="table table-bordered table-hover display"
                                                style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Mã Nhân Viên</th>
                                                        <th>Tên Nhân Viên</th>
                                                        <th>Chức Danh</th>
                                                        <th>Số Điện Thoại</th>
                                                        <th>Gmail</th>
                                                        <th>Loại Nhân Viên</th>
                                                        <th>Mô Tả Công Việc</th>
                                                    </tr>
                                                </thead>
                                                <?php
                                                $i = 1;
                                                while ($row1 = mysqli_fetch_assoc($data["selectStaff_all"])) {
                                                ?>
                                                <tbody>
                                                    <tr>
                                                        <th><?php echo $row1["maNV"] ?></th>
                                                        <td><?php echo $row1["tenNV"]; ?></td>
                                                        <td><?php echo $row1["chucdanh"]; ?></td>
                                                        <td><?php echo $row1["sdtNV"]; ?></td>
                                                        <td><?php echo $row1["gmailNV"]; ?></td>
                                                        <td><?php echo $row1["loai_NV"]; ?></td>
                                                        <td><?php echo $row1["motaCV"]; ?></td>
                                                        <td>
                                                            <a href="staffdetail/edit_staff/<?php echo $row1["id_staff"]; ?>"
                                                                class="btn btn-primary btn-sm btn-block"><i
                                                                    class="far fa-edit"></i>
                                                                Edit</a>
                                                            <a href="staffdetail/delete_staff/<?php echo $row1["id_staff"]; ?>"
                                                                class="btn btn-danger btn-sm btn-block mt-2"><i
                                                                    class="fas fa-trash"></i> Delete</a>
                                                        </td>
                                                    </tr>

                                                </tbody>
                                                <?php

                                                } ?>
                                            </table>

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
            <?php
            if (isset($data["addClass"])) {
                if ($data["addClass"] == true) { ?>
            <h4 class="alert alert-success">
                <?php echo 'thành công'; ?>
            </h4>
            <?php  } else { ?>
            <h4 class="alert alert-warning">
                <?php echo 'thất bại'; ?>
            </h4>
            <?php    }
            } ?>

        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->

</div>