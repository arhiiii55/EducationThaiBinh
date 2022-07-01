<?php
require_once './PHPExcel/Classes/PHPExcel.php';
// include './mvc/admin/core/db.php';
// include './mvc/admin/models/billModel.php';

// $con = new Controllers;
// include './mvc/admin/core/Controller.php';
// require "./mvc/admin/views/" ;
// require_once './mvc/admin/views/PHPExcel/Classes/PHPExcel.php';
// class exportExcel extends Controllers
// {
//     public function getExcelPHP()
//     {
// $qrbill = $this->model("billModel");
// $qrsourse = $this->model("courseModel");
// $result = $qrbill->setDataExcel($id_class, $ten_lop);

// $objExcel = new PHPExcel;
// $objExcel->setActiveSheetIndex(0);
// $sheet = $objExcel->getActiveSheet()->setTitle('ABC');

// $rowCount =  1;
// $sheet->setCellValue('A' . $rowCount, 'Mã HĐ');
// $sheet->setCellValue('B' . $rowCount, 'Mã Khóa Học');
// $sheet->setCellValue('C' . $rowCount, 'Mã Học Viên');
// $sheet->setCellValue('D' . $rowCount, 'Tên Học Viên');
// $sheet->setCellValue('E' . $rowCount, 'Số Điện Thoại');
// $sheet->setCellValue('F' . $rowCount, 'Gmail');
// $sheet->setCellValue('G' . $rowCount, 'Ngày Thanh Toán');
// $sheet->setCellValue('H' . $rowCount, 'Số Tiền');
// $sheet->setCellValue('I' . $rowCount, 'Tình Trạng');




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

// // $objExcel = PHPExcel_IOFactory::createWriter($objExcel, 'Excel2007');
// $objWriter   = new PHPExcel_Writer_Excel2007($objExcel);
// $filename = "testExcelPHP.xlsx";
// $objWriter->save($filename);
// // $filename = "downloaded.pdf";
// // header('Content-Type: text/html; charset=utf-8');
// header('Content-Disposition: attachment;filename="' . $filename . '"');
// // header('Content-Disposition: attachment;filename= "filedownloaded.pdf"');
// // header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
// header("Content-Type:   application/vnd.ms-excel; charset=utf-8");
// header('Content-Length: ' . filesize($filename));
// header('Content-Transfer-Encoding: binary');
// header('Cache-Control: must-revalidate');
// // header('Cache-Control: max-age=0');
// header('Pragma: no-cache');
// readfile($filename);
// return;
// $qr = $this->model("billModel");
if (isset($_POST['submit_Export_x'])) {
    // $id_class = '11';
    // $ten_lop = 'VCT_L1';

    // $anh = $result->setDataExcel($id_class, $ten_lop);

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

    // while ($row = mysqli_fetch_array($anh)) {
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

    $objWriter   = new PHPExcel_Writer_Excel2007($objExcel);
    $filename = "testExcelPHP.xlsx";
    $objWriter->save($filename);

    header('Content-Disposition: attachment;filename="' . $filename . '"');
    header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
    header('Content-Length: ' . filesize($filename));
    header('Content-Transfer-Encoding: binary');
    header('Cache-Control: must-revalidate');
    header('Pragma: no-cache');
    readfile($filename);
    return;
}
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <button name="submit_Export_x" type="submit">Xuất file Excel</button>
    </form>
</body>

</html>