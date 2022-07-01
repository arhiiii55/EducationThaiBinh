<?php
class Home extends Controllers
{

    public function adminPage()
    {
        //lấy model ra xài
        $qrdatamail = $this->model("mailModel");
        $qrClass = $this->model("classModel");
        $courseModel = $this->model("courseModel");
        $HV = $this->model("studentModel");
        $userModel = $this->model("userModel");
        //lấy view  
        $this->view("masterAdminLayout", [
            "pages" => "page/home",
            "mau" => 'red',
            "countStudent" => $HV->countHV(),
            "mailbox" => $qrdatamail->mailUnread(),
            "courseDetail" => $courseModel->ShowCourseDetail(),
            "count_messages" => $qrdatamail->countMail(),
            "countClass_forIndex" => $qrClass->countClass_forIndex(),
            // 'khoahochienhanh' => $courseModel->eduCourse_all()
        ]);
    }
    public function show()
    {
        $qrdatamail = $this->model("mailModel");
        //lấy model ra xài
        $userM = $this->model("userModel");
        //lấy view  
        $this->view("masterAdminLayout", [
            "pages" => "page/users",
            "mau" => 'red',
            "User" => $userM->gettk()
        ]);
    }
    public function datalist()
    {
        $this->view("page/home");
        $user = $this->model("userModel");
        echo $user->GetUser();
        // echo "haloo";
    }
    public function accountUserPage()
    {
        //lấy model ra xài
        $qrdatamail = $this->model("mailModel");
        $ModelUser = $this->model("userModel");
        $staffModel = $this->model("staffModel");

        //lấy view  
        $this->view("masterAdminLayout", [
            "pages" => "page/users",
            "mau" => 'red',
            "User" => $ModelUser->gettk(),
            "mailbox" => $qrdatamail->mailUnread(),
            "userShow_ac_role_staff" => $ModelUser->userShow_ac_staff_role(),
            "selectStaff_all" => $staffModel->selectStaff_all(),
            "selectRole_all" => $staffModel->selectRole_all(),
        ]);
    }

