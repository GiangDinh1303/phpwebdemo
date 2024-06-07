<!DOCTYPE html>
<?php include("dbconnect.php")?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Home</title> 
    </head>
    <body>
        <div class="sp">
            <?php include("steam.php")?>
        </div>
        <div id="chat">
            <?php include("chat.php")?>
        </div>
        <div id="thongtin">
            <?php include("thongtin.php")?>
        </div>
    </body>
</html>