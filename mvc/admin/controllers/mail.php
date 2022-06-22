<?php
require './mvc/admin/core/sendmail.php';
class mail extends Controllers
{
    public function mailboxPage()
    {
        $datamail = $this->model("mailModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/mail-all",
            "getmail" => $datamail->getMailbox(),
            "mailbox" => $datamail->mailUnread()
        ]);
    }
    public function mailboxreply()
    {

        $datamail = $this->model("mailModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/mail-view",
            "getmail" => $datamail->getMailbox(),
            "mailbox" => $datamail->mailUnread(),
            // "MailboxDeital" => $datamail->MailboxDeital($id_mailbox),
        ]);
    }
    public function writeMailReply($id_mailbox)
    {
        $datamail = $this->model("mailModel");
        $this->view("page/mail_view", [
            "pages" => "page/mail_view",
            "MailboxDeital" => $datamail->MailboxDeital($id_mailbox),
            "getmail" => $datamail->getMailbox(),
            "mailbox" => $datamail->mailUnread()
        ]);
    }
    public function delete_mail($id_mailbox)
    {
        $datamail = $this->model("mailModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/mail_view",
            "deleteStudent" => $datamail->deleteStudent($id_mailbox),
            "getmail" => $datamail->getMailbox(),
            "mailbox" => $datamail->mailUnread()

        ]);
    }
    public function update_mail($id_mailbox, $email)
    {
        $mailsend = new sendmail();
        $result_mess = false;
        if (isset($_POST["submit_mail"])) {

            //khai bao biến
            $tinhtrang = isset($_POST['tinhtrang']) ? $_POST['tinhtrang'] : null;
            $phanhoi = isset($_POST['reply']) ? $_POST['reply'] : '';
            if (empty($_POST["reply"] && $_POST["tinhtrang"])) {
                $this->view("masterAdminLayout", [
                    "pages" => "page/mail-view",
                    "updateMail" => $result_mess

                ]);
            } else {

                $qrdatamail = $this->model("mailModel");
                // echo '<script language="javascript">alert("Thư phản hồi gửi thành công!");</script>';
                $tinhtrang = isset($_POST['tinhtrang']) ? $_POST['tinhtrang'] : null;
                $phanhoi = isset($_POST['reply']) ? $_POST['reply'] : '';
                $phanhoimail = $phanhoi;
                $mailsend->send_gmailgoogle($email, $phanhoimail);
                echo $email;
                echo $phanhoimail;
                $this->view("masterAdminLayout", [
                    "pages" => "page/mail-view",
                    "updateMail" => $qrdatamail->update_mail($id_mailbox, $tinhtrang, $phanhoi),
                    "mailbox" => $qrdatamail->mailUnread(),
                    "getmailbox" => $qrdatamail->getMailbox(),
                    'MailboxDeital' => $qrdatamail->MailboxDeital($id_mailbox),
                    "kq_mail" => $mailsend
                ]);
            }
            // }
        }
    }
}