<?php
include("./system/config.php");
class trainers extends Controllers
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
        $ModelUSER = $this->model("userModel");
        $listdataTrainer = $this->model("trainerModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/alltrainer",
            "showstrainer" => $listdataTrainer->showDSTrainer(),
            // "tkofTrainer" => $ModelUSER->gettk(),
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
    public function add_trainer()
    {
        $result_mess = false;

        if (isset($_POST['submit_add'])) {
            $img_GV = isset($_POST['hinhanh']) ? $_POST['hinhanh'] : null;
            $ma_GV = isset($_POST['MaGV']) ? $_POST['MaGV'] : null;
            $nameGV = isset($_POST['name']) ? $_POST['name'] : null;
            $chucvu = isset($_POST['chucvu']) ? $_POST['chucvu'] : '';
            $dv_congtac = isset($_POST['donvi']) ? $_POST['donvi'] : '';
            $thanhtich = isset($_POST['thanhtich']) ? $_POST['thanhtich'] : '';
            $kinhnghiem = isset($_POST['kinhnghiem']) ? $_POST['kinhnghiem'] : '';
            $sdtGV = isset($_POST['sdt']) ? $_POST['sdt'] : '';
            $gmailGV = isset($_POST['gmail']) ? $_POST['gmail'] : '';
            $actived = isset($_POST['actived']) ? $_POST['actived'] : '';
            $id_staff = isset($_POST['id_staff']) ? $_POST['id_staff'] : '';
            $Modeltrainer = $this->model("trainerModel");

            if (empty($_POST['MaGV']  && $_POST["name"] && $_POST["chucvu"] && $_POST["donvi"] && $_POST["thanhtich"] && $_POST["kinhnghiem"]
                && $_POST["sdt"]  && $_POST["gmail"]  && $_POST["actived"] && $_POST['id_staff'])) {
                // $userModel = $this->model("userModel");
                $this->view("masterAdminLayout", [
                    "pages" => "page/alltrainer",
                    "showstrainer" => $Modeltrainer->showDSTrainer(),
                    // "tkofTrainer" => $userModel->gettk(),
                    "result_insert" => $result_mess
                ]);
            }
            // $ModelUSER = $this->model("userModel");
            $this->view("masterAdminLayout", [
                "pages" => "page/alltrainer",
                "result_insert" => $Modeltrainer->addTrainer($img_GV, $ma_GV, $nameGV, $chucvu, $dv_congtac, $thanhtich, $kinhnghiem, $sdtGV, $gmailGV, $actived, $id_staff),
                "showstrainer" => $Modeltrainer->showDSTrainer(),
                // "IDTrainer" => $userModel->getIdStaff(),
            ]);
        } else {

            $Modeltrainer = $this->model("trainerModel");
            $this->view("masterAdminLayout", [
                "pages" => "page/alltrainer",
                "showstrainer" => $Modeltrainer->showDSTrainer(),
                // "IDTrainer" => $userModel->getIdStaff(),
            ]);
        }
    }
    // xóa
    public function delete_trainer($id)
    {
        $Modeltrainer = $this->model("trainerModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/alltrainer",
            "deleteStudent" => $Modeltrainer->deleteTrainer($id),
            "showstrainer" => $Modeltrainer->showDSTrainer(),
        ]);
    }
    public function edit_trainer($id)
    {
        $Modeltrainer = $this->model("trainerModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/alltrainer_edit",
            "editTrainer" => $Modeltrainer->editTrainer($id),
            "showDSTrainer" => $Modeltrainer->showDSTrainer(),
        ]);
    }
    // Sửa 
    public function update_trainer($id)
    {
        $result_mess = false;
        if (isset($_POST['edit_trainers'])) {
            if (empty($_POST["MaGV"] && $_POST["name"]  && $_POST["chucvu"] && $_POST["donvi"]
                && $_POST["thanhtich"] && $_POST["kinhnghiem"] && $_POST["sdt"] && $_POST["gmail"] && $_POST["actived"] && $_POST["id_staff"])) {
                $this->view("masterAdminLayout", [
                    "pages" => "page/alltrainer_edit",
                    "result" => $result_mess
                ]);
            } else {
                $Modeltrainer = $this->model("trainerModel");
                $img_GV = $_POST["anhanh"];
                $ma_GV = isset($_POST['MaGV']) ? $_POST['MaGV'] : null;
                $nameGV = isset($_POST['name']) ? $_POST['name'] : null;
                $id_staff = isset($_POST['id_staff']) ? $_POST['id_staff'] : '';
                $chucvu = isset($_POST['chucvu']) ? $_POST['chucvu'] : '';
                $dv_congtac = isset($_POST['donvi']) ? $_POST['donvi'] : '';
                $thanhtich = isset($_POST['thanhtich']) ? $_POST['thanhtich'] : '';
                $kinhnghiem = isset($_POST['kinhnghiem']) ? $_POST['kinhnghiem'] : '';
                $sdtGV = isset($_POST['sdt']) ? $_POST['sdt'] : '';
                $gmailGV = isset($_POST['gmail']) ? $_POST['gmail'] : '';
                $actived = isset($_POST['actived']) ? $_POST['actived'] : '';
                $this->view("masterAdminLayout", [
                    "pages" => "page/alltrainer_edit",
                    "updateTrainer" => $Modeltrainer->updateTrainer($id, $img_GV, $ma_GV, $nameGV, $chucvu, $dv_congtac, $thanhtich, $kinhnghiem, $sdtGV, $gmailGV, $actived, $id_staff),
                    "editTrainer" => $Modeltrainer->editTrainer($id),
                    "showDSTrainer" => $Modeltrainer->showDSTrainer(),
                ]);
            }
        }
    }
    #--------------------------- giao dien nhan vien thu phi --------------------------------
    public function trainer_info()
    {
        $Modeltrainer = $this->model("trainerModel");
        $this->view("masterAccountantLayout", [
            "pageaccountant" => "pageAccountant/alltrainer",
            "showDSTrainer" => $Modeltrainer->showDSTrainer(),
        ]);
    }
    public function trainer_ACview($id_trainer)
    {
        $Modeltrainer = $this->model("trainerModel");
        $this->view("masterAccountantLayout", [
            "pageaccountant" => "pageAccountant/alltrainer_edit",
            "editTrainer" => $Modeltrainer->editTrainer($id_trainer),
            "showDSTrainer" => $Modeltrainer->showDSTrainer(),
            "trainer_viewAC_acti" =>$Modeltrainer->trainer_viewAC_acti($id_trainer),
        ]);
    }
}