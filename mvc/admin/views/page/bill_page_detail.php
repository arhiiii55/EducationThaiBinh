<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Invoice</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Invoice</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="row">

                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xl-10">

                    <div class="card mb-3">

                        <div class="card-header">
                            <h3><i class="fas fa-table"></i> Invoice example</h3>
                        </div>

                        <div class="card-body">

                            <div class="container">

                                <div class="row">
                                    <?php
                                    $i = 1;
                                    while ($row = mysqli_fetch_assoc($data["editGetid_Bill"])) {
                                    ?>
                                    <div class="col-md-8">

                                        <div class="invoice-title text-center mb-3">
                                            <h2>Biên Lai Thu Học phí : </h2>
                                            <strong sclass="text-left">Mã biên lai:
                                            </strong><?php echo $row["id_bill"]; ?>
                                            <br>
                                            <strong>Thời Gian Lập Biên Lai: </strong>
                                            <?php
                                                $fomat = strtotime($row["ngaylap_hd"]);
                                                echo date('d-m-Y h:i a', $fomat); ?> <br>
                                            <strong>Ngày Hiện Tại: </strong>
                                            <?php
                                                $timestamp = time();
                                                echo (date("d-m-Y h:i a", $timestamp));
                                                ?>
                                        </div>
                                        <hr>
                                        <div class=" row">
                                            <div class="col-xs-12 col-sm-12 col-md-6">
                                                <h5>Học Viên:</h5>
                                                <address>
                                                    <strong>Mã Học Viên :</strong> <?php echo $row["MaHV"]; ?><br>
                                                    <?php echo $row["tenhv"]; ?><br>
                                                    <?php echo $row["sdt"]; ?> <br>
                                                    <?php echo $row["gmail"]; ?> <br>
                                                </address>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-6 text-right">
                                                <h5>Người lập Bill:</h5><br>
                                                <address>
                                                    Jane Smith<br>
                                                    1234 Main<br>
                                                    Apt. 4B<br>
                                                    Springfield, ST 54321
                                                </address>

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-12 col-md-6">
                                                <h5>Hình Thức Thanh Toán:</h5>
                                                <address>
                                                    Tiền Mặt<br>
                                                    <strong style="color: blue;"><i>
                                                            <?php echo $row["tinhtrang"] ?>
                                                        </i></strong>
                                                </address>

                                            </div>
                                            <div class="col-xs-12 col-md-6 text-right">
                                                <h5>Ngày Lập HĐ:</h5>
                                                <address><i><?php
                                                                $fomat = strtotime($row["ngaylap_hd"]);
                                                                echo date('d-m-Y', $fomat); ?></i>
                                                    <br>
                                                    <br>
                                                </address>
                                            </div>


                                        </div>


                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-11">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h3 class="panel-title"><strong>Biên Lai </strong></h3>
                                            </div>
                                            <div class="panel-body">
                                                <div class="table-responsive">
                                                    <table class="table table-condensed">
                                                        <thead>
                                                            <tr>
                                                                <td><strong>Mã Khóa học</strong></td>
                                                                <td><strong>Tên Khóa học</strong></td>
                                                                <td class="text-center"><strong>Thành tiền</strong>
                                                                </td>
                                                                <td class="text-center">
                                                                    <strong>Số lượng</strong>
                                                                </td>
                                                                <td class="text-right"><strong>Tổng giá
                                                                        tiền</strong>
                                                                </td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr style="background-color:#dee2e6b8;">
                                                                <td>
                                                                    <?php echo $row["ma_KH"]; ?>
                                                                </td>
                                                                <td>
                                                                    <?php echo $row["tenkhoahoc"]; ?>
                                                                </td>
                                                                <td class="text-center">
                                                                    <?php echo number_format($row["price"]) . ' đ'; ?>
                                                                </td>
                                                                <td class="text-center">
                                                                    <?php echo $row["thoihan"]; ?>
                                                                </td>
                                                                <td class="text-center">1</td>
                                                                <td class="text-right">
                                                                    <?php echo number_format($row["total"]); ?>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line"></td>
                                                                <td class="thick-line text-center">
                                                                    <strong>Tạm tính</strong>
                                                                </td>
                                                                <td class="thick-line text-right">
                                                                    <?php echo number_format($row["total"]); ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="no-line"></td>
                                                                <td class="no-line"></td>
                                                                <td class="no-line"></td>
                                                                <td class="no-line text-center">
                                                                    <strong>Discount: </strong>
                                                                </td>
                                                                <td style="color:red" class="no-line text-right"> -10%
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="no-line"></td>
                                                                <td class="no-line"></td>
                                                                <td class="no-line"></td>
                                                                <td class="no-line text-center">
                                                                    <strong>Tổng</strong>
                                                                </td>
                                                                <strong>
                                                                    <td style="color: blue;" class="no-line text-right">
                                                                        <?php echo number_format($row["total"] - ($row["total"] * 0.1)); ?>
                                                                    </td>
                                                                </strong>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <!-- end card body -->

                    </div>
                    <!-- end card-->

                </div>
                <!-- end col-->

            </div>
            <!-- end row-->


        </div>
        <!-- END container-fluid -->

    </div>
    <!-- END content -->

</div>
<!-- END content-page -->