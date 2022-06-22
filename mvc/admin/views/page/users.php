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


            <div class="row row-length center-row">
                <div class="col-xs-12 col-sm-12 col-md-11 col-lg-11 col-xl-11">
                    <div class="card mb-3">
                        <div class="card-header">
                            <span class="pull-right">
                                <button class="btn btn-primary btn-sm" data-toggle="modal"
                                    data-target="#modal_add_user">
                                    <i class="fas fa-user-plus" aria-hidden="true"></i>Thêm tài khoản mới</button>
                            </span>
                            <div class="modal fade custom-modal" tabindex="-1" role="dialog"
                                aria-labelledby="modal_add_user" aria-hidden="true" id="modal_add_user">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <form action="User/addUser" method="POST" enctype="multipart/form-data">

                                            <div class="modal-header">
                                                <h5 class="modal-title">Thêm tài khoản</h5>
                                                <button type="button" class="close" data-dismiss="modal">
                                                    <span aria-hidden="true">&times;</span>
                                                    <span class="sr-only">Close</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label> Tên tài khoản : </label>
                                                            <input class="form-control" name="nameTk" type="text"
                                                                required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Password :</label>
                                                            <input class="form-control" name="password" type="password"
                                                                required />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Role :</label>
                                                            <select name="role_id" class="form-control">
                                                                <?php
                                                                $i = 1;
                                                                while ($row = mysqli_fetch_array($data["selectRole_all"])) {
                                                                    $i++;
                                                                ?>
                                                                <option value=" <?php echo $row["role_id"]; ?>">
                                                                    <?php echo $row["ten_doituong"]  ?>
                                                                </option>
                                                                <?php } ?>

                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>ngày Tạo :</label>
                                                            <input class="form-control" name="ngaytao" type="date" />
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label>Loại Tài Khoản :</label>
                                                            <input class="form-control" name="loaitk" type="text" />
                                                            <!-- <div class="card-body">
                                                                <input type="text" class="form-control"
                                                                    name="singledatepicker" />
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label>Mã Nhân Viên :</label>
                                                            <select name="staff" class="form-control" required>
                                                                <?php
                                                                $i = 1;
                                                                while ($row1 = mysqli_fetch_array($data["selectStaff_all"])) {
                                                                    $i++;
                                                                ?>
                                                                <option value=" <?php echo $row1["id_staff"]; ?>">
                                                                    <?php echo '[' . $row1["maNV"] . ']' . $row1["tenNV"]; ?>
                                                                </option>
                                                                <?php } ?>
                                                            </select>
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
                                                <button type="submit" name="addUser_submit" class="btn btn-primary">Xác
                                                    nhận</button>
                                            </div>

                                        </form>
                                        <?php
                                        // $row1 = mysqli_fetch_assoc($data["studentShow"]);
                                        if (isset($data["result_insert"])) {
                                            if ($data["result_insert"] == true) { ?>
                                        <h4 class="alert alert-success">
                                            <?php
                                                    echo 'thêm thành công' . $_POST["nameTk"];
                                                    echo '<script language="javascript">alert("Đã upload thành công!");</script>';
                                                    ?>
                                        </h4>
                                        <?php  } else { ?>
                                        <h4 class="alert alert-warning">
                                            <?php echo 'xóa thất bại'; ?>
                                        </h4>
                                        <?php    }
                                        } ?>

                                    </div>
                                </div>
                            </div>
                            <h3>
                                <i class="far fa-user"></i> All users
                            </h3>
                        </div>
                        <!-- end card-header -->

                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="min-width:300px">User details</th>
                                            <th style="width:120px">Role</th>
                                            <th style="min-width:100px;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $i = 1;
                                        while ($row = mysqli_fetch_assoc($data["userShow_ac_role_staff"])) { ?>
                                        <tr>
                                            <td>
                                                <div class="user_avatar_list d-none d-none d-lg-block">
                                                    <!-- <img alt="image" src="assets/images/avatars/avatar_small.png" /> -->
                                                </div>
                                                <?php $i++; ?>
                                                <div class="form-group test">
                                                    <label>Id tài khoản: </label>
                                                    <input class="form-control pink" name="title" type="text"
                                                        value="<?php echo $row["id_account"]; ?>" required>
                                                </div>
                                                <div class="form-group test">
                                                    <label>Tên tài khoản :</label>
                                                    <input class="form-control pink" name="title" type="text"
                                                        value="<?php echo  $row["ten_taikhoan"]; ?>" required>
                                                </div>
                                                <div class="form-group test">
                                                    <label>Mật khẩu tài khoản: </label>
                                                    <input class="form-control pink" name="title" type="text"
                                                        value="<?php echo  $row["mk_taikhoan"]; ?>" required>
                                                </div>
                                                <div class="form-group test">
                                                    <label>Mã nhân viên :</label>
                                                    <input class="form-control pink" name="title" type="text"
                                                        value="<?php echo  $row["maNV"]; ?>" required>
                                                </div>
                                                <div class="form-group test">
                                                    <label>Loại tài khoản:</label>
                                                    <input class="form-control pink" name="title" type="text"
                                                        value="<?php echo  $row["loai_tk"]; ?>">
                                                </div>
                                                <div class="form-group test">
                                                    <label>Ngày tạo:</label>
                                                    <input class="form-control pink" name="singledatepicker" type="text"
                                                        value="<?php echo  $row["ngaytao_tk"]; ?>" required>
                                                </div>
                                            </td>
                                            <td>
                                                <h5><?php echo $row["ten_doituong"];
                                                        ?></h5>
                                            </td>

                                            <td>
                                                <a href="User/User_edit/<?php echo $row["id_account"]; ?>"
                                                    class="btn btn-primary btn-sm btn-block"><i class="far fa-edit"></i>
                                                    Edit</a>
                                                <a href="User/User_delete/<?php echo $row["id_account"]; ?>"
                                                    class="btn btn-danger btn-sm btn-block mt-2"><i
                                                        class="fas fa-trash"></i>
                                                    Delete</a>
                                            </td>
                                        </tr>
                                        <?php } ?>

                                        <!-- <tr>
                                            <td>
                                                <span class="user_avatar_list d-none d-none d-lg-block">
                                                    <img alt="image" src="assets/images/avatars/avatar_small.png" />
                                                </span>
                                                <h4>Test Manager</h4>
                                                <p>manager@website.com</p>
                                                <p>Bio: Nulla cursus maximus lacus at efficitur. In lobortis ante
                                                    vitae
                                                    nulla semper, in volutpat libero aliquet. Morbi sit amet nibh
                                                    vitae
                                                    metus interdum finibus sed nec nisl nec sidios.</p>
                                            </td>

                                            <td>Manager</td>

                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm btn-block"><i
                                                        class="far fa-edit"></i> Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm btn-block mt-2"><i
                                                        class="fas fa-trash"></i> Delete</a>
                                            </td>
                                        </tr> -->
                                        <!-- <tr>
                                            <td>
                                                <div class="user_avatar_list d-none d-none d-lg-block"><img alt="image"
                                                        src="assets/images/avatars/avatar_small.png" />
                                                </div>
                                                <h4>Admin 2</h4>
                                                <p>admin2@website.com</p>
                                                <p>Bio: Nulla cursus maximus lacus at efficitur. In lobortis ante
                                                    vitae
                                                    nulla semper, in volutpat libero aliquet. Morbi sit amet nibh
                                                    vitae
                                                    metus interdum finibus sed nec nisl nec sidios.</p>
                                            </td>

                                            <td>Administrator</td>

                                            <td>
                                                <a href="#" class="btn btn-primary btn-sm btn-block"><i
                                                        class="far fa-edit"></i> Edit</a>
                                                <a href="#" class="btn btn-danger btn-sm btn-block mt-2"><i
                                                        class="fas fa-trash"></i> Delete</a>
                                            </td>
                                        </tr> -->


                                    </tbody>
                                </table>
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