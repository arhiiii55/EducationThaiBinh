<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Inbox</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Inbox</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3><i class="far fa-envelope"></i> messages (unread)</h3>
                        </div>
                        <!-- end card-header -->
                        <div class="card-body">

                            <div class="table-responsible">

                                <table class="table table-condensed table-hover table-bordered table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th style="min-width:320px">Chi tiết Message</th>
                                            <th style="min-width:180px">Thông tin người gửi</th>
                                            <th style="min-width:100px">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        while ($row = mysqli_fetch_assoc($data["getmail"])) {
                                        ?>
                                        <tr>
                                            <div class="chiaphan">
                                                <td>
                                                    <h5><span class="text-danger"><b>
                                                                [<?php echo $row["tinhtrang"]; ?>]
                                                            </b></span>
                                                        <a href="Home/mailboxReply/<?php echo $row["id_mailbox"] ?>"><b>
                                                                <?php echo $row["tieude"]; ?>
                                                            </b></a>
                                                    </h5>
                                                    <p>June 04 2018, 13:15</p>
                                                    <p>
                                                        <?php echo $row["quantamKH"]; ?>
                                                    </p>
                                                    <p>
                                                        <?php echo $row["noidung"]; ?>.
                                                    </p>
                                                </td>

                                                <td>
                                                    <div class="mail_list">
                                                        <p>
                                                            <?php echo $row["tendk"]; ?>
                                                        </p>
                                                        <p>
                                                            <?php echo $row["email"]; ?>
                                                        </p>
                                                    </div>
                                                </td>

                                                <td>
                                                    <a href="Home/mailboxReply/<?php echo $row["id_mailbox"] ?>"
                                                        class="btn btn-primary btn-sm btn-block"><i
                                                            class="fas fa-search"></i> Read</a>
                                                    <a href="Home/mailbox_delete/<?php echo $row["id_mailbox"] ?>"
                                                        class="btn btn-danger btn-sm btn-block mt-2"><i
                                                            class="fas fa-trash"></i> Delete</a>
                                                </td>
                                            </div>

                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <?php
                                if (isset($data["mailbox_delete"])) {
                                    if ($data["mailbox_delete"] == true) {
                                        echo '<script language="javascript">alert("Đã xóa thành công!");</script>';
                                    } else {
                                        echo '<script language="javascript">alert("Đã xóa thất bại!");</script>';
                                    }
                                } ?>
                            </div>

                        </div>
                        <!-- end card-body -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- END container-fluid -->
    </div>
    <!-- END content -->
</div>
<!-- END content-page -->