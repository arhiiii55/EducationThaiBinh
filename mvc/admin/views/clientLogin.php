<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Đăng nhập</title>

    <link rel="shortcut icon" href="assets/images/fav.jpg" />
    <link rel="stylesheet" href="http://localhost/adminqledu/mvc/admin/views/assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="http://localhost/adminqledu/mvc/admin/views/assets/css/fontawsom-all.min.css" />
    <link rel="stylesheet" type="text/css"
        href="http://localhost/adminqledu/mvc/admin/views/assets/css/clientLogin.css" />
    <base href="http://localhost/adminqledu/">
</head>

<body>
    <div class="container-fluid">
        <div class="no-pdding login-box">
            <div class="row no-margin w-100 bklmj">
                <div class="col-lg-6 col-md-6 log-det" style="
              display: flex;
              flex-direction: column;
              justify-content: center;
            ">
                    <h2 style="margin-bottom: 40px">Đăng nhập</h2>
                    <div class="text-box-cont">
                        <form action="pagestudent_home/Student_Page" method="POST">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Tên tài khoản"
                                    aria-label="Username" name="ten_dangnhap" aria-describedby="basic-addon1" />
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Mật khẩu" aria-label="Username"
                                    name="mk_taikhoan" aria-describedby="basic-addon1" />
                            </div>
                            <br />
                            <div class="right-bkij mb-3" style=" display: flex;justify-content: center;">
                                <button type="submit" name="btndangnhap" class="btn btn-success btn-round">Đăng
                                    nhập</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 box-de">
                    <div class="ditk-inf">
                        <h2 class="w-100">Thai Binh Spots</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="http://localhost/adminqledu/mvc/admin/views/assets/js/jquery.min.js"></script>
<script src="http://localhost/adminqledu/mvc/admin/views/assets/js/popper.min.js"></script>
<script src="http://localhost/adminqledu/mvc/admin/views/assets/js/bootstrap.min.js"></script>

</html>