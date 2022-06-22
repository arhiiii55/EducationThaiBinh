<?php
class billModel extends DB
{
    public function bill_all()
    {
        $qrbill = "SELECT * FROM `bill`";
        return $rerult =  mysqli_query($this->conn, $qrbill);
    }
    public function st_bill_paid()
    {
        $qrbill_st = "SELECT * FROM soursedetail
        INNER JOIN class ON class.sourse_detail_id = soursedetail.id_sourse_detail
        INNER JOIN  bill ON bill.sourse_detail_id = soursedetail.id_sourse_detail
        INNER JOIN students ON students.id_students = bill.student_id
			WHERE tinhtrang = 'Đã đóng tiền' ";
        return $result = mysqli_query($this->conn, $qrbill_st);
    }
    public function st_bill_unpaid()
    {
        $qrbill_st = "SELECT * FROM soursedetail
        INNER JOIN class ON class.sourse_detail_id = soursedetail.id_sourse_detail
        INNER JOIN  bill ON bill.sourse_detail_id = soursedetail.id_sourse_detail
        INNER JOIN students ON students.id_students = bill.student_id
			WHERE tinhtrang != 'Đã đóng tiền' ";
        return $result = mysqli_query($this->conn, $qrbill_st);
    }
    public function st_bill_paid_AD($id_class)
    {
        $qrbill_st = "SELECT * FROM soursedetail
        INNER JOIN class ON class.sourse_detail_id = soursedetail.id_sourse_detail
        INNER JOIN  bill ON bill.sourse_detail_id = soursedetail.id_sourse_detail
        INNER JOIN students ON students.id_students = bill.student_id
			WHERE tinhtrang = 'Đã đóng tiền' AND `id_class` = '$id_class'";
        return $result = mysqli_query($this->conn, $qrbill_st);
    }
    public function st_bill_unpaid_AD($id_class)
    {
        $qrbill_st = "SELECT * FROM soursedetail
        INNER JOIN class ON class.sourse_detail_id = soursedetail.id_sourse_detail
        INNER JOIN  bill ON bill.sourse_detail_id = soursedetail.id_sourse_detail
        INNER JOIN students ON students.id_students = bill.student_id
			WHERE tinhtrang != 'Đã đóng tiền' AND `id_class` = '$id_class'";
        return $result = mysqli_query($this->conn, $qrbill_st);
    }
    public function st_bill_ALLsum_AD($id_class)
    {
        $qrbill_st = "SELECT  SUM(price) AS 'STTong',SUM(total) AS 'Số tiền đã đóng'  FROM soursedetail
        INNER JOIN class ON class.sourse_detail_id = soursedetail.id_sourse_detail
        INNER JOIN  bill ON bill.sourse_detail_id = soursedetail.id_sourse_detail
        INNER JOIN students ON students.id_students = bill.student_id
			WHERE `id_class` = '$id_class'";
        return $result = mysqli_query($this->conn, $qrbill_st);
    }
    public function st_bill_sum_unpaid_AD($id_class)
    {
        $qrbill_st = "SELECT id_class,malop,SUM(price) AS 'SLno',SUM(total) AS 'Số tiền đã đóng'  FROM soursedetail
        INNER JOIN class ON class.sourse_detail_id = soursedetail.id_sourse_detail
        INNER JOIN  bill ON bill.sourse_detail_id = soursedetail.id_sourse_detail
        INNER JOIN students ON students.id_students = bill.student_id
			WHERE tinhtrang != 'Đã đóng tiền' AND `id_class` = '$id_class'";
        return $result = mysqli_query($this->conn, $qrbill_st);
    }
    public function bill_stinclass($id_class)
    {
        $qrbill_st = "SELECT id_class,MaHV,tenhv,malop, ten_lop, ma_KH,tenkhoahoc,tinhtrang FROM soursedetail
        INNER JOIN class ON class.sourse_detail_id = soursedetail.id_sourse_detail
        INNER JOIN  bill ON bill.sourse_detail_id = soursedetail.id_sourse_detail
        INNER JOIN students ON students.id_students = bill.student_id
        WHERE id_class = '$id_class'";
        return $result = mysqli_query($this->conn, $qrbill_st);
    }
    public function bill_stinclass_groupBy($id_class)
    {
        $qrbill_st = "SELECT * FROM soursedetail
        INNER JOIN class ON class.sourse_detail_id = soursedetail.id_sourse_detail
        WHERE id_class = '$id_class'
        GROUP BY ten_lop
        ";
        return $result = mysqli_query($this->conn, $qrbill_st);
    }
    public function bill_stinclass_test()
    {
        $qrbill_st = "SELECT id_class,MaHV,tenhv,malop, ten_lop, ma_KH,tenkhoahoc,tinhtrang FROM soursedetail
        INNER JOIN class ON class.sourse_detail_id = soursedetail.id_sourse_detail
        INNER JOIN  bill ON bill.sourse_detail_id = soursedetail.id_sourse_detail
        INNER JOIN students ON students.id_students = bill.student_id
        ";
        return $result = mysqli_query($this->conn, $qrbill_st);
    }
    public function setDataExcel($id_class, $ten_lop)
    {
        $qrbill_st = "SELECT id_bill,MaHV,tenhv,sdt,gmail,soursedetail.ma_KH,bill.ngaylap_hd,total,tinhtrang FROM soursedetail
        INNER JOIN class ON class.sourse_detail_id = soursedetail.id_sourse_detail
        INNER JOIN  bill ON bill.sourse_detail_id = soursedetail.id_sourse_detail
        INNER JOIN students ON students.id_students = bill.student_id
			WHERE `id_class` = '$id_class' AND malop = '$ten_lop'
        ";
        return $result = mysqli_query($this->conn, $qrbill_st);
    }
    public function getclass_id()
    {
        $qrbill_st = "SELECT * FROM class";
        return $result = mysqli_query($this->conn, $qrbill_st);
    }

