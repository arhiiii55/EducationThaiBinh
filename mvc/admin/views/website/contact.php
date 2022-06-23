<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
        <div class="container">
            <h2>Thông Tin Liên hệ</h2>
            <h5>Thông Tin liên hệ vui lòng điền vào bên dưới. chúng tôi sẽ trả lời sớm nhất có thể. Chúng tôi rất vui vì
                có
                thể giúp bạn.
            </h5>
        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15666.870789794837!2d106.844618!3d10.984668!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3c6feaef748f95fe!2sC%C3%B4ng%20ty%20TNHH%20TMDV%20TDTT%20Th%C3%A1i%20B%C3%ACnh!5e0!3m2!1svi!2s!4v1655962778606!5m2!1svi!2s" 
            frameborder="0" allowfullscreen></iframe>
        </div>

        <div class="container" data-aos="fade-up">

            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Địa chỉ:</h4>
                            <p>65, Lô B2, Khu Phố 11, Tân Phong, Thành phố Biên Hòa, Đồng Nai</p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p>info.academyhcm@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Liên Lạc</h4>
                            <p>Call: 0899 883 234.</p>
                            <p>HotLine: 0902 780 208. </p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="websiteEdu/mailbox_create" method="post" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Họ và tên"
                                    required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="gmail" placeholder="mail"
                                    required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="" placeholder="Tiêu Đề" required>
                        </div>
                        <div class="form-group mt-3">
                            <select name="quantamKH" class="form-control">
                                <?php
                                 while ($row_edu = mysqli_fetch_assoc($data["view_edu"])) {
                                ?>
                                    <option value="<?php echo $row_edu["id_eduSource"];?>"><?php echo $row_edu["ten_daotao_khoahoc"];?></option>
                                <?php }?>
                            </select>
                        </div>

                        <div class="form-group mt-3">
                            <textarea class="form-control" name="Message" rows="5"
                                placeholder=" Để lại tin nhắn tại đây" required></textarea>
                        </div>
                        <!-- <div class="form-group mt-3">
                            <input class="form-control" name="tinhtrang" hidden readonly="fasle">
                        </div> -->
                        <!-- <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">mail của bạn đã được gửi! Cảm ơn bạn đã gửi mail cho chúng tôi!
                            </div>
                        </div> -->
                        <div class="text-center">
                            <button type="submit" name="add_mail" style="background-color: #5fcf80;" class="">Xác nhận
                                Gửi
                            </button>
                        </div>

                    </form>
                    <?php
                    // $row1 = mysqli_fetch_assoc($data["studentShow"]);
                    if (isset($data["result_insert"])) {
                        if ($data["result_insert"] == true) { ?>
                    <p style="color :#296849;">
                        <?php echo 'Thông báo: Cảm ơn bạn đã gửi mail cho chúng tôi';
                                echo '<script language="javascript">alert("mail của bạn đã được gửi!");</script>';
                                ?>
                    </p>
                    <?php  } else { ?>
                    <p style="color: red;">
                        <?php echo '<script language="javascript">alert("xin nhập lại!");</script>';
                                echo "Thông báo: hãy điền lại dầy đủ nhé!"; ?>
                    </p>
                    <?php    }
                    } ?>
                </div>


            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->