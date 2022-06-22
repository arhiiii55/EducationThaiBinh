<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">Users</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">Users</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="row row-length">
                <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 col-xl-9">
                    <div class="card mb-3">

                        <!-- end card-header -->
                        <?php
                        $i = 1;
                        while ($row = mysqli_fetch_array($data["editUser"])) {
                        ?>

                        <form action="User/User_update/<?php echo $row["id_account"]; ?>" method="post"
                            enctype="multipart/form-data">

                            <div class="modal-body">

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label> Tên tài khoản : </label>
                                            <input name="nameTk" value="<?php echo $row["ten_taikhoan"] ?>"
                                                type="text" />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Password :</label>
                                            <input value=" <?php echo $row["mk_taikhoan"]; ?>" name="password"
                                                type="password" />
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Role :</label>
                                            <select name="role_id" class="form-control" required>
                                                <?php
                                                    $i = 1;
                                                    while ($row1 = mysqli_fetch_array($data["selectRole_all"])) {
                                                        $i++;
                                                    ?>
                                                <option value=" <?php echo $row1["role_id"]; ?>">
                                                    <?php echo $row1["ten_doituong"]  ?>
                                                </option>
                                                <?php } ?>

                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Loai tài khoản:</label>
                                            <input class="form-control" value="<?php echo $row["loai_tk"]; ?>" name=""
                                                type="text" />
                                        </div>
                                    </div>
                                    <div class=" col-lg-6">
                                        <div class="form-group">
                                            <label>Ngày tạo :</label>
                                            <input class="form-control" value="<?php echo $row["ngaytao_tk"]; ?>"
                                                name="ngaytao" type="date" />
                                            <!-- <div class="card-body">
                                          <input type="text" class="form-control"
                                            name="singledatepicker" />
                                              </div> -->
                                        </div>
                                    </div>
                                </div>


                                <!-- <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Email verified</label>
                                            <select name="email_verified" class="form-control">
                                                <option value="1">YES</option>
                                                <option value="0">NO</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>Active</label>
                                            <select name="active" class="form-control">
                                                <option value="1">YES</option>
                                                <option value="0">NO</option>
                                            </select>
                                        </div>
                                    </div>

                                </div> -->

                                <!-- <div class="form-group">
                                    <label>Avatar image (optional):</label>
                                    <br />
                                    <input type="file" name="image">
                                </div> -->

                            </div>

                            <div class="modal-footer">
                                <button type="submit" name="editUser_submit" class="btn btn-primary">Xác
                                    nhận</button>
                            </div>

                        </form>
                        <?php } ?>
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