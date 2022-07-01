<?php
class classdetail extends Controllers
{
    #------------------------------------ giao dien admin (admin)--------------------------- 
    public function class_detail()
    {
        $qrdataClass = $this->model("classModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/class",
            "class_all_detail" => $qrdataClass->class_all_detail(),
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
    public function class_insert()
    {
        $result_mess = false;
        if (isset($_POST['submit_add'])) {
            $malop = isset($_POST['malop']) ? $_POST['malop'] : '';
            $name = isset($_POST['name']) ? $_POST['name'] : '';
            $phong = isset($_POST['phong']) ? $_POST['phong'] : '';
            $so_luongHV = isset($_POST['so_luongHV']) ? $_POST['so_luongHV'] : '';
            $sourse_detail_id = isset($_POST['sourse_detail_id']) ? $_POST['sourse_detail_id'] : '';
            $trangthai = isset($_POST['trangthai']) ? $_POST['trangthai'] : '';
            $qrdataClass = $this->model("classModel");
            $listdata = $this->model("liststudentModel");
            if (empty($_POST["malop"] && $_POST["name"] && $_POST["phong"] && $_POST["so_luongHV"] && $_POST["sourse_detail_id"] && $_POST["trangthai"])) {
                $this->view("masterAdminLayout", [
                    "pages" => "page/class",
                    "result_insert" => $result_mess,
                    "class_all_detail" => $qrdataClass->class_all_detail(),
                    "class_all" => $qrdataClass->class_all(),
                    "ShowAllOfCourse" => $listdata->ShowAllOfCourse(),
                    "countStudentReal" => $qrdataClass->countStudentReal(),
                ]);
            } else {
                $this->view("masterAdminLayout", [
                    "pages" => "page/class",
                    "addClass" => $qrdataClass->addClass($malop, $name, $phong, $so_luongHV, $sourse_detail_id, $trangthai),
                    "class_all" => $qrdataClass->class_all(),
                    "class_all_detail" => $qrdataClass->class_all_detail(),
                    "ShowAllOfCourse" => $listdata->ShowAllOfCourse(),
                    "countStudentReal" => $qrdataClass->countStudentReal(),
                ]);
            }
        } else {
            $listdata = $this->model("liststudentModel");
            $qrdataClass = $this->model("classModel");
            $this->view("masterAdminLayout", [
                "pages" => "page/class",
                "class_all" => $qrdataClass->class_all(),
                "class_all_detail" => $qrdataClass->class_all_detail(),
                "ShowAllOfCourse" => $listdata->ShowAllOfCourse(),
                "countStudentReal" => $qrdataClass->countStudentReal(),
            ]);
        }
    }
    // xóa
    public function class_delete($id_class)
    {
        $listdata = $this->model("liststudentModel");
        $qrdataClass = $this->model("classModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/class",
            "deleteClass" => $qrdataClass->deleteClass($id_class),
            "class_all" => $qrdataClass->class_all(),
            "class_all_detail" => $qrdataClass->class_all_detail(),
            "ShowAllOfCourse" => $listdata->ShowAllOfCourse(),
            "Count_studentReal" => $qrdataClass->Count_studentReal(),
        ]);
    }
    public function class_edit($id_class)
    {
        $billModel = $this->model("billModel");
        $listdata = $this->model("liststudentModel");
        $qrdataClass = $this->model("classModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/class_edit",
            "editClass" => $qrdataClass->editClass($id_class),
            "class_all_detail" => $qrdataClass->class_all_detail(),
            "class_all" => $qrdataClass->class_all(),
            "ShowAllOfCourse" => $listdata->ShowAllOfCourse(),
            "countStudentReal" => $qrdataClass->countStudentReal(),
            "bill_stinclass" => $billModel->bill_stinclass($id_class),
        ]);
    }
    // Sửa 
    public function class_update($id_class)
    {
        $result_mess = false;
        // $ModelStudentupdate = $this->model("studentModel");
        // $qrdataClass = $this->model("classModel");
        if (isset($_POST['submit_update'])) {
            if (empty($_POST["malop"] && $_POST["name"] && $_POST["phong"] && $_POST["so_luongHV"] && $_POST["sourse_detail_id"] && $_POST["trangthai"])) {
                $this->view("masterAdminLayout", [
                    "pages" => "page/class_edit",
                    "result" => $result_mess,
                ]);
            } else {
                $qrdataClass = $this->model("classModel");
                $name = isset($_POST['name']) ? $_POST['name'] : null;
                $malop = isset($_POST['malop']) ? $_POST['malop'] : '';
                $phong = isset($_POST['phong']) ? $_POST['phong'] : '';
                $so_luongHV = isset($_POST['so_luongHV']) ? $_POST['so_luongHV'] : '';
                $sourse_detail_id = isset($_POST['sourse_detail_id']) ? $_POST['sourse_detail_id'] : '';
                $trangthai = isset($_POST['trangthai']) ? $_POST['trangthai'] : '';
                $this->view("masterAdminLayout", [
                    "pages" => "page/class_edit",
                    "editClass" => $qrdataClass->editClass($id_class),
                    "updateClass" => $qrdataClass->updateClass($id_class, $malop, $name, $phong, $so_luongHV, $sourse_detail_id, $trangthai),
                    "class_all_detail" => $qrdataClass->class_all_detail(),
                    "class_all" => $qrdataClass->class_all(),
                ]);
            }
        }
    }
    public function detailClass_Active($id_class)
    {
        $billModel = $this->model("billModel");
        $listdata = $this->model("liststudentModel");
        $qrdataClass = $this->model("classModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/class_edit",
            "editClass" => $qrdataClass->editClass($id_class),
            "class_all_detail" => $qrdataClass->class_all_detail(),
            "class_all" => $qrdataClass->class_all(),
            "ShowAllOfCourse" => $listdata->ShowAllOfCourse(),
            "countStudentReal" => $qrdataClass->countStudentReal(),
            "bill_stinclass" => $billModel->bill_stinclass($id_class),
        ]);
    }
    #------------------------------------ giao dien nhanh vien ke toan (Accountant)--------------------------- 
    public function classPage_AC()
    {
        $listdata = $this->model("liststudentModel");
        $qrdataClass = $this->model("classModel");
        $this->view("masterAccountantLayout", [
            "pageaccountant" => "pageAccountant/class_AC",
            "class_all" => $qrdataClass->class_all(),
            "class_all_detail" =>  $qrdataClass->class_all_detail(),
            "ShowAllOfCourse" => $listdata->ShowAllOfCourse(),
            "countStudentReal" => $qrdataClass->countStudentReal(),
        ]);
    }
    public function class_edit_AC($id_class)
    {
        $billModel = $this->model("billModel");
        $listdata = $this->model("liststudentModel");
        $qrdataClass = $this->model("classModel");
        $this->view("masterAccountantLayout", [
            "pageaccountant" => "pageAccountant/class_edit_AC",
            "editClass" => $qrdataClass->editClass($id_class),
            "class_all_detail" => $qrdataClass->class_all_detail(),
            "class_all" => $qrdataClass->class_all(),
            "ShowAllOfCourse" => $listdata->ShowAllOfCourse(),
            "countStudentReal" => $qrdataClass->countStudentReal(),
            "bill_stinclass" => $billModel->bill_stinclass($id_class),
        ]);
    }
}