<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <base href="http://localhost/adminqledu/">
    <link rel="stylesheet" href="http://localhost/adminqledu/mvc/admin/views/assets/css/style.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <title>Document</title>
</head>

<body>
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <form action="pagestudent_home/Student_Page" method="POST">
                <div class="row d-flex">
                    <div class="col-lg-6">
                        <div class="card1 pb-5">
                            <div class="row">
                                <img src="./mvc/admin/views/assets/img/hinhlogin1.jpg" class="logo" />
                            </div>
                            <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                                <img src="./mvc/admin/views/assets/img/hinhlogin2.jpg" class="image" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card2 card border-0 px-4 py-5">
                            <div class="row mb-4 px-3">
                                <h6 class="mb-0 mr-4 mt-2">
                                    <h3>Đăng nhập</h3>
                                </h6>
                            </div>
                            <div class=" row px-3 mb-4">
                                <div class="line"></div>
                            </div>
                            <div class="row px-3">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Tài khoản</h6>
                                </label>
                                <input class="mb-4" type="text" name="ten_dangnhap" placeholder="Nhập tài khoản" />
                            </div>
                            <div class="row px-3">
                                <label class="mb-1">
                                    <h6 class="mb-0 text-sm">Mật Khẩu</h6>
                                </label>
                                <input type="password" name="mk_taikhoan" placeholder="Nhập mật khẩu" />
                            </div>
                            <div class="row px-3 mb-4">
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <!-- <input
                                        id="chk1"
                                        type="checkbox"
                                        name="chk"
                                        class="custom-control-input"
                                      /> -->
                                    <!-- <label for="chk1" class="custom-control-label text-sm"
                                        >nhớ mật khẩu</label
                                      > -->
                                </div>
                                <!-- <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a> -->
                            </div>
                            <div class="row mb-3 px-3">
                                <button type="submit" name="btndangnhap" class="btn btn-blue text-center">
                                    Login
                                </button>
                            </div>
                            <div class="row mb-4 px-3">
                                <small class="font-weight-bold">Don't have an account?
                                    <a class="text-danger">Register</a></small>
                            </div>
                        </div>
                    </div>

                </div>
            </form>

            <div class="bg-blue py-4">
                <div class="row px-3">
                    <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2019. All rights reserved.</small>
                    <div class="social-contact ml-4 ml-sm-auto">
                        <span class="fa fa-facebook mr-4 text-sm"></span>
                        <span class="fa fa-google-plus mr-4 text-sm"></span>
                        <span class="fa fa-linkedin mr-4 text-sm"></span>
                        <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>