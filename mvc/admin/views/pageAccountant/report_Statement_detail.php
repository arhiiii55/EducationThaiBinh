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

            <!-- end row-->
            <div class="row center-row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h3></h3>
                            <p>
                            </p>
                        </div>

                        <div class="clearfix">

                        </div>
                        <div class="card-body">

                            <div class="container">

                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="invoice-title text-left mb-3">
                                            <h2>Quản Lý Tài chính: </h2>
                                            <strong></strong> April 17, 2018
                                        </div>
                                        <hr>
                                        <div class="card-body">
                                            <div class="row">
                                                <h6 style="color:darkblue;">Quản Lý tài chính theo năm: </h6>
                                            </div>
                                            <div id="accordion" role="tablist">
                                                <div class="card">
                                                    <div class="card-header" role="tab" id="headingTwo">
                                                        <h5 class="mb-0">
                                                            <a data-toggle="collapse" href="#collapseTwo"
                                                                aria-expanded="true" aria-controls="collapseTwo">
                                                                Tất cả Hóa đơn
                                                            </a>

                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse show" role="tabpanel"
                                                        aria-labelledby="headingOne" data-parent="#accordion">
                                                        <div class="card-body">
                                                            <div clazss="table-responsive">
                                                                <!-- <input type="search" name="search_st"
                                                                    class="search_st form-control"
                                                                    placeholder="Nhập vào mã hóa đơn" id="search_st"> -->
                                                                <table id="output_search"
                                                                    class="table table-bordered table-hover display"
                                                                    style="width:100%">
                                                                    <!-- <ul id="output_search"></ul> -->
                                                                    <thead>
                                                                        <tr>
                                                                            <th>STT</th>
                                                                            <th>ID bill</th>
                                                                            <th>Mã HV</th>
                                                                            <th>Tên HV</th>
                                                                            <th>Mã Khóa Học</th>
                                                                            <th>Tên Khóa Học</th>
                                                                            <th>Ngày lập HĐ</th>
                                                                            <th>Học Phí</th>
                                                                            <th>Tháng</th>
                                                                            <th>Năm</th>
                                                                            <th>Tình trạng</th>
                                                                            <th style="min-width:60px;">
                                                                                Action</th>
                                                                        </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                        <?php
                                                                        $i = 1;
                                                                        while ($row = mysqli_fetch_assoc($data["report_Statement_sum"])) {
                                                                        ?>
                                                                        <tr>
                                                                            <td><strong><?php echo $i++; ?></strong>
                                                                            </td>
                                                                            <td><?php echo $row["id_bill"]; ?></td>
                                                                            <td><?php echo $row["MaHV"]; ?></td>
                                                                            <td><?php echo $row["tenhv"]; ?></td>
                                                                            <td><?php echo $row["ma_KH"]; ?></td>
                                                                            <td><?php echo $row["tenkhoahoc"]; ?>
                                                                            </td>
                                                                            <td><?php echo $row["ngaylap_hd"]; ?>
                                                                            </td>
                                                                            <td><?php echo number_format($row["total"]); ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php $fomat = strtotime($row["ngaylap_hd"]);
                                                                                    echo date('m', $fomat); ?></h3>
                                                                            </td>
                                                                            <td>
                                                                                <?php $fomat = strtotime($row["ngaylap_hd"]);
                                                                                    echo date('Y', $fomat); ?>
                                                                            </td>
                                                                            <td style="color:blue;">
                                                                                <strong><?php echo $row["tinhtrang"]; ?>
                                                                                </strong>
                                                                            </td>
                                                                            <td>
                                                                                <a href="Bill/allbill_view/<?php echo $row["id_bill"]; ?>"
                                                                                    class="btn btn-primary btn-sm btn-block"><i
                                                                                        class="far fa-edit"></i>
                                                                                    Xem</a>
                                                                            </td>
                                                                        </tr>

                                                                    </tbody>
                                                                    <?php

                                                                        } ?>

                                                                </table>
                                                                <p style="color:red">Danh sách đăng ký chưa Thanh
                                                                    toán</p>
                                                                <hr>
                                                                <table id="output_search"
                                                                    class="table table-bordered table-hover display"
                                                                    style="width:100%">
                                                                    <!-- <ul id="output_search"></ul> -->
                                                                    <thead>
                                                                        <th>STT</th>
                                                                        <th>ID bill</th>
                                                                        <th>Mã HV</th>
                                                                        <th>Tên HV</th>
                                                                        <th>Mã Khóa Học</th>
                                                                        <th>Tên Khóa Học</th>
                                                                        <th>Ngày lập HĐ</th>
                                                                        <th>Học Phí</th>
                                                                        <th>Tháng</th>
                                                                        <th>Năm</th>
                                                                        <th>Tình trạng</th>
                                                                        <th style="min-width:60px;">
                                                                            Action</th>
                                                                    </thead>

                                                                    <tbody>
                                                                        <?php
                                                                        $i = 1;
                                                                        while ($row = mysqli_fetch_assoc($data["report_Statement_sumUnpaid"])) {

                                                                        ?>
                                                                        <tr style="text-align: center;">
                                                                            <td><strong><?php echo $i++; ?></strong>
                                                                            </td>
                                                                            <td><?php echo $row["id_bill"]; ?></td>
                                                                            <td><?php echo $row["MaHV"]; ?></td>
                                                                            <td><?php echo $row["tenhv"]; ?></td>
                                                                            <td><?php echo $row["ma_KH"]; ?></td>
                                                                            <td><?php echo $row["tenkhoahoc"]; ?>
                                                                            </td>
                                                                            <td><?php echo $row["ngaylap_hd"]; ?>
                                                                            </td>
                                                                            <td><?php echo number_format($row["total"]); ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php $fomat = strtotime($row["ngaylap_hd"]);
                                                                                    echo date('m', $fomat); ?></h3>
                                                                            </td>
                                                                            <td>
                                                                                <?php $fomat = strtotime($row["ngaylap_hd"]);
                                                                                    echo date('Y', $fomat); ?>
                                                                            </td>
                                                                            <td style="color: crimson;">
                                                                                <?php echo $row["tinhtrang"]; ?>
                                                                            </td>
                                                                            <td>
                                                                                <a href="Bill/allbill_view"
                                                                                    class="btn btn-primary btn-sm btn-block"><i
                                                                                        class="far fa-edit"></i>
                                                                                    Xem</a>
                                                                            </td>
                                                                        </tr>

                                                                    </tbody>
                                                                    <?php

                                                                        } ?>
                                                                    <?php
                                                                if (isset($data["detete_bill"])) {
                                                                    if ($data["detete_bill"] == true) { ?>
                                                                    <?php echo '<script language="javascript">alert("Đã xóa thành công!");</script>'; ?>
                                                                    <?php

                                                                    } else { ?>
                                                                    <h4 class="alert alert-warning">
                                                                        <?php echo 'xóa thất bại'; ?>
                                                                    </h4>
                                                                    <?php    }
                                                                } ?>
                                                                </table>
                                                            </div>
                                                            <!-- end table-responsive-->

                                                        </div>
                                                    </div>

                                                </div>
                                                <?php

                                                ?>


                                            </div>
                                            <hr>
                                            <h4> <strong>
                                                    <?php echo 'Tổng năm ' . date('Y', $fomat) . ':'; ?></strong>
                                                <?php $i = 1;
                                                while ($row_T = mysqli_fetch_assoc($data["report_Statement_sumTotal"])) { ?>
                                                <span
                                                    style="margin-left: 10px ;"><?php echo number_format($row_T["tong"]) . ' vnđ'; ?></span>
                                                <?php } ?>
                                            </h4>
                                        </div>

                                    </div>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<!-- end card-->
</div>
</div>

</div>
<!-- END container-fluid -->

</div>
<!-- END content -->

</div>
<!-- END content-page -->
<!-- <script type="text/javascript">
$(document).ready(function() {
    $(".search_st").keyup(function() {
        var search_st = $('.search_st').val();
        $.ajax({
            url: "ajax/search_idBill",
            method: "POST",
            data: {
                data: search_st
            },
            success: function(data) {
                $("#output_search").html('');
                $("#output_search").html(data);
            }
        });

    });
});
</script> -->