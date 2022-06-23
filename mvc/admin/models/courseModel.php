<?php
class courseModel extends DB
{
    public function ShoweduCourse()
    {
        $qreduCourse = "SELECT * FROM  edusourses";
        return $rerult =  mysqli_query($this->conn, $qreduCourse);
        // echo $qrstudent ;
    }
    public function eduCourse_CourseDetail()
    {
        $qreduCourse = "SELECT * FROM  edusourses
        INNER JOIN soursedetail ON soursedetail. = sdetail.id_sourse_detail
        ";
        return $rerult =  mysqli_query($this->conn, $qreduCourse);
        // echo $qrstudent ;
    }
    public function ShowtimeableDays()
    {
        $qrtimeabledays = "SELECT * FROM  timeabledays";
        return $rerult =  mysqli_query($this->conn, $qrtimeabledays);
    }
    public function ShowCourseDetail()
    {
        $qrCourseDetail = "	SELECT * FROM `class` 
		LEFT JOIN trainnerincoursedetail ON trainnerincoursedetail.class_id = class.id_class
		LEFT JOIN trainers ON trainers.id_trainer = trainnerincoursedetail.id_trainer
		RIGHT JOIN soursedetail ON class.sourse_detail_id = soursedetail.id_sourse_detail
		INNER JOIN timeabledays ON timeabledays.id_days = soursedetail.day_id
		ORDER BY id_class
       ";
        return $rerult =  mysqli_query($this->conn, $qrCourseDetail);
        // echo $qrstudent ;
    }
    public function ShowCourseDetail_NonTrainer()
    {
        $qrCourseDetail = "SELECT * FROM  soursedetail
        INNER JOIN timeabledays ON soursedetail.day_id = timeabledays.id_days
       ";
        return $rerult =  mysqli_query($this->conn, $qrCourseDetail);
        // echo $qrstudent ;
    }

    public function courseDetail()
    {
        $qrCourseDetail = "SELECT * FROM  soursedetail
       ";
        return $rerult =  mysqli_query($this->conn, $qrCourseDetail);
        // echo $qrstudent ;
    }

    public function trainerInCourse()
    {
        $qrtrainerInCourse = "SELECT * FROM trainnerincoursedetail AS ctgvkh
        INNER JOIN trainers ON ctgvkh.id_trainer = trainers.id_trainer
        INNER JOIN soursedetail AS sdetail ON ctgvkh.id_sourse_detail = sdetail.id_sourse_detail
        INNER JOIN class ON ctgvkh.class_id = class.id_class 
        ";
        return $rerult =  mysqli_query($this->conn, $qrtrainerInCourse);
        // echo $qrstudent ;

    }
    public function eduCourse_all()
    {
        $qrCourse = " SELECT * FROM trainnerincoursedetail AS ctgvkh
        INNER JOIN trainers ON ctgvkh.id_trainer = trainers.id_trainer 	
        INNER JOIN soursedetail AS sdetail ON ctgvkh.id_sourse_detail = sdetail.id_sourse_detail
				INNER JOIN edusourses ON edusourses.id_eduSource = sdetail.edusource_id ";
        return $rerult =  mysqli_query($this->conn, $qrCourse);
        // echo $qrstudent ;

    }
    public function getEdu_byid($edusource_id)
    {
        $qrCourse = "SELECT * FROM `edusourses` AS e 
        INNER JOIN `soursedetail` as s 
        ON e.id_eduSource = s.edusource_id 
        WHERE e.id_eduSource = '$edusource_id'
        ";
        return $rerult =  mysqli_query($this->conn, $qrCourse);
    }

