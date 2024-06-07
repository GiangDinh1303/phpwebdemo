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
<video controls>
  <source src="VD/GTA.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="img/slide/1.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="img/slide/2.jpg" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="img/slide/3.png" style="width:100%">
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
    <?php
    $result= mysqli_query($ketnoi,"select*from steam");
    while($st=mysqli_fetch_array($result))
    {
?>
        <div class="row">
            <div class="column">
                <img src="<?php echo($st['hinhanh_st'])?>" width="300px"
                height="300px" alt=""/>
                <h2 class="ten1"><?php echo($st['ten_st'])?></h2>
                <b class="gia1"> Giá: <?php echo($st['gia_st'])?></b><br>
        </div>
        <?php
    }
?>
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>