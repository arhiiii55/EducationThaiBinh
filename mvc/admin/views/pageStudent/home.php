<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Dashboard</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

                        <div class="clearfix"></div>
                    </div>
                </div>

            </div>
            <!-- end row -->
            <?php $row = mysqli_fetch_assoc($data["countStudent"]) ?>
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box noradius noborder bg-danger">
                        <a href="students/allstudent_insert">
                            <i class="far fa-user float-right text-white"></i>
                            <h6 class="text-white text-uppercase m-b-20">Quản lý Học Viên</h6>
                            <h1 class="m-b-20 text-white counter"><?php echo $row["tong"] ?></h1>
                            <p class="text-white"><?php echo $row["tong"] ?> Học viên</p>
                            <u class="text-white">
                                <h8> Chi tiết sinh viên tại đây</h8>
                            </u>
                        </a>
                    </div>
                </div>

                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box noradius noborder bg-purple">
                        <a href="trainers/trainerPage">
                            <i class="fa-2x mr-2 fas fa-user-tie float-right text-white"></i>
                            <h6 class="text-white text-uppercase m-b-20">Quản lý giáo viên </h6>
                            <h1 class="m-b-20 text-white counter">8
                            </h1>
                            <p class="text-white">8 giáo viên</p>
                            <u class="text-white">

                                <h8> chi tiết giáo viên tại đây</h8>
                            </u>
                        </a>

                    </div>
                </div>

                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box noradius noborder bg-warning">
                        <a href="Home/coursesDetail">
                            <i class="fa-2x mr-2 fas fa-school float-right text-white"></i>
                            <h7 class="text-white text-uppercase m-b-20">Quản lý Khóa Học</h7>
                            <h1 class="m-b-20 text-white counter">320</h1>
                            <p class="text-white">Khóa học đã mở</p>
                            <u class="text-white">
                                <h8> chi tiết khóa học</h8>
                            </u>
                        </a>

                    </div>
                </div>
                <?php $row = mysqli_fetch_assoc($data["count_messages"]) ?>

                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div class="card-box noradius noborder bg-info">
                        <a href="Home/mailboxPage">
                            <i class="far fa-envelope float-right text-white"></i>
                            <h6 class="text-white text-uppercase m-b-20">Messages</h6>
                            <h1 class="m-b-20 text-white counter"><?php echo $row["tong"] ?></h1>
                            <p class="text-white">Số tin nhắn từ HV</p>
                            <u class="text-white">
                                <h8> chi tiết mail gửi</h8>
                            </u>
                        </a>

                    </div>
                </div>
                <?php $row = mysqli_fetch_assoc($data["countClass_forIndex"]) ?>
                <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                    <div style="background-color :#6eb283" class=" card-box noradius noborder ">
                        <a href=" Home/classPage">
                            <i class="fa-2x mr-2 fab float-right fa-free-code-camp  text-white"></i>
                            <h6 class="text-white text-uppercase m-b-20">Lớp học</h6>
                            <h1 class="m-b-20 text-white counter"><?php echo $row["tong"] ?></h1>
                            <p class="text-white"><?php echo $row["tong"]; ?> đang mở </p>
                            <u class="text-white">
                                <h8> </h8>
                            </u>
                        </a>

                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="row">
                <div class="col-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3>
                                <i class="fas fa-table"></i> Khóa Học Hiện Hành
                            </h3>
                        </div>

                        <div class="card-body">

                            <div class="row">
                                <?php
                                $i = 1;
                                while ($row = mysqli_fetch_assoc($data["courseDetail"])) {
                                ?>
                                <!-- col-sm-6 col-md-6 col-lg-6 -->
                                <div class="col-xs-12 col-xl-3 align-middle" style="border-right:  1px solid #7641ae;">

                                    <!-- Price Table Item -->
                                    <div class="price-table text-center">
                                        <div class="price-table-heading">
                                            <?php $i++; ?>
                                            <h6 class="title" style="color: #7641ae ;">
                                                <?php echo $row["tenkhoahoc"]; ?>
                                            </h6>
                                        </div>
                                        <div class="price-table-body">
                                            <p class="value"><?php echo $row["price"]; ?>
                                            </p>
                                        </div>
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <i class="icon-ok text-success"></i> <?php echo $row["giohoc"]; ?>
                                            </li>
                                            <li class="list-group-item">
                                                <i class="icon-ok text-success"></i>Thứ: <?php echo $row["lichhoc"]; ?>
                                            </li>
                                            <li class="list-group-item">
                                                <i class="icon-ok text-success"></i>Ngày Khai Giảng:
                                                <?php echo $row["ngaykhaigiang"]; ?>
                                            </li>
                                        </ul>
                                        <div class="price-table-footer">
                                            <a class="btn btn-lg btn-success"
                                                href="course/coursesDetail_edit/<?php echo $row["id_sourse_detail"]; ?>">Xem</a>
                                        </div>
                                    </div>
                                    <!-- END Price Table Item -->

                                    <div class="col-xs-12 col-sm-12 mb-5"></div>

                                </div>
                                <?php
                                }
                                ?>
                            </div>
                            <!-- end row-->

                        </div>
                        <!-- end card body-->

                    </div>
                    <!-- end card-->

                </div>
                <div class="card mb-3">
                    <div class="card-header">
                        <h3><i class="fas fa-history"></i> Tasks progress</h3>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </div>

                    <div class="card-body">
                        <p class="font-600 mb-1">Task completed <span class="text-info pull-right"><b>100%</b></span>
                        </p>
                        <div class="progress">
                            <div class="progress-bar progress-xs bg-success" role="progressbar" style="width: 100%"
                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                        <div class="mb-3"></div>

                        <p class="font-600 mb-1">Task 1 <span class="text-primary pull-right"><b>95%</b></span></p>
                        <div class="progress">
                            <div class="progress-bar progress-xs bg-primary" role="progressbar" style="width: 95%"
                                aria-valuenow="95" aria-valuemin="0" aria-valuemax="95">
                            </div>
                        </div>

                        <div class="mb-3"></div>

                        <p class="font-600 mb-1">Task 2 <span class="text-primary pull-right"><b>88%</b></span></p>
                        <div class="progress">
                            <div class="progress-bar progress-xs bg-primary" role="progressbar" style="width: 88%"
                                aria-valuenow="88" aria-valuemin="0" aria-valuemax="88">
                            </div>
                        </div>

                        <div class="mb-3"></div>

                        <p class="font-600 mb-1">Task 3 <span class="text-info pull-right"><b>75%</b></span>
                        </p>
                        <div class="progress">
                            <div class="progress-bar progress-xs bg-info" role="progressbar" style="width: 78%"
                                aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
                            </div>
                        </div>

                        <div class="mb-3"></div>

                        <p class="font-600 mb-1">Task 4 <span class="text-info pull-right"><b>70%</b></span>
                        </p>
                        <div class="progress">
                            <div class="progress-bar progress-xs bg-info" role="progressbar" style="width: 70%"
                                aria-valuenow="70" aria-valuemin="0" aria-valuemax="70">
                            </div>
                        </div>

                        <div class="mb-3"></div>

                        <p class="font-600 mb-1">Task 5 <span class="text-warning pull-right"><b>68%</b></span></p>
                        <div class="progress">
                            <div class="progress-bar progress-xs bg-warning" role="progressbar" style="width: 68%"
                                aria-valuenow="68" aria-valuemin="0" aria-valuemax="68">
                            </div>
                        </div>

                        <div class="mb-3"></div>

                        <p class="font-600 mb-1">Task 6 <span class="text-warning pull-right"><b>65%</b></span></p>
                        <div class="progress">
                            <div class="progress-bar progress-xs bg-warning" role="progressbar" style="width: 65%"
                                aria-valuenow="65" aria-valuemin="0" aria-valuemax="65">
                            </div>
                        </div>

                        <div class="mb-3"></div>

                        <p class="font-600 mb-1">Task 7 <span class="text-danger pull-right"><b>55%</b></span></p>
                        <div class="progress">
                            <div class="progress-bar progress-xs bg-danger" role="progressbar" style="width: 55%"
                                aria-valuenow="55" aria-valuemin="0" aria-valuemax="55">
                            </div>
                        </div>

                        <div class="mb-3"></div>

                        <p class="font-600 mb-1">Task 8 <span class="text-danger pull-right"><b>40%</b></span></p>
                        <div class="progress">
                            <div class="progress-bar progress-xs bg-danger" role="progressbar" style="width: 40%"
                                aria-valuenow="40" aria-valuemin="0" aria-valuemax="40">
                            </div>
                        </div>

                        <div class="mb-3"></div>

                        <p class="font-600 mb-1">Task 9 <span class="text-danger pull-right"><b>20%</b></span></p>
                        <div class="progress">
                            <div class="progress-bar progress-xs bg-danger" role="progressbar" style="width: 20%"
                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="20">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer small text-muted">Updated today at 11:59 PM</div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row-->

</div>
<!-- END container-fluid -->

</div>
<!-- END content -->

</div>