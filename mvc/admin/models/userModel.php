<?php

class usermodel extends DB
{

    public function GetUser()
    {
        return "user is coming in the moment";
    }

    public function getIdStaff()
    {

        $qr_user = "SELECT * 
        FROM `role` r INNER JOIN `accountuser` ON accountuser.role_id = r.id_role
        INNER JOIN staff ON staff.id_staff = accountuser.id_staff
         ";

        return $rerult =  mysqli_query($this->conn, $qr_user);
    }

    public function gettk()
    {

        $qr_user = " SELECT * FROM accountuser ac JOIN `role` r  
         ON r.id_role = ac.role_id";
        return $rerult =  mysqli_query($this->conn, $qr_user);
    }
    public function login($username, $password_input)
    {
        $qrlogin = " SELECT * FROM accountuser WHERE `ten_taikhoan` = '$username' AND `mk_taikhoan` = '$password_input' ";
        return mysqli_query($this->conn, $qrlogin);
    }

    public function loginadmin($username)
    {
        $qrlogin = " SELECT * FROM accountuser WHERE `ten_taikhoan` = '$username' ";
        return mysqli_query($this->conn, $qrlogin);
    }
    public function ac_role($id)
    {
        $qredituser = "SELECT * FROM  `accountuser`  
        INNER JOIN staff ON staff.id_staff = accountuser.id_staff
        INNER JOIN role ON role.id_role = accountuser.role_id
        WHERE id_account = '$id' AND id_role = 6";
        return  $rerult =  mysqli_query($this->conn, $qredituser);
    }
    public function role($role)
    {
        $qredituser = "SELECT * FROM  `accountuser`  
        INNER JOIN staff ON staff.id_staff = accountuser.id_staff
        INNER JOIN `role` ON role.id_role = accountuser.role_id
        WHERE `id_role` = '$role' 
        ";
        return  $rerult =  mysqli_query($this->conn, $qredituser);
    }

    public function insertUser($tenTk, $password, $role_id, $ngaytao_tk, $loaitk, $id_staff)
    {
        $qrInsert = "INSERT INTO `accountuser`(`id_account`, `ten_taikhoan`, `mk_taikhoan`, `role_id`, `ngaytao_tk`, `loai_tk`,
        `id_staff`)
        VALUES (null,'$tenTk', '$password','$role_id','$ngaytao_tk','$loaitk','$id_staff')";
        $result = false;
        if (mysqli_query($this->conn, $qrInsert)) {
            $result;
        }
        return json_encode($result);
    }
    public function deleteUser($id)
    {
        $qrdelete = "DELETE FROM `accountuser` WHERE `id_account` = $id ";
        $result = false;
        if (mysqli_query($this->conn, $qrdelete)) {
            $result = true;
        }
        return json_encode($result);
    }
    public function editUser($id, $role)
    {
        $qredituser = "SELECT * FROM `accountuser`
        INNER JOIN staff ON staff.id_staff = accountuser.id_staff
        INNER JOIN `role` ON role.id_role = accountuser.role_id
        WHERE `id_account`= '$id' AND `role_id` = '$role' ";
        return $rerult = mysqli_query($this->conn, $qredituser);
    }
    public function updateUser($id, $tenTk, $password, $role, $loaitk, $ngaytao_tk)
    {
        $qrUpdate = "UPDATE `accountuser` SET `ten_taikhoan`='$tenTk',
        `mk_taikhoan`='$password' ,`ngaytao_tk`='$ngaytao_tk' , `loai_tk`='$loaitk'
        WHERE `id_account`='$id' AND `role_id` = '$role'";
        $result = false;
        if (mysqli_query($this->conn, $qrUpdate)) {
            $result = true;
        }
        return json_encode($result);
    }
    public function updateUser_Tr($id, $tenTk, $password, $role, $ngaytao_tk)
    {
        $qrUpdate = "UPDATE `accountuser` SET `ten_taikhoan`='$tenTk',
        `mk_taikhoan`='$password' ,`ngaytao_tk`='$ngaytao_tk'
        WHERE `id_account`='$id' AND `role_id` = '$role'";
        $result = false;
        if (mysqli_query($this->conn, $qrUpdate)) {
            $result = true;
        }
        return json_encode($result);
    }
    public function logintest($username)
    {
        $qrlogin = " SELECT * FROM accountuser WHERE `ten_taikhoan` = '$username' ";
        return mysqli_query($this->conn, $qrlogin);
    }
    public function userShow_ac_staff_role()
    {
        $qr = "SELECT * FROM staff
        INNER JOIN accountuser ON accountuser.id_staff = staff.id_staff
        INNER JOIN role ON role.id_role = accountuser.role_id
        ";
        return mysqli_query($this->conn, $qr);
    }
    //--------------------------------------student page-----------------------
    public function loginPageStudent($username, $password_input)
    {
        $qrlogin = "SELECT * FROM `accountgoogleapi` 
        INNER JOIN students ON students.MaHV = accountgoogleapi.username
        WHERE `username` = '$username' AND `password` = '$password_input' ";
        return mysqli_query($this->conn, $qrlogin);
    }
}