    public function coursesDetail()
    {
        $listdataTrainer = $this->model("trainerModel");
        $qrdatamail = $this->model("mailModel");
        $listdataeducourse = $this->model("courseModel");
        $listdata = $this->model("liststudentModel");
        $classdata = $this->model("classModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/allCourses",
            "eduCourse" => $listdataeducourse->ShoweduCourse(),
            "eduCourse_w" => $listdataeducourse->ShoweduCourse(),
            "ShowCourseDetail" => $listdataeducourse->ShowCourseDetail(),
            "timeabledays" => $listdataeducourse->ShowtimeableDays(),
            "timeabledays_listdown" => $listdataeducourse->ShowtimeableDays(),
            "mailbox" => $qrdatamail->mailUnread(),
            "ShowAllOfCourse" => $listdata->ShowAllOfCourse(),
            "class_all" =>  $classdata->class_all(),
            "class_all_detail" =>  $classdata->class_all_detail(),
            "class_all_id" => $classdata->class_all_id(),
            "showstrainer" => $listdataTrainer->showDSTrainer(),
            "eduCourse_all" => $listdataeducourse ->eduCourse_all(),
            "ShowCourseDetail_NonTrainer" => $listdataeducourse ->ShowCourseDetail_NonTrainer(),
        ]);
    }
    public function studentPage()
    {
        $qrdatamail = $this->model("mailModel");
        $listdatastudent = $this->model("studentModel");
        $qrcourse = $this->model("courseModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/allstudent_insert",
            "showstudent" => $listdatastudent->showstudent(),
            "showstrainer" => $listdatastudent->showDSTrainer(),
            "mailbox" => $qrdatamail->mailUnread(),
            "ShowAllOfCourse" => $listdatastudent->ShowAllOfCourse(),
            "ShowCourseDetail" => $qrcourse->ShowCourseDetail(),
            "showDSstudent" => $listdatastudent->ShowDSStudent(),

        ]);
    }
    public function allstudentPage()
    {
        $qrdatamail = $this->model("mailModel");
        $listdatastudent = $this->model("studentModel");
        $qrbill = $this->model("billModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/allstudent",
            "showstudent" => $listdatastudent->showstudent(),
            "showstrainer" => $listdatastudent->showDSTrainer(),
            "mailbox" => $qrdatamail->mailUnread(),
            "ShowAllOfCourse" => $listdatastudent->ShowAllOfCourse(),
            "showDSstudent" => $listdatastudent->ShowDSStudent(),
        ]);
    }
    public function trainerPage()
    {
        $qrdatamail = $this->model("mailModel");
        $listdataTrainer = $this->model("trainerModel");
        $userModel = $this->model("userModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/alltrainer",
            "showstrainer" => $listdataTrainer->showDSTrainer(),
            "mailbox" => $qrdatamail->mailUnread(),
            "tkofTrainer" => $userModel->gettk()
        ]);
    }
    public function classPage()
    {
        $listdata = $this->model("liststudentModel");
        $qrdataClass = $this->model("classModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/class",
            "class_all" => $qrdataClass->class_all(),
            "class_all_detail" =>  $qrdataClass->class_all_detail(),
            "ShowAllOfCourse" => $listdata->ShowAllOfCourse(),
            "countStudentReal" => $qrdataClass->countStudentReal(),
        ]);
    }
    public function blogpage()
    {
        $this->view("masterAdminLayout", [
            "pages" => "page/blog",
        ]);
    }
    public function billPage()
    {
        $this->view("masterAdminLayout", [
            "pages" => "page/bill_page_detail",
        ]);
    }
    public function student()
    {
        $qrdatamail = $this->model("mailModel");
        $listdatastudent = $this->model("student");
        $this->view("allstudent", [
            "showstudent" => $listdatastudent->showstudent(),
            "showstrainer" => $listdatastudent->showDSTrainer(),
            "insertStudent" => $listdatastudent->insertStudent()
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
    public function mailboxPage()
    {
        $qrdatamail = $this->model("mailModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/mail-all",
            "getmail" => $qrdatamail->getMailbox(),
            "mailbox" => $qrdatamail->mailUnread(),

        ]);
    }
    public function mailbox_delete($id_mailbox)
    {
        $qrdatamail = $this->model("mailModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/mail-all",
            "getmail" => $qrdatamail->getMailbox(),
            "mailbox" => $qrdatamail->mailUnread(),
            "mailbox_delete" => $qrdatamail->mailbox_delete($id_mailbox),

        ]);
    }
    public function mailboxReply($id_mailbox)
    {

        $qrdatamail = $this->model("mailModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/mail-view",
            "mailbox" => $qrdatamail->mailUnread(),
            "getmailbox" => $qrdatamail->getMailbox(),
            'MailboxDeital' => $qrdatamail->MailboxDeital($id_mailbox)
        ]);
    }
    public function update_mail($id_mailbox)
    {
        $result_mess = false;

        if (isset($_POST["submit_mail"])) {
            if (empty($_POST["reply"] && $_POST["tinhtrang"])) {
                $this->view("masterAdminLayout", [
                    "pages" => "page/mail-view",
                    "updateMail" => $result_mess

                ]);
            } else {
                $qrdatamail = $this->model("mailModel");
                $tinhtrang = isset($_POST['tinhtrang']) ? $_POST['tinhtrang'] : null;
                $phanhoi = isset($_POST['reply']) ? $_POST['reply'] : '';
                $email = $_POST['email_send'];
                $this->view("masterAdminLayout", [
                    "pages" => "page/mail-view",
                    "updateMail" => $qrdatamail->update_mail($id_mailbox, $tinhtrang, $phanhoi, $email),
                    "mailbox" => $qrdatamail->mailUnread(),
                    "getmailbox" => $qrdatamail->getMailbox(),
                    'MailboxDeital' => $qrdatamail->MailboxDeital($id_mailbox)
                ]);
            }
        }
    }

    public function loginPage()
    {
        $this->view("page/login", []);
    }
    public function loginAdmin()
    {
        $result_mess = false;
        // $qrTK = $this->model("userModel");
        if (isset($_POST["btndangnhap"])) {
            $username = $_POST["ten_dangnhap"];
            $password_input = $_POST["mk_taikhoan"];
            if (empty($_POST["ten_dangnhap"]) || empty($_POST["mk_taikhoan"])) {
                $this->view("page/login", [
                    "result" => $result_mess
                ]);
            }
            $rss = $this->model("userModel")->loginadmin($username);
            $qrdatamail = $this->model("mailModel");
            // $qrmail = $this->model("getIndexModel");
            $courseModel = $this->model("courseModel");
            $HV = $this->model("studentModel");
            // $rs = $this->model("userModel")->login($username, $password_input);
            if (mysqli_num_rows($rss) > 0) {
                // echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
                // exit;
                while ($row = mysqli_fetch_assoc($rss)) {
                    $id = $row["id_account"];
                    $username = $row["ten_taikhoan"];
                    $password = $row["mk_taikhoan"];
                }
                if (password_verify($password, $password_input)) {
                    // echo 'cai này được';
                    $_SESSION["id_account"] = $id;

                    $this->view("masterAdminLayout", [
                        "pages" => "page/home",
                        "mau" => 'red',
                        'countStudent' => $HV->countHV(),
                        'courseDetail' => $courseModel->ShowCourseDetail(),
                        'count_messages' => $qrdatamail->countMail(),
                        'khoahochienhanh' => $courseModel->eduCourse_all()
                    ]);
                } else {
                    // echo 'thất bại';
                    // $result = $this->model("userModel");
                    $this->view("masterAdminLayout", [
                        "pages" => "page/home",
                        'countStudent' => $HV->countHV(),
                        'courseDetail' => $courseModel->ShowCourseDetail(),
                        'count_messages' => $qrdatamail->countMail(),
                        'khoahochienhanh' => $courseModel->eduCourse_all()
                    ]);
                }
            } else {
                // echo 'thất bại';
                // $result = $this->model("userModel");
                $this->view("page/login", [
                    "result" => $result_mess
                ]);
            }
            //lấy view  
        }
    }
    public function login()
    {
        $username = $_POST["ten_dangnhap"];
        $password_input = $_POST["mk_taikhoan"];
           if (empty($_POST["ten_dangnhap"]) || empty($_POST["mk_taikhoan"])) {
            $this->view("page/login", []);
        }$result = $this->model("userModel")->login($username, $password_input);
        // $qrlogin = " SELECT * FROM account_user WHERE `ten_taikhoan` = '$username' ";
        // $result =  mysqli_query($this->conn, $qrlogin);
     
        $qr = mysqli_num_rows($result);
        if ($qr > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row["id_account"];
                $username = $row["ten_taikhoan"];
                $password_input = $row["mk_taikhoan"];
                $role = $row["role_id"];
                // $phone = $row["phone"];
                // $ngay = $row["ngaytao_tk"];
                if ($row["role_id"] == '2') {
                    $_SESSION["id_account"] = $id;
                    $_SESSION["ten_taikhoan"] = $username;
                    $_SESSION["role_id"] = $role;
                    $this->view("masterTrainerLayout", [
                        "pagetrainer" => "pageTrainer/welcome",

                    ]);
                } elseif ($row["role_id"] == '6') {
                    # user nhan vien quan ly
                    $_SESSION["id_account"] = $id;
                    $_SESSION["ten_taikhoan"] = $username;
                    $_SESSION["role_id"] = $role;
                    echo '<script language="javascript">alert("Đăng nhập trang AC thành công!");</script>';
                    $this->view("masterAccountantLayout", [
                        "pageaccountant" => "pageAccountant/mainpage_AC",

                    ]);
                } else {
                    // echo "<h1> đăng nhập thành công</h1>";
                    $_SESSION["id_account"] = $id;
                    $_SESSION["ten_taikhoan"] = $username;
                    echo '<script language="javascript">alert("Đăng nhập thành công!");</script>';

                    $qrdatamail = $this->model("mailModel");
                    // $qrmail = $this->model("getIndexModel");
                    $courseModel = $this->model("courseModel");
                    $HV = $this->model("studentModel");
                    $qrClass = $this->model("classModel");

                    //lấy view  
                    $this->view("masterAdminLayout", [
                        "pages" => "page/home",
                        'countStudent' => $HV->countHV(),
                        'courseDetail' => $courseModel->ShowCourseDetail(),
                        'count_messages' => $qrdatamail->countMail(),
                        'khoahochienhanh' => $courseModel->eduCourse_all(),
                        "countClass_forIndex" => $qrClass->countClass_forIndex(),
                        'result' => $result

                    ]);
                }
            }
        } else {
            echo '<script language="javascript">alert("Đăng nhập thất bại! nhập lại đi @.@ !");</script>';
            $this->view("page/login", [
                'none' => 'node'
            ]);
        }
    }
    public function logout()
    {
        # code...
        unset($_SESSION["id"]);
        session_destroy();
        $this->view("page/login", []);
    }
}