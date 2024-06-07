<!DOCTYPE html>
<?php
include 'dbconnect.php'
?>
<html>
<head>
    <meta charset="utf-8">
    <title> Dang Ky</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1> Đăng ký </h1>
    <form action="xulylienhe.php" method="post" id="dangky">
        <table align="center" width="800" border="0">
            <tbody>
                <tr>
                    <td width="157"> Tên đăng ký:</td>
                    <td width="633"><input type="text" name="ten_dk" id="ten_dk"></td>
                </tr>
                <tr>
                    <td> Mật khẩu:</td>
                    <td><input type="password" name="mk_dk" id="mk_dk"></td>
                </tr>
                <tr>
                    <td> Email:</td>
                    <td><input type="email" name="email_dk" id="email_dk"></td>
                </tr>
                <tr>
                    <td> Số điện thoại:</td>
                    <td><input type="tel" name="sdt_dk" id="sdt_dk"></td>
                </tr>
                <tr>
                    <td> Địa chỉ:</td>
                    <td><input type="text" name="diachi_dk" id="diachi_dk"></td>
                </tr>
                <tr>
                <td><input type="submit" name="submit" id="submit" value="Submit">
                <input type="reset" name="submit" id="submit" value="reset"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>