<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">


            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Message</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item"><a href="Home/adminPage">Home</a></li>
                            <li class="breadcrumb-item"><a href="Home/mailboxPage">Inbox</a></li>
                            <li class="breadcrumb-item active">Message Details</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <?php
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($data["MailboxDeital"])) {
                    ?>
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="far fa-envelope"></i> Thư Từ</h3>
                        </div>

                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-9 col-xl-9">
                                    <h4>
                                        <?php
                                            echo $row["tieude"];
                                            ?>
                                        <?php
                                            echo $row["quantamKH"];
                                            ?>
                                    </h4>
                                    <div class="lead">
                                        <?php
                                            echo $row["noidung"];
                                            ?> <br />
                                        <br />
                                    </div>
                                    <hr />

                                    <form
                                        action="mail/update_mail/<?php echo $row["id_mailbox"] . '/' . $row["email"];  ?>"
                                        method="post">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Gửi thư phản hồi</label>
                                                    <select name="tinhtrang" class=" form-control">Tình trạng
                                                        <option value="Đã phản hồi">Đã phản hồi</option>
                                                        <option value="Chưa phản hồi">Chưa phản hồi</option>
                                                    </select>
                                                    <textarea class="form-control editor" name="reply" rows="10"
                                                        required><?php echo $row["thuphanhoi"];
                                                                                                                                ?></textarea>
                                                </div>
                                                <input type="text" value="<?php echo $row["email"];
                                                                                ?>" name="email_send" disabled>
                                            </div>

                                            <div class="col-lg-12">
                                                <button type="submit" name="submit_mail" class="btn btn-primary"> xác
                                                    nhận
                                                </button>

                                            </div>

                                        </div>
                                    </form>
                                    <?php
                                        if (isset($data["updateMail"])) {
                                            if ($data["updateMail"] == true) { ?>
                                    <?php
                                                echo '<script language="javascript">alert("Thư phản hồi gửi thành công!");</script>';
                                                ?>

                                    <?php  } else { ?>
                                    <h4 class="alert alert-warning">
                                        <?php echo 'không gửi được'; ?>
                                    </h4>
                                    <?php    }
                                        } ?>

                                </div>


                                <div class="col-lg-3 col-xl-3 border-left">
                                    <b>Người gửi</b>: <?php echo $row["tendk"]; ?><br />
                                    <b>Gmail</b>: <?php
                                                        echo $row["email"];
                                                        ?>
                                    <br />
                                    <b>Sent at: </b>: Nov 29 2018, 18:47<br />

                                </div>
                            </div>

                        </div>
                        <!-- end card-body -->

                    </div>
                    <?php
                    }
                    ?>
                    <!-- end card -->

                </div>
                <!-- end col -->

            </div>
            <!-- end row -->

        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->
    <script src="assets/plugins/trumbowyg/trumbowyg.min.js"></script>
    <script src="assets/plugins/trumbowyg/plugins/upload/trumbowyg.upload.js"></script>
    <script>
    $(document).on('ready', function() {
        'use strict';
        $('.editor').trumbowyg();
    });
    </script>
</div>
<!-- END content-page -->