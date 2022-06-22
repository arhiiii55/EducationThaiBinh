<div class="left main-sidebar">

    <div class="sidebar-inner leftscroll">

        <div id="sidebar-menu">

            <ul>
                <li class="submenu">
                    <a class="active" href="Home2/adminPage">
                        <i class="fas fa-bars"></i>
                        <span> Mục Lục</span>
                    </a>
                </li>

                <li class="submenu">
                    <a>
                        <i class="fas fa-user"></i>
                        <span>Thông Tin Cá Nhân</span>
                        <span class="menu-arrow"></span>
                        <ul class="list-unstyled">
                            <a
                                href="User/User_edit/<?php echo $_SESSION["id_account"] . '/' . $_SESSION["role_id"]; ?>">Tài
                                Khoản
                                Cá
                                Nhân</a>
                            <a href="Home2/edit_trainer/<?php echo $_SESSION["id_account"]; ?>">Profile</a>
                        </ul>
                    </a>



                </li>
                <li class="submenu">
                    <a>
                        <i class="fa-2x mr-2 fas fa-user-graduate"></i>
                        <span> Quản lý Học Viên </span>
                        <span class="menu-arrow"></span>
                        <ul class="list-unstyled">
                            <a href="Home2/allstudentPage/<?php echo $_SESSION["id_account"]; ?>">Danh Sách Học
                                Viên</a>
                        </ul>
                    </a>
                </li>
                <!-- 
                <li class="submenu">
                    <a href="Home/trainerPage">
                        <i class="fa-2x mr-2 fas fa-user-tie"></i>
                        <span> Quản lý Giáo Viên</span>
                    </a>
                </li>-->

                <li class="submenu">
                    <a href="Home2/classPage/<?php echo $_SESSION["id_account"]; ?>">
                        <i class="fa-2x mr-2 fas fa-school"></i>
                        <span> Quản lý Lớp học</span>
                    </a>
                </li>
            </ul>

            <div class="clearfix"></div>

        </div>

        <div class="clearfix"></div>

    </div>

</div>