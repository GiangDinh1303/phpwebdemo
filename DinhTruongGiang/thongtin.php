<!DOCTYPE html>
<?php
include 'dbconnect.php'
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
#mySidenav a {
  position: fixed;
  left: -90px;
  transition: 0.3s;
  padding: 15px;
  width: 100px;
  text-decoration: none;
  font-size: 20px;
  color: white;
  border-radius: 0 5px 5px 0;
}

#mySidenav a:hover {
  left: 0;
}

#about {
  top: 220px;
  background-color: #04AA6D;
}

#blog {
  top: 280px;
  background-color: #2196F3;
}

#projects {
  top: 340px;
  background-color: #f44336;
}

#contact {
  top: 400px;
  background-color: #555
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="https://www.facebook.com/giangdinh1303/" id="about">facebook</a>
  <a href="#" id="blog">Blog</a>
  <a href="#" id="projects">Projects</a>
  <a href="#" id="contact">Contact</a>
</div>
   
</body>