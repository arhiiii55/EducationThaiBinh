<?php
class ajax extends Controllers
{
    public function search()
    {
        // echo 'xin chào' ;
        $search_st = $_POST["data"];
        // echo $search_st;
        $qrStudent = $this->model("studentModel")->Search($search_st);
        // echo $qrStudent;
        $num = mysqli_num_rows($qrStudent);
?>
<thead>
    <tr>
        <th>ID</th>
        <th>hình ảnh</th>
        <th>Tên học Viên</th>
        <th>Ngày Sinh</th>
        <!-- <th>Trường</th> -->
        <th>sdt</th>
        <th>gmail</th>
        <th>active</th>
        <th style="min-width:60px;">action</th>
    </tr>
</thead>
<tbody>
    <?php
            if ($num > 0) {
                while ($row = mysqli_fetch_array($qrStudent)) {
            ?>
    <tr>
        <th><?php echo $row["id_students"] ?></th>
        <th> <img style="width: 80px;" src="mvc\photo\<?php echo $row["imgHV"] ?>" alt="" name="hinhanh"
                class="img-thumbnail"></th>
        <td> <?php echo $row["tenhv"]; ?></td>
        <td> <?php echo $row["ngaysinh"]; ?></td>
        <td><?php echo $row["sdt"]; ?></td>
        <td><?php echo $row["gmail"]; ?></td>
        <td><?php echo $row["actived"]; ?></td>
        <td>
            <a href="students/allstudent_edit/<?php echo $row["id_students"]; ?>"
                class="btn btn-primary btn-sm btn-block"><i class="far fa-edit"></i>
                Edit</a>

            <a href="students/allstudent_delete/<?php echo $row["id_students"]; ?>"
                class="btn btn-danger btn-sm btn-block mt-2"><i class="fas fa-trash">
                </i>
                Delete </a>
        </td>
    </tr>

</tbody>
<?php

                }
            }
        }

        public function search_idBill()
        {
            // echo 'xin chào' ;
            $search_st = $_POST["data"];
            // echo $search_st;
            $qrbill = $this->model("billModel")->Search($search_st);
            // echo $qrStudent;
            $num = mysqli_num_rows($qrbill);
?>
//
<thead>
    <tr>
        <th>Mã bill</th>
        <th>Mã học Học viên</th>
        <th>Tên Học viên</th>
        <th>Mã khóa học</th>
        <th>Tên Khóa học</th>
        <th>Ngày lập hóa đơn</th>
        <th>tổng tiền</th>
        <th>Tình Trạng Thanh Toán</th>
        <th>Tháng </th>
        <th>Năm </th>
        <th style="min-width:60px;">
            action</th>
    </tr>
</thead>
//
<tbody>
    <?php
            if ($num > 0) {
                while ($row = mysqli_fetch_array($qrbill)) {
    ?>
    //out_sourse tìm
    <tr>
        <th><?php echo $row["id_bill"] ?>
        </th>
        <td> <?php echo $row["student_id"]; ?>
        </td>
        <td> <?php echo $row["tenhv"]; ?>
        </td>
        <td><?php echo $row["sourse_detail_id"]; ?>
        </td>
        <td><?php echo $row["tenkhoahoc"]; ?>
        </td>
        <td><?php $fomat = strtotime($row["ngaylap_hd"]);
                    echo date('d-m-Y h:i a', $fomat); ?>
        </td>
        <td><?php echo  number_format($row["total"]); ?>
        </td>
        <td style="color:blue;">
            <strong><?php echo $row["tinhtrang"]; ?>
            </strong>
        </td>
        <td><?php echo $row["month"]; ?>
        </td>
        <td><?php echo $row["year"]; ?>
        </td>
        <td>
            <a href="Bill/allbill_view/<?php echo $row["id_bill"]; ?>" class="btn btn-primary btn-sm btn-block"><i
                    class="far fa-edit"></i>
                Xem</a>
        </td>
    </tr>

</tbody>
<?php
                }
            }
        }
    }
?>