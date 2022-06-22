<?php
class User extends Controllers
{
    function datalist()
    {
        $this->view("home");
        $user = $this->model("userModel");
        echo $user->GetUser();
        // echo "haloo";
    }
    public function show()
    {
        //lấy model ra xài
        $userM = $this->model("userModel");
        //lấy view  
        $this->view("masterAdminLayout", [
            "mau" => 'red',
            "pages" => "page/users",
            "User" => $userM->gettk()
        ]);
    }
    public function loginpage()
    {
        $result_mess = false;
        // $qrTK = $this->model("userModel");
        if (isset($_POST["btn_dangnhap"])) {
            $username = $_POST["username"];
            $userpass = $_POST["password"];
            // $username = strip_tags($username);
            // $username = addslashes($username);
            // $password = strip_tags($password);
            // $password = addslashes($password);
            // $userpass = md5($userpass);
            $result = $this->model("userModel")->login($username);
            $count = mysqli_num_rows($result);
            if ($count >= 1) {
                // echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
                // exit;
                while ($row = mysqli_fetch_assoc($result)) {
                    $id = $row["id_account"];
                    $username = $row["ten_taikhoan"];
                    $password = $row["mk_taikhoan"];
                    // $role = $row["role_id"];
                    // $phone = $row["phone"];
                    // $ngay = $row["ngaytao_tk"];
                }
                if (password_verify($userpass, $password)) {
                    $_SESSION["id_account"] = $id;
                    $this->view("masterAdminLayout", [
                        "pages" => "page/home",
                        "result" => $result_mess = true
                    ]);
                } else {
                    // $qrTK = $this->model("userModel");
                    $this->view("page/login", [
                        "result" => $result_mess
                    ]);
                }
                // if ($userpass != $_POST['password'] || $username != $_POST['username']) {
                //     echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
                //     exit;
                // }
                // if ($password != $row['password']) {
                //     echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
                //     exit;
                // } else {
                //     $this->view("masterAdminLayout", [
                //         "pages" => "page/home",
                //         "loginAdmin" => $qrTK->login($username)
                //     ]);
                // }
            }
        }

        $this->view("page/login", [
            // "loginAdmin" => $qrTK->login($username),
        ]);
    }
    public function addUser()
    {
        $result_mess = false;
        if (isset($_POST['addUser_submit'])) {


            if (empty($_POST["nameTk"] && $_POST["password"] && $_POST["role_id"] && $_POST["ngaytao"] && $_POST["loaitk"] && $_POST["staff"])) {
                $this->view("masterAdminLayout", [
                    "pages" => "page/users",
                    "result_insert" => $result_mess
                ]);
            }
            $tenTk = isset($_POST['nameTk']) ? $_POST['nameTk'] : null;
            $password = $_POST['password'];
            // $password = password_hash($password, PASSWORD_DEFAULT);
            $role_id = isset($_POST['role_id']) ? $_POST['role_id'] : '';
            $ngaytao_tk = isset($_POST['ngaytao']) ? $_POST['ngaytao'] : null;
            $loaitk = isset($_POST['loaitk']) ? $_POST['loaitk'] : null;
            $id_staff = isset($_POST['staff']) ? $_POST['staff'] : null;
            $staffModel = $this->model("staffModel");
            $ModelUser = $this->model("userModel");
            $this->view("masterAdminLayout", [
                "pages" => "page/users",
                "result_insert" => $ModelUser->insertUser($tenTk, $password, $role_id, $ngaytao_tk, $loaitk, $id_staff),
                "userShow_ac_role_staff" => $ModelUser->userShow_ac_staff_role(),
                // "userShow_ac_staff" => $ModelUser->userShow_ac_staff_role(),
                "User" => $ModelUser->gettk(),
                "selectStaff_all" => $staffModel->selectStaff_all(),
                "selectRole_all" => $staffModel->selectRole_all(),
            ]);
        } else {
            $staffModel = $this->model("staffModel");
            $ModelUser = $this->model("userModel");
            $this->view("masterAdminLayout", [
                "pages" => "page/users",
                "User" => $ModelUser->gettk(),
                "userShow_ac_role_staff" => $ModelUser->userShow_ac_staff_role(),
                "selectStaff_all" => $staffModel->selectStaff_all(),
                "selectRole_all" => $staffModel->selectRole_all(),
            ]);
        }
    }
    // xóa
    public function User_delete($id)
    {
        $ModelUser = $this->model("userModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/users",
            "deleteUser" => $ModelUser->deleteUser($id),
            "User" => $ModelUser->gettk(),
        ]);
    }
    public function User_edit($id, $role)
    {
        $ModelUser = $this->model("userModel");
        $ac_role = $ModelUser->editUser($id, $role);
        // $qr = mysqli_num_rows($ac_role);
        while ($row = mysqli_fetch_assoc($ac_role)) {
            $row["role_id"] = $role;
            $row["id_account"] = $id;
            if ($role == '6') {
                $staffModel = $this->model("staffModel");
                $this->view("masterAccountantLayout", [
                    "pageaccountant" => "pageAccountant/user_edit",
                    "editUser" => $ModelUser->editUser($id, $role),
                    "User" => $ModelUser->gettk(),
                    "userShow_ac_role_staff" => $ModelUser->userShow_ac_staff_role(),
                    "selectStaff_all" => $staffModel->selectStaff_all(),
                    "selectRole_all" => $staffModel->selectRole_all(),
                ]);
            } elseif ($role == '3') {
                $staffModel = $this->model("staffModel");
                $this->view("masterAdminLayout", [
                    "pages" => "page/user_edit",
                    "editUser" => $ModelUser->editUser($id, $role),
                    "User" => $ModelUser->gettk(),
                    "userShow_ac_role_staff" => $ModelUser->userShow_ac_staff_role(),
                    "selectStaff_all" => $staffModel->selectStaff_all(),
                    "selectRole_all" => $staffModel->selectRole_all(),
                ]);
            } elseif ($role == '2') {
                $this->view("masterTrainerLayout", [
                    "pagetrainer" => "pageTrainer/user_edit",
                    "editUser" => $ModelUser->editUser($id, $role),
                    "User" => $ModelUser->gettk(),
                ]);
            } else {
                echo 'empty';
            }
        }
    }
    // Sửa 
    public function User_update($id, $role)
    {
        $result_mess = false;
        if (isset($_POST['editUser_submit'])) {
            if (empty($_POST["nameTk"] && $_POST["password"] && $_POST["loaitk"] && $_POST["ngaytao"])) {
                $this->view("masterAdminLayout", [
                    "pages" => "page/user_edit",
                    "result" => $result_mess
                ]);
            } else {
                $ModelUser = $this->model("userModel");
                $ac_role = $ModelUser->editUser($id, $role);
                // $qr = mysqli_num_rows($ac_role);
                while ($row = mysqli_fetch_assoc($ac_role)) {
                    $row["role_id"] = $role;
                    $row["id_account"] = $id;
                    $tenTk = isset($_POST['nameTk']) ? $_POST['nameTk'] : null;
                    $password = isset($_POST['password']) ? $_POST['password'] : null;
                    $ngaytao_tk = isset($_POST['ngaytao']) ? $_POST['ngaytao'] : '';
                    $loaitk = isset($_POST['loaitk']) ? $_POST['loaitk'] : '';
                    $staffModel = $this->model("staffModel");
                    if ($role == '6') {
                        // $staffModel = $this->model("staffModel");
                        $this->view("masterAccountantLayout", [
                            "pageaccountant" => "pageAccountant/user_edit",
                            "editUser" => $ModelUser->editUser($id, $role),
                            "User" => $ModelUser->gettk(),
                            "userShow_ac_role_staff" => $ModelUser->userShow_ac_staff_role(),
                            "selectStaff_all" => $staffModel->selectStaff_all(),
                            "selectRole_all" => $staffModel->selectRole_all(),
                            "updateUser" => $ModelUser->updateUser($id, $tenTk, $password, $role, $loaitk, $ngaytao_tk),
                        ]);
                    } elseif ($role == '3') {

                        $ModelUser = $this->model("userModel");
                        $this->view("masterAdminLayout", [
                            "pages" => "pageAccountant/user_edit",
                            "updateUser" => $ModelUser->updateUser($id, $tenTk, $password, $role, $loaitk, $ngaytao_tk),
                            "editUser" => $ModelUser->editUser($id, $role),
                            "gettk" => $ModelUser->gettk(),
                            "userShow_ac_role_staff" => $ModelUser->userShow_ac_staff_role(),
                            "selectStaff_all" => $staffModel->selectStaff_all(),
                            "selectRole_all" => $staffModel->selectRole_all(),
                        ]);
                    } elseif ($role == '2') {
                        $this->view("masterTrainerLayout", [
                            "pagetrainer" => "pageTrainer/user_edit",
                            "updateUser" => $ModelUser->updateUser_Tr($id, $tenTk, $password, $role, $ngaytao_tk),
                            "editUser" => $ModelUser->editUser($id, $role),
                            "gettk" => $ModelUser->gettk()
                        ]);
                    } else {
                        echo "không có quyền";
                    }
                }
            }
        }
    }
    public function test_editUser()
    {
        $this->view("masterAdminLayout", [
            "pages" => "page/user_edit",
            // "result" => $result_mess
        ]);
    }
}