<!DOCTYPE html>
<?php
include 'dbconnect.php'
?>
<html>
<head>
    <meta charset="utf-8">
    <title> steam</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    $result= mysqli_query($ketnoi,"select*from popular");
    while($ppl=mysqli_fetch_array($result))
    {
?>
        <div class="row">
            <div class="column">
                <img src="<?php echo($ppl['hinhanh_ppl'])?>" width="300px"
                height="300px" alt=""/>
                <h2 class="ten1" ><?php echo($ppl['ten_ppl'])?></h2>
                <b class="gia1" > Giá: <?php echo($ppl['gia_ppl'])?></b><br>
        </div>
        <?php
    }
?>
</body>
</html>