<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Notification!</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Notification</li>
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
                                            <h2>Tất cả thông báo: </h2>
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