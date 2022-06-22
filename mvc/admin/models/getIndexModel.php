<?php

class getIndexModel extends DB
{

    public function GetUser()
    {
        return "user is coming in the moment";
    }
    public function ShoweduCourse()
    {
        $qreduCourse = "SELECT * FROM  edusourses";
        return $rerult =  mysqli_query($this->conn, $qreduCourse);
        // echo $qrstudent ;
    }
    public function ShowCourseDetail()
    {
        $qrCourseDetail = "SELECT * FROM  soursedetail   
        INNER JOIN timeabledays ON soursedetail.day_id = timeabledays.id_days
        INNER JOIN timeabletime ON soursedetail.time_id = timeabletime.id_time";
        return $rerult =  mysqli_query($this->conn, $qrCourseDetail);
    }
    public function showDSTrainer()
    {
        $qrTrainer = "SELECT * FROM  trainers";
        return $rerult =  mysqli_query($this->conn, $qrTrainer);
    }
    public function mailbox()
    {
        $qrmail = "SELECT * FROM  `mailinstudent`";
        return $rerult =  mysqli_query($this->conn, $qrmail);
    }
    public function mailbox_add($name, $mail, $tieude, $quantamKH, $noidung)
    {
        $qrmail = "INSERT INTO `mailinstudent`(`id_mailbox`, `tendk`, `email`, `tieude`,`quantamKH`,`noidung`, `tinhtrang`)
         VALUES (null,'$name','$mail','$tieude','$quantamKH','$noidung','chua duyet')";
        if ($result = mysqli_query($this->conn, $qrmail)) {
            $result = true;
        }
        return  json_encode($result);
    }
    public function viewmailbox()
    {
        $qrmail = "SELECT * FROM `mailinstudent` WHERE `tinhtrang` = 'chua duyet' OR `tinhtrang` = ' ' ";
        return $rerult =  mysqli_query($this->conn, $qrmail);
    }
}