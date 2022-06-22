<?php
class liststudentModel extends DB
{
    public function GetUser()
    {
        return "user is coming in the moment";
    }

    public function ShowDSStudent()
    {
        $qrstudent = "	SELECT * FROM students
        INNER JOIN bill ON bill.student_id = students.id_students
        INNER JOIN soursedetail ON bill.sourse_detail_id = soursedetail.id_sourse_detail";
        return $rerult =  mysqli_query($this->conn, $qrstudent);
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
    public function getClass_byIdTrainer($tenlop)
    {
        $qrtrainer = " SELECT * FROM students
        INNER JOIN bill ON bill.student_id = students.id_students
        INNER JOIN soursedetail ON bill.sourse_detail_id = soursedetail.id_sourse_detail 
        INNER JOIN class ON class.sourse_detail_id = soursedetail.id_sourse_detail
        WHERE ten_lop = '$tenlop' 
        ";
        return $rerult =  mysqli_query($this->conn, $qrtrainer);
    }

    public function getClass_byIdTrainer_id($id)
    {
        $qrstudent = "SELECT * FROM students
        INNER JOIN bill ON bill.student_id = students.id_students
        INNER JOIN soursedetail ON bill.sourse_detail_id = soursedetail.id_sourse_detail 
        INNER JOIN class ON class.sourse_detail_id = soursedetail.id_sourse_detail
        INNER JOIN trainnerincoursedetail ON trainnerincoursedetail.class_id = class.id_class
        INNER JOIN trainers ON trainnerincoursedetail.id_trainer = trainers.id_trainer
        INNER JOIN staff ON staff.id_staff = trainers.id_staff
        INNER JOIN accountuser ON accountuser.id_staff = staff.id_staff	
        WHERE `accountuser`. `id_account`= '$id'
        ORDER BY ten_lop  ";
        return $rerult =  mysqli_query($this->conn, $qrstudent);
    }
}