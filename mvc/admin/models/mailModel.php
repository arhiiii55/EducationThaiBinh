<?php
class mailModel extends DB
{
    public function getMailbox()
    {
        $qrmail = "SELECT * FROM `mailinstudent`  ORDER BY `tinhtrang` ASC";
        return $rerult =  mysqli_query($this->conn, $qrmail);
    }
    public function mailreaded()
    {
        $qrmail = "SELECT * FROM `mailinstudent` WHERE `tinhtrang` = 'đã phản hồi'";
        return $rerult =  mysqli_query($this->conn, $qrmail);
    }
    public function mailUnread()
    {
        $qrmail = "SELECT * FROM `mailinstudent` WHERE `tinhtrang` = 'Chua duyet' OR `tinhtrang` = 'chưa đọc' ";
        return $rerult =  mysqli_query($this->conn, $qrmail);
    }
    public function mailSendBack()
    {
        $qrmail = "SELECT * FROM `mailsendback`";
        return $rerult =  mysqli_query($this->conn, $qrmail);
    }
    public function mailbox_add($name, $mail, $tieude, $noidung)
    {
        $qrmail = "INSERT INTO `mailinstudent`(`id_mailbox`, `tendk`, `email`, `tieude`, `noidung`, `tinhtrang`)
         VALUES (null,'$name','$mail','$tieude','$noidung','Chưa đọc')";
        if ($result = mysqli_query($this->conn, $qrmail)) {
            $result = true;
        }
        return  json_encode($result);
    }
    public function viewmailbox()
    {
        $qrmail = "SELECT * FROM `mailinstudent` WHERE `tinhtrang` = 'chua duyet' OR `tinhtrang` = 'Chưa đọc' ";
        return $rerult =  mysqli_query($this->conn, $qrmail);
    }
    public function MailboxDeital($id_mailbox)
    {
        $qrmail = "SELECT * FROM `mailinstudent` 
        WHERE `id_mailbox` = $id_mailbox";
        return $rerult =  mysqli_query($this->conn, $qrmail);
    }
    public function Mailbox_getemail_customer($email)
    {
        $qrmail = "SELECT * FROM `mailinstudent` 
        WHERE `email` = $email";
        return $rerult =  mysqli_query($this->conn, $qrmail);
    }

    public function update_mail($id_mailbox, $tinhtrang, $phanhoi)
    {
        $qrUpdate = "UPDATE `mailinstudent` SET `tinhtrang`='$tinhtrang',`thuphanhoi`='$phanhoi',
        WHERE `id_mailbox` = '$id_mailbox' 
        ";
        $result = false;
        if (mysqli_query($this->conn, $qrUpdate)) {
            $result = true;
        }
        return  json_encode($result);
    }
    public function insert_mailback($phanhoi, $mailbox_id, $account_id, $tinhtrang)
    {
        $qrmail = "INSERT INTO `mailsendback`(`id_back`, `noidung`, `mailbox_id`, `account_id`, `tinhtrang`) 
        VALUES (null,'$phanhoi','$mailbox_id','$account_id','$tinhtrang')";
        if ($result = mysqli_query($this->conn, $qrmail)) {
            $result = true;
        }
        return  json_encode($result);
    }
    public function mailbox_delete($id_mailbox)
    {

        $qrDelete = "DELETE FROM `mailinstudent` 
        WHERE `id_mailbox` = '$id_mailbox'
        ";
        $result = false;
        if (mysqli_query($this->conn, $qrDelete)) {
            $result = true;
        }
        return  json_encode($result);
    }

    public function countMail()
    {
        $qrmail = "SELECT COUNT(id_mailbox) AS 'tong' FROM mailinstudent ";
        return $rerult =  mysqli_query($this->conn, $qrmail);
    }

    public function sendStudent_staff()
    {
        $qrmail = "SELECT COUNT(id_mailbox) AS 'tong' FROM mailinstudent ";
        return $rerult =  mysqli_query($this->conn, $qrmail);
    }
    //--------------------------------- student page ---------------------------------
    public function getMail_notification($id, $mahv)
    {
        $qrmail = "SELECT * FROM notification
        INNER JOIN students ON students.id_students = notification.student_id
        INNER JOIN accountgoogleapi ON accountgoogleapi.username = students.MaHV
        WHERE `id` = '$id' AND `username` = '$mahv'";
        return $rerult =  mysqli_query($this->conn, $qrmail);
    }
    public function insert_notification($id_account, $id_student, $tieude, $noidung, $ngaygui, $loaithongbao)
    {
        $qrcreate = "INSERT INTO `notification`(`account_id`, `student_id`, `tieude`, `noidung`, `ngaygui`, `loaithongbao`) 
        VALUES ('$id_account','$id_student','$tieude','$noidung','$ngaygui','$loaithongbao')";
        if ($result = mysqli_query($this->conn, $qrcreate)) {
            $result = true;
        }
        return  json_encode($result);
    }
}