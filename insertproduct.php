<?php include('Connections/MyConnection.php'); ?>
<?php session_start();
if(!isset($_SESSION['adminid']))
{
    // not logged in
    header('Location: adminlogin.php');
    exit();
}?>
<?php
  $posted = false;
  if( $_POST ) {
    $posted = true;
	$result = $_POST['product_price'];
}
?>
<?php

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}
$address="images/allday/";
if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "insert")) {
$path=$address.$_POST['product_image'];

$image_id = $_POST['image_id'];
$cat_id = $_POST['cat_id'];
$product_title = $_POST['product_title'];
$product_price = $_POST['product_price'];
$product_desc = $_POST['product_desc'];
$sub_cat = $_POST['sub_cat'];

  mysqli_select_db($db, "ecommerce");
  $Result1 = mysqli_query($db,"INSERT INTO products (image_id, cat_id, product_title, product_price, product_desc, product_image, sub_cat) 	VALUES 
('$image_id', '$cat_id', '$product_title', '$product_price', '$product_desc', '$path', '$sub_cat')");


  $insertGoTo = "insertproduct.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header("Location: $insertGoTo");
}

mysqli_select_db($db, "ecommerce");
$Recordset1 = mysqli_query($db, "SELECT * FROM products");
$row_Recordset1 = mysqli_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysqli_num_rows($Recordset1);
?>
<!DOCTYPE html>
<?php ?>
<html>
<head>
<title>ClickWhenHungry/admin/insert</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Big store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->
</head>
<body>
<div class="header">

		<div class="container">
			
			<div class="logo">
				<h1 ><a href="#">ADMINISTRATOR<span>CLICK WHEN HUNGRY</span></a></h1>
			</div>

		<br></br>
        <div class="nav-top">
					<nav class="navbar navbar-default">
					
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						

					</div>
                   	
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav ">
						    <li ><a href="insertproduct.php" class="hyper "><span></span></a></li>
			                <li ><a href="insertproduct.php" class="hyper "><span></span></a></li>
							<li ><a href="insertproduct.php" class="hyper "><span>Insert Product</span></a></li>	
							<li ><a href="viewcust.php?name=products" class="hyper "><span>View Products</span></a></li>	
							<li ><a href="viewcust.php?name=categories" class="hyper "><span>View Categories</span></a></li>	
							<li ><a href="viewcust.php?name=customers" class="hyper "><span>View Customers</span></a></li>	
							<li ><a href="order.php" class="hyper "><span>View Orders</span></a></li>
							<li ><a href="message.php" class="hyper "><span>View Messages</span></a></li>							
							<li class=" active"><a href="logout.php" class="hyper "><span>Logout</span></a></li>	
							
						</ul>
					</div>
					</nav>
					<div class="clearfix"></div>
				</div>
             </div>
		</div>	
  <!---->

<!--insert-->

	<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Insert Products</h3>
					<form action="<?php echo $editFormAction; ?>" name="insert" method="POST" ">
						Image_ID<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
						  <input  type="text"  name="image_id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Image_ID';}" required>
							<div class="clearfix"></div>
						</div>
						Category_ID<div class="key">
                        
                        	<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text"  name="cat_id" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Category_ID';}" required>
							<div class="clearfix"></div>
						</div>
				        Product_Title<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
						  <input  type="text"  name="product_title" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Product_Title';}" required>
							<div class="clearfix"></div>
						</div>

                        Product_Price<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
						  <input  type="text"  name="product_price" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Product_Price';}" required>
							<div class="clearfix"></div>
						</div>
                        Product_Description<div class="key">
							
						  <textarea  name="product_desc" cols="42.35" rows="10" required>
							</textarea>
                            <div class="clearfix"></div>
                           </div> 
                        
							&nbsp;<i class="fa fa-user" aria-hidden="true"></i>
						  <input  type="file" class="inputfile" id="if" name="product_image" style="width: 0.1px;height: 0.1px;opacity: 0;overflow: hidden;
	                      position: absolute;z-index: -1;  font-size: 1.25em;font-weight: 700;color: white;background-color: black;
                          display: inline-block;cursor: pointer;" required>
                          <label for="if" style="   font-size: 1.25em;
                          font-weight: 700;color: black;background-color: white;
                          display: inline-block;cursor: pointer;">Select Image</label>
						<div class="clearfix"></div>
						<br></br>
                        Sub_Cat<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
						  <input  type="text"  name="sub_cat" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Sub_Cat';}" required>
							<div class="clearfix"></div>
						</div>

				
						<input type="submit" value="Submit">
						<input type="hidden" name="MM_insert" value="insert">
					</form>
				</div>
				
			</div>
		</div>
<!--footer-->
<br><br><br>
<div class="footer">
	<div class="container">
		<div class="clearfix"></div>
			<div class="footer-bottom">
				<h2 ><a href="#">CLICK WHEN HUNGRY<span>The Best Canteen</span></a></h2>
				<p class="fo-para">Click For Meal Store is a form of electronic commerce which allows consumers to directly buy goods or services from a seller over the Internet.</p>
				<ul class="social-fo">
					<li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
					<li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				</ul>
				<div class=" address">
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-home" aria-hidden="true"></i>Delhi NCR, Meerut Road, Ghaziabad 201206, India.</p>
					</div>
					<div class="col-md-4 fo-grid1">
							<p><i class="fa fa-phone" aria-hidden="true"></i>+91 8865079857 , +91 7900607337</p>	
					</div>
					<div class="col-md-4 fo-grid1">
						<p><i class="fa fa-envelope-o" aria-hidden="true"></i>canteenkiet@gmail.com</a></p>
					</div>
					<div class="clearfix"></div>
					
					</div>
			</div>
		<div class="copy-right">
			<p> &copy; 2019 CLICK WHEN HUNGRY. All Rights Reserved </a></p>
		</div>
	</div>
</div>
<!-- //footer-->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
  </script>
  <?php
    if( $posted ){
		if( $result>'0' ) 
        echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
      else
        echo "<script type='text/javascript'>alert('failed!')</script>";
	}
  ?>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>
