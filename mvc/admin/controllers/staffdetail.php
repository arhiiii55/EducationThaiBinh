<?php
class staffdetail extends Controllers
{
    public function staff()
    {
        //lấy model ra xài
        $staffModel = $this->model("staffModel");

        //lấy view  
        $this->view("masterAdminLayout", [
            "pages" => "page/staff_insert",
            "selectStaff_all" => $staffModel->selectStaff_all(),
        ]);
    }
    public function insert_staff()
    {
        $result_mess = false;

        if (isset($_POST['submit_add'])) {
            $manv = isset($_POST['manv']) ? $_POST['manv'] : null;
            $tennv = isset($_POST['tennv']) ? $_POST['tennv'] : null;
            $chucdanh = isset($_POST['chucdanh']) ? $_POST['chucdanh'] : null;
            $sdt = isset($_POST['sdt']) ? $_POST['sdt'] : null;
            $gmailnv = isset($_POST['gmail']) ? $_POST['gmail'] : null;
            $loainv = isset($_POST['loainv']) ? $_POST['loainv'] : null;
            $mota = isset($_POST['mota']) ? $_POST['mota'] : null;
            $staffModel = $this->model("staffModel");
            if (empty($_POST["manv"] && $_POST["tennv"] && $_POST["chucdanh"]
                && $_POST["sdt"] && $_POST["gmail"] && $_POST["loainv"] && $_POST["mota"])) {
                $this->view("masterAdminLayout", [
                    "pages" => "page/staff_insert",
                    "staff_insert" => $result_mess,
                    "selectStaff_all" => $staffModel->selectStaff_all(),
                ]);
            }
            $this->view("masterAdminLayout", [
                "pages" => "page/staff_insert",
                "staff_insert" => $staffModel->staff_insert($manv, $tennv, $chucdanh, $sdt, $gmailnv, $loainv, $mota),
                "selectStaff_all" => $staffModel->selectStaff_all(),
            ]);
        } else {
            $staffModel = $this->model("staffModel");
            $this->view("masterAdminLayout", [
                "pages" => "page/staff_insert",
            ]);
        }
    }
    public function delete_staff($id_staff)
    {
        $staffModel = $this->model("staffModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/staff_insert",
            "delete_staff" => $staffModel->deleteStaff($id_staff),
            "editStaff" => $staffModel->editStaff($id_staff),
            "selectStaff_all" => $staffModel->selectStaff_all(),
        ]);
    }
    public function edit_staff($id_staff)
    {
        $staffModel = $this->model("staffModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/staff_edit",
            "editStaff" => $staffModel->editStaff($id_staff),
            "selectStaff_all" => $staffModel->selectStaff_all(),
        ]);
    }
    public function update_staff($id_staff)
    {
        $result_mess = false;
        if (isset($_POST['submit_update'])) {
            if (empty($_POST["manv"] && $_POST["tennv"] && $_POST["chucdanh"]
                && $_POST["sdt"] && $_POST["gmail"] && $_POST["loainv"] && $_POST["mota"])) {
                $this->view("masterAdminLayout", [
                    "pages" => "page/staff_edit",
                    "updateStaff" => $result_mess,
                ]);
            } else {
                $staffModel = $this->model("staffModel");
                $manv = isset($_POST['manv']) ? $_POST['manv'] : null;
                $tennv = isset($_POST['tennv']) ? $_POST['tennv'] : null;
                $chucdanh = isset($_POST['chucdanh']) ? $_POST['chucdanh'] : null;
                $sdt = isset($_POST['sdt']) ? $_POST['sdt'] : null;
                $gmailnv = isset($_POST['gmail']) ? $_POST['gmail'] : null;
                $loainv = isset($_POST['loainv']) ? $_POST['loainv'] : null;
                $mota = isset($_POST['mota']) ? $_POST['mota'] : null;

                $this->view("masterAdminLayout", [
                    "pages" => "page/staff_edit",
                    "updateStaff" => $staffModel->updateStaff($id_staff, $manv, $tennv, $chucdanh, $sdt, $gmailnv, $loainv, $mota),
                    "editStaff" => $staffModel->editStaff($id_staff),

                ]);
            }
        }
    }
}