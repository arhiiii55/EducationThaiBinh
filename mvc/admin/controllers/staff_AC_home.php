<?php
class staff_AC_home extends Controllers
{

    public function adminPage()
    {
        //lấy model ra xài
        $qrdatamail = $this->model("mailModel");
        $qrClass = $this->model("classModel");
        $courseModel = $this->model("courseModel");
        $HV = $this->model("studentModel");
        $userModel = $this->model("userModel");
        //lấy view  
        $this->view("masterAccountantLayout", [
            "pageaccountant" => "pageAccountant/mainpage_AC",
            "mau" => 'red',
            "countStudent" => $HV->countHV(),
            "mailbox" => $qrdatamail->mailUnread(),
            "courseDetail" => $courseModel->ShowCourseDetail(),
            "count_messages" => $qrdatamail->countMail(),
            "countClass_forIndex" => $qrClass->countClass_forIndex(),
            // 'khoahochienhanh' => $courseModel->eduCourse_all()
        ]);
    }
    public function studentPage()
    {
        $qrdatamail = $this->model("mailModel");
        $listdatastudent = $this->model("studentModel");
        $qrcourse = $this->model("courseModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/allstudent_insert",
            "showstudent" => $listdatastudent->showstudent(),
            "showstrainer" => $listdatastudent->showDSTrainer(),
            "mailbox" => $qrdatamail->mailUnread(),
            "ShowAllOfCourse" => $listdatastudent->ShowAllOfCourse(),
            "ShowCourseDetail" => $qrcourse->ShowCourseDetail(),
            "showDSstudent" => $listdatastudent->ShowDSStudent(),

        ]);
    }
    public function allstudentPage()
    {
        $qrdatamail = $this->model("mailModel");
        $listdatastudent = $this->model("studentModel");
        $qrbill = $this->model("billModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/allstudent",
            "showstudent" => $listdatastudent->showstudent(),
            "showstrainer" => $listdatastudent->showDSTrainer(),
            "mailbox" => $qrdatamail->mailUnread(),
            "ShowAllOfCourse" => $listdatastudent->ShowAllOfCourse(),
            "showDSstudent" => $listdatastudent->ShowDSStudent(),
        ]);
    }
}