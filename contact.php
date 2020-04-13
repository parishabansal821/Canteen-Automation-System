<?php require_once('Connections/MyConnection.php'); ?>
<?php session_start();
if(!isset($_SESSION['customer_email']))
{
    // not logged in
    header('Location: login.php');
exit();}?>
<?php $email=$_SESSION['customer_email']; 
mysqli_select_db($db, "ecommerce");
$un=mysqli_query($db, "SELECT customer_name FROM customers where customer_email='$email'") or die(mysqli_error());
$username = mysqli_fetch_assoc($un);
?>
<?php

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"]))&&($_POST["MM_insert"] == "insert")) {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

  mysqli_select_db($db, "ecommerce");
  $Result1 = mysqli_query($db, "INSERT INTO contact (name, email, message) VALUES ('$name', '$email', '$message')") or die(mysqli_error());


  $insertGoTo = "contact.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header("Location:  $insertGoTo");
} 
?>
<html>
<head>
<title>CLICK WHEN HUNGRY</title>
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
				<h1 ><a href="#">CLICK WHEN HUNGRY<span>The Best Canteen</span></a></h1>
			</div>
			<div class="head-t">
				<ul class="card">
					<li><a href="wishlist.php" ><i class="fa fa-heart" aria-hidden="true"></i>Wishlist</a></li>
					<li><a href="shipping.php" ><i class="fa fa-ship" aria-hidden="true"></i>Shipping</a></li>
					<li><a href="login.php" ><i class="fa fa-user" aria-hidden="true"></i>Logout</a></li>
				</ul>	
			</div>
			
			<div class="header-ri">
				<ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon twitter"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li>
				</ul>	
			</div>
		

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
							<li class=" active"><a href="index.php" class="hyper "><span>Home</span></a></li>	
							
							<li class="dropdown ">
								<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Beverages<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
			
												<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i><b>Mocktails</b></a></li>
												<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Forest Fire</a></li>
												<li><a href="kitchen.php"> <i class="fa fa-angle-right" aria-hidden="true"></i>Vanilla Kiwi Ale</a></li>
												<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Fruit Cup</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-3">
										
											<ul class="multi-column-dropdown">
												<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i><b>Tea and Coffee</b></a></li>
												<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Estate Tea</a></li>
												<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>House Blend Tea</a></li>
												<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Single Origin Coffee</a></li>
												<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Espresso</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-3">
										
											<ul class="multi-column-dropdown">
												<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i><b>Other Beverages</b></a></li>
												<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Carbonated Water</a></li>
												<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Tonic Water</a></li>
												<li><a href="kitchen.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Energy Drink</a></li>
										
											</ul>
										</div>
										<div class="col-sm-3 w3l">
											<a href="kitchen.php"><img src="images/nav1.jpg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							<li class="dropdown">
							
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Puddings and Deserts<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi1">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a href="cake.php"><i class="fa fa-angle-right" aria-hidden="true"></i> <b>Puddings</b> </a></li>
												<li><a href="cake.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Rice Pudding</a></li>
												<li><a href="cake.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Almond Cake</a></li>
												<li><a href="cake.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Chocolate Brownie</a></li>
										
											</ul>
											
										</div>
										<div class="col-sm-3">
											
											<ul class="multi-column-dropdown">
												<li><a href="cake.php"> <i class="fa fa-angle-right" aria-hidden="true"></i><b>Deserts</b> </a></li>
												<li><a href="cake.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Rasmalie</a></li>
												<li><a href="cake.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Chocolate Mousse</a></li>
												<li><a href="cake.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Sundae</a></li>
										
											</ul>
											
										</div>
										<div class="col-sm-3">
											
											<ul class="multi-column-dropdown">
												<li><a href="cake.php"><i class="fa fa-angle-right" aria-hidden="true"></i> <b>Ice-Creams</b> </a></li>
												<li><a href="cake.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Bombay Ice-Cream</a></li>
												<li><a href="cake.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Vanilla</a></li>
												<li><a href="cake.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Butter Scotch</a></li>
										
											</ul>
										</div>
										<div class="col-sm-3 w3l">
											<a href="cake.php"><img src="images/nav2.jpg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle hyper" data-toggle="dropdown" ><span>Comfort Mains<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi multi2">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
												<li><a href="comfortmains.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Mac and Cheese</a></li>
												<li><a href="comfortmains.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Glazed Pie</a></li>
												<li><a href="comfortmains.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Roast Chicken Basket</a></li>
												<li><a href="comfortmains.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Singapore Veg Laksa</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-3">
											
											<ul class="multi-column-dropdown">
												<li><a href="comfortmains.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Rajma Masala</a></li>
												<li><a href="comfortmains.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Chicken Lababdar</a></li>
												<li><a href="comfortmains.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Penne all'Arrabbiata</a></li>
										
											</ul>
										
										</div>
                                        <div class="col-sm-3">
											
											<ul class="multi-column-dropdown">
												<li><a href="comfortmains.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Farfalle Salsiccia</a></li>
										        <li><a href="comfortmains.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Risotto Gamberi</a></li>
                                                <li><a href="comfortmains.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Singapore Veg Laksa</a></li>
											</ul>
										
										</div>
                                        
										<div class="col-sm-3 w3l">
											<a href="comfortmains.php"><img src="images/nav3.jpg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
							
							<li class="dropdown ">
								<a href="#" class="dropdown-toggle  hyper" data-toggle="dropdown" ><span>Others<b class="caret"></b></span></a>
								<ul class="dropdown-menu multi">
									<div class="row">
										<div class="col-sm-3">
											<ul class="multi-column-dropdown">
			
												<li><a href="others.php"><i class="fa fa-angle-right" aria-hidden="true"></i><b>Burger</b></a></li>
												<li><a href="others.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Herb Burger</a></li>
												<li><a href="others.php"> <i class="fa fa-angle-right" aria-hidden="true"></i>Lamb Burger</a></li>
												<li><a href="others.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Schnitzel Burger</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-3">
										
											<ul class="multi-column-dropdown">
												<li><a href="others.php"><i class="fa fa-angle-right" aria-hidden="true"></i><b>Pizzas</b></a></li>
												<li><a href="others.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Margherita</a></li>
												<li><a href="others.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Vegetariana</a></li>
												<li><a href="others.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Papperoni</a></li>
										
											</ul>
										
										</div>
										<div class="col-sm-3">
										
											<ul class="multi-column-dropdown">
												<li><a href="others.php"><i class="fa fa-angle-right" aria-hidden="true"></i><b>Chinese</b></a></li>
												<li><a href="others.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Hakka Noodles</a></li>
												<li><a href="others.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Schezwan Noodles</a></li>
												<li><a href="others.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Gravy Roll</a></li>
										
											</ul>
										</div>
										<div class="col-sm-3 w3l">
											<a href="kitchen.php"><img src="images/nav4.jpg" class="img-responsive" alt=""></a>
										</div>
										<div class="clearfix"></div>
									</div>	
								</ul>
							</li>
                            
							<li><a href="contact.php" class="hyper"><span>Contact Us</span></a></li>
							<li class=" "><a class=""><span>             </span></a></li>	
							<li class="active "><a class="hyper "><span>Hi <?php echo $username['customer_name'];?> </span></a></li>	
						</ul>
					</div>
					</nav>
					 <div class="cart" >
					
						<span class="fa fa-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
					</div>
					<div class="clearfix"></div>
				</div>
					
				</div>			
