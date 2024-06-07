<meta charset="utf-8">
<?php
include 'dbconnect.php'
?>
<?php
$email = $_POST['email_chat'];
$ykien = $_POST['ykien_chat'];
$result = mysqli_query($ketnoi, "INSERT INTO chat (email_chat, ykien_chat) VALUES ('$email','$ykien')");
echo "<script>
alert('Bạn đã góp ý thành công'); location='index.php';
</script>";
?>