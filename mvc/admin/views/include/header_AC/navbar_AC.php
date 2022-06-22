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
                        <i class="fa-2x mr-2 fas fa-user-graduate"></i>
                        <span> Quản lý Học Viên </span>
                        <span class="menu-arrow"></span>
                        <ul class="list-unstyled">
                            <a
                                href="students/studentPage/<?php echo $_SESSION["id_account"] . '/' . $_SESSION["role_id"]; ?>">Form
                                Học
                                Viên</a>
                            <a
                                href="students/allstudentPage/<?php echo $_SESSION["id_account"] . '/' . $_SESSION["role_id"]; ?>">Danh
                                Sách Học Viên</a>
                        </ul>
                    </a>
                </li>
                <li class="submenu">
                    <a href="trainers/trainer_info">
                        <i class="fa-2x mr-2 fas fa-user-tie"></i>
                        <span> Thông tin giáo viên</span>
                    </a>
                </li>
                <li class="submenu">
                    <a href="course/coursesDetail_AC">
                        <i class="fa-2x mr-2 fab fa-free-code-camp"></i>
                        <span> Thông tin Khóa Học</span>
                    </a>
                </li>
                <li class="submenu">
                    <a href="classdetail/classPage_AC">
                        <i class="fa-2x mr-2 fas fa-school"></i>
                        <span> Thông tin Lớp Học</span>
                    </a>
                </li>

                <li class="submenu">
                    <a>
                        <i class="fa-2x mr-2 far fa-money-bill-alt"></i>
                        <span> Học phí </span>
                        <span class="menu-arrow"></span>
                        <ul class="list-unstyled">
                            <a href="Bill/billPage">Thu Học Phí</a>
                            <a href="Bill/bill_statement">Danh Sách Học Phí</a>
                        </ul>
                    </a>
                </li>
                <li class="submenu">
                    <a href="reportStatement/reportView">
                        <i class="fa-2x mr-2 fas fa-donate"></i>
                        <span> Quản Lý Biên Lai</span>
                    </a>
                </li>

                <!-- <li class="submenu">
                    <a href="http://localhost/adminqledu/staff_AC_home/returnviewmail">
                        <span class="label radius-circle bg-danger float-right">18</span>
                        <i class="fas fa-envelope"></i>
                        <span> Thêm Học Viên </span>
                    </a>
                </li> -->
                <!-- <li class="submenu">
                <a href="charts.php">
                    <i class="fas fa-chart-line"></i>
                    <span> Charts </span>
                </a>
            </li> -->
                <li class="submenu">
                    <!-- <a id="tables" href="staff_AC_home/tablesdatatable">
                        <i class="fas fa-chart-line"></i>
                        <span> Báo cáo Thông tin</span>
                         <span class="menu-arrow"></span> 
                    </a>-->
                    <!-- <ul class="list-unstyled">
                        <li>
                            <a href="tables-basic.php">Basic Tables</a>
                        </li>
                        <li>
                            <a href="tables-datatable.php">Data Tables</a>
                        </li>
                    </ul> -->
                </li>

                <li class="submenu">
                    <!-- <a href="staff_AC_home/blogpage">
                        <i class="fas fa-laptop"></i>
                        <span> blog
                        </span>
                    </a> -->

                    <!-- <ul class="list-unstyled">
                        <li>
                            <a href="ui-alerts.php">Alerts</a>
                        </li>
                        <li>
                            <a href="ui-buttons.php">Buttons</a>
                        </li>
                        <li>
                            <a href="ui-cards.php">Cards</a>
                        </li>
                        <li>
                            <a href="ui-carousel.php">Carousel</a>
                        </li>
                        <li>
                            <a href="ui-collapse.php">Collapse</a>
                        </li>
                        <li>
                            <a href="ui-icons.php">Icons</a>
                        </li>
                        <li>
                            <a href="ui-modals.php">Modals</a>
                        </li>
                        <li>
                            <a href="ui-tooltips.php">Tooltips and Popovers</a>
                        </li>
                    </ul> -->
                </li>

                <!-- <li class="submenu">
                    <a href="#">
                        <i class="fab fa-wpforms"></i>
                        <span> Forms </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="forms-general.php">General Elements</a>
                        </li>
                        <li>
                            <a href="forms-select2.php">Select2</a>
                        </li>
                        <li>
                            <a href="forms-validation.php">Form Validation</a>
                        </li>
                        <li>
                            <a href="forms-text-editor.php">Text Editors</a>
                        </li>
                        <li>
                            <a href="forms-upload.php">Multiple File Upload</a>
                        </li>
                        <li>
                            <a href="forms-datetime-picker.php">Date and Time Picker</a>
                        </li>
                        <li>
                            <a href="forms-color-picker.php">Color Picker</a>
                        </li>
                    </ul>
                </li> -->

                <!-- <li class="submenu">
                <a href="#">
                    <i class="fas fa-file-image"></i>
                    <span> Multimedia </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="list-unstyled">
                    <li>
                        <a href="media-fancybox.php">
                            <span class="label radius-circle bg-danger float-right">cool</span> Fancybox </a>
                    </li>
                    <li>
                        <a href="media-masonry.php">Masonry</a>
                    </li>
                    <li>
                        <a href="media-lightbox.php">Lightbox</a>
                    </li>
                    <li>
                        <a href="media-owl-carousel.php">Owl Carousel</a>
                    </li>
                    <li>
                        <a href="media-image-magnifier.php">Image Magnifier</a>
                    </li>
                </ul>
            </li> -->

                <!-- <li class="submenu">
                <a href="#">
                    <i class="fas fa-star"></i>
                    <span> Plugins </span>
                    <span class="menu-arrow"></span>
                </a>
                <ul class="list-unstyled">
                    <li>
                        <a href="star-rating.php">Star Rating</a>
                    </li>
                    <li>
                        <a href="range-sliders.php">Range Sliders</a>
                    </li>
                    <li>
                        <a href="tree-view.php">Tree View</a>
                    </li>
                    <li>
                        <a href="sweetalert.php">SweetAlert</a>
                    </li>
                    <li>
                        <a href="calendar.php">Calendar</a>
                    </li>
                    <li>
                        <a href="counter-up.php">Counter-Up</a>
                    </li>
                </ul>
            </li> -->

                <!-- <li class="submenu">
                    <a>
                        <i class="far fa-copy"></i>
                        <span> Example Pages </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled">
                        <li>
                            <a href="page-pricing-tables.php">Pricing Tables</a>
                        </li>
                        <li>
                            <a href="page-timeline.php">Timeline</a>
                        </li>
                        <li>
                            <a href="page-invoice.php">Invoice</a>
                        </li>
                        <li>
                            <a href="page-blank.php">Blank Page</a>
                        </li>
                    </ul>
                </li> -->

                <!-- <li class="submenu">
                <a href="#">
                    <span class="label radius-circle bg-primary float-right">9</span>
                    <i class="fas fa-indent"></i>
                    <span> Menu Levels </span>
                </a>
                <ul>
                    <li>
                        <a href="#">
                            <span>Second Level</span>
                        </a>
                    </li>
                    <li class="submenu">
                        <a href="#">
                            <span>Third Level</span>
                            <span class="menu-arrow"></span>
                        </a>
                        <ul>
                            <li>
                                <a href="#">
                                    <span>Third Level Item</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span>Third Level Item</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>

                <li class="submenu">
                    <a class="pro" href="pro.php">
                        <i class="fas fa-shopping-cart"></i>
                        <span> PRO Version </span>
                    </a>
                </li>

                <li class="submenu">
                    <a target="_blank" href="https://nura24.com">
                        <i class="fas fa-th"></i>
                        <span> Nura24 Free Suite </span>
                    </a>
                </li>

            </li> -->

            </ul>

            <div class="clearfix"></div>

        </div>

        <div class="clearfix"></div>

    </div>

</div>