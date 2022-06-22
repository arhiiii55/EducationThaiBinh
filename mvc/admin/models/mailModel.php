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
}