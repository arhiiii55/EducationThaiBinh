<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>
    </h1>
    <p>
        <?php
        $i = 1;
        while ($row = mysqli_fetch_assoc($data["showuser"])) { ?>
    <table>
        <td><?php echo $i++; ?></td>
        <td>
            <?php echo $row["id_account"]; ?>
        </td>
        <td>
            <?php echo  $row["ten_taikhoan"]; ?>
        <td>
            <?php echo $row["mk_taikhoan"]; ?>
        </td>
        <td>
            <?php echo  $row["role_id"]; ?>
        </td>
    </table>

    <?php } ?>


    </p>

</html>