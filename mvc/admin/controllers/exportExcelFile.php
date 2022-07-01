<?php
require "PHPExcel/Classes/PHPExcel.php";
require "connect/db_connect.php";
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$url_components = parse_url($url);
parse_str($url_components['query'], $params);
$id_class = $params['idClass'];
$ten_lop = $params['tenLop'];

$objExcel = new PHPExcel;
$objExcel->setActiveSheetIndex(0);
$sheet = $objExcel->getActiveSheet()->setTitle($ten_lop);

$rowCount =  1;

$sheet->setCellValue('A' . $rowCount, 'Mã HĐ');
$sheet->setCellValue('B' . $rowCount, 'Mã Học Viên');
$sheet->setCellValue('C' . $rowCount, 'Tên Học Viên');
$sheet->setCellValue('D' . $rowCount, 'Số Điện Thoại');
$sheet->setCellValue('E' . $rowCount, 'Gmail');
$sheet->setCellValue('F' . $rowCount, 'Mã Khóa Học');
$sheet->setCellValue('G' . $rowCount, 'Ngày Thanh Toán');
$sheet->setCellValue('H' . $rowCount, 'Số Tiền');
$sheet->setCellValue('I' . $rowCount, 'Tình Trạng');

$result = $mysqli->query("SELECT id_bill,MaHV,tenhv,sdt,gmail,soursedetail.ma_KH,bill.ngaylap_hd,total,tinhtrang 
FROM soursedetail
INNER JOIN class ON class.sourse_detail_id = soursedetail.id_sourse_detail
INNER JOIN  bill ON bill.sourse_detail_id = soursedetail.id_sourse_detail
INNER JOIN students ON students.id_students = bill.student_id
    WHERE `id_class` = '$id_class' AND `malop` = '$ten_lop'
");

while ($row = mysqli_fetch_array($result)) {
    $rowCount++;
    $sheet->setCellValue('A' . $rowCount, $row["id_bill"]);
    $sheet->setCellValue('B' . $rowCount, $row["MaHV"]);
    $sheet->setCellValue('C' . $rowCount, $row["tenhv"]);
    $sheet->setCellValue('D' . $rowCount, $row["sdt"]);
    $sheet->setCellValue('E' . $rowCount, $row["gmail"]);
    $sheet->setCellValue('F' . $rowCount, $row["ma_KH"]);
    $sheet->setCellValue('G' . $rowCount, $row["ngaylap_hd"]);
    $total = number_format($row["total"]) . ' vnđ';
    $sheet->setCellValue('H' . $rowCount,  $total);
    $sheet->setCellValue('I' . $rowCount, $row["tinhtrang"]);
}
// set auto size
for ($col = 'A'; $col !== 'J'; $col++) {
    $objExcel->getActiveSheet()
        ->getColumnDimension($col)
        ->setAutoSize(true);
}

$objWriter   = new PHPExcel_Writer_Excel2007($objExcel);
$filename = $ten_lop . '.xlsx';
$objWriter->save($filename);

header('Content-Disposition: attachment;filename="' . $filename . '"');
header("Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet");
header('Content-Length: ' . filesize($filename));
header('Content-Transfer-Encoding: binary');
header('Cache-Control: must-revalidate');
header('Pragma: no-cache');
readfile($filename);
return;