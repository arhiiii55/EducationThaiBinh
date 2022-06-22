<?php
class staffModel extends DB
{
    public function selectStaff_all()
    {
        $qr = "SELECT * FROM  `staff` ";
        return  $rerult =  mysqli_query($this->conn, $qr);
    }
    public function selectRole_all()
    {
        $qr = "SELECT * FROM  `role` ";
        return  $rerult =  mysqli_query($this->conn, $qr);
    }
    public function staff_insert($manv, $tennv, $chucdanh, $sdt, $gmailnv, $loainv, $mota)
    {
        $qrInsert = "INSERT INTO `staff`(`id_staff`, `maNV`, `tenNV`, `chucdanh`, `sdtNV`, `gmailNV`, `loai_NV`, `motaCV`)
         VALUES (null,'$manv', '$tennv', '$chucdanh', '$sdt', '$gmailnv', '$loainv', '$mota')";
        $result = false;
        if (mysqli_query($this->conn, $qrInsert)) {
            $result;
        }
        return  json_encode($result);
    }
    public function deleteStaff($id_staff)
    {
        $qrDelete = "DELETE FROM `staff` WHERE `id_staff`='$id_staff'";
        $result = false;
        if (mysqli_query($this->conn, $qrDelete)) {
            $result = true;
        }
        return  json_encode($result);
    }
    public function editStaff($id_staff)
    {
        $qredit = "SELECT * FROM  `staff` WHERE `id_staff`= '$id_staff' ";
        return mysqli_query($this->conn, $qredit);
    }
    public function updateStaff($id_staff, $manv, $tennv, $chucdanh, $sdt, $gmailnv, $loainv, $mota)
    {
        $qrUpdate = "UPDATE `staff` SET `maNV`='$manv',
        `tenNV`='$tennv',`chucdanh`='$chucdanh',`sdtNV`='$sdt',`gmailNV`='$gmailnv',
        `loai_NV`='$loainv',`motaCV`='$mota' WHERE `id_staff`='$id_staff' ";
        $result = false;
        if (mysqli_query($this->conn, $qrUpdate)) {
            $result = true;
        }
        return  json_encode($result);
    }
}