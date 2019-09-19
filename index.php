<!DOCTYPE html>
<?php
include("functions/functions.php");
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>E-commerece website</title>

    <link rel="stylesheet" href="styles/style.css" media="all">
  </head>
  <body>
<div class="main_wrapper">
<div class="header_wraper">
  <img id="logo" src="images/logo.gif" alt="logo">
  <img  id="banner" src="images/ad_banner.gif" alt="banner">

</div>
<div class="menuebar">
<ul id="menue">
  <li><a href="#">Home</a></li>
  <li> <a href="#">All products</a> </li>
  <li> <a href="#">My Account</a> </li>
  <li> <a href="#">Sign up</a> </li>
  <li> <a href="#">Shopping Cart</a>  </li>
  <li><a href="#">contact us</a> </li>
</ul>
<div id="form">
  <form action="result.php" method="GET" enctype="multipart/form-data">
 <input type="text" name="user_query" placeholder="Search products">
 <input type="submit" name="search" value="search">
  </form>
</div>
</div>
<div class="content_wrapper">
<div id="sidebar">
<div id="sidebar_content">Categories</div>
<ul id="cats">
  <?php
   getCats();
   ?>
</ul>
<div id="sidebar_content">Brands</div>
<ul id="cats">
  <?php
   getBrands();
   ?>
</ul>
</div>
<div id="content_area">
this is content area
</div>

</div>
<div id="footer">
<h2 id="copyright">	&copy; 2019 by www.Bugu.com</h2>
</div>
</div>
  </body>
</html>
