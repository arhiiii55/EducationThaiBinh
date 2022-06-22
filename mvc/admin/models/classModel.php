<?php
class classModel extends DB
{

    public function class_all_detail()
    {
        $qrclass = "SELECT * FROM `class` 
		LEFT JOIN trainnerincoursedetail ON trainnerincoursedetail.class_id = class.id_class
		LEFT JOIN trainers ON trainers.id_trainer = trainnerincoursedetail.id_trainer
		RIGHT JOIN soursedetail ON class.sourse_detail_id = soursedetail.id_sourse_detail
		INNER JOIN timeabledays ON timeabledays.id_days = soursedetail.day_id
		ORDER BY id_class";
        return $rerult =  mysqli_query($this->conn, $qrclass);
    }
    public function class_all()
    {
        $qrclass = "SELECT * FROM `class`
        INNER JOIN soursedetail ON class.sourse_detail_id = soursedetail.id_sourse_detail
        ";
        return $rerult =  mysqli_query($this->conn, $qrclass);
    }
    public function class_all_id()
    {
        $qrclass = "SELECT * FROM `class` 
        INNER JOIN soursedetail ON class.sourse_detail_id = soursedetail.id_sourse_detail
			ORDER BY id_class";
        return $rerult =  mysqli_query($this->conn, $qrclass);
    }
    public function countStudentReal()
    {
        $qrclass = "SELECT `id_class`, `malop`, `ten_lop`, `phong` ,`cahoc` ,`giohoc`,`trangthai`,`lichhoc`,`sl_tuan`,  `so_luongHV` ,COUNT(id_class) as 'sl_Real' , `ngaykhaigiang` 
        FROM `class` 
        INNER JOIN soursedetail ON class.sourse_detail_id = soursedetail.id_sourse_detail
        INNER JOIN timeabledays ON timeabledays.id_days = soursedetail.day_id
        GROUP BY `id_class`, `malop`, `ten_lop`, `phong` ,`cahoc` ,`giohoc`,`trangthai`,`lichhoc`,`sl_tuan`,  `so_luongHV`
        HAVING  COUNT(id_class) 
        ";
        return $rerult =  mysqli_query($this->conn, $qrclass);
    }
    public function countClass_forIndex()
    {
        $qrclass = "SELECT COUNT(id_class) AS 'tong' 
		FROM `class`
        ";
        return $rerult =  mysqli_query($this->conn, $qrclass);
    }
    public function addClass($malop, $name, $phong, $so_luongHV, $sourse_detail_id, $trangthai)
    {
        $qrInsert = "INSERT INTO `class`(`malop`, `ten_lop`, `phong`, `so_luongHV`, `sourse_detail_id`, `trangthai`)
            VALUES ('$malop' ,'$name','$phong', '$so_luongHV','$sourse_detail_id','$trangthai')";
        $result = false;
        if (mysqli_query($this->conn, $qrInsert)) {
            $result = true;
        }
        return  json_encode($result);
    }
    public function deleteClass($id_class)
    {
        $qrInsert = "DELETE FROM `class` WHERE  `id_class` = $id_class ";
        $result = false;
        if (mysqli_query($this->conn, $qrInsert)) {
            $result = true;
        }
        return  json_encode($result);
    }
    public function editClass($id_class)
    {
        $qrClassDetail = "SELECT * FROM  `class` WHERE `id_class`= '$id_class' ";
        return  $rerult =  mysqli_query($this->conn, $qrClassDetail);
    }
    public function updateClass($id_class, $malop, $name, $phong, $so_luongHV, $sourse_detail_id, $trangthai)
    {
        $qrUpdate = "  UPDATE `class` SET 
        `malop`='$malop', `ten_lop`='$name', 
        `phong`='$phong',`so_luongHV`='$so_luongHV',
        `sourse_detail_id`='$sourse_detail_id',`trangthai`='$trangthai' '
        WHERE `id_class`= '$id_class'";
        $result = false;
        if (mysqli_query($this->conn, $qrUpdate)) {
            $result = true;
        }
        return  json_encode($result);
    }
    public function editclass_getIdTrainer($id)
    {
        $qrallofcourse = "SELECT * FROM trainnerincoursedetail 
        INNER JOIN trainers ON trainnerincoursedetail.id_trainer = trainers.id_trainer
				INNER JOIN staff ON staff.id_staff = trainers.id_staff
				INNER JOIN accountuser ON accountuser.id_staff = staff.id_staff	
        INNER JOIN soursedetail ON trainnerincoursedetail.id_sourse_detail = soursedetail.id_sourse_detail
				INNER JOIN timeabledays ON soursedetail.day_id = timeabledays.id_days
        INNER JOIN class ON soursedetail.id_sourse_detail = class.sourse_detail_id
		WHERE `accountuser`. `id_account` = '$id'
        ";
        return $rerult =  mysqli_query($this->conn, $qrallofcourse);
    }
    public function editclass_IdTrainer()
    {
        $qrallofcourse = "SELECT * FROM trainnerincoursedetail AS ctgvkh
        INNER JOIN trainers ON ctgvkh.id_trainer = trainers.id_trainer
				INNER JOIN account_user ON trainers.account_id = account_user.id_account
        INNER JOIN soursedetail AS sdetail ON ctgvkh.i2d_sourse_detail = sdetail.id_sourse_detail
				INNER JOIN timeabledays ON sdetail.day_id = timeabledays.id_days
        INNER JOIN class ON ctgvkh.class_id = class.id_class  
        ";
        return $rerult =  mysqli_query($this->conn, $qrallofcourse);
    }
}