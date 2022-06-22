 <div class="content-page">
     <!-- Start content -->
     <div class="content">

         <div class="container-fluid">
             <div class="row">
                 <div class="col-xl-12">
                     <div class="breadcrumb-holder">
                         <h1 class="main-title float-left">Giảng Viên</h1>
                         <ol class="breadcrumb float-right">
                             <li class="breadcrumb-item active">Tất cả thông tin HLV, Giảng Viên</li>
                         </ol>
                         <div class="clearfix"></div>
                     </div>
                 </div>
             </div>
             <!-- end row -->
             <div class="row">

                 <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">

                     <div class="card mb-3">
                         <div class="card-body">
                             <?php
                                $i = 1;
                                while ($row3 = mysqli_fetch_array($data["editTrainer"])) {
                                    $i++;
                                ?>
                             <form action="" method="post" enctype="multipart/form-data">
                                 <div class="row">
                                     <div class="form-group col-xl-3 col-md-5 col-sm-12">
                                         <div class="form-group">
                                             <label>Hình ảnh</label>
                                             <div class="img-avatar">
                                                 <img src="mvc\photo\<?php echo $row3["img_trainer"]; ?>" alt=""
                                                     class="img-thumbnail">
                                             </div>

                                         </div>
                                         <div class="form-group">
                                             <input type="file" value="<?php echo $row3["img_trainer"]; ?>"
                                                 name="anhanh" style="border: 1px solid black" disabled>
                                         </div>
                                     </div>
                                     <div class="form-group col-xl-5 col-md-6 col-sm-12">
                                         <div class="form-group">
                                             <label>ID Giáo Viên </label>
                                             <input class="form-control" value="<?php echo $row3["id_trainer"]; ?>"
                                                 name="" type="text" readonly="False" disabled>
                                         </div>
                                         <div class=" form-group">
                                             <label>Tên Giáo Viên </label>
                                             <input class="form-control" value="<?php echo $row3["ten_gv"]; ?>"
                                                 name="name" type="text" disabled>
                                         </div>
                                         <div class=" form-group">
                                             <label>Mã Giáo Viên </label>
                                             <input class="form-control" value="<?php echo $row3["MaGV"]; ?>"
                                                 name="id_staff" type="text" readonly="False" disabled>
                                         </div>
                                         <div class="form-group">
                                             <label>Chức Vụ </label>
                                             <input class="form-control" value="<?php echo $row3["chucvu"]; ?>"
                                                 name="chucvu" type="text" disabled>
                                         </div>
                                         <div class="form-group">
                                             <label>Đơn Vị Công Tác</label>
                                             <input class="form-control" value="<?php echo $row3["dv_congtac"]; ?>"
                                                 name="donvi" type="text" disabled>
                                         </div>
                                         <div class="form-group">
                                             <label>Thành Tích</label>
                                             <input type="text" class="form-control"
                                                 value="<?php echo $row3["thanhtich"]; ?>" name="thanhtich"
                                                 disabled></input>
                                             <!-- <input type="text" class="form-control"> -->
                                         </div>
                                         <div class="form-group">
                                             <button type="submit" class="btn btn-primary" name="edit_trainers"
                                                 disabled>Sửa
                                                 Thông
                                                 Tin
                                             </button>
                                             <a href="Home/trainerPage">
                                                 <button type="button" name="" class=" btn btn-primary">Xem Danh
                                                     Sách Giảng viên
                                                 </button>
                                             </a>
                                         </div>

                                     </div>

                                     <div class="form-group col-xl-4 col-md-5 col-sm-12 border-left">


                                         <div class="form-group">
                                             <label>Kinh Nghiệm</label>
                                             <input type="text" class="form-control"
                                                 value="<?php echo $row3["kinhnghiem"]; ?>" name="kinhnghiem"
                                                 disabled></input>
                                             <!-- <input type="text" class="form-control" name="kinhnghiem"> -->
                                         </div>
                                         <div class="form-group">
                                             <label>Số Điện Thoại</label>
                                             <input type="text" value="<?php echo $row3["sdt"]; ?>" class="form-control"
                                                 name="sdt" id="tags" disabled>
                                         </div>
                                         <div class="form-group">
                                             <label>Gmail</label>
                                             <input type="text" value="<?php echo $row3["gmail"]; ?>"
                                                 class="form-control" name="gmail" id="tags" disabled>
                                         </div>
                                         <div class="form-group">
                                             <label>Trạng Thái Hoạt Động</label>
                                             <input type="text" name="actived" id="" value="<?php if ($row3["actived"] == '1') {
                                                                                                    echo $row3["actived"] = 'Đang hoạt động';
                                                                                                } else {
                                                                                                    return 'không hoạt động';
                                                                                                }
                                                                                                ?>" disabled>
                                         </div>
                                     </div>

                                 </div><!-- end row -->

                             </form>
                             <?php
                                }
                                ?>
                             <?php
                                if (isset($data["updateTrainer"])) {
                                    if ($data["updateTrainer"] == true) { ?>
                             <h4 class="alert alert-success">
                                 <?php
                                            echo 'upload thành công ';
                                            echo '<script language="javascript">alert("Đã upload thành công!");</script>';
                                            ?>
                             </h4>
                             <?php  } else { ?>
                             <h4 class="alert alert-warning">
                                 <?php echo 'không tải được'; ?>
                             </h4>
                             <?php    }
                                } ?>
                             <div class="col-md-12">
                                 <div class="invoice-title text-left mb-3">
                                     <h5>Thông Tin Tổng Quát : </h5>
                                 </div>
                                 <hr>
                                 <h6 style="color:darkblue;">Nhật ký hoạt động: </h6>
                                 <div class="card-body">

                                     <div class="row">
                                         <hr>
                                         <table id="output_search" class="table table-bordered table-hover display"
                                             style="width:100%">
                                             <!-- <ul id="output_search"></ul> -->
                                             <thead>
                                                 <tr>
                                                     <th>STT</th>
                                                     <th>Mã Nhân Viên</th>
                                                     <th>Mã Giáo Viên</th>
                                                     <th>Tên Giáo Viên</th>
                                                     <th>Mã Khóa Học</th>
                                                     <th>Tên Khóa Học</th>
                                                     <th>Mã Lớp</th>
                                                     <th>Lớp</th>
                                                     <th>Ca Học</th>
                                                     <th>Giờ Học</th>
                                                     <th>Phòng Học</th>
                                                     <!-- <th>tình trạng</th> -->
                                                     <!-- <th>button</th> -->
                                                 </tr>
                                             </thead>
                                             <tbody>
                                                 <?php
                                                    $i = 1;
                                                    while ($row = mysqli_fetch_assoc($data["trainer_viewAC_acti"])) {
                                                    ?>
                                                 <tr>
                                                     <td>
                                                         <?php echo $i++; ?>
                                                     </td>
                                                     <td> <?php echo $row["maNV"]; ?> </td>
                                                     <td>
                                                         <?php echo $row["MaGV"]; ?></td>
                                                     <td> <?php echo $row["ten_gv"]; ?> </td>
                                                     <td><?php echo $row["ma_KH"]; ?> </td>
                                                     <td> <?php echo $row["tenkhoahoc"]; ?> </td>
                                                     <td> <?php echo $row["malop"]; ?> </td>
                                                     <td> <?php echo $row["ten_lop"]; ?> </td>
                                                     <td> <?php echo $row["lichhoc"]; ?> </td>
                                                     <td> <?php echo $row["giohoc"]; ?> </td>
                                                     <td> <?php echo $row["phong"]; ?> </td>


                                                     <!-- <td> <a href="students/allstudent_delete/"
                                                            class="btn 
                                                                 btn-danger btn-sm btn-block mt-2"><i
                                                                class="fas fa-trash">
                                                            </i>
                                                            Delete </a></td> -->

                                                 </tr>
                                                 <?php }
                                                    ?>

                                             </tbody>
                                         </table>
                                     </div>
                                 </div>

                             </div>
                         </div>
                         <!-- end card-body -->
                     </div>
                     <!-- end card -->

                 </div>
                 <!-- end col -->
             </div>

         </div>

         <!-- END container-fluid -->

     </div>

 </div>