<div class="left main-sidebar">

    <div class="sidebar-inner leftscroll">

        <div id="sidebar-menu">

            <ul>
                <li class="submenu">
                    <a class="active" href="index.php">
                        <i class="fas fa-bars"></i>
                        <span> Mục Lục</span>
                    </a>
                </li>

                <li class="submenu">
                    <a>
                        <i class="fas fa-user"></i>
                        <span> Tài Khoản</span>
                        <span class="menu-arrow"></span>
                        <ul class="list-unstyled">
                            <a href="pagestudent_home/student_status_ST/<?php echo $_SESSION["MaHV"]; ?>">Hồ sơ cá
                                nhân</a>
                            <a href="">Lớp Học</a>
                        </ul>
                    </a>
                </li>
                <li class="submenu">
                    <a href="pagestudent_home/notification_Page/<?php echo $_SESSION["id"]; ?>">
                        <!-- <span class="label radius-circle bg-danger float-right">18</span> -->
                        <i class="fas fa-envelope"></i>
                        <span>Thư</span>

                    </a>
                </li>
                <li class="submenu">
                    <a href="">
                        <i class="fa-2x mr-2 fas fa-user-tie"></i>
                        <span>Thông Tin Lịch Học </span>
                        <span class="menu-arrow"></span>
                        <ul class="list-unstyled">
                            <a href="">Lịch Học</a>
                            <a href="">Lớp Học</a>
                        </ul>
                    </a>
                </li>
                <li class="submenu">
                    <a href="Home/coursesDetail">
                        <i class="fa-2x mr-2 fab fa-free-code-camp"></i>
                        <span>Tra cứu kết quả học tập</span>
                    </a>
                </li>

                <li class="submenu">
                    <a href="reportStatement/reportView">
                        <i class="fa-2x mr-2 fas fa-donate"></i>
                        <span>Nhật Ký Biên Lai</span>
                    </a>
                </li>
            </ul>

            <div class="clearfix"></div>

        </div>

        <div class="clearfix"></div>

    </div>

</div>