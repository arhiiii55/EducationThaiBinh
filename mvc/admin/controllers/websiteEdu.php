<?php
class WebsiteEdu extends Controllers
{
    public function mainPage()
    {
        // $courseModel = $this->model("courseModel");
        // $modelindex = $this->model("getIndexModel");
        // $this->view("masterWebsiteLayout", [
        //     'pages' => 'website/index',
        //     'showEdu' => $modelindex->ShoweduCourse(),
        //     'showEduDeitail' => $modelindex->ShowCourseDetail(),
        //     'showListTrainers' => $modelindex->showDSTrainer(),
        //     'eduCourse_all' => $courseModel->eduCourse_all(),
        //     'red' =>  'echo success'
        // ]);
        $this->view("page/login", [
            // "result" => $result_mess
        ]);
    }
    public function mainPage_GT()
    {
        $courseModel = $this->model("courseModel");
        $modelindex = $this->model("getIndexModel");
        $this->view("masterWebsiteLayout", [
            'pages' => 'website/index',
            'showEdu' => $modelindex->ShoweduCourse(),
            'showEduDeitail' => $modelindex->ShowCourseDetail(),
            'showListTrainers' => $modelindex->showDSTrainer(),
            'eduCourse_all' => $courseModel->eduCourse_all(),
            'red' =>  'echo success'
        ]);
    }
    public function aboutPage()
    {
        $qrdatamail = $this->model("mailModel");
        // $qrmail = $this->model("getIndexModel");
        $userM = $this->model("courseModel");
        $HV = $this->model("studentModel");
        // $modelindex = $this->model("getIndexModel");
        //lấy view  
        $this->view("masterWebsiteLayout", [
            'pages' => 'website/about',
            'countStudent' => $HV->countHV(),
            'courseDetail' => $userM->ShowCourseDetail(),
            'count_messages' => $qrdatamail->countMail()
        ]);
    }
    public function contactPage()
    {
        $modelindex = $this->model("getIndexModel");
        $this->view("masterWebsiteLayout", [
            'pages' => 'website/contact',
            'showEdu' => $modelindex->ShoweduCourse(),
            'showEduDeitail' => $modelindex->ShowCourseDetail(),
            'showListTrainers' => $modelindex->showDSTrainer(),
            'red' =>  'echo success'
        ]);
    }
    public function sourseDetailPage()
    {
        $modelindex = $this->model("getIndexModel");
        $this->view("masterWebsiteLayout", [
            'pages' => 'website/course-details',
            'showEdu' => $modelindex->ShoweduCourse(),
            'showEduDeitail' => $modelindex->ShowCourseDetail(),
            'showListTrainers' => $modelindex->showDSTrainer(),
            'red' =>  'echo success'
        ]);
    }
    public function soursePage()
    {
        $courseModel = $this->model("courseModel");
        $modelindex = $this->model("getIndexModel");
        $this->view("masterWebsiteLayout", [
            'pages' => 'website/courses',
            'showEdu' => $modelindex->ShoweduCourse(),
            'showEduDeitail' => $modelindex->ShowCourseDetail(),
            'showListTrainers' => $modelindex->showDSTrainer(),
            'eduCourse_all' => $courseModel->eduCourse_all(),
            'red' =>  'echo success'
        ]);
    }
    public function eduCourse_byid($edusource_id)
    {
        //   public  $edusource_id ;
        $courseModel = $this->model("courseModel");
        $modelindex = $this->model("getIndexModel");
        $this->view("masterWebsiteLayout", [
            'pages' => 'website/educourse_get',
            'showEdu' => $modelindex->ShoweduCourse(),
            'showEduDeitail' => $modelindex->ShowCourseDetail(),
            'showListTrainers' => $modelindex->showDSTrainer(),
            'eduCourse_all' => $courseModel->eduCourse_all(),
            'getEdu_byid' => $courseModel->getEdu_byid($edusource_id),
            'red' =>  'echo sgetEdu_byiduccess'
        ]);
    }
    public function eventPage()
    {
        $modelindex = $this->model("trainerModel");
        $modelindex = $this->model("getIndexModel");
        $this->view("masterWebsiteLayout", [
            'pages' => 'website/events',
            'showEdu' => $modelindex->ShoweduCourse(),
            'showEduDeitail' => $modelindex->ShowCourseDetail(),
            'showListTrainers' => $modelindex->showDSTrainer(),
            'red' =>  'echo success'
        ]);
    }
    public function trainers()
    {
        // $modetrainer = $this->model("trainerModel");
        $modelindex = $this->model("getIndexModel");
        $this->view("masterWebsiteLayout", [
            'pages' => 'website/trainers',
            'showEdu' => $modelindex->ShoweduCourse(),
            'showEduDeitail' => $modelindex->ShowCourseDetail(),
            'showListTrainers' => $modelindex->showDSTrainer(),
            'red' =>  'echo success'
        ]);
    }
    public function pricing()
    {
        $modelindex = $this->model("getIndexModel");
        $this->view("masterWebsiteLayout", [
            'pages' => 'website/pricing',
            'showEdu' => $modelindex->ShoweduCourse(),
            'showEduDeitail' => $modelindex->ShowCourseDetail(),
            'showListTrainers' => $modelindex->showDSTrainer(),
            'red' =>  'echo success'
        ]);
    }
    public function mailbox_create()
    {
        $result_mess = false;
        if (isset($_POST['add_mail'])) {
            $name = isset($_POST['name']) ? $_POST['name'] : null;
            $mail = isset($_POST['email']) ? $_POST['email'] : null;
            $tieude = isset($_POST['subject']) ? $_POST['subject'] : '';
            $quantamKH = isset($_POST['quantamKH']) ? $_POST['quantamKH'] : null;
            $noidung = isset($_POST['Message']) ? $_POST['Message'] : '';
            // $tinhtrang = isset($_POST['tinhtrang']) ? $_POST['tinhtrang'] : null;
            $indexContact = $this->model("getIndexModel");
            if (empty($_POST["name"] && $_POST["email"] && $_POST["subject"] && $_POST['quantamKH'] && $_POST["Message"])) {
                $this->view("masterWebsiteLayout", [
                    "pages" => "website/contact",
                    // "mailbox" => $indexContact->mailbox(),
                    "result_insert" => $result_mess
                ]);
            }
            $this->view("masterWebsiteLayout", [
                "pages" => "website/contact",
                "result_insert" => $indexContact->mailbox_add($name, $mail, $tieude, $quantamKH, $noidung),
                // "mailbox" => $indexContact->mailbox()
            ]);
        } else {
            $indexContact = $this->model("getIndexModel");
            $this->view("masterWebsiteLayout", [
                "pages" => "website/contact",
                // "mailbox" => $indexContact->mailbox()
            ]);
        }
    }
    public function soursedetail_info($id)
    {
        $Modelsourse = $this->model("courseModel");
        $this->view("masterWebsiteLayout", [
            "pages" => "website/course-details",
            "detail" => $Modelsourse->editSourseDeitail($id),
        ]);
    }
    // Sửa 
    public function registerCourse()
    {
        $modelindex = $this->model("getIndexModel");
        $this->view("masterWebsiteLayout", [
            'pages' => 'website/register_course',
            'showEdu' => $modelindex->ShoweduCourse(),
            'showEduDeitail' => $modelindex->ShowCourseDetail(),
            'showListTrainers' => $modelindex->showDSTrainer(),
            'red' =>  'echo success'
        ]);
    }
}