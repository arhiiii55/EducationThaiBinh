<main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
        <div class="container">
            <h2>Giảng viên</h2>
            <p>Đội ngũ giáo viên có kinh nghiệm giảng dạy nhiều năm, và có bề dày kinh nghiệm </p>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Trainers Section ======= -->
    <section id="trainers" class="trainers">
        <div class="container" data-aos="fade-up">

            <div class="row" data-aos="zoom-in" data-aos-delay="100">
                <?php
                $i = 1;
                while ($row = mysqli_fetch_assoc($data["showListTrainers"])) {
                    $i++; ?>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="mvc/photo/<?php echo $row["img_trainer"] ?>" class="img-fluid" alt="">
                        <div class="member-content">
                            <h4><?php echo $row["ten_gv"]; ?></h4>
                            <span> <?php echo $row["chucvu"]; ?></span>
                            <span> <?php echo $row["dv_congtac"]; ?></span>
                            <p> <?php echo $row["thanhtich"];
                                    '<\br>' ?>
                                <?php echo $row["kinhnghiem"];
                                    '<\br>' ?>
                            </p>
                            </br>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>

            </div>

        </div>
    </section><!-- End Trainers Section -->

</main><!-- End #main -->