</div>
  <!---->

 <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Contact</h3>
		<h4><a href="index.php">Home</a><label>/</label>Contact</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!-- contact -->
<div class="contact">
	<div class="container">
		<div class="spec ">
			<h3>Contact</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
		</div>
		<div class=" contact-w3">	
			<div class="col-md-5 contact-right">	
				<img src="images/cac.jpg" class="img-responsive" alt="">
				<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d2482.432383990807!2d0.028213999961443994!3d51.52362882484525!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1423469959819" style="border:0"></iframe>
			</div>
			<div class="col-md-7 contact-left">
				<h4>Contact Information</h4>
				<p> Available 24*7</p>
				<ul class="contact-list">
					<li> <i class="fa fa-map-marker" aria-hidden="true"></i> Delhi NCR, Meerut Road, Ghaziabad</li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:example@mail.com">canteenkiet@gmail.com</a></li>
					<li> <i class="fa fa-phone" aria-hidden="true"></i>+91 7900607337</li>
				</ul>
				<div id="container">
					<!--Horizontal Tab-->
					<div id="parentHorizontalTab">
						<ul class="resp-tabs-list hor_1">
							<li><i class="fa fa-envelope" aria-hidden="true"></i></li>
							<li> <i class="fa fa-map-marker" aria-hidden="true"></i> </span></li>
							<li> <i class="fa fa-phone" aria-hidden="true"></i></li>
						</ul>
						<div class="resp-tabs-container hor_1">
							<div>
								<form action="<?php echo $editFormAction; ?>" name="insert" method="post">
									<input type="text"  name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required>
									<input type="email"  name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required>
									<textarea name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}" required>Message...</textarea>
									<input type="submit" value="Submit" >
										<input type="hidden" name="MM_insert" value="insert">
								</form>
							</div>
							<div>
								<div class="map-grid">
								<h5>Our Branches</h5>
									<ul>
										<li><i class="fa fa-arrow-right" aria-hidden="true"></i>756 Global Place, Dehradun.</li>
										<li><i class="fa fa-arrow-right" aria-hidden="true"></i>889 diamond street, Delhi.</li>

									</ul>
								</div>
							</div>
							<div>
								<div class="map-grid">
									<h5>Contact Me Through</h5>
									<ul>
										<li>Mobile No : +91 8865079857</li>
										<li>Office No : +91 7900607337</li>

									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!--Plug-in Initialisation-->
				<script type="text/javascript">
				$(document).ready(function() {
					//Horizontal Tab
					$('#parentHorizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true, // 100% fit in a container
						tabidentify: 'hor_1', // The tab groups identifier
						activate: function(event) { // Callback function if tab is switched
							var $tab = $(this);
							var $info = $('#nested-tabInfo');
							var $name = $('span', $info);
							$name.text($tab.text());
							$info.show();
						}
					});

					// Child Tab
					$('#ChildVerticalTab_1').easyResponsiveTabs({
						type: 'vertical',
						width: 'auto',
						fit: true,
						tabidentify: 'ver_1', // The tab groups identifier
						activetab_bg: '#fff', // background color for active tabs in this group
						inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
						active_border_color: '#c1c1c1', // border color for active tabs heads in this group
						active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
					});

					//Vertical Tab
					$('#parentVerticalTab').easyResponsiveTabs({
						type: 'vertical', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true, // 100% fit in a container
						closed: 'accordion', // Start closed if in accordion view
						tabidentify: 'hor_1', // The tab groups identifier
						activate: function(event) { // Callback function if tab is switched
							var $tab = $(this);
							var $info = $('#nested-tabInfo2');
							var $name = $('span', $info);
							$name.text($tab.text());
							$info.show();
						}
					});
				});
			</script>
				
			</div>
			
		<div class="clearfix"></div>
	</div>
	</div>
</div>
<!-- //contact -->

<!--footer-->
<br><br><br>
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-grid">
			<h3>About Us</h3>
			<p>We aim at providing glib and quick access to food items
			   across canteen alongwith a clear and transparent transaction. </p>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Menu</h3>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="kitchen.php">Beverages</a></li>
				<li><a href="cake.php">Pudding and Desert</a></li>
				<li><a href="comfortmains.php">Comfort Mains</a></li>						 
				<li><a href="codes.php">Others</a></li> 
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grid ">
			<h3>Customer Services</h3>
			<ul>
				<li><a href="shipping.php">Shipping</a></li>
				<li><a href="#">Terms & Conditions</a></li>
				<li><a href="#">Faqs</a></li>
				<li><a href="contact.php">Contact</a></li>					 
				 
			</ul>
		</div>
		<div class="col-md-3 footer-grid">
			<h3>My Account</h3>
			<ul>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Register</a></li>
				<li><a href="wishlist.php">Wishlist</a></li>
				
			</ul>
		</div>
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
<!-- tabs -->
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any width like 600px
			fit: true   // 100% fit in a container
			});
		});				
	</script>
<!-- //tabs -->
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

  
</body>
</html>