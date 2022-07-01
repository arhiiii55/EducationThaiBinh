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
                            <h3><i class="fas fa-table"></i> </h3>
                            <p>
                            </p>
                        </div>

                        <div class="clearfix">

                        </div>
                        <div class="card-body">

                            <div class="container">

                                <div class="row">

                                    <div class="col-md-8">
                                        <div class="invoice-title text-left mb-3">
                                            <h2>Danh Sách Học Phí: </h2>
                                            Ngày giờ: <strong><?php
                                                                $today = date("d/m/Y h:i a");
                                                                echo $today;
                                                                ?></strong>
                                        </div>
                                        <hr>
                                        <?php
                                        $i = 1;
                                        while ($row = mysqli_fetch_assoc($data["bill_stinclass_groupBy"])) {
                                        ?>
                                        <h6 style="color:darkblue;">Danh sách tình trạng học phí của lớp:
                                        </h6>
                                        <h5><?php echo $row["ten_lop"]; ?></h5>
                                        <?php echo $row["malop"]; ?>
                                        <?php } ?>


                                    </div>
                                </div>
                                <hr>
                                <div class="card-body">
                                    <div id="accordion" role="tablist">
                                        <?php
                                        // $i = 1;
                                        // while ($row = mysqli_fetch_array($data["class_all"])) {
                                        //     $i++;
                                        ?>
                                        <div class="card">
                                            <div class="card-header" role="tab" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <a data-toggle="collapse" href="#collapseTwo" aria-expanded="true"
                                                        aria-controls="collapseTwo">
                                                        Tất cả Hóa đơn
                                                    </a>

                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse show" role="tabpanel"
                                                aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">
                                                    <div clazss="table-responsive">
                                                        <input type="search" name="search_st"
                                                            class="search_st form-control"
                                                            placeholder="Nhập vào mã hóa đơn" id="search_st">
                                                        <table id="output_search"
                                                            class="table table-bordered table-hover display"
                                                            style="width:100%">
                                                            <!-- <ul id="output_search"></ul> -->
                                                            <thead>
                                                                <tr>
                                                                    <th>Mã bill</th>
                                                                    <th>Mã học Học viên</th>
                                                                    <th>Tên Học viên</th>
                                                                    <th>Số điện Thoại</th>
                                                                    <th>gmail</th>
                                                                    <th>Mã khóa học</th>
                                                                    <th>Ngày lập hóa đơn</th>
                                                                    <th>Tổng tiền</th>
                                                                    <th>Tình Trạng Thanh Toán</th>
                                                                    <th style="min-width:60px;">
                                                                        action</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <?php
                                                                $i = 1;
                                                                while ($row = mysqli_fetch_assoc($data["st_bill_paid"])) {
                                                                ?>
                                                                <tr>
                                                                    <th><?php echo $row["id_bill"] ?>
                                                                    </th>
                                                                    <td> <?php echo $row["MaHV"]; ?>
                                                                    </td>
                                                                    <td> <?php echo $row["tenhv"]; ?>
                                                                    </td>
                                                                    <td><?php echo $row["sdt"]; ?>
                                                                    </td>
                                                                    <td><?php echo $row["gmail"]; ?>
                                                                    </td>
                                                                    <td><?php echo $row["ma_KH"]; ?>
                                                                    </td>
                                                                    <td><?php
                                                                            $fomat = strtotime($row["ngaylap_hd"]);
                                                                            echo date('d-m-Y h:i a', $fomat); ?>
                                                                    </td>
                                                                    <td><?php echo  number_format($row["total"]); ?>
                                                                    </td>

                                                                    <td style="color:blue;">
                                                                        <strong><?php echo $row["tinhtrang"]; ?>
                                                                        </strong>
                                                                    </td>


                                                                    <!-- <td>
                                                                    <input type="submit" class="btn btn-primary" value="DS Học Viên">
                                                                </td> -->
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
                                                        <p style="color:red">Danh sách đăng ký chưa Thanh toán</p>
                                                        <hr>
                                                        <table id="output_search"
                                                            class="table table-bordered table-hover display"
                                                            style="width:100%">
                                                            <!-- <ul id="output_search"></ul> -->
                                                            <thead>
                                                                <tr>
                                                                    <th>Mã bill</th>
                                                                    <th>Mã học Học viên</th>
                                                                    <th>Tên Học viên</th>
                                                                    <th>Số điện Thoại</th>
                                                                    <th>gmail</th>
                                                                    <th>Mã khóa học</th>
                                                                    <th>Ngày lập hóa đơn</th>
                                                                    <th>Tổng tiền</th>
                                                                    <th>Tình Trạng Thanh Toán</th>
                                                                    <th style="min-width:60px;">
                                                                        action</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <?php
                                                                $i = 1;
                                                                while ($row = mysqli_fetch_assoc($data["st_for_bill_unpaid"])) {
                                                                ?>
                                                                <tr>
                                                                    <th><?php echo $row["id_bill"] ?>
                                                                    </th>
                                                                    <td> <?php echo $row["MaHV"]; ?>
                                                                    </td>
                                                                    <td> <?php echo $row["tenhv"]; ?>
                                                                    </td>
                                                                    <td><?php echo $row["sdt"]; ?>
                                                                    </td>
                                                                    <td><?php echo $row["gmail"]; ?>
                                                                    </td>
                                                                    <td><?php echo $row["ma_KH"]; ?>
                                                                    </td>
                                                                    <td><?php
                                                                            $fomat = strtotime($row["ngaylap_hd"]);
                                                                            echo date('d-m-Y h:i a', $fomat); ?>
                                                                    </td>
                                                                    <td><?php echo number_format($row["total"]); ?>
                                                                    </td>
                                                                    <td style="color: red;">
                                                                        <?php echo $row["tinhtrang"]; ?>
                                                                        <?php echo number_format($row['price']) . ' vnđ'; ?>
                                                                    </td>
                                                                    <td>
                                                                        <a href="Bill/allbill_view/<?php echo $row["id_bill"]; ?>"
                                                                            class="btn btn-primary btn-sm btn-block"><i
                                                                                class="far fa-edit"></i>
                                                                            Xem</a>
                                                                        <!-- <input type="submit" class="btn btn-primary"
                                                                            value="DS Học Viên"> -->
                                                                    </td>
                                                                    <td>

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
                                                    <?php $row_allsum = mysqli_fetch_assoc($data["st_bill_ALLsum_AD"]);
                                                    if ($row_allsum == true) { ?>

                                                    <p>Tổng Học Phí:
                                                        <strong><?php echo number_format($row_allsum["STTong"]) . ' vnđ'; ?></strong>
                                                    </p>
                                                    <p>Tổng Học Phí Đã Đóng:
                                                        <strong>
                                                            <?php echo  number_format($row_allsum["Số tiền đã đóng"]) . ' vnđ'; ?></strong>
                                                    </p>
                                                    <?php } ?>
                                                    <?php $row_sum_debt = mysqli_fetch_assoc($data["st_bill_sum_unpaid_AD"]);
                                                    if ($row_sum_debt == true) { ?>
                                                    <p>Tổng Học Phí Nợ:
                                                        <span style="color: red ;">
                                                            <?php echo number_format($row_sum_debt["SLno"]) . ' vnđ'; ?></span>

                                                    </p>
                                                    <form>
                                                        <a class="btn btn-primary btn-sm btn-block"
                                                            href="http://localhost/adminqledu/mvc/admin/controllers/exportExcelFile.php?idClass=<?php echo $row_sum_debt["id_class"] . '&tenLop=' . $row_sum_debt["malop"] ?>">Xuất
                                                            file Excel
                                                        </a>
                                                    </form>
                                                    <!-- <form action="" method="POST">
                                                        <button class="btn btn-primary btn-sm btn-block"
                                                            name="submit_Export" type="submit">Xuất file Excel</button>
                                                    </form> -->
                                                    <!-- <a href="exportExcelPHP/exportExcel/">ấn
                                                        vào đây</a> -->
                                                    <!-- <a
                                                        href="http://localhost/adminqledu/mvc/admin/views/exportExcel.php">ấn
                                                        vào đây</a> -->

                                                    <?php } ?>
                                                </div>
                                            </div>

                                        </div>
                                        <?php
                                        //  } 
                                        ?>


                                    </div>
                                </div>
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
<script type="text/javascript">
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
</script>