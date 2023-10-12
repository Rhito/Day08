
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hiển thị sinh viên</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "mydb";
        $conn = mysqli_connect($servername, $username, $password, $database);
        $sql = "SELECT * FROM SINHVIEN WHERE 1=1;";
        $result = mysqli_query($conn, $sql);
    ?>
    <table width="80%" align="center" border="1px">
        <thead>
            <tr>
                <th>
                    Mã sinh viên
                </th>
                <th>
                    Tên sinh viên
                </th>
                <th>
                    Địa chỉ
                </th>
                <th>
                    Email
                </th>
                <th>
                    Số điện thoại
                </th>
                <th>
                    Mã khoa
                </th>
                <th>
                    Trạng thái
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            
            $stt = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                $stt++;
            ?>
            <tr>
                <td><?php echo $stt ?></td>
                <td><?php echo $row["MASV"];?></td>
                <td><?php echo $row["TENSV"];?></td>
                <td><?php echo $row["DIACHI"];?></td>
                <td><?php echo $row["EMAIL"];?></td>
                <td><?php echo $row["SDT"];?></td>
                <td><?php echo $row["MAKHOA"];?></td>
                <td><?php echo $row["TRANGTHAI"];?></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>