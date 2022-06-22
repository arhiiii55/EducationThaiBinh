<?php
class course extends Controllers
{
    public function coursesDetail()
    {
        $listdataTrainer = $this->model("trainerModel");
        $qrdatamail = $this->model("mailModel");
        $listdataeducourse = $this->model("courseModel");
        $classdata = $this->model("classModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/allCourses",
            "eduCourse" => $listdataeducourse->ShoweduCourse(),
            "eduCourse_w" => $listdataeducourse->ShoweduCourse(),
            "ShowCourseDetail" => $listdataeducourse->ShowCourseDetail(),
            "timeabledays" => $listdataeducourse->ShowtimeableDays(),
            "timeabledays_listdown" => $listdataeducourse->ShowtimeableDays(),
            "mailbox" => $qrdatamail->mailUnread(),
            "count_studentRegister_trainer" => $listdataeducourse->count_studentRegister_trainer(),
            "class_all" =>  $classdata->class_all(),
            "class_all_detail" =>  $classdata->class_all_detail(),
            "class_all_id" => $classdata->class_all_id(),
            "showstrainer" => $listdataTrainer->showDSTrainer(),
            "eduCourse_all" => $listdataeducourse->eduCourse_all(),
            "ShowCourseDetail_NonTrainer" => $listdataeducourse->ShowCourseDetail_NonTrainer(),
        ]);
    }
    public function coursesDetail_create()
    {
        $result_mess = false;
        if (isset($_POST['submit_add'])) {
            $listdataTrainer = $this->model("trainerModel");
            $classModel = $this->model("classModel");
            $courseModel = $this->model("courseModel");
            $listdata = $this->model("liststudentModel");

            // $img = null;
            $makh = isset($_POST['makh']) ? $_POST['makh'] : null;
            $edu = isset($_POST['edu']) ? $_POST['edu'] : null;
            $tenkh = isset($_POST['tenkh']) ? $_POST['tenkh'] : null;
            $mota = isset($_POST['mota']) ? $_POST['mota'] : '';
            $ngay = isset($_POST['day_id']) ? $_POST['day_id'] : '';
            $sltuan = isset($_POST['sl_tuan']) ? $_POST['sl_tuan'] : '';
            $sltiet = isset($_POST['sl_tiet']) ? $_POST['sl_tiet'] : '';
            $ngaykhaigiang = isset($_POST['ngaykhaigiang']) ? $_POST['ngaykhaigiang'] : '';
            $ngayketthuc = isset($_POST['ngayketthuc']) ? $_POST['ngayketthuc'] : '';
            $tinhtrang = isset($_POST['tinhtrang']) ? $_POST['tinhtrang'] : '';
            $active = isset($_POST['actived']) ? $_POST['actived'] : '';
            $price = isset($_POST['price']) ? $_POST['price'] : '';
            if (empty($_POST["edu"] && $_POST["makh"]  && $_POST["tenkh"] && $_POST["mota"]
                && $_POST["day_id"]  && $_POST["sl_tuan"]
                && $_POST["sl_tiet"] && $_POST["ngaykhaigiang"]
                && $_POST["ngayketthuc"] && $_POST["tinhtrang"] && $_POST["actived"] && $_POST["price"])) {
                $this->view("masterAdminLayout", [
                    "pages" => "page/allCourses",
                    "eduCourse" => $courseModel->ShoweduCourse(),
                    "ShowCourseDetail" => $courseModel->ShowCourseDetail(),
                    "timeabledays" => $courseModel->ShowtimeableDays(),
                    "ShowAllOfCourse" => $listdata->ShowAllOfCourse(),
                    "eduCourse_all" => $courseModel->eduCourse_all(),
                    "class_all" =>  $classModel->class_all(),
                    "class_all_detail" =>  $classModel->class_all_detail(),
                    "class_all_id" => $classModel->class_all_id(),
                    "showstrainer" => $listdataTrainer->showDSTrainer(),
                    "ShowCourseDetail_NonTrainer" => $courseModel->ShowCourseDetail_NonTrainer(),
                    "timeabledays_listdown" => $courseModel->ShowtimeableDays(),

                    "result_insert" => $result_mess
                ]);
            }
            $this->view("masterAdminLayout", [
                "pages" => "page/allCourses",
                "result_insert" => $courseModel->insertSourseDeitail($makh, $edu, $tenkh, $mota, $ngay, $sltuan, $sltiet, $ngaykhaigiang, $ngayketthuc, $tinhtrang, $active, $price),
                "eduCourse" => $courseModel->ShoweduCourse(),
                // "ShowCourseDetail" => $courseModel->ShowCourseDetail(),
                "timeabledays_listdown" => $courseModel->ShowtimeableDays(),
                "timeabledays" => $courseModel->ShowtimeableDays(),
                "ShowAllOfCourse" => $listdata->ShowAllOfCourse(),
                "class_all" =>  $classModel->class_all(),
                "class_all_detail" =>  $classModel->class_all_detail(),
                "class_all_id" => $classModel->class_all_id(),
                "showstrainer" => $listdataTrainer->showDSTrainer(),
                "ShowCourseDetail_NonTrainer" => $courseModel->ShowCourseDetail_NonTrainer(),
                "eduCourse_all" => $courseModel->eduCourse_all(),

            ]);
        } else {
            $listdataTrainer = $this->model("trainerModel");
            $classModel = $this->model("classModel");
            $courseModel = $this->model("courseModel");
            $listdata = $this->model("liststudentModel");

            $this->view("masterAdminLayout", [
                "pages" => "page/allCourses",
                "eduCourse" => $courseModel->ShoweduCourse(),
                "ShowCourseDetail" => $courseModel->ShowCourseDetail(),
                "timeabledays" => $courseModel->ShowtimeableDays(),
                "ShowAllOfCourse" => $listdata->ShowAllOfCourse(),
                "eduCourse_all" => $courseModel->eduCourse_all(),
                "ShowCourseDetail_NonTrainer" => $courseModel->ShowCourseDetail_NonTrainer(),
                "timeabledays_listdown" => $courseModel->ShowtimeableDays(),
            ]);
        }
    }
    public function courseDeitail_trainer()
    {
        $result_mess = false;
        if (isset($_POST['submit_add'])) {
            $id_trainer = isset($_POST['id_trainer']) ? $_POST['id_trainer'] : null;
            $id_sourse_detail = isset($_POST['id_sourse_detail']) ? $_POST['id_sourse_detail'] : null;
            $class_id = isset($_POST['class_id']) ? $_POST['class_id'] : null;
            $danhgia = isset($_POST['tinhtrang']) ? $_POST['tinhtrang'] : '';
            $courseModel = $this->model("courseModel");
            $listdataTrainer = $this->model("trainerModel");
            $classdata = $this->model("classModel");
            $listdata = $this->model("liststudentModel");

            if (empty($_POST["id_trainer"] && $_POST["id_sourse_detail"] && $_POST["class_id"]
                && $_POST["danhgia"])) {
                $this->view("masterAdminLayout", [
                    "pages" => "page/add_trainerForClass",
                    "eduCourse" => $courseModel->ShoweduCourse(),
                    "ShowCourseDetail" => $courseModel->ShowCourseDetail(),
                    "timeabledays" => $courseModel->ShowtimeableDays(),

                    "class_all" =>  $classdata->class_all(),
                    "class_all_id" => $classdata->class_all_id(),
                    "showstrainer" => $listdataTrainer->showDSTrainer(),
                    "ShowAllOfCourse" => $listdata->ShowAllOfCourse(),
                    "result_insert" => $result_mess
                ]);
            }
            $this->view("masterAdminLayout", [
                "pages" => "page/add_trainerForClass",
                "result_insert" => $courseModel->insert_courseDeitail_trainer($id_trainer, $id_sourse_detail, $class_id, $danhgia),
                "eduCourse" => $courseModel->ShoweduCourse(),
                "ShowCourseDetail" => $courseModel->ShowCourseDetail(),
                "timeabledays" => $courseModel->ShowtimeableDays(),
                "class_all" =>  $classdata->class_all(),
                "class_all_id" => $classdata->class_all_id(),
                "showstrainer" => $listdataTrainer->showDSTrainer(),
                "ShowAllOfCourse" => $listdata->ShowAllOfCourse(),

            ]);
        } else {
            $listdata = $this->model("liststudentModel");
            $listdataTrainer = $this->model("trainerModel");
            $classdata = $this->model("classModel");
            $courseModel = $this->model("courseModel");
            $this->view("masterAdminLayout", [
                "pages" => "page/add_trainerForClass",
                "eduCourse" => $courseModel->ShoweduCourse(),
                "ShowCourseDetail" => $courseModel->ShowCourseDetail(),
                "timeabledays" => $courseModel->ShowtimeableDays(),
                "class_all" =>  $classdata->class_all(),
                "class_all_id" => $classdata->class_all_id(),
                "showstrainer" => $listdataTrainer->showDSTrainer(),
                "ShowAllOfCourse" => $listdata->ShowAllOfCourse(),


            ]);
        }
    }
    // xóa
    public function coursesDetail_delete($id)
    {
        $courseModel = $this->model("courseModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/allCourses",
            "delete_course" => $courseModel->deleteSourseDeitail($id),
            "eduCourse" => $courseModel->ShoweduCourse(),
            "ShowCourseDetail" => $courseModel->ShowCourseDetail(),
            "timeabledays" => $courseModel->ShowtimeableDays(),


        ]);
    }
    public function eduCourse_delete($id)
    {
        $courseModel = $this->model("courseModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/allCourses",
            "delete_eduCourse" => $courseModel->delete_EduSourse($id),
            "eduCourse" => $courseModel->ShoweduCourse(),
            "ShowCourseDetail" => $courseModel->ShowCourseDetail(),
            "timeabledays" => $courseModel->ShowtimeableDays(),

        ]);
    }
    public function timeableDays_delete($id_day)
    {
        $courseModel = $this->model("courseModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/allCourses",
            "timeabledays_delete" => $courseModel->timeabledays_delete($id_day),
            "eduCourse" => $courseModel->ShoweduCourse(),
            "ShowCourseDetail" => $courseModel->ShowCourseDetail(),
            "timeabledays" => $courseModel->ShowtimeableDays(),

        ]);
    }
    public function timeableTime_delete($id_time)
    {
        $courseModel = $this->model("courseModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/allCourses",

            "eduCourse" => $courseModel->ShoweduCourse(),
            "ShowCourseDetail" => $courseModel->ShowCourseDetail(),
            "timeabledays" => $courseModel->ShowtimeableDays(),

        ]);
    }
    public function coursesDetail_edit($id)
    {
        $courseModel = $this->model("courseModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/CourseDeitail_edit",
            "editSourseDeitail" => $courseModel->editSourseDeitail($id),
            "eduCourse" => $courseModel->ShoweduCourse(),
            "ShowCourseDetail" => $courseModel->ShowCourseDetail(),
            "timeabledays" => $courseModel->ShowtimeableDays(),

        ]);
    }
    // Sửa 
    public function coursesDetail_update($id)
    {
        $result_mess = false;
        if (isset($_POST["submit_edit"])) {

            if (empty($_POST["edu"] && $_POST["makh"] && $_POST["tenkh"] && $_POST["mota"]
                && $_POST["day_id"]  && $_POST["sl_tuan"]
                && $_POST["sl_tiet"] && $_POST["ngaykhaigiang"]
                && $_POST["ngayketthuc"] && $_POST["actived"] && $_POST["price"])) {
                $this->view("masterAdminLayout", [
                    "pages" => "page/CourseDeitail_edit",
                    "result" => $result_mess
                ]);
            } else {
                $courseModel = $this->model("courseModel");
                $edu = isset($_POST['edu']) ? $_POST['edu'] : null;
                $makh = isset($_POST['makh']) ? $_POST['makh'] : null;
                $tenkh = isset($_POST['tenkh']) ? $_POST['tenkh'] : null;
                $mota = isset($_POST['mota']) ? $_POST['mota'] : null;
                $ngay = isset($_POST['day_id']) ? $_POST['day_id'] : '';

                $sltuan = isset($_POST['sl_tuan']) ? $_POST['sl_tuan'] : '';
                $sltiet = isset($_POST['sl_tiet']) ? $_POST['sl_tiet'] : '';
                $ngaykhaigiang = isset($_POST['ngaykhaigiang']) ? $_POST['ngaykhaigiang'] : '';
                $ngayketthuc = isset($_POST['ngayketthuc']) ? $_POST['ngayketthuc'] : '';
                $active = isset($_POST['actived']) ? $_POST['actived'] : '';
                $price = isset($_POST['price']) ? $_POST['price'] : '';
                $this->view("masterAdminLayout", [
                    "pages" => "page/CourseDeitail_edit",
                    "updateSourseDeitail" => $courseModel->updateSourseDeitail($id, $makh, $edu, $tenkh, $mota, $ngay, $sltuan, $sltiet, $ngaykhaigiang, $ngayketthuc, $active, $price),
                    "editSourseDeitail" => $courseModel->editSourseDeitail($id),
                    "eduCourse" => $courseModel->ShoweduCourse(),
                    "ShowCourseDetail" => $courseModel->ShowCourseDetail(),
                    "timeabledays" => $courseModel->ShowtimeableDays(),

                ]);
            }
        }
    }
    # ------------------------------------ giao dien nhan vien ke toan ---------------------------
    public function coursesDetail_AC()
    {
        $liststudentModel = $this->model("liststudentModel");
        $courseModel = $this->model("courseModel");
        $this->view("masterAccountantLayout", [
            "pageaccountant" => "pageAccountant/allCourses",
            "eduCourse" => $courseModel->ShoweduCourse(),
            "ShowCourseDetail" => $courseModel->ShowCourseDetail(),
            "timeabledays" => $courseModel->ShowtimeableDays(),
            "ShowAllOfCourse" => $liststudentModel->ShowAllOfCourse(),

        ]);
    }
    public function coursesDetail_edit_AC($id)
    {
        $courseModel = $this->model("courseModel");
        $this->view("masterAccountantLayout", [
            "pageaccountant" => "pageAccountant/allCourseDeitail_edit",
            "editSourseDeitail" => $courseModel->editSourseDeitail($id),
            "eduCourse" => $courseModel->ShoweduCourse(),
            "ShowCourseDetail" => $courseModel->ShowCourseDetail(),
            "timeabledays" => $courseModel->ShowtimeableDays(),

        ]);
    }
}