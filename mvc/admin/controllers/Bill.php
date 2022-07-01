<?php
class bill extends Controllers
{
    //----------------------Bill page for admin--------------
    public function bill_statement_AD()
    {
        //data model 
        $qrbill = $this->model("billModel");
        $qrsourse = $this->model("courseModel");
        $qrstudent = $this->model("studentModel");
        // output view
        $month = isset($_POST['month']) ? $_POST['month'] : null;
        $year  = isset($_POST['year']) ? $_POST['year'] : null;
        $tinhtrang  = isset($_POST['tinhtrang']) ? $_POST['tinhtrang'] : null;
        $this->view("masterAdminLayout", [
            "pages" => "page/bill_statement",
            "st_bill_paid" => $qrbill->st_bill_paid(),
            "bill_all" => $qrbill->bill_all(),
            "show_bill_full" => $qrbill->st_bill_sale_sourse(),
            "showstudent" => $qrstudent->showstudent(),
            "ShowCourseDetail" => $qrsourse->ShowCourseDetail(),
            "courseDetail" => $qrsourse->courseDetail(),
            "bill_statement_getYear" => $qrbill->bill_statement_getYear(),
            "billMonthYear_statement" => $qrbill->billMonthYear_statement($month, $year, $tinhtrang),
            // "billMonthYear_statement" => $qrbill->billMonthYear_statement($month, $year, $tinhtrang),
            "billMonthYear_statement_showpaid" => $qrbill->billMonthYear_statement_showPaid(),
            "billMonthYear_statement_showUnpaid" => $qrbill->billMonthYear_statement_showUnPaid(),
        ]);
    }
    public function billPage_AD()
    {
        $qrsourse = $this->model("courseModel");
        $qrstudent = $this->model("studentModel");
        $qrbill = $this->model("billModel");
        $showclass = $qrbill->getclass_id();
        while ($data_class = mysqli_fetch_assoc($showclass)) {
            $id_class = $data_class["id_class"];
        }
        $this->view("masterAdminLayout", [
            "pages" => "page/bill_viewALL",
            "bill_all" => $qrbill->bill_all(),
            "st_for_bill_paid" => $qrbill->st_bill_paid(),
            "st_for_bill_unpaid" => $qrbill->st_bill_unpaid(),
            // "insert_bill" => $qrbill->insert_bill($id_student, $id_sourse, $ngay, $total, $tinhtrang),
            "bill_stinclass" => $qrbill->bill_stinclass($id_class),
            "show_bill_full" => $qrbill->st_bill_sale_sourse(),
            "showstudent" => $qrstudent->showstudent(),
            "ShowCourseDetail" => $qrsourse->ShowCourseDetail(),
            "ShowCourseDetail_1" => $qrsourse->ShowCourseDetail(),
            "courseDetail" => $qrsourse->courseDetail(),
            "groupBy_class_AD_AC_tal" => $qrbill->groupBy_class_AD_AC(),
            "groupBy_class_AD_AC" => $qrbill->groupBy_class_AD_AC(),

        ]);
    }
    public function bill_classActive($id_class)
    { // $read = new exportExcel()
        $qrbill = $this->model("billModel");
        $qrsourse = $this->model("courseModel");
        // $read ->getExcelPHP();
        $this->view("masterAdminLayout", [
            "pages" => "page/bill_classActive",
            "st_bill_paid" => $qrbill->st_bill_paid_AD($id_class),
            "st_for_bill_unpaid" => $qrbill->st_bill_unpaid_AD($id_class),
            "ShowCourseDetail" => $qrsourse->ShowCourseDetail(),
            "courseDetail" => $qrsourse->courseDetail(),
            "bill_statement_getYear" => $qrbill->bill_statement_getYear(),
            "bill_stinclass_test" => $qrbill->bill_stinclass_test(),
            "billMonthYear_statement_showpaid" => $qrbill->billMonthYear_statement_showPaid(),
            "billMonthYear_statement_showUnpaid" => $qrbill->billMonthYear_statement_showUnPaid(),
            "ShowCourseDetail_1" => $qrsourse->ShowCourseDetail(),
            "bill_stinclass_groupBy" => $qrbill->bill_stinclass_groupBy($id_class),
            "st_bill_ALLsum_AD"  => $qrbill->st_bill_ALLsum_AD($id_class),
            "st_bill_sum_unpaid_AD"  => $qrbill->st_bill_sum_unpaid_AD($id_class),
        ]);
    }
    // public function test()
    // {
    //     // $qrsourse = $this->model("courseModel");
    //     // $qrstudent = $this->model("studentModel");
    //     $qrbill = $this->model("billModel");
    //     $showclass = $qrbill->getclass_id();
    //     // $i = 1 ;
    //     // while ($data_class = mysqli_fetch_assoc($showclass)) {
    //     //     $i++ ;
    //     //     $id_class = $data_class["id_class"];
    //     //     echo $id_class ;
    //     // }
    //     $this->view("test", [
    //         // "pages" => "page/bill_list",
    //         "getclass_id" => $qrbill->getclass_id(),
    //         "bill_stinclass_test" => $qrbill->bill_stinclass_test(),
    //     ]);
    // }

