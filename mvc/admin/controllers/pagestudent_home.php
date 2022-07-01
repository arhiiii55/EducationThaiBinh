<?php
class pagestudent_home extends Controllers
{
    public function homeMain()
    {
        $this->view("masterStudentLayout", [
            "pagestudent" => "pageStudent/home",
        ]);
    }
    public function register_course()
    {
        $Modelstudent = $this->model("userModel");
        $this->view("masterStudentLayout", [
            "pagestudent" => "pageStudent/student_register",
        ]);
    }
    public function student_status_ST($id)
    {
        $Modelstudent = $this->model("userModel");
        $this->view("masterStudentLayout", [
            "pagestudent" => "pageStudent/allstudent_edit",
            "editStudent" =>  $Modelstudent->editStudent($id),
        ]);
    }
    public function loginStudentPage()
    {
        $result_mess = false;
        $this->view("clientLogin", [
            "result" => $result_mess
        ]);
    }
    public function student_Page()
    {
        $result_mess = false;
        // $qrTK = $this->model("userModel");

        if (isset($_POST["btndangnhap_st"])) {
            $username = $_POST["ten_dangnhap"];
            $password_input = $_POST["mk_taikhoan"];
            if (empty($_POST["ten_dangnhap"]) || empty($_POST["mk_taikhoan"])) {
                $this->view("clientLogin", [
                    "result" => $result_mess
                ]);
            }
            $result = $this->model("userModel")->loginPageStudent($username, $password_input);
            // $qrdatamail = $this->model("mailModel");
            // $courseModel = $this->model("courseModel");
            // $studentModel = $this->model("studentModel");
            // $rs = $this->model("userModel")->login($username, $password_input);
            $qr = mysqli_num_rows($result);
            if ($qr > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row["id"];
                    $username = $row["username"];
                    $password = $row["password"];
                }
                // password_verify($password, $password_input)
                if ($password ==  $password_input) {
                    echo 'cai này được';
                    $_SESSION["id"] = $id;
                    $this->view("masterStudentLayout", [
                        "pagestudent" => "pageStudent/notification_page",
                        "mau" => 'red',
                    ]);
                } else {
                    $this->view("masterStudentLayout", [
                        "pagestudent" => "pageStudent/notification_page",
                    ]);
                }
            } else {
                // echo 'thất bại';
                // $result = $this->model("userModel");
                $this->view("masterStudentLayout", [
                    "pagestudent" => "pageStudent/notification_page",
                    "result" => $result_mess
                ]);
            }
            //lấy view  
        }
    }

    public function notification_Page($id)
    {
        $mailModel = $this->model("mailModel");
        // echo $mahv;
        $this->view("masterStudentLayout", [
            "pagestudent" => "pageStudent/notification_all",
            "getmail" => $mailModel->getMail_notification($id)
        ]);
    }

    public function account_Page($id)
    {
        $studentModel = $this->model("studentModel");
        // $mailModel = $this->model("mailModel");
        // echo $mahv;
        $this->view("masterStudentLayout", [
            "pagestudent" => "pageStudent/allstudent_edit",
            "getInfoStudent" => $studentModel->getInfoStudent($id),
            "studentView_action" => $studentModel->studentView_action($id)
        ]);
    }
}