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
  <form action="results.php" method="GET" enctype="multipart/form-data">
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
  <div id="shopping_cart">
 <span style="float:right; font-size:17px; padding:5px; line-height:40px;">
  </div>
  <div id="products_box">

    <?php
if(isset($_GET['pro_id'])){

$product_id = $_GET['pro_id'];

$get_pro = "select * from products where product_id='$product_id'";

$run_pro = mysqli_query($con, $get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){

  $pro_id = $row_pro['product_id'];
  $pro_title = $row_pro['product_title'];
  $pro_price = $row_pro['product_price'];
  $pro_image = $row_pro['product_image'];
  $pro_desc = $row_pro['product_desc'];

  echo "
      <div id='single_product'>

        <h3>$pro_title</h3>

        <img src='admin_area/product_images/$pro_image' width='400' height='300' />

        <p><b> $ $pro_price </b></p>

        <p>$pro_desc </p>

        <a href='index.php' style='float:left;'>Go Back</a>

        <a href='index.php?pro_id=$pro_id'><button style='float:right'>Add to Cart</button></a>

      </div>


  ";

}
}
?>



</div>

</div>
<div id="footer">
<h2 id="copyright">	&copy; 2019 by www.Bugu.com</h2>
</div>
</div>
  </body>
</html>
