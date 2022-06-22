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
        public function studentPage()
        {
            $listdatastudent = $this->model("studentModel");
            $this->view("masterAdminLayout", [
                "pages" => "page/allstudent_insert",
                "showstudent" => $listdatastudent->showstudent(),
                "showstrainer" => $listdatastudent->showDSTrainer(),

            ]);
        }
        public function allstudentPage()
        {
            $listdatastudent = $this->model("studentModel");
            $this->view("masterAdminLayout", [
                "pages" => "page/allstudent",
                "showstudent" => $listdatastudent->showstudent(),
                "showstrainer" => $listdatastudent->showDSTrainer(),
            ]);
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
        public function view_insert()
        {
            $this->view("masterAdminLayout", [
                "pages" => "page/allstudent_insert",
            ]);
        }
        // Thêm 
        public function allstudent_insert()
        {
            if (isset($_POST["add_student"])) {
                $imgHV = $_POST['hinhanh'];
                $name = isset($_POST['tenhv']) ? $_POST['tenhv'] : null;
                $birthday = isset($_POST['ngaysinh']) ? $_POST['ngaysinh'] : '';
                $school = isset($_POST['truong']) ? $_POST['truong'] : '';
                $phone = isset($_POST['sdt']) ? $_POST['sdt'] : '';
                $gmail = isset($_POST['gmail']) ? $_POST['gmail'] : '';
                $active = isset($_POST['actived']) ? $_POST['actived'] : '';
                $ModelStudent = $this->model("studentModel");
                $this->view("masterAdminLayout", [
                    "pages" => "page/allstudent_insert",
                    "result_insert" => $ModelStudent->insertStudent($imgHV, $name, $birthday, $school, $phone, $gmail, $active),
                    "showstudent" => $ModelStudent->showstudent(),
                    "showDSstudent" => $ModelStudent->ShowDSStudent(),
                    "ShowAllOfCourse" => $ModelStudent->ShowAllOfCourse(),
                ]);
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
        public function allstudent_edit($id)
        {
            $ModelStudent = $this->model("studentModel");
            $this->view("masterAdminLayout", [
                "pages" => "page/allstudent_edit",
                "editStudent" => $ModelStudent->editStudent($id),
                "showstudent" => $ModelStudent->showstudent(),
            ]);
        }
        // Sửa 
        public function allstudent_update($id)
        {
            $result_mess = false;
            // $ModelStudentupdate = $this->model("studentModel");
            if (isset($_POST['edit_student'])) {
                if (empty($_POST["tenhv"] && $_POST["ngaysinh"] && $_POST["truong"] && $_POST["sdt"] && $_POST["gmail"] && $_POST["actived"])) {
                    $this->view("masterAdminLayout", [
                        "pages" => "page/allstudent_edit",
                        "result_insert" => $result_mess,
                    ]);
                } else {
                    $ModelStudentupdate = $this->model("studentModel");
                    $imgHV = $_POST["hinhanh"];
                    $name = isset($_POST['tenhv']) ? $_POST['tenhv'] : '';
                    $birthday = isset($_POST['ngaysinh']) ? $_POST['ngaysinh'] : '';
                    $school = isset($_POST['truong']) ? $_POST['truong'] : '';
                    $phone = isset($_POST['sdt']) ? $_POST['sdt'] : '';
                    $gmail = isset($_POST['gmail']) ? $_POST['gmail'] : '';
                    $active = isset($_POST['actived']) ? $_POST['actived'] : '';
                    $this->view("masterAdminLayout", [
                        "pages" => "page/allstudent_edit",
                        "updateStudent" => $ModelStudentupdate->updateStudent($id, $imgHV, $name, $birthday, $school, $phone, $gmail, $active),
                        "editStudent" => $ModelStudentupdate->editStudent($id),
                        "showstudent" => $ModelStudentupdate->showstudent(),
                    ]);
                }
            }
        }

        public function student_view()
        {
            // $ModelStudent = $this->model("studentModel");
            $this->view("masterAdminLayout", [
                "pages" => "page/mail-view",
                // "studentShow" => $ModelStudent->showstudent(),
            ]);
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
    }