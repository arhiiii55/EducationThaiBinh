 <div class="content-page">
     <!-- Start content -->
     <div class="content">

         <div class="container-fluid">
             <div class="row">
                 <div class="col-xl-12">
                     <div class="breadcrumb-holder">
                         <h1 class="main-title float-left">Học Viên</h1>
                         <ol class="breadcrumb float-right">
                             <li class="breadcrumb-item active">Tất cả thông tin Học Viên</li>
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
                             <form action="trainers/update_trainer/<?php echo $row3["id_trainer"]; ?>" method="post"
                                 enctype="multipart/form-data">
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
                                                 name="anhanh" style="border: 1px solid black">
                                         </div>
                                     </div>
                                     <div class="form-group col-xl-5 col-md-6 col-sm-12">
                                         <div class="form-group">
                                             <label>ID giáo Viên </label>
                                             <input class="form-control" value="<?php echo $row3["id_trainer"]; ?>"
                                                 name="name" type="text" readonly="False">
                                         </div>
                                         <div class=" form-group">
                                             <label>Tên giáo viên </label>
                                             <input class="form-control" value="<?php echo $row3["ten_gv"]; ?>"
                                                 name="name" type="text" required>
                                         </div>
                                         <div class="form-group">
                                             <label>Chức vụ </label>
                                             <input class="form-control" value="<?php echo $row3["chucvu"]; ?>"
                                                 name="chucvu" type="text" required>
                                         </div>
                                         <div class="form-group">
                                             <label>Đơn vị công tác</label>
                                             <input class="form-control" value="<?php echo $row3["dv_congtac"]; ?>"
                                                 name="donvi" type="text" required>
                                         </div>
                                         <div class="form-group">
                                             <label>Thành tích</label>
                                             <input type="text" class="form-control"
                                                 value="<?php echo $row3["thanhtich"]; ?>" name="thanhtich"></input>
                                             <!-- <input type="text" class="form-control"> -->
                                         </div>
                                         <div class="form-group">
                                             <button type="submit" class="btn btn-primary" name="edit_trainers"> Sửa
                                                 thông
                                                 tin
                                             </button>
                                         </div>

                                     </div>

                                     <div class="form-group col-xl-4 col-md-5 col-sm-12 border-left">


                                         <div class="form-group">
                                             <label>kinh nghiệm</label>
                                             <input type="text" class="form-control"
                                                 value="<?php echo $row3["kinhnghiem"]; ?>" name="kinhnghiem"></input>
                                             <!-- <input type="text" class="form-control" name="kinhnghiem"> -->
                                         </div>
                                         <div class="form-group">
                                             <label>Số điện thoại</label>
                                             <input type="text" value="<?php echo $row3["sdt"]; ?>" class="form-control"
                                                 name="sdt" id="tags">
                                         </div>
                                         <div class="form-group">
                                             <label>Gmail</label>
                                             <input type="text" value="<?php echo $row3["gmail"]; ?>"
                                                 class="form-control" name="gmail" id="tags">
                                         </div>
                                         <div class="form-group">
                                             <label>trạng thái</label>
                                             <select name="actived" class=" form-control">
                                                 <!-- <input type="text" class="form-control" name="actived"> -->
                                                 <option value="1">Hoạt động</option>
                                                 <option value="0">Ngừng</option>
                                             </select>
                                         </div>
                                         <div class="form-group">
                                             <label>Tài khoản</label>
                                             <select name="account" class=" form-control">
                                                 <!-- <input type="text" class="form-control" name="actived"> -->
                                                 <option value="1">Giáo Viên</option>
                                                 <option value="0">Ngừng</option>
                                             </select>
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

                         </div>
                         <!-- end card-body -->
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
                                                 Thông tin các giảng viên trong học viện
                                             </a>
                                         </h5>
                                     </div>

                                     <div id="collapseTwo" class="collapse show" role="tabpanel"
                                         aria-labelledby="headingOne" data-parent="#accordion">
                                         <div class="card-body">
                                             <div class="table-responsive">
                                                 <table id="dataTable" class="table table-bordered table-hover display"
                                                     style="width:100%">
                                                     <thead>
                                                         <tr>
                                                             <th>ID giáo viên </th>
                                                             <th>Hình ảnh </th>
                                                             <th>Tên giáo viên </th>
                                                             <th>Chức vụ</th>
                                                             <th>Đơn vị công tác</th>
                                                             <th>Thành tích</th>
                                                             <th>Kinh Nghiệm</th>
                                                             <th>Số điện thoại</th>
                                                             <th>Gmail</th>
                                                             <th>Active</th>
                                                             <th>account</th>

                                                         </tr>
                                                     </thead>
                                                     <?php
                                                        $i = 1;
                                                        while ($row = mysqli_fetch_assoc($data["showDSTrainer"])) {
                                                        ?>
                                                     <tbody>
                                                         <tr><?php $i++; ?>
                                                             <th>
                                                                 <?php echo $row["id_trainer"]; ?></th>
                                                             <th> <img style="width: 80px;"
                                                                     src="mvc\photo\<?php echo $row["img_trainer"] ?>"
                                                                     alt="" name="hinhanh" class="img-thumbnail"></th>
                                                             <td> <?php echo $row["ten_gv"]; ?></td>
                                                             <td> <?php echo $row["chucvu"]; ?></td>
                                                             <td> <?php echo $row["dv_congtac"]; ?></td>
                                                             <td> <?php echo $row["thanhtich"]; ?></td>
                                                             <td> <?php echo $row["kinhnghiem"]; ?></td>
                                                             <td> <?php echo $row["sdt"]; ?></td>
                                                             <td> <?php echo $row["gmail"]; ?></td>
                                                             <td> <?php echo $row["actived"]; ?></td>
                                                             <td> <?php echo $row["ten_taikhoan"]; ?></td>

                                                         </tr>
                                                     </tbody>
                                                     <?php } ?>
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
                     <!-- end card -->

                 </div>
                 <!-- end col -->
             </div>



         </div>

         <!-- END container-fluid -->

     </div>

 </div>