
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sinh viên</title>
</head>

<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "mydb";
        //tạo kết nối với database Mysql
        $conn = mysqli_connect($servername, $username, $password, $database);
        $_SESSION['connect_database'] = $conn;
        //Insert Khoa
        if (isset($_POST["btn_themmoi"])) {
            $makhoa = $_POST["MAKHOA"];
            $tenkhoa = $_POST["TENKHOA"];
            $trangthai = $_POST["TRANGTHAI"];
            if (empty($makhoa) && empty($tenkhoa) && empty($trangthai)){
                echo"<h3>Hãy nhập đủ thông tin</h3><br>";
            }else {
                //tạo câu lệnh truy vấn
                $sql1 = "INSERT INTO KHOA (MAKHOA, TENKHOA, TRANGTHAI)
                            VALUES ('$makhoa', '$tenkhoa', $trangthai);";
    
                $resultSetKhoa = $conn->query($sql1);
            }
        }
        if (isset($_POST["btn2_themmoi"])) {

            $masv = $_POST["MASV"];
            $tensv = $_POST["TENSV"];
            $diachi = $_POST["DIACHI"];
            $email = $_POST["EMAIL"];
            $sdt = $_POST["SDT"];
            $makhoa = $_POST["MAKHOA"];
            $trangthai = $_POST["TRANGTHAI"];

            if (empty($masv) && empty($tensv) && empty($diachi) && empty($email) && empty($sdt) && empty($makhoa) && empty($trangthai) ){
                echo"<h3>Hãy nhập đủ thông tin</h3><br>";
            }else {
                //tạo câu lệnh truy vấn
                $sql2 = "INSERT INTO sinhvien (MASV, TENSV, DIACHI, EMAIL, SDT, MAKHOA, TRANGTHAI)
                            VALUES ('$masv', '$tensv', '$diachi', '$email', '$sdt', '$makhoa', $trangthai);";
                            
                $resultSetSV = $conn->query($sql2);
            }
        }

    ?>
    <form action="subex2_khoa.php" method="post" name="frm">
        <h1>Thêm mới thông tin khoa</h1>
        <table border="1px" width="80%" align="center">
            <tbody>
                <tr>
                    <td>Mã khoa</td>
                    <td>
                        <input type="text" name="MAKHOA" id="MAKHOA" minlength="3">
                    </td>
                </tr>
                <tr>
                    <td>Tên khoa</td>
                    <td>
                        <input type="text" name="TENKHOA" id="TENKHOA">
                    </td>
                </tr>
                <tr>
                    <td>Trạng thái</td>
                    <td>
                        <select name="TRANGTHAI" id="TRANGTHAI">
                            <option value="1" selected>Đang hoạt động</option>
                            <option value="0">Không hoạt động</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Thêm mới" name="btn_themmoi">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
    <hr>
    <br>
    <form action="subex2_SV.php" method="post" name="frm2">
        <h1>Thêm mới thông tin sinh viên</h1>
        <table border="1px" width="80%" align="center">
            <tbody>
                <tr>
                    <td>Mã sinh viên</td>
                    <td>
                        <input type="text" name="MASV" id="MASV" minlength="6">
                    </td>
                </tr>
                <tr>
                    <td>Tên sinh viên</td>
                    <td>
                        <input type="text" name="TENSV" id="TENSV">
                    </td>
                </tr>
                <tr>
                    <td>Địa chỉ</td>
                    <td>
                        <input type="text" name="DIACHI" id="DIACHI">
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="email" name="EMAIL" id="EMAIL">
                    </td>
                </tr>
                <tr>
                    <td>Số điện thoại</td>
                    <td>
                        <input type="text" name="SDT" id="SDT">
                    </td>
                </tr>
                <tr>
                    <td>Mã khoa</td>
                    <td>
                        <input type="text" name="MAKHOA" id="MAKHOA">
                    </td>
                </tr>
                <tr>
                    <td>Trạng thái</td>
                    <td>
                        <select name="TRANGTHAI" id="TRANGTHAI">
                            <option value="1" selected>Đang hoạt động</option>
                            <option value="0">Không hoạt động</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Thêm mới" name="btn2_themmoi">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</body>

</html>