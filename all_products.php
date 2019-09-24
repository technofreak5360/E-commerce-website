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
  <a href="index.php" > <img id="logo" src="images/logo.gif" alt="logo"> </a>
  <img  id="banner" src="images/ad_banner.gif" alt="banner">

</div>
<div class="menuebar">
<ul id="menue">
  <li><a href="index.php">Home</a></li>
  <li> <a href="all_products.php">All products</a> </li>
  <li> <a href="customer/my_account.php">My Account</a> </li>
  <li> <a href="#">Sign up</a> </li>
  <li> <a href="cart.php">Shopping Cart</a>  </li>
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
				$get_pro = "select * from products";

				$run_pro = mysqli_query($con, $get_pro);

				while($row_pro=mysqli_fetch_array($run_pro)){

					$pro_id = $row_pro['product_id'];
					$pro_cat = $row_pro['product_cat'];
					$pro_brand = $row_pro['product_brand'];
					$pro_title = $row_pro['product_title'];
					$pro_price = $row_pro['product_price'];
					$pro_image = $row_pro['product_image'];

					echo "
							<div id='single_product'>

								<h3>$pro_title</h3>

								<img src='admin_area/product_images/$pro_image' width='180' height='180' />

								<p><b> Price: $ $pro_price </b></p>

								<a href='details.php?pro_id=$pro_id' style='float:left;'>Details</a>

								<a href='index.php?add_cart=$pro_id'><button style='float:right'>Add to Cart</button></a>

							</div>


					";

				}

	 ?>


				</div>
</div>

</div>
<div id="footer">
<h2 id="copyright">	&copy; 2019 by www.Bugu.com</h2>
</div>
</div>
  </body>
</html>
