<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Món ăn</title>
    <link rel="stylesheet" href="cacbang.css">
    <style>
        table{
            width:90%;
            margin: 0 auto;
        }
        .them{
            color: black;
            padding: 5px;
            border: 2px solid #053975ff;
            border-radius: 5px;
            text-decoration:none;
        }
        .chucnang{
            padding:7px;
        }
        .sua{
            color: black;
            background: #88bfff;
            border: 2px solid #88bfff;
            padding: 0px 10px;
            border-radius: 2px;
            text-decoration:none;
        }
        .xoa{
            color: white;
            padding: 0 10px;
            background: red;
            border-radius: 2px;
            text-decoration:none;
        }
    </style>
</head>
<body>
    <div class="dau">
        <h1>Thông tin món ăn</h1>
        <a class="them" href="admin.php?page=themmonan">Thêm món ăn</a>
    </div>
    <table border=1>
        <tr>
            <th>Tên món ăn</th>
            <th>Mô tả</th>
            <th>Thời gian nấu</th>
            <th>Người đăng</th>
            <th>Ngày đăng</th>
            <th>Hình ảnh</th>
            <th>Trạng thái</th>
            <th>Chức năng</th> 
        </tr>

        <?php
            include("../btnhom/connect.php");
            $sql = "SELECT * FROM mon_an ma";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
        ?>

        <tr>
            <td><?php echo $row["ten_mon_an"] ?></td>
            <td><?php echo $row["mo_ta"] ?></td>
            <td><?php echo $row["thoi_gian_nau"] ?></td>
            <td><?php echo $row["nguoi_dang_id"] ?></td>
            <td><?php echo $row["ngay_dang"] ?></td>
            <td><img src="<?php echo $row["hinh_anh"] ?>" alt=""></td>
            <td><?php echo $row["trang_thai"] ?></td>
            <td class="chucnang">
                <a href="admin.php?page=capnhatmonan&id=<?php echo $row['id']?>" class="nutcapnhat">Cập nhật</a>
                <a href="monan/xoamonan.php?id=<?php echo $row['id']?>" class="nutxoa">Xóa</a>
            </td>
        </tr>
        <?php } ?>
        
    </table>
</body>
</html>





