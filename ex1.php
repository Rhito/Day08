<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ketnoi</title>
</head>

<body>
    <?php
    // tạo kết nối đến máy chủ csdl
    $servername = "localhost";
    $database = "mydb";
    $username = "root";
    $password = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);

    // Truy vấn để lấy tên khoa
    $sql1 = "SELECT * FROM KHOA WHERE 1=1";
    $sql2 = "SELECT * FROM SINHVIEN WHERE 1=1";

    $resultSet1 = $conn->query( $sql1);
    $resultSet2 = $conn->query( $sql2);

    ?>
    <h1>Hiển thị danh sách khoa</h1>
    <hr>
    <table width="80%" align="center" border="1px">
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã khoa</th>
                <th>Tên khoa</th>
                <th>Trạng thái</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $stt = 0;
                while ($row = $resultSet1->fetch_array()) {
                    $stt++;
            ?>
                <tr>
                    <td><?php echo $stt; ?></td>
                    <td><?php echo $row["MAKHOA"]; ?></td>
                    <td><?php echo $row["TENKHOA"]; ?></td>
                    <td><?php echo $row["TRANGTHAI"]; ?></td>
                </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>

    <hr>
    <h1>Hiển thị danh sách sinh viên</h1>
    <table width="80%" align="center" border="1px">
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã sinh viên</th>
                <th>Tên sinh viên</th>
                <th>Địa chỉ</th>
                <th>Email: </th>
                <th>SĐT</th>
                <th>Mã khoa</th>
                <th>Trạng thái</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $stt = 0;
                while ($row = $resultSet2->fetch_array()) {
                    $stt++;
            ?>
                <tr>
                    <td><?php echo $stt; ?></td>
                    <td><?php echo $row["MASV"]; ?></td>
                    <td><?php echo $row["TENSV"]; ?></td>
                    <td><?php echo $row["DIACHI"]; ?></td>
                    <td><?php echo $row["EMAIL"]; ?></td>
                    <td><?php echo $row["SDT"]; ?></td>
                    <td><?php echo $row["MAKHOA"]; ?></td>
                    <td><?php echo $row["TRANGTHAI"]; ?></td>
                </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>


</body>

</html>