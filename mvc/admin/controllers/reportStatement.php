<?php

class reportStatement extends Controllers
{
    public function reportView()
    {
        $qrbill = $this->model("billModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/report_Statement",
            "bill_all" => $qrbill->bill_all(),
            // "st_for_bill" => $qrbill->st_bill(),
            "st_for_bill_paid" => $qrbill->st_bill_paid(),
            "st_for_bill_unpaid" => $qrbill->st_bill_unpaid(),
            // "resultCreate_bill" => $qrbill->insert_bill_test($id_student, $id_course, $tinhtrang),
            "show_bill_full" => $qrbill->st_bill_sale_sourse(),
            "bill_statement_getYear" => $qrbill->bill_statement_getYear(),
            // "showstudent" => $qrstudent->showstudent(),
            // "ShowCourseDetail" => $qrsourse->ShowCourseDetail(),
            // "courseDetail" => $qrsourse->courseDetail(),
        ]);
    }
    public function reportView_detail($year)
    {
        $qrbill = $this->model("billModel");
        $this->view("masterAdminLayout", [
            "pages" => "page/report_Statement_detail",
            "bill_all" => $qrbill->bill_all(),
            // "st_for_bill" => $qrbill->st_bill(),
            "st_for_bill_paid" => $qrbill->st_bill_paid(),
            "st_for_bill_unpaid" => $qrbill->st_bill_unpaid(),
            // "resultCreate_bill" => $qrbill->insert_bill_test($id_student, $id_course, $tinhtrang),
            "show_bill_full" => $qrbill->st_bill_sale_sourse(),
            "bill_statement_getYear" => $qrbill->bill_statement_getYear(),
            "report_Statement_sum" => $qrbill->report_Statement_sum($year),
            "report_Statement_sumUnpaid" => $qrbill->report_Statement_sumUnpaid($year),
            "report_Statement_sumTotal" => $qrbill->report_Statement_sumTotal($year),
            // "showstudent" => $qrstudent->showstudent(),
            // "ShowCourseDetail" => $qrsourse->ShowCourseDetail(),
            // "courseDetail" => $qrsourse->courseDetail(),
        ]);
    }
}