<main id="main" data-aos="fade-in">
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs ">
        <div class="container">
            <h2>
                Khóa học tại học viện </h2>
            <p></p>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <section id="courses" class="courses">
        <div class="container" data-aos="fade-up">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                
                <?php
                $i = 1;
                $testrow = mysqli_num_rows($data["getEdu_byid"]) ;
                if ($testrow == 0){
                    ?>
                    <h1 style="text-align: center;">Hiện chưa khai giảng khóa học</h1>
                    <?php
                }
                else {
                while ($row = mysqli_fetch_assoc($data["getEdu_byid"])) {
                ?>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch course-chance">
                    <div class="course-item">
                        <img src="http://localhost/adminqledu/mvc/websiteEdu/assets/img/course-1.jpg" class="img-fluid"
                            alt="...">
                        <div class="course-content">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h4>
                                    <?php echo $row["ten_daotao_khoahoc"]; ?> </h4>
                                <p class="price" style="color: red;"><?php echo number_format($row["price"]) . ' vnd'; ?></p>
                            </div>

                            <h3><a
                                    href="websiteEdu/soursedetail_info/<?php echo $row["id_sourse_detail"]; ?>"><?php echo $row["tenkhoahoc"]; ?></a>
                            </h3>
                            <p style="height: 50px;">
                                <?php echo $row["mota"]; ?>
                            </p>
                            <a href="websiteEdu/soursedetail_info/<?php echo $row["id_sourse_detail"]; ?>">
                                <p style="color: #296849;">Xem chi tiết khóa học ----></p>
                            </a>
                            <!-- <div class="trainer d-flex justify-content-between align-items-center">
                                <div class="trainer-profile d-flex align-items-center">
                                    <img src="http://localhost/adminqledu/mvc/websiteEdu/assets/img/trainers/trainer-1.jpg"
                                        class="img-fluid" alt="">
                                    <span>
                                        <?php 
                                        // echo $row["ten_gv"]; 
                                        ?>
                                    </span>
                                </div>
                                <div class="trainer-rank d-flex align-items-center">
                                    <i class="bx bx-user"></i>&nbsp;50
                                    &nbsp;&nbsp;
                                    <i class="bx bx-heart"></i>&nbsp;65
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div> <!-- End Course Item-->
                <?php }
            } ?>
            </div>

        </div>
    </section><!-- End Courses Section -->

</main><!-- End #main -->