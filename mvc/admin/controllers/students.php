 <?php
    include("./system/config.php");
    class students extends Controllers
    {
        // trả về display sliderbar
        public function accountUserPage()
        {
            //lấy model ra xài
            $userM = $this->model("userModel");
            //lấy view  
            $this->view("masterAdminLayout", [
                "pages" => "page/users",
                "mau" => 'red',
                "User" => $userM->gettk()
            ]);
        }

        public function coursesDetail()
        {
            $listdataeducourse = $this->model("courseModel");
            $this->view("masterAdminLayout", [
                "pages" => "page/allCourses",
                "eduCourse" => $listdataeducourse->ShoweduCourse(),
                "courseDetail" => $listdataeducourse->ShowCourseDetail(),
                "timeabledays" => $listdataeducourse->ShowtimeableDays(),
                "timeabletime" => $listdataeducourse->ShowtimeableTime()
            ]);
        }
        public function studentPage_AD()
        {
            $ModelUser = $this->model("userModel");
            // $ac_role = $ModelUser->editUser();
            $qrstudent = $this->model("studentModel");
            $CourseModel = $this->model("courseModel");
            $this->view("masterAdminLayout", [
                "pages" => "page/allstudent_insert",
                "showstudent" => $qrstudent->showstudent(),
                "showstrainer" => $qrstudent->showDSTrainer(),
                "courseDetail" => $CourseModel->courseDetail(),
            ]);
        }
        public function allstudentPage_AD()
        {
            $ModelUser = $this->model("userModel");
            $qrdatamail = $this->model("mailModel");
            // $ac_role = $ModelUser->editUser();
            $listdatastudent = $this->model("studentModel");
            $qrbill = $this->model("billModel");
            $this->view("masterAdminLayout", [
                "pages" => "page/allstudent",
                "showstudent" => $listdatastudent->showstudent(),
                "showstrainer" => $listdatastudent->showDSTrainer(),
                "mailbox" => $qrdatamail->mailUnread(),
                "ShowAllOfCourse" => $listdatastudent->ShowAllOfCourse(),
                "showDSstudent" => $listdatastudent->ShowDSStudent(),
                "st_bill_paid" => $qrbill->st_bill_paid(),
                "bill_all" => $qrbill->bill_all(),
                "show_bill_full" => $qrbill->st_bill_sale_sourse(),
                // "billMonthYear_statement" => $qrbill->billMonthYear_statement($month, $year, $tinhtrang),
                "bill_statement_getYear" => $qrbill->bill_statement_getYear(),
                // "billMonthYear_statement" => $qrbill->billMonthYear_statement($month, $year, $tinhtrang),
                "billMonthYear_statement_showpaid" => $qrbill->billMonthYear_statement_showPaid(),
                "billMonthYear_statement_showUnpaid" => $qrbill->billMonthYear_statement_showUnPaid(),
            ]);
        }
        public function studentPage($id, $role)
        {
            $ModelUser = $this->model("userModel");
            $ac_role = $ModelUser->editUser($id, $role);
            $qrstudent = $this->model("studentModel");
            while ($row = mysqli_fetch_assoc($ac_role)) {
                $role  = $row["role_id"];
                $id = $row["id_account"];
                if ($role == '6') {
                    $this->view("masterAccountantLayout", [
                        "pageaccountant" => "page/allstudent_insert",
                        "showstudent" => $qrstudent->showstudent(),
                        "showstrainer" => $qrstudent->showDSTrainer(),
                    ]);
                } elseif ($role == '3') {
                    $this->view("masterAdminLayout", [
                        "pages" => "page/allstudent_insert",
                        "showstudent" => $qrstudent->showstudent(),
                        "showstrainer" => $qrstudent->showDSTrainer(),
                    ]);
                } else {
                    echo 'thua';
                }
            }
        }
        public function allstudentPage($id, $role)
        {
            $ModelUser = $this->model("userModel");
            $qrdatamail = $this->model("mailModel");
            $ac_role = $ModelUser->editUser($id, $role);
            $listdatastudent = $this->model("studentModel");
            $qrbill = $this->model("billModel");
            while ($row = mysqli_fetch_assoc($ac_role)) {
                $role  = $row["role_id"];
                $id = $row["id_account"];
                if ($role == '6') {
                    // $staffModel = $this->model("staffModel");
                    $this->view("masterAccountantLayout", [
                        "pageaccountant" => "page/allstudent",
                        "showstudent" => $listdatastudent->showstudent(),
                        "showstrainer" => $listdatastudent->showDSTrainer(),
                        "mailbox" => $qrdatamail->mailUnread(),
                        "ShowAllOfCourse" => $listdatastudent->ShowAllOfCourse(),
                        "showDSstudent" => $listdatastudent->ShowDSStudent(),
                        "st_bill_paid" => $qrbill->st_bill_paid(),
                        "bill_all" => $qrbill->bill_all(),
                        "show_bill_full" => $qrbill->st_bill_sale_sourse(),
                        // "billMonthYear_statement" => $qrbill->billMonthYear_statement($month, $year, $tinhtrang),
                        "bill_statement_getYear" => $qrbill->bill_statement_getYear(),
                        // "billMonthYear_statement" => $qrbill->billMonthYear_statement($month, $year, $tinhtrang),
                        "billMonthYear_statement_showpaid" => $qrbill->billMonthYear_statement_showPaid(),
                        "billMonthYear_statement_showUnpaid" => $qrbill->billMonthYear_statement_showUnPaid(),
                    ]);
                } elseif ($role == '3') {
                    $this->view("masterAdminLayout", [
                        "pages" => "page/allstudent",
                        "showstudent" => $listdatastudent->showstudent(),
                        "showstrainer" => $listdatastudent->showDSTrainer(),
                        "mailbox" => $qrdatamail->mailUnread(),
                        "ShowAllOfCourse" => $listdatastudent->ShowAllOfCourse(),
                        "showDSstudent" => $listdatastudent->ShowDSStudent(),
                        "st_bill_paid" => $qrbill->st_bill_paid(),
                        "bill_all" => $qrbill->bill_all(),
                        "show_bill_full" => $qrbill->st_bill_sale_sourse(),
                        // "billMonthYear_statement" => $qrbill->billMonthYear_statement($month, $year, $tinhtrang),
                        "bill_statement_getYear" => $qrbill->bill_statement_getYear(),
                        // "billMonthYear_statement" => $qrbill->billMonthYear_statement($month, $year, $tinhtrang),
                        "billMonthYear_statement_showpaid" => $qrbill->billMonthYear_statement_showPaid(),
                        "billMonthYear_statement_showUnpaid" => $qrbill->billMonthYear_statement_showUnPaid(),
                    ]);
                } else {
                    echo 'thua';
                }
            }
        }

        public function allstudent_insert($id, $role)
        {
            if (isset($_POST["add_student"])) {
                $ma_HV = isset($_POST['ma_HV']) ? $_POST['ma_HV'] : null;
                $imgHV = isset($_POST['hinhanh']) ? $_POST['hinhanh'] : null;
                $name = isset($_POST['tenhv']) ? $_POST['tenhv'] : null;
                $birthday = isset($_POST['ngaysinh']) ? $_POST['ngaysinh'] : '';
                // $school = isset($_POST['truong']) ? $_POST['truong'] : '';
                $phone = isset($_POST['sdt']) ? $_POST['sdt'] : '';
                $gmail = isset($_POST['gmail']) ? $_POST['gmail'] : '';
                $active = isset($_POST['actived']) ? $_POST['actived'] : '';
                $ModelStudent = $this->model("studentModel");
                // kiểm tra empty các biên có rỗng k rỗng => true 
                $ModelUser = $this->model("userModel");
                $ac_role = $ModelUser->editUser($id, $role);
                // $qr = mysqli_num_rows($ac_role);
                if (empty($_POST["ma_HV"] && $_POST['hinhanh'] && $_POST["name"] && $_POST["phong"] && $_POST["so_luongHV"] && $_POST["sourse_detail_id"] && $_POST["trangthai"])) {
                    $this->view("masterAdminLayout", [
                        "pages" => "page/allstudent_insert",
                        "showstudent" => $ModelStudent->showstudent(),
                        "showDSstudent" => $ModelStudent->ShowDSStudent(),
                        "ShowAllOfCourse" => $ModelStudent->ShowAllOfCourse(),
                    ]);
                }
                while ($row = mysqli_fetch_assoc($ac_role)) {
                    $role = $row["role_id"];
                    $id = $row["id_account"];
                    if ($role == '6') {
                        $this->view("masterAccountantLayout", [
                            "pageaccountant" => "page/allstudent_insert",
                            "result_insert" => $ModelStudent->insertStudent($ma_HV, $imgHV, $name, $birthday, $phone, $gmail, $active),
                            "showstudent" => $ModelStudent->showstudent(),
                            "showDSstudent" => $ModelStudent->ShowDSStudent(),
                            "ShowAllOfCourse" => $ModelStudent->ShowAllOfCourse(),
                        ]);
                    } elseif ($role == '3') {
                        $this->view("masterAdminLayout", [
                            "pages" => "page/allstudent_insert",
                            "result_insert" => $ModelStudent->insertStudent($ma_HV, $imgHV, $name, $birthday, $phone, $gmail, $active),
                            "showstudent" => $ModelStudent->showstudent(),
                            "showDSstudent" => $ModelStudent->ShowDSStudent(),
                            "ShowAllOfCourse" => $ModelStudent->ShowAllOfCourse(),
                        ]);
                    }
                }

                // request biến rỗng thì false không thực hiện hàm model insert   
                // $this->view("masterAdminLayout", [
                //     "pages" => "page/allstudent_insert",
                //     "result_insert" => $ModelStudent->insertStudent($ma_HV, $imgHV, $name, $birthday, $phone, $gmail, $active),
                //     "showstudent" => $ModelStudent->showstudent(),
                //     "showDSstudent" => $ModelStudent->ShowDSStudent(),
                //     "ShowAllOfCourse" => $ModelStudent->ShowAllOfCourse(),
                // ]);
            }
        }
        // xóa
        public function allstudent_delete($id)
        {
            $ModelStudent = $this->model("studentModel");
            $this->view("masterAdminLayout", [
                "pages" => "page/allstudent",
                "deleteStudent" => $ModelStudent->deleteStudent($id),
                "showstudent" => $ModelStudent->showstudent(),
            ]);
        }
        public function student_incourse_delete($id)
        {
            $ModelStudent = $this->model("studentModel");
            $this->view("masterAdminLayout", [
                "pages" => "page/allstudent",
                "deleteStudent_incourse" => $ModelStudent->deleteStudent_incourse($id),
                "showstudent" => $ModelStudent->showstudent(),
                "showDSstudent" => $ModelStudent->ShowDSStudent(),
                "ShowAllOfCourse" => $ModelStudent->ShowAllOfCourse(),
                // "delete_bill" => $ModelStudent->delete_bill($id),
                "studentView_action" => $ModelStudent->studentView_action($id)
            ]);
        }
        public function allstudent_edit($id_Student, $role)
        {
            $ModelStudent = $this->model("studentModel");
            $ModelUser = $this->model("userModel");
            $ac_role = $ModelUser->role($role);
            while ($row = mysqli_fetch_assoc($ac_role)) {
                $role = $row["role_id"];
                // $id = $row["id_account"];
                if ($role == '6') {
                    $this->view("masterAccountantLayout", [
                        "pageaccountant" => "page/allstudent_edit",
                        "editStudent" => $ModelStudent->editStudent($id_Student),
                        "showstudent" => $ModelStudent->showstudent(),
                        "studentView_action" => $ModelStudent->studentView_action($id_Student),
                        "studentView_action_nonbill" => $ModelStudent->studentView_action_nonbill($id_Student)

                    ]);
                } elseif ($role == '3') {
                    $this->view("masterAdminLayout", [
                        "pages" => "page/allstudent_edit",
                        "editStudent" => $ModelStudent->editStudent($id_Student),
                        "showstudent" => $ModelStudent->showstudent(),
                        "studentView_action" => $ModelStudent->studentView_action($id_Student),
                        "studentView_action_nonbill" => $ModelStudent->studentView_action_nonbill($id_Student)

                    ]);
                } else {
                    echo 'thua';
                }
            }
        }
        public function allstudent_edit_AD($id)
        {
            $ModelStudent = $this->model("studentModel");
            $ModelUser = $this->model("userModel");
            $this->view("masterAdminLayout", [
                "pages" => "page/allstudent_edit",
                "editStudent" => $ModelStudent->editStudent($id),
                "showstudent" => $ModelStudent->showstudent(),
                "studentView_action" => $ModelStudent->studentView_action($id),
                "studentView_action_nonbill" => $ModelStudent->studentView_action_nonbill($id)

            ]);
        }
        // Sửa 
        public function allstudent_update($id)
        {
            $result_mess = false;
            // $ModelStudentupdate = $this->model("studentModel");
            if (isset($_POST['edit_student'])) {
                if (empty($_POST["tenhv"] && $_POST["ngaysinh"] && $_POST["sdt"] && $_POST["gmail"] && $_POST["actived"])) {
                    $this->view("masterAdminLayout", [
                        "pages" => "page/allstudent_edit",
                        "result_insert" => $result_mess,
                    ]);
                } else {
                    $ModelStudentupdate = $this->model("studentModel");
                    // $ma_HV = isset($_POST['ma_HV']) ? $_POST['ma_HV'] : '';
                    // $imgHV = isset($_POST["hinhanh"]) ? $_POST["hinhanh"] :$_POST["hinhanh"] ;
                    $name = isset($_POST['tenhv']) ? $_POST['tenhv'] : '';
                    $birthday = isset($_POST['ngaysinh']) ? $_POST['ngaysinh'] : '';
                    // $school = isset($_POST['truong']) ? $_POST['truong'] : '';
                    $phone = isset($_POST['sdt']) ? $_POST['sdt'] : '';
                    $gmail = isset($_POST['gmail']) ? $_POST['gmail'] : '';
                    $active = isset($_POST['actived']) ? $_POST['actived'] : '';
                    $this->view("masterAdminLayout", [
                        "pages" => "page/allstudent_edit",
                        "updateStudent" => $ModelStudentupdate->updateStudent($id, $name, $birthday, $phone, $gmail, $active),
                        "editStudent" => $ModelStudentupdate->editStudent($$id),
                        "showstudent" => $ModelStudentupdate->showstudent(),
                        "studentView_action" => $ModelStudentupdate->studentView_action($id),
                        "studentView_action_nonbill" => $ModelStudentupdate->studentView_action_nonbill($id)
                    ]);
                }
            }
        }
        public function student_resgiter()
        {
            $result_mess = false;
            if (isset($_POST['submit_add'])) {
                $id_Student = isset($_POST['id_students']) ? $_POST['id_students'] : null;
                $id_sourse_detail = isset($_POST['id_sourse_detail']) ? $_POST['id_sourse_detail'] : null;
                $tinhtrang = isset($_POST['tinhtrang']) ? $_POST['tinhtrang'] : '';
                $ModelStudent = $this->model("studentModel");
                if (empty($_POST["id_students"] && $_POST["id_sourse_detail"] && $_POST["ngayhoc"] && $_POST["ngaykethuc"] && $_POST["tinhtrang"])) {
                    $this->view("masterAdminLayout", [
                        "pages" => "page/allstudent_insert",
                        "showDSstudent" => $ModelStudent->ShowDSStudent(),
                        "showstudent" => $ModelStudent->showstudent(),
                        "result_insert" => $result_mess
                    ]);
                }
                $this->view("masterAdminLayout", [
                    "pages" => "page/allstudent_insert",
                    "result_insert" => $ModelStudent->insertStudentRegister($id_Student, $id_sourse_detail, $tinhtrang),
                    "showstudent" => $ModelStudent->showstudent(),
                    "showDSstudent" => $ModelStudent->ShowDSStudent(),
                ]);
            } else {
                $ModelStudent = $this->model("studentModel");
                $this->view("masterAdminLayout", [
                    "pages" => "page/allstudent_insert",
                    "showstudent" => $ModelStudent->showstudent(),
                    "showDSstudent" => $ModelStudent->ShowDSStudent(),
                ]);
            }
        }
        public function trainerPage()
        {
            $listdataTrainer = $this->model("trainerModel");
            $this->view("masterAdminLayout", [
                "pages" => "page/alltrainer",
                "showstrainer" => $listdataTrainer->showDSTrainer()
            ]);
        }
        public function tablesdatatable()
        {
            $listdata = $this->model("liststudentModel");
            $this->view("masterAdminLayout", [
                "pages" => "page/listDatabase",
                "showstudent" => $listdata->ShowDSStudent(),
                "ShowAllOfCourse" => $listdata->ShowAllOfCourse()
            ]);
        }
        // --- đóng Display Giao diện sliderBar 
        public function addUser()
        {
            // $datathem = $this->model("userModel") ;
            // // $this->view("users", [
            // //     "addUser" => $datathem->gettk()
            // // ]);
            // if (isset($_POST["them"])) {

            //     $id = ["id_account"];
            //     $accountName  = ["ten_taikhoan"];
            //     $password = ["mk_taikhoan"];
            //     $phone = ["phone"];
            //     $createday = date("d-m-Y");
            //     if ($accountName == '') {
            //         echo "vui lòng nhập tên đăng nhập";
            //     }
            //     if ($password == '') {
            //         echo "vui lòng nhập mật khẩu";
            //     }
            //     if ($phone == '') {
            //         echo "vui lòng nhập số điện thoại ";
            //     }

            //     if ($id != "" && $accountName != "" && $password != "" && $phone != ""
            //         && $createday != ""){
            //         $sql = "INSERT INTO `account_user`(`id_account`, `ten_taikhoan`, `mk_taikhoan`,
            //          `role_id`, `phone`, `ngaytao_tk`)
            //         VALUES('$id','$accountName','$password','$phone ','$createday')";
            //         $resust = mysqli_query($this->conn, $sql);
            //         header("location: ../views/users.php");
            //     }

        }
        // Thêm 
        public function action()
        {
            $this->view("masterAdminLayout", [
                "pages" => "page/allstudent",
            ]);
        }
        public function search_student()
        {
            $this->qrStudent  = $this->model("studentModel");
            if (isset($_POST["action"])) {
                $search_st = $_POST["search_st"];
                $result = $this->qrStudent->Search($search_st);
                $num = mysqli_num_rows($result);
                $output = "";
                if ($num > 0) {
                    while ($row1 = mysqli_fetch_assoc($result)) {
    ?>
 <tr>
     <th>
         <?php echo $row1["id_students"] ?></th>
     <td> <?php echo $row1["tenhv"]; ?></td>

     <td><?php echo $row1["id_sourse_detail"]; ?></td>
     <td><?php echo $row1["tenkhoahoc"]; ?></td>
     <td> <?php echo $row1["price"] ?></td>
     <td><?php echo $row1["ngaykhaigiang"]; ?> </td>
     <td><?php echo $row1["ngayketthuc"]; ?></td>
     <td><?php echo $row1["tinhtrang"]; ?></td>

 </tr>

 <?php }
                }

                // foreach ($result as $rows) {
                // $output .= '
                // <li>
                // <div class="row"> ' . $rows["tenhv"] . ' </div>
                // </li>

                // ';
                // }
                // echo $output;
            }
        }
    }
    ?>