<?php
class trainerModel extends DB
{
    public function GetUser()
    {
        return "user is coming in the moment";
    }
    public function selectTrainer_all()
    {
        $qrtrainer = "SELECT * FROM  `trainers` ";
        return  $rerult =  mysqli_query($this->conn, $qrtrainer);
    }
    public function showDSTrainer()
    {
        $qrTrainer = "SELECT * FROM `trainers` 
        INNER JOIN staff ON staff.id_staff = trainers.id_staff
        INNER JOIN `accountuser` ON staff.id_staff = accountuser.id_staff";
        return $rerult =  mysqli_query($this->conn, $qrTrainer);
    }
    public function addTrainer($img_GV, $ma_GV, $nameGV, $chucvu, $dv_congtac, $thanhtich, $kinhnghiem, $sdtGV, $gmailGV, $actived, $id_staff)
    {
        $qrInsert = "INSERT INTO `trainers`(`id_trainer`, `img_trainer`, `MaGV`, `ten_gv`, 
        `chucvu`, `dv_congtac`, `thanhtich`, `kinhnghiem`, `sdt`, `gmail`, `actived`, `id_staff`) 
            VALUES (null,'$img_GV','$ma_GV','$nameGV','$chucvu', '$dv_congtac', '$thanhtich', '$kinhnghiem', '$sdtGV', '$gmailGV','$actived','$id_staff')";
        $result = false;
        if (mysqli_query($this->conn, $qrInsert)) {
            $result = true;
        }
        return  json_encode($result);
    }
    public function deleteTrainer($id)
    {
        $qrInsert = "DELETE FROM `trainers` WHERE  `id_trainer` = $id ";
        $result = false;
        if (mysqli_query($this->conn, $qrInsert)) {
            $result = true;
        }
        return  json_encode($result);
    }
    public function editTrainer($id)
    {
        $qrtrainer = "SELECT * FROM  `trainers` WHERE `id_trainer`= '$id' ";
        return  $rerult =  mysqli_query($this->conn, $qrtrainer);
    }
    public function updateTrainer($id, $img_GV, $ma_GV, $nameGV, $chucvu, $dv_congtac, $thanhtich, $kinhnghiem, $sdtGV, $gmailGV, $actived, $id_staff)
    {
        $qrUpdate = "UPDATE `trainers` SET
        `img_trainer`='$img_GV',
        `MaGV`='$ma_GV',
        `ten_gv`='$nameGV',`chucvu`='$chucvu',
        `dv_congtac`='$dv_congtac',`thanhtich`='$thanhtich',`kinhnghiem`='$kinhnghiem',`sdt`='$sdtGV',
        `gmail`='$gmailGV',`actived`='$actived' , `id_staff` = '$id_staff'
        WHERE `id_trainer`= '$id'";
        $result = false;
        if (mysqli_query($this->conn, $qrUpdate)) {
            $result = true;
        }
        return  json_encode($result);
    }
    public function editTrainer_GV($id)
    {
        $qrtrainer = "SELECT * FROM  `trainers` 
        INNER JOIN staff ON staff.id_staff = trainers.id_staff
        INNER JOIN accountuser ON accountuser.id_staff = staff.id_staff 
        WHERE `id_account`= '$id' ";
        return  $rerult =  mysqli_query($this->conn, $qrtrainer);
    }
    // ---------------------- model trang nv thu ngân ---------------------------
    public function trainer_viewAC_acti($id_trainer)
    {
        $qrtrainer = "SELECT * FROM staff
        INNER JOIN trainers ON trainers.id_staff = staff.id_staff 
        INNER JOIN trainnerincoursedetail ON trainnerincoursedetail.id_trainer = trainers.id_trainer
        INNER JOIN soursedetail ON soursedetail.id_sourse_detail = trainnerincoursedetail.id_sourse_detail
        INNER JOIN class ON class.sourse_detail_id = soursedetail.id_sourse_detail
        INNER JOIN timeabledays ON timeabledays.id_days = soursedetail.day_id
        WHERE trainers.id_trainer = '$id_trainer' ";
        return  $rerult =  mysqli_query($this->conn, $qrtrainer);
    }


    // public function updateTrainer_GV($id, $imgGV, $nameGV, $chucvu, $dv_congtac, $thanhtich, $kinhnghiem, $sdtGV, $gmailGV, $actived, $account)
    // {
    //     $qrUpdate = "UPDATE `trainers` SET
    //     `img_trainer`='$imgGV',
    //     `ten_gv`='$nameGV',`chucvu`='$chucvu',
    //     `dv_congtac`='$dv_congtac',`thanhtich`='$thanhtich',`kinhnghiem`='$kinhnghiem',`sdt`='$sdtGV',
    //     `gmail`='$gmailGV',`actived`='$actived',`account_id`='$account'
    //     WHERE `account_id`= '$id'";
    //     $result = false;
    //     if (mysqli_query($this->conn, $qrUpdate)) {
    //         $result = true;
    //     }
    //     return  json_encode($result);
    // }
}