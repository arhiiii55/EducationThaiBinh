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
                            <h3><i class="fas fa-table"></i> Bảng Thông tin Học sinh thu thập được</h3>
                            <p> Quản lý học viên gồm thông tin cơ bản của học viên và những học viên đã đăng ký khóa học
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
                                            <strong></strong> April 17, 2018
                                        </div>
                                        <hr>
                                        <h6 style="color:darkblue;">Tìm kiếm theo ngày tháng: </h6>
                                        <div class="card-body">

                                            <div class="row">

                                                <form action="Bill/bill_statement_getPara/" method="post"
                                                    enctype="multipart/form-data">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label>Theo tháng:</label>
                                                                <select name="month" class="form-control">
                                                                    <option value="1"> Tháng 1 </option>
                                                                    <option value="2"> Tháng 2 </option>
                                                                    <option value="3"> Tháng 3 </option>
                                                                    <option value="4"> Tháng 4 </option>
                                                                    <option value="5"> Tháng 5 </option>
                                                                    <option value="6"> Tháng 6 </option>
                                                                    <option value="7"> Tháng 7 </option>
                                                                    <option value="8"> Tháng 8 </option>
                                                                    <option value="9"> Tháng 9 </option>
                                                                    <option value="10"> Tháng 10 </option>
                                                                    <option value="11"> Tháng 11 </option>
                                                                    <option value="12"> Tháng 12 </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label>Theo năm:</label>
                                                                <select name="year" class="form-control">
                                                                    <?php
                                                                    $i = 1;
                                                                    while ($row_Y = mysqli_fetch_array($data["bill_statement_getYear"])) {
                                                                        $i++;
                                                                    ?>
                                                                    <option value="<?php echo $row_Y["year"] ?>">
                                                                        <?php echo $row_Y["year"]; ?>
                                                                    </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label>Tình trang:</label>
                                                                <select name="tinhtrang" class="form-control">
                                                                    <option value="Đã đóng tiền">Đã đóng tiền
                                                                    </option>
                                                                    <option value="Chưa Thanh Toán"> Chưa Thanh Toán
                                                                    </option>
                                                                </select>
                                                            </div>

                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group float-right">

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group ">


                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group float-right">
                                                                <button type="submit" style="background-color: red;"
                                                                    name="submit_search" class="btn btn-primary">Xác
                                                                    nhận</button>
                                                            </div>
                                                        </div>

                                                </form>
                                                <hr>
                                            </div>
                                        </div>

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
                                                                    <th>Mã Khóa Học</th>
                                                                    <th>Tên Khóa Học</th>
                                                                    <th>Ngày Lập Hóa Đơn</th>
                                                                    <th>Tổng tiền</th>
                                                                    <th>Thời Hạn</th>
                                                                    <th>Tình Trạng Thanh Toán</th>
                                                                    <th>Tháng </th>
                                                                    <th>Năm </th>
                                                                    <th style="min-width:60px;">
                                                                        action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $i = 1;
                                                                while ($row = mysqli_fetch_assoc($data["billMonthYear_statement"])) {
                                                                ?>
                                                                <tr>
                                                                    <th><?php echo $row["id_bill"] ?>
                                                                    </th>
                                                                    <td> <?php echo $row["MaHV"]; ?>
                                                                    </td>
                                                                    <td> <?php echo $row["tenhv"]; ?>
                                                                    </td>
                                                                    <td><?php echo $row["sourse_detail_id"]; ?>
                                                                    </td>
                                                                    <td><?php echo $row["tenkhoahoc"]; ?>
                                                                    </td>
                                                                    <td><?php
                                                                            $fomat = strtotime($row["ngaylap_hd"]);
                                                                            echo date('d-m-Y h:i a', $fomat); ?>
                                                                    </td>
                                                                    <td><?php echo  number_format($row["total"]); ?>
                                                                    </td>
                                                                    <td> <?php echo $row["thoihan"]; ?></td>

                                                                    <td style="color: blue;">
                                                                        <?php if ($row["tinhtrang"] != 'Đã đóng tiền') {
                                                                            ?>
                                                                        <p style="color: red;">
                                                                            <?php echo "Chưa Đóng Tiền"; ?>
                                                                            <a href="Bill/allbill_edit/<?php echo $row1["id_bill"] ?>"
                                                                                class="btn btn-primary btn-sm btn-block"><i
                                                                                    class="far fa-edit"></i>
                                                                                Thanh Toán</a>
                                                                        </p>
                                                                        <?php
                                                                            } else {
                                                                                echo $row["tinhtrang"];
                                                                            } ?>
                                                                    </td>
                                                                    <td><?php echo $row["month"]; ?>
                                                                    </td>
                                                                    <td><?php echo $row["year"]; ?>
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
                                                                    <th>Mã Hóa Đơn</th>
                                                                    <th>Mã Học viên</th>
                                                                    <th>Tên Học Viên</th>
                                                                    <th>Mã Khóa Học</th>
                                                                    <th>Tên Khóa Học</th>
                                                                    <th>Ngày Lập Hóa Đơn</th>
                                                                    <th>Tổng Tiền</th>
                                                                    <th>Thời Hạn</th>
                                                                    <th>Tình Trạng Thanh Toán</th>
                                                                    <th>Tháng </th>
                                                                    <th>Năm </th>
                                                                    <th style="min-width:60px;">
                                                                        action</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody>
                                                                <?php
                                                                $i = 1;
                                                                while ($row = mysqli_fetch_assoc($data["billMonthYear_statement_showUnpaid"])) {
                                                                ?>
                                                                <tr>
                                                                    <th><?php echo $row["id_bill"] ?>
                                                                    </th>
                                                                    <td> <?php echo $row["MaHV"]; ?>
                                                                    </td>
                                                                    <td> <?php echo $row["tenhv"]; ?>
                                                                    </td>
                                                                    <td><?php echo $row["sourse_detail_id"]; ?>
                                                                    </td>
                                                                    <td><?php echo $row["tenkhoahoc"]; ?>
                                                                    </td>
                                                                    <td><?php
                                                                            $fomat = strtotime($row["ngaylap_hd"]);
                                                                            echo date('d-m-Y h:i a', $fomat); ?>
                                                                    </td>
                                                                    <td><?php echo number_format($row["total"]); ?>
                                                                    </td>
                                                                    <td><?php echo $row["thoihan"]; ?>
                                                                    </td>
                                                                    <td style="color:red;">
                                                                        <span> <i><?php echo $row["tinhtrang"]; ?></i>
                                                                        </span>
                                                                    </td>
                                                                    <td><?php echo $row["month"]; ?>
                                                                    </td>
                                                                    <td><?php echo $row["year"]; ?>
                                                                    </td>

                                                                    <!-- <td>
                                                                            <input type="submit" class="btn btn-primary" value="DS Học Viên">
                                                                        </td> -->
                                                                    <td>
                                                                        <a href="Bill/allbill_edit/<?php echo $row["id_bill"] ?>"
                                                                            class="btn btn-primary btn-sm btn-block"><i
                                                                                class="far fa-edit"></i>Thanh toán
                                                                        </a>

                                                                        <a href="Bill/bill_delete/<?php echo $row["id_bill"] ?>"
                                                                            class="btn 
                                                                              btn-danger btn-sm btn-block mt-2"><i
                                                                                class="fas fa-trash">
                                                                            </i>
                                                                            Delete </a>
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