<meta charset="utf-8">
<?php
include 'dbconnect.php'
?>
<?php
$tenkh = $_POST['ten_dk'];
$matkhau = hash('sha256', $_POST['mk_dk']);
$email = $_POST['email_dk'];
$sodienthoai = $_POST['sdt_dk'];
$diachi = $_POST['diachi_dk'];
$result = mysqli_query($ketnoi, "INSERT INTO dangky (ten_dk, mk_dk, email_dk, sdt_dk, diachi_dk) VALUES ('$tenkh', '$matkhau', '$email', '$sodienthoai', '$diachi')");
echo "<script>
alert('Ban da dang ky thanh cong'); location='index.php';
</script>";
?>