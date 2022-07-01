<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Thư</h1>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <!-- end card-header -->
                        <div class="card-body">

                            <div class="table-responsible">

                                <table class="table table-condensed table-hover table-bordered table-responsive-md">
                                    <thead>
                                        <tr>
                                            <th style="min-width:320px; font-size: 23px;">Chi tiết nội dung</th>
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
                                                                [<?php echo $row["tieude"]; ?>]
                                                            </b></span>

                                                    </h5>
                                                    <p> Ngày nhận:
                                                        <?php echo $row["ngaygui"]; ?>.
                                                    </p>
                                                    <p style="margin-bottom: -2px; font-weight: bold;">Nội dung: </p>
                                                    <p style="font-size: 20px;">
                                                        <?php echo $row["noidung"]; ?>
                                                    </p>

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