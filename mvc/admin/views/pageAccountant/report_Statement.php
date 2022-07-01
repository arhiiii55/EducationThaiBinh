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

                                    <div class="col-md-10">
                                        <div class="invoice-title text-left mb-3">
                                            <h2>Quản Lý Tài chính: </h2>
                                            Ngày giờ :
                                            <strong><?php
                                                    $today = date("d/m/Y h:i a");
                                                    echo $today;
                                                    ?></strong>
                                        </div>
                                        <hr>
                                        <h6 style="color:darkblue;">Quản Lý tài chính theo năm: </h6>
                                        <div class="card-body">

                                            <div class="row">
                                                <hr>
                                                <table id="output_search"
                                                    class="table table-bordered table-hover display" style="width:100%">
                                                    <!-- <ul id="output_search"></ul> -->
                                                    <thead>
                                                        <tr>
                                                            <th>Số thứ tự</th>
                                                            <th>Năm</th>
                                                            <th style="min-width:60px;">
                                                                action</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <?php
                                                        $i = 1;
                                                        while ($row = mysqli_fetch_assoc($data["bill_statement_getYear"])) {
                                                        ?>
                                                        <tr>
                                                            <td>
                                                                <?php echo $i++; ?>
                                                            </td>
                                                            <td>
                                                                <h3><?php $fomat = strtotime($row["ngaylap_hd"]);
                                                                        if (date('Y', $fomat) > 1) {
                                                                            echo date('Y', $fomat);
                                                                        } else {
                                                                            echo '';
                                                                        }

                                                                        ?>

                                                                </h3>
                                                            </td>
                                                            <td>
                                                                <?php $fomat = strtotime($row["ngaylap_hd"]);
                                                                    if (date('Y', $fomat) >= 1) { ?>
                                                                <a href="reportStatement/reportView_detail_AC/<?php $fomat = strtotime($row["ngaylap_hd"]);
                                                                                                                        echo date('Y', $fomat); ?>"
                                                                    class="btn btn-primary btn-sm btn-block"><i
                                                                        class="far fa-edit"></i>
                                                                    Xem</a>
                                                                <?php } ?>
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