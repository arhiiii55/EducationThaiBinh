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
                    // $i = 1;
                    // while ($row = mysqli_fetch_assoc($data["MailboxDeital"])) {
                    ?>
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="far fa-envelope"></i> Thông Báo Học Viên</h3>
                        </div>

                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-9 col-xl-9">
                                    <form action="mail/mailSendLocal/" method="post">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <!-- <input class="form-control" value="" name="" type="text" /> -->
                                                <label>Chọn Học Viên</label>
                                                <select name="id_student" class=" form-control">
                                                    <?php
                                                    while ($row_st = mysqli_fetch_assoc($data["showstudent"])) { ?>
                                                    <option value="<?php echo $row_st["id_students"]; ?>">
                                                        <?php echo $row_st["MaHV"] . ' | ' . $row_st["tenhv"]; ?>
                                                    </option>
                                                    <?php } ?>
                                                </select>
                                                <hr>
                                                <h6>
                                                    <label>Nhập tiêu đề</label>
                                                    <input class="form-control" value="" name="tieude" type="text" />
                                                </h6>
                                                <div class="form-group">
                                                    <label>Nội dung gửi Thư</label>
                                                    <textarea class="form-control editor" name="noidung" rows="10"
                                                        required></textarea>
                                                </div>
                                                <select name="loaithongbao" class=" form-control">
                                                    <option value="private"> Private 1 member </option>
                                                    <option value="public"> Public all </option>
                                                </select>
                                                <br>
                                            </div>
                                            <div class="col-lg-12">
                                                <button type="submit" name="submit_add" class="btn btn-primary"> xác
                                                    nhận
                                                </button>

                                            </div>

                                        </div>
                                    </form>
                                    <?php
                                    if (isset($data["insert_notification"])) {
                                        if ($data["insert_notification"] == true) { ?>
                                    <?php
                                            echo '<script language="javascript">alert("Thông báo gửi thành công!");</script>';
                                            ?>

                                    <?php  } else { ?>
                                    <?php echo 'không gửi được'; ?>
                                    <?php echo '<script language="javascript">alert("Thông báo gửi thất bại!");</script>';
                                        }
                                    } ?>

                                </div>


                                <div class="col-lg-3 col-xl-3 border-left">
                                    <?php
                                    $row_account = mysqli_fetch_assoc($data["result"])
                                    ?>
                                    <b>Người gửi</b>: <?php echo $_SESSION["ten_taikhoan"]; ?><br />
                                    <br />
                                </div>
                            </div>

                        </div>
                        <!-- end card-body -->

                    </div>
                    <?php
                    // }
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