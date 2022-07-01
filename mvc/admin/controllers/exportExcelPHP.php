<?php
require_once './mvc/admin/views/exportExcel.php';
// require_once './mvc/admin/views/PHPExcel/Classes/PHPExcel.php';
class exportExcelPHP extends Controllers
{
    //----------------------Bill page for admin--------------
    public function exportExcel()
    {
        // $read = new exportExcel();
        // $qrbill = $this->model("billModel");
        // $qrsourse = $this->model("courseModel");
        // $read->getExcelPHP();
        $this->view("exportExcel", [

            // "success" => $read
        ]);
    }
}