    public function insert_bill($id_student, $id_course, $ngay, $total, $tinhtrang)
    {

        $qrbill_insert = " INSERT INTO `bill`(`id_bill`, `student_id`, `sourse_detail_id`, `ngaylap_hd`, `total`, `tinhtrang`)
         VALUES (null,'$id_student','$id_course','$ngay','$total','$tinhtrang')";
        $result = false;
        if (mysqli_query($this->conn, $qrbill_insert)) {
            $result = true;
        }
        return  json_encode($result);
    }
    public function insert_bill_test($id_student, $id_course, $tinhtrang)
    {

        $qrbill_insert = " INSERT INTO `bill`(`id_bill`, `student_id`, `sourse_detail_id`, `tinhtrang`)
         VALUES (null,'$id_student','$id_course','$tinhtrang')";
        $result = false;
        if (mysqli_query($this->conn, $qrbill_insert)) {
            $result = true;
        }
        return  json_encode($result);
    }
    public function st_bill_sale_sourse()
    {
        $qrbill_all = "SELECT * FROM bill 
        INNER JOIN students on bill.student_id = students.id_students
        INNER JOIN soursedetail on soursedetail.id_sourse_detail = bill.sourse_detail_id";
        return $result = mysqli_query($this->conn, $qrbill_all);
    }
    // public function sale_bill()
    // {
    //     $qrbill_sale = "SELECT * FROM `sale` 
    //     INNER JOIN `bill` on bill.sale_id = sale.id_sale";
    //     return $result = mysqli_query($this->conn, $qrbill_sale);
    // }
    public function editGetid_Bill($id_bill)
    {
        $qrbill = "	SELECT * FROM `bill` 
        INNER JOIN students on bill.student_id = students.id_students
        INNER JOIN soursedetail on soursedetail.id_sourse_detail = bill.sourse_detail_id
        WHERE `id_bill` = '$id_bill' ";
        return mysqli_query($this->conn, $qrbill);
    }
    public function update_bill($id_bill, $ngay, $total, $tinhtrang)
    {
        $qrUpdate = "UPDATE `bill` SET
        `ngaylap_hd`='$ngay',`total`='$total',`tinhtrang`='$tinhtrang' 
        WHERE `id_bill` = '$id_bill'";
        $result = false;
        if (mysqli_query($this->conn, $qrUpdate)) {
            $result = true;
        }
        return  json_encode($result);
    }
    public function detete_bill($id_bill)
    {
        $qrDelete = " DELETE FROM `bill` WHERE `id_bill` = '$id_bill'";
        $result = false;
        if (mysqli_query($this->conn, $qrDelete)) {
            $result = true;
        }
        return  json_encode($result);
    }
    public function billMonthYear_statement_showPaid()
    {
        $qrbill = "SELECT id_bill,MaHV,tenhv,thoihan, sourse_detail_id, tenkhoahoc, ngaylap_hd,total,tinhtrang ,
        MONTH (ngaylap_hd) as 'month' ,YEAR(ngaylap_hd)as 'year'
        FROM `bill` 
        INNER JOIN students on bill.student_id = students.id_students
        INNER JOIN soursedetail on soursedetail.id_sourse_detail = bill.sourse_detail_id
        WHERE `tinhtrang` = 'Đã đóng tiền'";
        return mysqli_query($this->conn, $qrbill);
    }
    public function billMonthYear_statement_showUnPaid()
    {
        $qrbill = "SELECT id_bill,student_id,MaHV,tenhv,thoihan, sourse_detail_id, tenkhoahoc, ngaylap_hd,total,tinhtrang ,
        MONTH (ngaylap_hd) as 'month' ,YEAR(ngaylap_hd)as 'year'
        FROM `bill` 
        INNER JOIN students on bill.student_id = students.id_students
        INNER JOIN soursedetail on soursedetail.id_sourse_detail = bill.sourse_detail_id
        WHERE `tinhtrang` != 'Đã đóng tiền'";
        return mysqli_query($this->conn, $qrbill);
    }
    public function  billMonthYear_statement($month, $year, $tinhtrang)
    {
        $qrbill = "SELECT id_bill,student_id,MaHV ,tenhv,thoihan, sourse_detail_id, tenkhoahoc, ngaylap_hd,total,tinhtrang ,
        MONTH (ngaylap_hd) as 'month' ,YEAR(ngaylap_hd)as 'year'
        FROM `bill` 
        INNER JOIN students on bill.student_id = students.id_students
        INNER JOIN soursedetail on soursedetail.id_sourse_detail = bill.sourse_detail_id
        WHERE MONTH (ngaylap_hd) = '$month' AND YEAR(ngaylap_hd) = '$year' AND tinhtrang = '$tinhtrang' ";
        return mysqli_query($this->conn, $qrbill);
    }
    public function  bill_statement_getYear()
    {
        $qrbill = "SELECT id_bill,student_id,tenhv, sourse_detail_id, tenkhoahoc, ngaylap_hd,total,tinhtrang ,
        MONTH (ngaylap_hd) as 'month' ,YEAR(ngaylap_hd)as 'year'
        FROM `bill` 
        INNER JOIN students on bill.student_id = students.id_students
        INNER JOIN soursedetail on soursedetail.id_sourse_detail = bill.sourse_detail_id
        GROUP BY YEAR(ngaylap_hd)";
        return mysqli_query($this->conn, $qrbill);
    }
    public function groupBy_class_AD_AC()
    {
        $qrbill = "SELECT id_class, ma_KH, tenkhoahoc , malop , ten_lop , ngaylap_hd,
        YEAR(ngaylap_hd)as 'year'
				FROM soursedetail
				INNER JOIN class ON class.sourse_detail_id = soursedetail.id_sourse_detail
				INNER JOIN  bill ON bill.sourse_detail_id = soursedetail.id_sourse_detail
				INNER JOIN students ON students.id_students = bill.student_id
			GROUP BY id_class";
        return mysqli_query($this->conn, $qrbill);
    }
    public function Search($search_st)
    {
        $qrSearch = "SELECT id_bill,student_id,tenhv, sourse_detail_id, tenkhoahoc, ngaylap_hd,total,tinhtrang ,
        MONTH (ngaylap_hd) as 'month' ,YEAR(ngaylap_hd)as 'year' FROM `bill` 
        	INNER JOIN students on bill.student_id = students.id_students
			INNER JOIN soursedetail on soursedetail.id_sourse_detail = bill.sourse_detail_id
        WHERE `id_bill` like '%$search_st%'
        ORDER BY id_bill ASC";
        return $result =  mysqli_query($this->conn, $qrSearch);
    }
    public function report_Statement_sum($year)
    {
        $qrStatement = "SELECT id_bill,MaHV,tenhv,ma_KH,tenkhoahoc, ngaylap_hd,total,tinhtrang,
        MONTH (ngaylap_hd) as 'month' ,YEAR(ngaylap_hd) as 'year'
        FROM `bill` 
        INNER JOIN students on bill.student_id = students.id_students
        INNER JOIN soursedetail on soursedetail.id_sourse_detail = bill.sourse_detail_id
        WHERE YEAR(ngaylap_hd) = '$year'";
        return $result =  mysqli_query($this->conn, $qrStatement);
    }
    public function report_Statement_sumUnpaid($year)
    {
        $qrStatement = "SELECT id_bill,MaHV,tenhv,ma_KH,tenkhoahoc, ngaylap_hd,total,tinhtrang,
        MONTH (ngaylap_hd) as 'month' ,YEAR(ngaylap_hd) as 'year'
        FROM `bill` 
        INNER JOIN students on bill.student_id = students.id_students
        INNER JOIN soursedetail on soursedetail.id_sourse_detail = bill.sourse_detail_id
        WHERE YEAR(ngaylap_hd) = '$year' AND `tinhtrang` != 'Đã đóng tiền'";
        return $result =  mysqli_query($this->conn, $qrStatement);
    }
    public function report_Statement_sumTotal($year)
    {
        $qrStatement = "SELECT id_bill,MaHV,tenhv,ma_KH,tenkhoahoc, ngaylap_hd,total,tinhtrang,
        MONTH (ngaylap_hd) as 'month' ,YEAR(ngaylap_hd) as 'year', SUM(total) as 'tong'
        FROM `bill` 
        INNER JOIN students on bill.student_id = students.id_students
        INNER JOIN soursedetail on soursedetail.id_sourse_detail = bill.sourse_detail_id
        WHERE YEAR(ngaylap_hd) = '$year'";
        return $result =  mysqli_query($this->conn, $qrStatement);
    }
}