    //---------------------- Bill page for accountant-------------
    public function viewAllClass_AC()
    {
        $qrsourse = $this->model("courseModel");
        $qrstudent = $this->model("studentModel");
        $qrbill = $this->model("billModel");
        $showclass = $qrbill->getclass_id();
        while ($data_class = mysqli_fetch_assoc($showclass)) {
            $id_class = $data_class["id_class"];
        }
        $this->view("masterAccountantLayout", [
            "pageaccountant" => "pageAccountant/bill_viewALL",
            "bill_all" => $qrbill->bill_all(),
            "st_for_bill_paid" => $qrbill->st_bill_paid(),
            "st_for_bill_unpaid" => $qrbill->st_bill_unpaid(),
            // "insert_bill" => $qrbill->insert_bill($id_student, $id_sourse, $ngay, $total, $tinhtrang),
            "bill_stinclass" => $qrbill->bill_stinclass($id_class),
            "show_bill_full" => $qrbill->st_bill_sale_sourse(),
            "showstudent" => $qrstudent->showstudent(),
            "ShowCourseDetail" => $qrsourse->ShowCourseDetail(),
            "ShowCourseDetail_1" => $qrsourse->ShowCourseDetail(),
            "courseDetail" => $qrsourse->courseDetail(),
            "groupBy_class_AD_AC_tal" => $qrbill->groupBy_class_AD_AC(),
            "groupBy_class_AD_AC" => $qrbill->groupBy_class_AD_AC(),
        ]);
    }
    public function bill_classActive_AC($id_class)
    { // $read = new exportExcel()
        $qrbill = $this->model("billModel");
        $qrsourse = $this->model("courseModel");
        // $read ->getExcelPHP();
        $this->view("masterAccountantLayout", [
            "pageaccountant" => "pageAccountant/bill_classActive",
            "st_bill_paid" => $qrbill->st_bill_paid_AD($id_class),
            "st_for_bill_unpaid" => $qrbill->st_bill_unpaid_AD($id_class),
            "ShowCourseDetail" => $qrsourse->ShowCourseDetail(),
            "courseDetail" => $qrsourse->courseDetail(),
            "bill_statement_getYear" => $qrbill->bill_statement_getYear(),
            "bill_stinclass_test" => $qrbill->bill_stinclass_test(),
            "billMonthYear_statement_showpaid" => $qrbill->billMonthYear_statement_showPaid(),
            "billMonthYear_statement_showUnpaid" => $qrbill->billMonthYear_statement_showUnPaid(),
            "ShowCourseDetail_1" => $qrsourse->ShowCourseDetail(),
            "bill_stinclass_groupBy" => $qrbill->bill_stinclass_groupBy($id_class),
            "st_bill_ALLsum_AD"  => $qrbill->st_bill_ALLsum_AD($id_class),
            "st_bill_sum_unpaid_AD"  => $qrbill->st_bill_sum_unpaid_AD($id_class),
        ]);
    }
    public function billPage()
    {
        $qrsourse = $this->model("courseModel");
        $qrstudent = $this->model("studentModel");
        $qrbill = $this->model("billModel");
        $this->view("masterAccountantLayout", [
            "pageaccountant" => "pageAccountant/bill_list",
            "bill_all" => $qrbill->bill_all(),
            "st_for_bill_paid" => $qrbill->st_bill_paid(),
            "st_for_bill_unpaid" => $qrbill->st_bill_unpaid(),
            // "insert_bill" => $qrbill->insert_bill($id_student, $id_sourse, $ngay, $total, $tinhtrang),
            "show_bill_full" => $qrbill->st_bill_sale_sourse(),
            "showstudent" => $qrstudent->showstudent(),
            "ShowCourseDetail" => $qrsourse->ShowCourseDetail(),
            "ShowCourseDetail_1" => $qrsourse->ShowCourseDetail(),
            "courseDetail" => $qrsourse->courseDetail(),
        ]);
    }
    public function createBill_register()
    {
        $result_mess = false;
        if (isset($_POST["submit_add"])) {
            $id_student = isset($_POST['id_student']) ? $_POST['id_student'] : '';
            $id_course = isset($_POST['id_course']) ? $_POST['id_course'] : '';
            // $id_sale = $_POST['id_sale'];
            // $lydo = isset($_POST['lydo']) ? $_POST['lydo'] : null;
            $ngay = isset($_POST['ngay']) ? $_POST['ngay'] : null;
            $total  = isset($_POST['total']) ? $_POST['total'] : '';
            $tinhtrang  = isset($_POST['tinhtrang']) ? $_POST['tinhtrang'] : '';
            $qrbill = $this->model("billModel");
            $qrsourse = $this->model("courseModel");
            $qrstudent = $this->model("studentModel");
            if (empty($_POST["id_student"] && $_POST["id_course"] && $_POST["ngay"] && $_POST["total"] && $_POST["tinhtrang"])) {
                $this->view("masterAccountantLayout", [
                    "pageaccountant" => "pageAccountant/bill_list",
                    "bill_all" => $qrbill->bill_all(),
                    "st_for_bill_paid" => $qrbill->st_bill_paid(),
                    "st_for_bill_unpaid" => $qrbill->st_bill_unpaid(),
                    "insert_bill" => $qrbill->insert_bill($id_student, $id_course, $ngay, $total, $tinhtrang),
                    "show_bill_full" => $qrbill->st_bill_sale_sourse(),
                    "showstudent" => $qrstudent->showstudent(),
                    "ShowCourseDetail" => $qrsourse->ShowCourseDetail(),
                    "courseDetail" => $qrsourse->courseDetail(),
                    "resultCreate_bill" => $result_mess

                ]);
            }
            $this->view("masterAccountantLayout", [
                "pageaccountant" => "pageAccountant/bill_list",
                "bill_all" => $qrbill->bill_all(),
                "st_for_bill_paid" => $qrbill->st_bill_paid(),
                "st_for_bill_unpaid" => $qrbill->st_bill_unpaid(),
                "resultCreate_bill" => $qrbill->insert_bill($id_student, $id_course, $ngay, $total, $tinhtrang),
                "show_bill_full" => $qrbill->st_bill_sale_sourse(),
                "showstudent" => $qrstudent->showstudent(),
                "ShowCourseDetail" => $qrsourse->ShowCourseDetail(),
                "courseDetail" => $qrsourse->courseDetail(),

            ]);
        } else {
            $qrbill = $this->model("billModel");
            $qrsourse = $this->model("courseModel");
            $qrstudent = $this->model("studentModel");
            $this->view("masterAccountantLayout", [
                "pageaccountant" => "pageAccountant/bill_list",
                "bill_all" => $qrbill->bill_all(),
                "st_for_bill_paid" => $qrbill->st_bill_paid(),
                "st_for_bill_unpaid" => $qrbill->st_bill_unpaid(),
                "show_bill_full" => $qrbill->st_bill_sale_sourse(),
                "courseDetail" => $qrsourse->courseDetail(),
                "showstudent" => $qrstudent->showstudent(),
                "ShowCourseDetail" => $qrsourse->ShowCourseDetail(),
                // "insert_bill" => $qrbill->insert_bill($id_student, $id_sourse, $id_sale, $lydo, $ngay, $total)
            ]);
        }
    }
    public function student_resgiter()
    {
        $result_mess = false;
        // if isset tổn tại biến post['submit_add_test'] thì thực thi không thì trả về view nguyên thủy
        if (isset($_POST["submit_add_test"])) {
            $id_student = isset($_POST['id_student']) ? $_POST['id_student'] : '';
            $id_course = isset($_POST['id_course']) ? $_POST['id_course'] : '';
            // $id_sale = $_POST['id_sale'];
            // $lydo = isset($_POST['lydo']) ? $_POST['lydo'] : null;
            // $ngay = null;
            // $total  = null;
            $tinhtrang  = isset($_POST['tinhtrang']) ? $_POST['tinhtrang'] : null;
            $qrbill = $this->model("billModel");
            $qrsourse = $this->model("courseModel");
            $qrstudent = $this->model("studentModel");
            // empty kiểm tra rỗng
            if (empty($_POST["id_student"] && $_POST["id_course"] && $_POST["tinhtrang"])) {
                $this->view("masterAdminLayout", [
                    "pages" => "page/bill_list",
                    "bill_all" => $qrbill->bill_all(),
                    "st_for_bill" => $qrbill->st_bill(),
                    "st_for_bill_paid" => $qrbill->st_bill_paid(),
                    "st_for_bill_unpaid" => $qrbill->st_bill_unpaid(),
                    // "insert_bill" => $qrbill->insert_bill($id_student, $id_sourse, $ngay, $total, $tinhtrang),
                    "show_bill_full" => $qrbill->st_bill_sale_sourse(),
                    "showstudent" => $qrstudent->showstudent(),
                    "ShowCourseDetail" => $qrsourse->ShowCourseDetail(),
                    "ShowCourseDetail_1" => $qrsourse->ShowCourseDetail(),
                    "courseDetail" => $qrsourse->courseDetail(),
                    "resultCreate_bill" => $result_mess

                ]);
            }
            $this->view("masterAdminLayout", [
                "pages" => "page/bill_list",
                "bill_all" => $qrbill->bill_all(),
                // "st_for_bill" => $qrbill->st_bill(),
                "st_for_bill_paid" => $qrbill->st_bill_paid(),
                "st_for_bill_unpaid" => $qrbill->st_bill_unpaid(),
                "resultCreate_bill" => $qrbill->insert_bill_test($id_student, $id_course, $tinhtrang),
                "show_bill_full" => $qrbill->st_bill_sale_sourse(),
                "showstudent" => $qrstudent->showstudent(),
                "ShowCourseDetail" => $qrsourse->ShowCourseDetail(),


                "courseDetail" => $qrsourse->courseDetail(),

            ]);
        } else {
            $qrbill = $this->model("billModel");
            $qrsourse = $this->model("courseModel");
            $qrstudent = $this->model("studentModel");
            $this->view("masterAdminLayout", [
                "pages" => "page/bill_list",
                "bill_all" => $qrbill->bill_all(),
                // "st_for_bill" => $qrbill->st_bill(),
                "st_for_bill_paid" => $qrbill->st_bill_paid(),
                "st_for_bill_unpaid" => $qrbill->st_bill_unpaid(),
                "show_bill_full" => $qrbill->st_bill_sale_sourse(),
                "courseDetail" => $qrsourse->courseDetail(),
                "showstudent" => $qrstudent->showstudent(),

                "ShowCourseDetail" => $qrsourse->ShowCourseDetail(),
                // "insert_bill" => $qrbill->insert_bill($id_student, $id_sourse, $id_sale, $lydo, $ngay, $total)
            ]);
        }
    }
    public function createBill()
    {
        $result_mess = false;
        // if isset tổn tại biến post['submit_add_test'] thì thực thi không thì trả về view nguyên thủy
        if (isset($_POST["submit_add_test"])) {
            $id_student = isset($_POST['id_student']) ? $_POST['id_student'] : '';
            $id_course = isset($_POST['id_course']) ? $_POST['id_course'] : '';
            // $id_sale = $_POST['id_sale'];
            // $lydo = isset($_POST['lydo']) ? $_POST['lydo'] : null;
            // $ngay = null;
            // $total  = null;
            $tinhtrang  = isset($_POST['tinhtrang']) ? $_POST['tinhtrang'] : null;
            $qrbill = $this->model("billModel");
            $qrsourse = $this->model("courseModel");
            $qrstudent = $this->model("studentModel");
            // empty kiểm tra rỗng
            if (empty($_POST["id_student"] && $_POST["id_course"] && $_POST["tinhtrang"])) {
                $this->view("masterAccountantLayout", [
                    "pageaccountant" => "pageAccountant/bill_list",
                    "bill_all" => $qrbill->bill_all(),
                    "st_for_bill" => $qrbill->st_bill(),
                    "st_for_bill_paid" => $qrbill->st_bill_paid(),
                    "st_for_bill_unpaid" => $qrbill->st_bill_unpaid(),
                    // "insert_bill" => $qrbill->insert_bill($id_student, $id_sourse, $ngay, $total, $tinhtrang),
                    "show_bill_full" => $qrbill->st_bill_sale_sourse(),
                    "showstudent" => $qrstudent->showstudent(),
                    "ShowCourseDetail" => $qrsourse->ShowCourseDetail(),
                    "ShowCourseDetail_1" => $qrsourse->ShowCourseDetail(),
                    "courseDetail" => $qrsourse->courseDetail(),
                    "resultCreate_bill" => $result_mess

                ]);
            }
            $this->view("masterAccountantLayout", [
                "pageaccountant" => "pageAccountant/bill_list",
                "bill_all" => $qrbill->bill_all(),
                // "st_for_bill" => $qrbill->st_bill(),
                "st_for_bill_paid" => $qrbill->st_bill_paid(),
                "st_for_bill_unpaid" => $qrbill->st_bill_unpaid(),
                "resultCreate_bill" => $qrbill->insert_bill_test($id_student, $id_course, $tinhtrang),
                "show_bill_full" => $qrbill->st_bill_sale_sourse(),
                "showstudent" => $qrstudent->showstudent(),
                "ShowCourseDetail" => $qrsourse->ShowCourseDetail(),


                "courseDetail" => $qrsourse->courseDetail(),

            ]);
        } else {
            $qrbill = $this->model("billModel");
            $qrsourse = $this->model("courseModel");
            $qrstudent = $this->model("studentModel");
            $this->view("masterAccountantLayout", [
                "pageaccountant" => "pageAccountant/bill_list",
                "bill_all" => $qrbill->bill_all(),
                // "st_for_bill" => $qrbill->st_bill(),
                "st_for_bill_paid" => $qrbill->st_bill_paid(),
                "st_for_bill_unpaid" => $qrbill->st_bill_unpaid(),
                "show_bill_full" => $qrbill->st_bill_sale_sourse(),
                "courseDetail" => $qrsourse->courseDetail(),
                "showstudent" => $qrstudent->showstudent(),

                "ShowCourseDetail" => $qrsourse->ShowCourseDetail(),
                // "insert_bill" => $qrbill->insert_bill($id_student, $id_sourse, $id_sale, $lydo, $ngay, $total)
            ]);
        }
    }

