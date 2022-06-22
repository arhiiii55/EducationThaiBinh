<?php
require_once('./mvc/admin/views/PHPExcel/Classes/PHPExcel.php');
// require_once('./mvc/admin/views/PHPExcel/Classes/PHPExcel/IOFactory.php');
class exportExcel 
{
    public function getExcelPHP($id_class, $ten_lop)
    {
        if (isset($_POST["submit_Export"])) {
            // $qrbill = $this->model("billModel");
            // $qrsourse = $this->model("courseModel");
            // $result = $qrbill->setDataExcel($id_class, $ten_lop);

            $objExcel = new PHPExcel;
            $objExcel->setActiveSheetIndex(0);
            $sheet = $objExcel->getActiveSheet()->setTitle('ABC');

            $rowCount =  1;
            $sheet->setCellValue('A' . $rowCount, 'Mã HĐ');
            $sheet->setCellValue('B' . $rowCount, 'Mã Khóa Học');
            $sheet->setCellValue('C' . $rowCount, 'Mã Học Viên');
            $sheet->setCellValue('D' . $rowCount, 'Tên Học Viên');
            $sheet->setCellValue('E' . $rowCount, 'Số Điện Thoại');
            $sheet->setCellValue('F' . $rowCount, 'Gmail');
            $sheet->setCellValue('G' . $rowCount, 'Ngày Thanh Toán');
            $sheet->setCellValue('H' . $rowCount, 'Số Tiền');
            $sheet->setCellValue('I' . $rowCount, 'Tình Trạng');



            // while ($row = mysqli_fetch_array($result)) {
            //     $rowCount++;
            //     // print_r($row);
            //     $sheet->setCellValue('A' . $rowCount, $row["id_bill"]);
            //     $sheet->setCellValue('B' . $rowCount, $row["MaHV"]);
            //     $sheet->setCellValue('C' . $rowCount, $row["tenhv"]);
            //     $sheet->setCellValue('D' . $rowCount, $row["sdt"]);
            //     $sheet->setCellValue('E' . $rowCount, $row["gmail"]);
            //     $sheet->setCellValue('F' . $rowCount, $row["ma_KH"]);
            //     $sheet->setCellValue('G' . $rowCount, $row["ngaylap_hd"]);
            //     $sheet->setCellValue('H' . $rowCount, $row["total"]);
            //     $sheet->setCellValue('I' . $rowCount, $row["tinhtrang"]);
            // }

            // $objExcel = PHPExcel_IOFactory::createWriter($objExcel, 'Excel2007');
            $objWriter   = new PHPExcel_Writer_Excel2007($objExcel);
            $filename = "testExcelPHP.xlsx";
            $objWriter->save($filename);
            // $filename = "downloaded.pdf";
            // header('Content-Type: text/html; charset=utf-8');
            header('Content-Disposition: attachment;filename="' . $filename . '"');
            // header('Content-Disposition: attachment;filename= "filedownloaded.pdf"');
            // header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
            header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
            header('Content-Length: ' . filesize($filename));
            header('Content-Transfer-Encoding: binary');
            header('Cache-Control: must-revalidate');
            // header('Cache-Control: max-age=0');
            header('Pragma: no-cache');
           
           

            return;
            // header("Content-Type: application/pdf");

            // readfile($filename);

            // We'll be outputting a PDF
            // header('Content-Type: application/pdf');

            // // It will be called downloaded.pdf
            // header('Content-Disposition: attachment; filename="downloaded.pdf"');

            // // The PDF source is in original.pdf
            // readfile('original.pdf');



            // $this->view("masterAdminLayout", [
            //     "pages" => "page/bill_classActive",
            //     "st_bill_paid" => $qrbill->st_bill_paid_AD($id_class),
            //     "st_for_bill_unpaid" => $qrbill->st_bill_unpaid_AD($id_class),
            //     "ShowCourseDetail" => $qrsourse->ShowCourseDetail(),
            //     "courseDetail" => $qrsourse->courseDetail(),
            //     "bill_statement_getYear" => $qrbill->bill_statement_getYear(),
            //     "bill_stinclass_test" => $qrbill->bill_stinclass_test(),
            //     "billMonthYear_statement_showpaid" => $qrbill->billMonthYear_statement_showPaid(),
            //     "billMonthYear_statement_showUnpaid" => $qrbill->billMonthYear_statement_showUnPaid(),
            //     "ShowCourseDetail_1" => $qrsourse->ShowCourseDetail(),
            //     "bill_stinclass_groupBy" => $qrbill->bill_stinclass_groupBy($id_class),
            //     "st_bill_ALLsum_AD"  => $qrbill->st_bill_ALLsum_AD($id_class),
            //     "st_bill_sum_unpaid_AD"  => $qrbill->st_bill_sum_unpaid_AD($id_class),
            // ]);
        }
        // $this->view("test", []);
    }
}