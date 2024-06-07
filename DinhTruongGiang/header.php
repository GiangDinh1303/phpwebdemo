<!DOCTYPE html>
<?php
session_start();
include("dbconnect.php")
?>
<html>
<head>
    <meta charset="utf-8">
    <title> DinhTruongGiang TH27.27</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div>
        <img src="IMG/banner.png" width="100%">
    </div>
    <div class="menu">
        <a href="?go=home"> Trang Chủ </a>
        <a href="?go=popular"> Game Nổi Bật </a>
        <a href="?go=survival"> Sinh Tồn </a>
        <a href="?go=puzzle"> Giải Đố </a>
        <a href="?go=dangky"> Đăng Ký </a>
        <div class="topnav">
            <div class="search-container">
            <form action="/action_page.php">
               <input type="text" placeholder="Search.." name="search">
               <button type="submit"><i class="fa fa-search"></i></button>
            </form>
  </div>
</div>
    </div>
</body>
</html>