    public function allbill_edit($id_bill)
    {
        $qrbill = $this->model("billModel");
        $qrsourse = $this->model("courseModel");
        $qrstudent = $this->model("studentModel");
        $this->view("masterAccountantLayout", [
            "pageaccountant" => "pageAccountant/bill_page_create",
            "editGetid_Bill" => $qrbill->editGetid_Bill($id_bill),
            "st_bill_paid" => $qrbill->st_bill_paid(),
            "bill_all" => $qrbill->bill_all(),
            "show_bill_full" => $qrbill->st_bill_sale_sourse(),
            "showstudent" => $qrstudent->showstudent(),
            "ShowCourseDetail" => $qrsourse->ShowCourseDetail(),
            "courseDetail" => $qrsourse->courseDetail(),
        ]);
    }
    public function allbill_view($id_bill)
    {
        $qrbill = $this->model("billModel");
        $qrsourse = $this->model("courseModel");
        $qrstudent = $this->model("studentModel");
        $this->view("masterAccountantLayout", [
            "pageaccountant" => "pageAccountant/bill_page_detail",
            "editGetid_Bill" => $qrbill->editGetid_Bill($id_bill),
            "st_bill_paid" => $qrbill->st_bill_paid($id_bill),
            "bill_all" => $qrbill->bill_all(),
            "show_bill_full" => $qrbill->st_bill_sale_sourse(),
            "showstudent" => $qrstudent->showstudent(),
            "ShowCourseDetail" => $qrsourse->ShowCourseDetail(),
            "courseDetail" => $qrsourse->courseDetail(),
        ]);
    }
    // Sửa 
    public function allbill_update($id_bill)
    {
        $result_mess = false;
        $qrbill = $this->model("billModel");
        $qrsourse = $this->model("courseModel");
        // $qrstudent = $this->model("studentModel");
        if (isset($_POST['edit_bill'])) {
            if (empty($_POST["ngay"] && $_POST["total"] && $_POST["tinhtrang"])) {
                $this->view("masterAccountantLayout", [
                    "pageaccountant" => "pageAccountant/bill_page_create",
                    "bill_all" => $qrbill->bill_all(),
                    "st_bill_paid" => $qrbill->st_bill_paid($id_bill),
                    "show_bill_full" => $qrbill->st_bill_sale_sourse(),
                    // "showstudent" => $qrstudent->showstudent(),
                    "ShowCourseDetail" => $qrsourse->ShowCourseDetail(),
                    "courseDetail" => $qrsourse->courseDetail(),
                    "update_bill" => $result_mess
                ]);
            } else {
                $ngay = isset($_POST['ngay']) ? $_POST['ngay'] : null;
                $total  = isset($_POST['total']) ? $_POST['total'] : null;
                $tinhtrang  = isset($_POST['tinhtrang']) ? $_POST['tinhtrang'] : null;
                // $qrstudent = $this->model("studentModel");
                $this->view("masterAccountantLayout", [
                    "pageaccountant" => "pageAccountant/bill_page_create",
                    "bill_all" => $qrbill->bill_all(),
                    "editGetid_Bill" => $qrbill->editGetid_Bill($id_bill),
                    "update_bill" => $qrbill->update_bill($id_bill, $ngay, $total, $tinhtrang),
                    "show_bill_full" => $qrbill->st_bill_sale_sourse(),
                    // "showstudent" => $qrstudent->showstudent(),
                    "ShowCourseDetail" => $qrsourse->ShowCourseDetail(),
                    "courseDetail" => $qrsourse->courseDetail(),
                    "update_bill" => $result_mess

                ]);
            }
        }
    }
    public function bill_delete($id_bill)
    {
        $result_mess = false;
        $qrbill = $this->model("billModel");
        $qrsourse = $this->model("courseModel");
        $qrstudent = $this->model("studentModel");
        $this->view("masterAccountantLayout", [
            "pageaccountant" => "pageAccountant/bill_list",
            "bill_all" => $qrbill->bill_all(),
            "st_for_bill_paid" => $qrbill->st_bill_paid(),
            "st_for_bill_unpaid" => $qrbill->st_bill_unpaid(),
            // "insert_bill" => $qrbill->insert_bill($id_student, $id_sourse, $ngay, $total, $tinhtrang),
            "show_bill_full" => $qrbill->st_bill_sale_sourse(),
            "showstudent" => $qrstudent->showstudent(),
            "ShowCourseDetail" => $qrsourse->ShowCourseDetail(),
            "ShowCourseDetail_1" => $qrsourse->ShowCourseDetail(),
            "courseDetail" => $qrsourse->courseDetail(),
            "detete_bill" => $qrbill->detete_bill($id_bill)

        ]);
    }
    public function bill_page_detail()
    {

        $qrbill = $this->model("billModel");

        $this->view("masterAccountantLayout", [
            "pageaccountant" => "pageAccountant/bill_page_detail",


        ]);
    }
    public function bill_statement()
    {
        //data model 
        $qrbill = $this->model("billModel");
        $qrsourse = $this->model("courseModel");
        $qrstudent = $this->model("studentModel");
        // output view
        $month = isset($_POST['month']) ? $_POST['month'] : null;
        $year  = isset($_POST['year']) ? $_POST['year'] : null;
        $tinhtrang  = isset($_POST['tinhtrang']) ? $_POST['tinhtrang'] : null;
        $this->view("masterAccountantLayout", [
            "pageaccountant" => "pageAccountant/bill_statement",
            "st_bill_paid" => $qrbill->st_bill_paid(),
            "bill_all" => $qrbill->bill_all(),
            "show_bill_full" => $qrbill->st_bill_sale_sourse(),
            "showstudent" => $qrstudent->showstudent(),
            "ShowCourseDetail" => $qrsourse->ShowCourseDetail(),
            "courseDetail" => $qrsourse->courseDetail(),
            "bill_statement_getYear" => $qrbill->bill_statement_getYear(),
            "billMonthYear_statement" => $qrbill->billMonthYear_statement($month, $year, $tinhtrang),
            // "billMonthYear_statement" => $qrbill->billMonthYear_statement($month, $year, $tinhtrang),
            "billMonthYear_statement_showpaid" => $qrbill->billMonthYear_statement_showPaid(),
            "billMonthYear_statement_showUnpaid" => $qrbill->billMonthYear_statement_showUnPaid(),
        ]);
    }
    public function bill_statement_getPara()
    {
        if (isset($_POST["submit_search"])) {
            //data model
            $qrbill = $this->model("billModel");
            $qrsourse = $this->model("courseModel");
            $qrstudent = $this->model("studentModel");
            // output view
            $month = isset($_POST['month']) ? $_POST['month'] : null;
            $year  = isset($_POST['year']) ? $_POST['year'] : null;
            $tinhtrang  = isset($_POST['tinhtrang']) ? $_POST['tinhtrang'] : null;
            if (empty($_POST["month"] && $_POST["year"] && $_POST["tinhtrang"])) {
                $this->view("masterAccountantLayout", [
                    "pageaccountant" => "pageAccountant/bill_statement",
                    "st_bill_paid" => $qrbill->st_bill_paid(),
                    "bill_all" => $qrbill->bill_all(),
                    "show_bill_full" => $qrbill->st_bill_sale_sourse(),
                    "showstudent" => $qrstudent->showstudent(),
                    "ShowCourseDetail" => $qrsourse->ShowCourseDetail(),
                    "courseDetail" => $qrsourse->courseDetail(),
                    "billMonthYear_statement" => $qrbill->billMonthYear_statement($month, $year, $tinhtrang),
                    "bill_statement_getYear" => $qrbill->bill_statement_getYear(),
                    // "billMonthYear_statement" => $qrbill->billMonthYear_statement($month, $year, $tinhtrang),
                    "billMonthYear_statement_showpaid" => $qrbill->billMonthYear_statement_showPaid(),
                    "billMonthYear_statement_showUnpaid" => $qrbill->billMonthYear_statement_showUnPaid(),
                ]);
            } else {
                $this->view("masterAccountantLayout", [
                    "pageaccountant" => "pageAccountant/bill_statement",
                    "st_bill_paid" => $qrbill->st_bill_paid(),
                    "bill_all" => $qrbill->bill_all(),
                    "show_bill_full" => $qrbill->st_bill_sale_sourse(),
                    "showstudent" => $qrstudent->showstudent(),
                    "ShowCourseDetail" => $qrsourse->ShowCourseDetail(),
                    "courseDetail" => $qrsourse->courseDetail(),
                    "billMonthYear_statement" => $qrbill->billMonthYear_statement($month, $year, $tinhtrang),
                    "bill_statement_getYear" => $qrbill->bill_statement_getYear(),
                    // "billMonthYear_statement" => $qrbill->billMonthYear_statement($month, $year, $tinhtrang),
                    "billMonthYear_statement_showpaid" => $qrbill->billMonthYear_statement_showPaid(),
                    "billMonthYear_statement_showUnpaid" => $qrbill->billMonthYear_statement_showUnPaid(),
                ]);
            }
        }
    }
    //test
    public function bill_statement_getPara_test()
    {
        if (isset($_POST["submit_search"])) {
            //data model
            $qrbill = $this->model("billModel");
            $qrsourse = $this->model("courseModel");
            $qrstudent = $this->model("studentModel");
            // output view
            $month = isset($_POST['month']) ? $_POST['month'] : null;
            $year  = isset($_POST['year']) ? $_POST['year'] : null;
            $tinhtrang  = isset($_POST['tinhtrang']) ? $_POST['tinhtrang'] : null;
            if (empty($_POST["month"] && $_POST["year"] && $_POST["tinhtrang"])) {
                $this->view("masterAccountantLayout", [
                    "pageaccountant" => "pageAccountant/bill_statement",
                    "st_bill_paid" => $qrbill->st_bill_paid(),
                    "bill_all" => $qrbill->bill_all(),
                    "show_bill_full" => $qrbill->st_bill_sale_sourse(),
                    "showstudent" => $qrstudent->showstudent(),
                    "ShowCourseDetail" => $qrsourse->ShowCourseDetail(),
                    "courseDetail" => $qrsourse->courseDetail(),
                    // "billMonthYear_statement" => $qrbill->billMonthYear_statement($month, $year, $tinhtrang),
                    "bill_statement_getYear" => $qrbill->bill_statement_getYear(),
                    // "billMonthYear_statement" => $qrbill->billMonthYear_statement($month, $year, $tinhtrang),
                    "billMonthYear_statement_showpaid" => $qrbill->billMonthYear_statement_showPaid(),
                    "billMonthYear_statement_showUnpaid" => $qrbill->billMonthYear_statement_showUnPaid(),
                ]);
            } else {
                $this->view("masterAccountantLayout", [
                    "pageaccountant" => "pageAccountant/bill_statement",
                    "st_bill_paid" => $qrbill->st_bill_paid(),
                    "bill_all" => $qrbill->bill_all(),
                    "show_bill_full" => $qrbill->st_bill_sale_sourse(),
                    "showstudent" => $qrstudent->showstudent(),
                    "ShowCourseDetail" => $qrsourse->ShowCourseDetail(),
                    "courseDetail" => $qrsourse->courseDetail(),
                    "billMonthYear_statement" => $qrbill->billMonthYear_statement($month, $year, $tinhtrang),
                    "bill_statement_getYear" => $qrbill->bill_statement_getYear(),
                    // "billMonthYear_statement" => $qrbill->billMonthYear_statement($month, $year, $tinhtrang),
                    "billMonthYear_statement_showpaid" => $qrbill->billMonthYear_statement_showPaid(),
                    "billMonthYear_statement_showUnpaid" => $qrbill->billMonthYear_statement_showUnPaid(),
                ]);
            }
        }
    }
}