    public function insertSourseDeitail($makh, $edu, $tenkh, $mota, $ngay, $sltuan, $sltiet, $ngaykhaigiang, $ngayketthuc, $tinhtrang, $active, $price)
    {
        $qrInsert = "INSERT INTO `soursedetail`(`id_sourse_detail`, `ma_KH`, `edusource_id`, `tenkhoahoc`
        , `mota`, `day_id`, `sl_tuan`, `sl_tiet`, `ngaykhaigiang`, `ngayketthuc`, `tinhtranghoc`, `active`, `price`) VALUES
         (null , '$makh','$edu', '$tenkh','$mota', '$ngay', '$sltuan','$sltiet','$ngaykhaigiang','$ngayketthuc', '$tinhtrang','$active','$price')";
        $result = false;
        if (mysqli_query($this->conn, $qrInsert)) {
            $result;
        }
        return  json_encode($result);
    }
    public function insert_courseDeitail_trainer($id_trainer, $id_sourse_detail, $class_id, $danhgia)
    {
        $qrInsert = "INSERT INTO `trainnerincoursedetail`(`id_trainer`, `id_sourse_detail`, `class_id`, `danhgia`) VALUES
         ('$id_trainer' , '$id_sourse_detail', '$class_id', '$danhgia')";
        $result = false;
        if (mysqli_query($this->conn, $qrInsert)) {
            $result;
        }
        return  json_encode($result);
    }
    public function deleteSourseDeitail($id)
    {
        $qrDelete = "DELETE FROM `soursedetail` WHERE `id_sourse_detail`='$id'";
        $result = false;
        if (mysqli_query($this->conn, $qrDelete)) {
            $result = true;
        }
        return  json_encode($result);
    }
    public function delete_EduSourse($id)
    {
        $qrDelete = "DELETE FROM `edusourses` WHERE `id_eduSource`='$id'";
        $result = false;
        if (mysqli_query($this->conn, $qrDelete)) {
            $result = true;
        }
        return  json_encode($result);
    }
    public function editSourseDeitail($id)
    {
        $qrEdit = "SELECT * FROM  soursedetail 
        INNER JOIN timeabledays ON soursedetail.day_id = timeabledays.id_days
        WHERE `id_sourse_detail`= '$id' ";
        return  $rerult =  mysqli_query($this->conn, $qrEdit);
    }
    public function updateSourseDeitail($id, $makh, $edu, $tenkh, $mota, $ngay, $sltuan, $sltiet, $ngaykhaigiang, $ngayketthuc, $active, $price)
    {
        $qrUpdate = "UPDATE `soursedetail` SET `edusource_id`='$edu',`tenkhoahoc`='$tenkh',
        `ma_KH` = '$makh' ,`mota`='$mota',`day_id`='$ngay' ,`sl_tuan`='$sltuan',
        `sl_tiet`='$sltiet',`ngaykhaigiang`='$ngaykhaigiang',`ngayketthuc`='$ngayketthuc',
        `active`='$active',`price`='$price'
        WHERE `id_sourse_detail`='$id'
        ";
        $result = false;
        if (mysqli_query($this->conn, $qrUpdate)) {
            $result = true;
        }
        return  json_encode($result);
    }
    public function timeabledays_delete($id_day)
    {
        $qrDelete = " DELETE FROM `timeabledays`
        WHERE id_days = '$id_day'
        ";
        return $rerult =  mysqli_query($this->conn, $qrDelete);
    }
    public function count_studentRegister_trainer()
    {
        $qrCourse = "SELECT ten_gv ,malop, ma_KH,tenkhoahoc,price,tinhtranghoc, ngaykhaigiang,ngayketthuc
        ,so_luongHV,COUNT(ma_KH) as 'student_register' FROM soursedetail
        INNER JOIN class ON class.sourse_detail_id = soursedetail.id_sourse_detail
        INNER JOIN trainnerincoursedetail ON trainnerincoursedetail.class_id = class.id_class
        INNER JOIN trainers ON trainers.id_trainer = trainnerincoursedetail.id_trainer
        INNER JOIN  bill ON bill.sourse_detail_id = soursedetail.id_sourse_detail
        INNER JOIN students ON students.id_students = bill.student_id
        GROUP BY soursedetail.ma_KH 
        ";
        return $rerult =  mysqli_query($this->conn, $qrCourse);
    }
}