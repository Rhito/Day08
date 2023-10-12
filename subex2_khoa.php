
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        </tbody>
    </table>
</body>
</html>