<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Học Phí</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Trang chủ</li>
                            <li class="breadcrumb-item active">Học Phí</li>
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

                                    <div class="col-md-10">
                                        <div class="invoice-title text-left mb-3">
                                            <h2>Biên lai học phí: </h2>
                                            Ngày giờ :
                                            <strong><?php
                                                    $today = date("d/m/Y h:i a");
                                                    echo $today;
                                                    ?></strong>

                                        </div>
                                        <hr>
                                        <h6 style="color:darkblue;">Quản Lý Học Phí: chi tiết biên lai từng lớp</h6>
                                        <div class="card-body">
                                            <div class="row">
                                                <hr>
                                                <table id="output_search"
                                                    class="table table-bordered table-hover display" style="width:100%">
                                                    <!-- <ul id="output_search"></ul> -->
                                                    <thead>
                                                        <tr>
                                                            <th>Số thứ tự</th>
                                                            <th>Mã Khóa Học</th>
                                                            <th>Khóa Học</th>
                                                            <th>Mã Lớp</th>
                                                            <th>Lớp Học</th>
                                                            <th>Năm</th>
                                                            <th style="min-width:60px;">
                                                                action</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <?php
                                                        $i = 1;
                                                        while ($row = mysqli_fetch_assoc($data["groupBy_class_AD_AC_tal"])) {
                                                        ?>
                                                        <tr>
                                                            <td>
                                                                <?php echo $i++; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row["ma_KH"]; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row["tenkhoahoc"]; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row["malop"]; ?>
                                                            </td>
                                                            <td>
                                                                <?php echo $row["ten_lop"]; ?>
                                                            </td>
                                                            <td>
                                                                <?php $fomat = strtotime($row["year"]);
                                                                    if (date('Y', $fomat) >= 1) {
                                                                        echo date('Y', $fomat);
                                                                    } else {
                                                                        echo 'Empty';
                                                                    }

                                                                    ?>
                                                            </td>
                                                            <td>
                                                                <a href="bill/bill_classActive_AC/<?php echo $row["id_class"] ?>"
                                                                    class="btn btn-primary btn-sm btn-block"><i
                                                                        class="far fa-edit"></i>
                                                                    Xem</a>
                                                            </td>

                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
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