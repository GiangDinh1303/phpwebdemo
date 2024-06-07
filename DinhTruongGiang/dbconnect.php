<?php
$ketnoi = mysqli_connect("localhost", "root", "usbw");
if (!$ketnoi) {
    die("Không thể kết nối: " . mysqli_connect_error());
}
mysqli_select_db($ketnoi, "dinhtruonggiang");
mysqli_query($ketnoi, "SET NAMES 'utf8'");
?>