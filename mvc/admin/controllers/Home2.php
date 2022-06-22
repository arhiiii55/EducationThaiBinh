<?php
class home2 extends Controllers
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
        $this->view("masterTrainerLayout", [
            "pagetrainer" => "pageTrainer/home2",
            "mau" => 'red',
            "countStudent" => $HV->countHV(),
            "mailbox" => $qrdatamail->mailUnread(),
            "courseDetail" => $courseModel->ShowCourseDetail(),
            "count_messages" => $qrdatamail->countMail(),
            "countClass_forIndex" => $qrClass->countClass_forIndex(),
            // 'khoahochienhanh' => $courseModel->eduCourse_all()
        ]);
    }
    public function User_edit($id)
    {
        $ModelUser = $this->model("userModel");
        $this->view("masterTrainerLayout", [
            "pagetrainer" => "pageTrainer/user_edit",
            "editUser" => $ModelUser->editUser($id),
            "User" => $ModelUser->gettk(),
        ]);
    }
    // Sửa 
    public function User_update($id)
    {
        $result_mess = false;
        if (isset($_POST['editUser'])) {
            if (empty($_POST["tenTk"] && $_POST["password"] && $_POST["ngaytao"])) {
                $this->view("masterTrainerLayout", [
                    "pagetrainer" => "pageTrainer/user_edit",
                    "result" => $result_mess
                ]);
            } else {
                $ModelUser = $this->model("userModel");
                $tenTk = isset($_POST['tenTk']) ? $_POST['tenTk'] : null;
                $password = isset($_POST['password']) ? $_POST['password'] : null;
                $ngaytao_tk = isset($_POST['ngaytao']) ? $_POST['ngaytao'] : '';
                $this->view("masterTrainerLayout", [
                    "pagetrainer" => "pageTrainer/user_edit",
                    "updateUser" => $ModelUser->updateUser($id, $tenTk, $password, $ngaytao_tk),
                    "editUser" => $ModelUser->editUser($id),
                    "gettk" => $ModelUser->gettk()
                ]);
            }
        }
    }
    public function edit_trainer($id)
    {
        $Modeltrainer = $this->model("trainerModel");
        $this->view("masterTrainerLayout", [
            "pagetrainer" => "pageTrainer/alltrainer_edit",
            "editTrainer" => $Modeltrainer->editTrainer_GV($id),
            "showDSTrainer" => $Modeltrainer->showDSTrainer(),
        ]);
    }
    // Sửa 
    public function update_trainer($id)
    {
        $result_mess = false;
        if (isset($_POST['edit'])) {
            if (empty($_POST["name"] && $_POST["chucvu"] && $_POST["donvi"]
                && $_POST["thanhtich"] && $_POST["kinhnghiem"] && $_POST["sdt"] && $_POST["gmail"] && $_POST["actived"])) {
                $this->view("masterTrainerLayout", [
                    "pagetrainer" => "pageTrainer/alltrainer_edit",
                    "result" => $result_mess
                ]);
            } else {
                $Modeltrainer = $this->model("trainerModel");
                $imgGV = $_POST["anhanh"];
                $nameGV = isset($_POST['name']) ? $_POST['name'] : null;
                $chucvu = isset($_POST['chucvu']) ? $_POST['chucvu'] : '';
                $dv_congtac = isset($_POST['donvi']) ? $_POST['donvi'] : '';
                $thanhtich = isset($_POST['thanhtich']) ? $_POST['thanhtich'] : '';
                $kinhnghiem = isset($_POST['kinhnghiem']) ? $_POST['kinhnghiem'] : '';
                $sdtGV = isset($_POST['sdt']) ? $_POST['sdt'] : '';
                $gmailGV = isset($_POST['gmail']) ? $_POST['gmail'] : '';
                $actived = isset($_POST['actived']) ? $_POST['actived'] : '';
                $account = isset($_POST['account']) ? $_POST['account'] : '';
                $this->view("masterTrainerLayout", [
                    "pagetrainer" => "pageTrainer/user_edit",
                    "updateTrainer" => $Modeltrainer->updateTrainer_GV($id, $imgGV, $nameGV, $chucvu, $dv_congtac, $thanhtich, $kinhnghiem, $sdtGV, $gmailGV, $actived, $account),
                    "editTrainer" => $Modeltrainer->editTrainer_GV($id),
                    "showDSTrainer" => $Modeltrainer->showDSTrainer(),
                ]);
            }
        }
    }
    // ----------------------------------------------phần học viên---------start
    public function studentPage()
    {
        $qrdatamail = $this->model("mailModel");
        $listdatastudent = $this->model("studentModel");
        $this->view("masterTrainerLayout", [
            "pagetrainer" => "pageTrainer/allstudent_insert",
            "showstudent" => $listdatastudent->showstudent(),
            "showstrainer" => $listdatastudent->showDSTrainer(),
            "mailbox" => $qrdatamail->mailUnread(),
            "ShowAllOfCourse" => $listdatastudent->ShowAllOfCourse(),
            "showDSstudent" => $listdatastudent->ShowDSStudent(),
        ]);
    }
    public function allstudentPage($id)
    {

        $qrdatamail = $this->model("mailModel");
        $listdatastudent = $this->model("studentModel");
        $liststudentModel = $this->model("liststudentModel");
        $this->view("masterTrainerLayout", [
            "pagetrainer" => "pageTrainer/allstudent",
            "showstudent" => $listdatastudent->showstudent(),
            "showstrainer" => $listdatastudent->showDSTrainer(),
            "mailbox" => $qrdatamail->mailUnread(),
            "ShowAllOfCourse" => $listdatastudent->ShowAllOfCourse(),
            "showDSstudent" => $listdatastudent->ShowDSStudent(),
            "getClass_byIdTrainer_id" => $liststudentModel->getClass_byIdTrainer_id($id),

        ]);
    }
    public function get_allstudent($ten_lop)
    {
        $ten_lop = $_SESSION[""];
        $qrdatamail = $this->model("mailModel");
        $listdatastudent = $this->model("studentModel");
        $liststudentModel = $this->model("liststudentModel");
        $this->view("masterTrainerLayout", [
            "pagetrainer" => "pageTrainer/allstudent",
            "showstudent" => $listdatastudent->showstudent(),
            "showstrainer" => $listdatastudent->showDSTrainer(),
            "mailbox" => $qrdatamail->mailUnread(),
            "ShowAllOfCourse" => $listdatastudent->ShowAllOfCourse(),
            "showDSstudent" => $listdatastudent->ShowDSStudent(),
            "getClass_byIdTrainer" => $liststudentModel->getClass_byIdTrainer($ten_lop),
        ]);
    }
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
            $this->view("masterTrainerLayout", [
                "pagetrainer" => "pageTrainer/allstudent_insert",
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
        $this->view("masterTrainerLayout", [
            "pagetrainer" => "pageTrainer/allstudent",
            "deleteStudent" => $ModelStudent->deleteStudent($id),
            "showstudent" => $ModelStudent->showstudent(),
            "showDSstudent" => $ModelStudent->ShowDSStudent(),
            "ShowAllOfCourse" => $ModelStudent->ShowAllOfCourse(),
        ]);
    }
    public function student_incourse_delete($id)
    {
        $ModelStudent = $this->model("studentModel");
        $this->view("masterTrainerLayout", [
            "pagetrainer" => "pageTrainer/allstudent",
            "deleteStudent_incourse" => $ModelStudent->deleteStudent_incourse($id),
            "showstudent" => $ModelStudent->showstudent(),
            "showDSstudent" => $ModelStudent->ShowDSStudent(),
            "ShowAllOfCourse" => $ModelStudent->ShowAllOfCourse(),
        ]);
    }
    public function allstudent_edit($id)
    {
        $ModelStudent = $this->model("studentModel");
        $this->view("masterTrainerLayout", [
            "pagetrainer" => "pageTrainer/allstudent_edit",
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
                    "pagetrainer" => "page/allstudent_edit",
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
                $this->view("masterTrainerLayout", [
                    "pagetrainer" => "pageTrainer/allstudent_edit",
                    "updateStudent" => $ModelStudentupdate->updateStudent($id, $imgHV, $name, $birthday, $school, $phone, $gmail, $active),
                    "editStudent" => $ModelStudentupdate->editStudent($id),
                    "showstudent" => $ModelStudentupdate->showstudent(),
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
                $this->view("masterTrainerLayout", [
                    "pagetrainer" => "pageTrainer/allstudent_insert",

                    "showDSstudent" => $ModelStudent->ShowDSStudent(),
                    "showstudent" => $ModelStudent->showstudent(),
                    "result_insert" => $result_mess
                ]);
            }

            $this->view("masterTrainerLayout", [
                "pagetrainer" => "pageTrainer/allstudent_insert",
                "result_insert" => $ModelStudent->insertStudentRegister($id_Student, $id_sourse_detail, $tinhtrang),
                "showstudent" => $ModelStudent->showstudent(),
                "showDSstudent" => $ModelStudent->ShowDSStudent(),
            ]);
        } else {
            $ModelStudent = $this->model("studentModel");
            $this->view("masterTrainerLayout", [
                "pagetrainer" => "pageTrainer/allstudent_insert",
                "showstudent" => $ModelStudent->showstudent(),
                "showDSstudent" => $ModelStudent->ShowDSStudent(),
            ]);
        }
    }

    // ----------------------------------------------phần học viên----------end


    public function coursesDetail()
    {
        $qrdatamail = $this->model("mailModel");
        $listdataeducourse = $this->model("courseModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/allCourses",
            "eduCourse" => $listdataeducourse->ShoweduCourse(),
            "courseDetail" => $listdataeducourse->ShowCourseDetail(),
            "timeabledays" => $listdataeducourse->ShowtimeableDays(),
            "mailbox" => $qrdatamail->mailUnread()
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
    public function classPage($id)
    {
        $listdata = $this->model("liststudentModel");
        $qrdataClass = $this->model("classModel");
        $this->view("masterTrainerLayout", [
            "pagetrainer" => "pageTrainer/class",
            "class_all" => $qrdataClass->class_all(),
            "ShowAllOfCourse" => $listdata->ShowAllOfCourse(),
            "countStudentReal" => $qrdataClass->countStudentReal(),
            "editclass_getIdTrainer" => $qrdataClass->editclass_getIdTrainer($id),
            "class_IdTrainer" => $qrdataClass->editclass_IdTrainer(),
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
}