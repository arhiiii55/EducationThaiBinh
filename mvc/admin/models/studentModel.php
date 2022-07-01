<?php
class studentModel extends DB
{
    public function GetUser()
    {
        return "user is coming in the moment";
    }

    public function showstudent()
    {
        $qrstudent = "SELECT * FROM `students`";
        return $result =  mysqli_query($this->conn, $qrstudent);
    }
    public function countHV()
    {
        $qrstudent = "SELECT COUNT(id_students) AS 'tong'
        FROM students ";
        return $result =  mysqli_query($this->conn, $qrstudent);
        // echo $qrstudent ;
    }
    public function showDSTrainer()
    {
        $qrTrainer = "SELECT * FROM  trainers";
        return $rerult =  mysqli_query($this->conn, $qrTrainer);
    }
    public function ShowAllOfCourse()
    {

        $qrallofcourse = " SELECT * FROM trainnerincoursedetail AS ctgvkh
        INNER JOIN trainers ON ctgvkh.id_trainer = trainers.id_trainer
        INNER JOIN soursedetail AS sdetail ON ctgvkh.id_sourse_detail = sdetail.id_sourse_detail
        INNER JOIN class ON ctgvkh.class_id = class.id_class 
        ";
        return $rerult =  mysqli_query($this->conn, $qrallofcourse);
    }
    public function ShowCourseDetail()
    {
        $qrCourseDetail = "SELECT * FROM  soursedetail
        INNER JOIN timeabledays ON soursedetail.day_id = timeabledays.id_days
        INNER JOIN timeabletime ON soursedetail.time_id = timeabletime.id_time
       ";
        return $rerult =  mysqli_query($this->conn, $qrCourseDetail);
        // echo $qrstudent ;
    }
    public function insertStudent($ma_HV, $imgHV, $name, $birthday, $phone, $gmail, $active)
    {
        $qrInsert = "INSERT INTO `students`(`MaHV`,`imgHV`,`tenhv`, `ngaysinh`, `sdt`, `gmail`, `actived`)  
            VALUES ('$ma_HV','$imgHV','$name','$birthday', '$phone', '$gmail', '$active')";
        $result = false;
        if (mysqli_query($this->conn, $qrInsert)) {
            $result;
        }
        return  json_encode($result);
    }
    public function deleteStudent($id)
    {
        $qrDelete = "DELETE FROM `students` WHERE `id_students`='$id'";
        $result = false;
        if (mysqli_query($this->conn, $qrDelete)) {
            $result = true;
        }
        return  json_encode($result);
    }
    public function deleteStudent_incourse($id)
    {
        $qrDelete = "DELETE FROM `studentinsoursedetaill` WHERE `id_students`='$id'";
        $result = false;
        if (mysqli_query($this->conn, $qrDelete)) {
            $result = true;
        }
        return  json_encode($result);
    }
    public function delete_bill($id)
    {
        $qrDelete = "DELETE FROM `bill`
         WHERE `id_bill`='$id'";
        $result = false;
        if (mysqli_query($this->conn, $qrDelete)) {
            $result = true;
        }
        return  json_encode($result);
    }
    public function editStudent($id)
    {
        $qrstudent = "SELECT * FROM  `students` WHERE `id_students`= '$id' ";
        return mysqli_query($this->conn, $qrstudent);
    }
    public function updateStudent($id, $name, $birthday, $phone, $gmail, $active)
    {
        $qrUpdate = "UPDATE `students` 
        SET `tenhv`='$name',`ngaysinh`='$birthday'
        ,`sdt`='$phone',`gmail`='$gmail',`actived`='$active' 
        WHERE `id_students`='$id'
        ";
        $result = false;
        if (mysqli_query($this->conn, $qrUpdate)) {
            $result = true;
        }
        return  json_encode($result);
    }
    public function ShowDSStudent()
    {
        $qrUpdate = "SELECT * FROM students
        INNER JOIN bill ON bill.student_id = students.id_students
        INNER JOIN soursedetail ON bill.sourse_detail_id = soursedetail.id_sourse_detail";
        return $rerult =  mysqli_query($this->conn, $qrUpdate);
    }
    public function insertStudentRegister($id_Student, $id_sourse_detail, $tinhtrang)
    {
        $qrInsert = "INSERT INTO `studentinsoursedetaill`(`id_students`, `id_sourse_detail`, `tinhtrang`) 
            VALUES ('$id_Student','$id_sourse_detail', '$tinhtrang')";
        $result = false;
        if (mysqli_query($this->conn, $qrInsert)) {
            $result;
        }
        return  json_encode($result);
    }
    public function Search($search_st)
    {
        $qrSearch = "SELECT * FROM `students` WHERE `tenhv` like '%$search_st%'";
        return $result =  mysqli_query($this->conn, $qrSearch);
    }
    public function studentView_action($id)
    {
        $qrview = " SELECT * FROM students
        INNER JOIN bill ON bill.student_id = students.id_students
        INNER JOIN soursedetail ON bill.sourse_detail_id = soursedetail.id_sourse_detail 
        INNER JOIN class ON class.sourse_detail_id = soursedetail.id_sourse_detail
        WHERE `id_students` = '$id'";
        return $result =  mysqli_query($this->conn, $qrview);
    }
    public function studentView_action_nonbill($id)
    {
        $qrview = " SELECT * FROM students
        LEFT JOIN bill ON bill.student_id = students.id_students
        WHERE `id_students` = '$id'";
        return $result =  mysqli_query($this->conn, $qrview);
    }
    // tình trạng đóng học phí Trang HV
    public function payTuition_status($id)
    {
        $qrview = " SELECT * FROM students
        LEFT JOIN bill ON bill.student_id = students.id_students
        WHERE `id_students` = '$id'";
        return $result =  mysqli_query($this->conn, $qrview);
    }

    //--------------------------------- student page ---------------------------------
    public function getInfoStudent($id)
    {
        $qrstudent = "SELECT * FROM  `students` 
        INNER JOIN accountgoogleapi ON accountgoogleapi.username = students.MaHV
        WHERE `id` =  '$id' ";
        return mysqli_query($this->conn, $qrstudent);
    }

}