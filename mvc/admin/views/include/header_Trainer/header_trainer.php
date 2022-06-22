<?php
if (!$_SESSION["id_account"]) {
    header("location:http://localhost/adminqledu/websiteEdu/mainPage");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta name="description" content="Dashboard | Nura Admin">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Your website">
    <base href="http://localhost/adminqledu/">
    <!-- Favicon -->
    <link rel="shortcut icon" href="mvc/admin/views/assets/images/favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link href="./mvc/admin/views/assets/css/bootstrap.min.css" rel=" stylesheet" type="text/css" />

    <!-- Font Awesome CSS -->
    <link href="./mvc/admin/views/assets/font-awesome/css/all.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="mvc/admin/views/assets/css/style.css" rel=" stylesheet" type="text/css" />

    <!-- BEGIN CSS for this page -->
    <link rel="" type="text/css" href="./mvc/admin/views/assets/plugins/chart.js/Chart.min.css" />
    <link rel="stylesheet" type="text/css" href="./mvc/admin/views/assets/plugins/datatables/datatables.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <?php //include_javascripts() 
    ?>
    <!-- <?php //include_stylesheets() 
            ?> -->
    <!-- END CSS for this page -->

</head>

<body class="adminbody">

    <div id="main">

        <!-- top bar navigation -->
        <div class="headerbar">

            <!-- LOGO -->
            <div class="headerbar-left">
                <a href="Home2/adminPage" class="logo">
                    <!-- <img alt="Logo" src="" /> -->
                    <span> Quản lý edu </span>
                </a>

            </div>

            <nav class=" navbar-custom">

                <ul class="list-inline float-right mb-0">

                    <li class="list-inline-item dropdown notif">
                        <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href=""
                            aria-haspopup="false" aria-expanded="false">
                            <i class="far fa-envelope">
                            </i>
                            <span class="notif-bullet"></span>
                        </a>

                    </li>
                    <!-- <li class="list-inline-item dropdown notif"> -->
                    <!-- <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#"
                             aria-haspopup="false" aria-expanded="false">
                             <i class="fas fa-cog"></i>
                         </a> -->

                    <!-- <div
                             class="dropdown-menu dropdown-menu-right dropdown-arrow dropdown-arrow-success dropdown-sm">
                             <div class="dropdown-item noti-title">
                                 <h5>
                                     <small>Settings</small>
                                 </h5>
                             </div>


                             <a href="#" class="dropdown-item notify-item">
                                 <p class="notify-details ml-0">
                                     <i class="fas fa-cog"></i>
                                     <b>đổi mật khẩu</b>
                                 </p>
                             </a>
                             <a href="Home/logout" class="dropdown-item notify-item">
                                 <p class="notify-details ml-0">
                                     <i class="fas fa-cog"></i>
                                     <b>đăng xuất</b>
                                 </p>
                             </a>



                             <a href="#" class="dropdown-item notify-item">
                                 <p class="notify-details ml-0">
                                     <i class="fas fa-cog"></i>
                                     <b>Settings 2</b>
                                 </p>
                             </a>


                             <a href="#" class="dropdown-item notify-item">
                                 <p class="notify-details ml-0">
                                     <i class="fas fa-cog"></i>
                                     <b>Settings 3</b>
                                 </p>
                             </a>

                         </div>

                     </li>-->


                    <li class="list-inline-item dropdown notif">
                        <?php
                        //  $row = mysqli_fetch_assoc($data["result"]) ;
                        ?>
                        <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#"
                            aria-haspopup="false" aria-expanded="false">
                            <img src="./mvc/admin/views/assets/images/avatars/admin.png" alt="Profile image"
                                class="avatar-rounded">
                        </a>
                        <?php
                        // $i = 1;
                        // while () {

                        ?>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">

                            <div class="dropdown-item noti-title">
                                <h5 class="text-overflow">
                                    <small>
                                        <?php echo $_SESSION["ten_taikhoan"]; ?>
                                    </small>
                                </h5>
                            </div>

                            <a href="Home2/edit_trainer/<?php echo $_SESSION["id_account"]; ?>"
                                class=" dropdown-item notify-item">
                                <i class="fas fa-user"></i>
                                <span>Profile</span>
                            </a>


                            <a href="Home/logout" class="dropdown-item notify-item">
                                <i class="fas fa-power-off"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                        <?php
                        // }
                        ?>

                    </li>

                </ul>

                <ul class="list-inline menu-left mb-0">
                    <li class="float-left">
                        <button class="button-menu-mobile open-left">
                            <i class="fas fa-bars"></i>
                        </button>
                    </li>
                </ul>

            </nav>

        </div>