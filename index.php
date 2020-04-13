<?php 
	session_start(); 

	if (!isset($_SESSION['customer_email'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}


?>
<!DOCTYPE html>

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
					<li><a href="logout.php" ><i class="fa fa-user" aria-hidden="true"></i>Logout</a></li>
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
						    <!-- notification message -->
						    <?php if(isset($_SESSION['success'])): ?>
						    	<?php 
						    		echo $_SESSION['success'];
						    		unset($_SESSION['success']);
						    	?>	
						    <?php endif?>
						    <?php  if (isset($_SESSION["customer_email"])): ?>
							<li class="active "><a class="hyper ">Hi, <?php echo $_SESSION['customer_email']; ?></a></li>
							
							<?php endif?>	
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
<div data-vide-bg="video/video">
    <div class="container">
		<div class="banner-info">
			<h3><strong>Whatever your occasion, Click When Hungry</strong> makes it one to remember!</h3>	
			<div class="search-form">
				<form action="result.php" method="post">
					<input type="text" placeholder="search" name="search">
					<input type="submit" value=" " >
				</form>
			</div>		
		</div>	
    </div>
</div>

    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>
    <script src="js/jquery.vide.min.js"></script>

<!--content-->
<div class="content-top ">
	<div class="container ">
		<div class="spec ">
			<h3>ALL DAY BREAKFAST</h3> 
			<div class="ser-t">
				<b></b>
				<span><i></i></span>
				<b class="line"></b>
			</div>
		</div>
			<div class="tab-head ">
							
                <?php include('Connections/MyConnection.php');
	                mysqli_select_db($db, "ecommerce");
	   			    $products=mysqli_query($db, "SELECT * FROM products") or die(mysqli_error());
	                while($row_products = mysqli_fetch_array($products)){ 
	              ?>
							<div class="col-md-3 pro-1">
								<div class="col-m">
								<a href="#" data-toggle="modal" data-target="<?php echo "#";?><?php echo $row_products["image_id"];?>" class="offer-img">
										<img src="<?php echo $row_products["product_image"];?>" class="img-responsive" alt="">
									</a>
                                    
                                       <div class="mid-1">
										<div class="women">
                                    
                                    <h6><a class="employee_details" href="single.php?id=<?php echo $row_products["product_id"];?>">
									<?php echo $row_products["product_title"];?>
									</a></h6>
                                   
											
                                            							
										</div>
										<div class="mid-2">
											<p ><em class="item_price">Rs <?php echo $row_products["product_price"];?></em></p>
											  <div class="block">
												<div class="starbox small ghosting"> </div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="<?php echo $row_products["product_id"];?>" data-name="<?php echo $row_products["product_title"];?>" data-summary="summary 24" data-price="<?php echo $row_products["product_price"];?>" data-quantity="1" data-image="<?php echo $row_products["product_image"];?>">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
                            
             <form action ="single.php" id="testform" method="post">
                                    <input type="hidden" name="product_desc" value="<?php echo $row_products["product_desc"];?>" />
                                    <input type="hidden" name="product_id" value="<?php echo $row_products["product_id"];?>" />
                                    </form>
             
                            
			<div class="modal fade" id="<?php echo $row_products["image_id"];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="<?php echo $row_products["product_image"];?>" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3><?php echo $row_products["product_title"];?></h3>
									<p class="in-para"> <?php echo $row_products["product_desc"];?></p>
									<div class="price_single">
									  <span class="reducedfrom ">Rs <?php echo $row_products["product_price"];?></span>
									
									 <div class="clearfix"></div>
									</div>
								
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="<?php echo $row_products["product_id"];?>" data-name="<?php echo $row_products["product_title"];?>" data-summary="summary 24" data-price="<?php echo $row_products["product_price"];?>" data-quantity="1" data-image="<?php echo $row_products["product_image"];?>">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
							
							<?php }?>
		
	</div>
	</div>
	</div>
	
	

<!--content-->
<div class="content-mid">
	<div class="container">
		
		<div class="col-md-4 m-w3ls">
			<div class="col-md1 ">
				<a href="kitchen.php">
					<img src="images/co1.jpg" class="img-responsive img" alt="">
					<div class="big-sa">
						<h3>Spi<span>ces </span></h3>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 m-w3ls1">
			<div class="col-md ">
				<a href="comfortmains.php">
					<img src="images/co.jpg" class="img-responsive img" alt="">
					<div class="big-sale">
						<div class="big-sale1">
							<h3>&nbsp;&nbsp;Loving <span>IT!</span></span></h3>
						
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="col-md-4 m-w3ls">
			<div class="col-md2 ">
				<a href="kitchen.php">
					<img src="images/co2.jpg" class="img-responsive img1" alt="">
					<div class="big-sale2">
						<h3>Cooking <span>Oil</span></h3>	
					</div>
				</a>
			</div>
			<div class="col-md3 ">
				<a href="comfortmains.php">
					<img src="images/co3.jpg" class="img-responsive img1" alt="">
					<div class="big-sale3">
						<h3>Vegeta<span>bles</span></h3>
					</div>
				</a>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!--content-->
  <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
         <a href="kitchen.php"> <img class="first-slide" src="images/1.jpg" alt="First slide"></a>
       
        </div>
        <div class="item">
         <a href="kitchen.php"> <img class="second-slide " src="images/2.jpg" alt="Second slide"></a>
         
        </div>
        <div class="item">
          <a href="kitchen.php"><img class="third-slide " src="images/3.jpg" alt="Third slide"></a>
          
        </div>
      </div>
    
    </div><!-- /.carousel -->

<!--content-->
	<div class="product">
		<div class="container">
			<div class="spec ">
				<h3>Special Offers</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
			</div>
				<div class=" con-w3l">
								
                <?php while($row_product = mysqli_fetch_assoc($products)){ ?>
							<div class="col-md-3 pro-1">
								<div class="col-m">
								<a href="#" data-toggle="modal" data-target="<?php echo "#";?><?php echo $row_product["image_id"];?>" class="offer-img">
										<img src="<?php echo $row_product["product_image"];?>" class="img-responsive" alt="">
									</a>
                                    
                                       <div class="mid-1">
										<div class="women">
                                    
                                    <h6><a class="employee_details" href="single.php?id=<?php echo $row_product["product_id"];?>">
									<?php echo $row_product["product_title"];?>
									</a></h6>
                                   
											
                                            							
										</div>
										<div class="mid-2">
											<p ><em class="item_price">Rs <?php echo $row_product["product_price"];?></em></p>
											
											  <div class="block">
												<div class="starbox small ghosting"></div>
											</div>
											<div class="clearfix"></div>
										</div>
											<div class="add">
										   <button class="btn btn-danger my-cart-btn my-cart-b" data-id="<?php echo $row_product["product_id"];?>" data-name="<?php echo $row_product["product_title"];?>" data-summary="summary 24" data-price="<?php echo $row_product["product_price"];?>" data-quantity="1" data-image="<?php echo $row_product["product_image"];?>">Add to Cart</button>
										</div>
									</div>
								</div>
							</div>
                            
             <form action ="single.php" id="testform" method="post">
                                    <input type="hidden" name="product_desc" value="<?php echo $row_product["product_desc"];?>" />
                                    <input type="hidden" name="product_id" value="<?php echo $row_product["product_id"];?>" />
                                    </form>
             
                            
			<div class="modal fade" id="<?php echo $row_product["image_id"];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body modal-spa">
								<div class="col-md-5 span-2">
											<div class="item">
												<img src="<?php echo $row_product["product_image"];?>" class="img-responsive" alt="">
											</div>
								</div>
								<div class="col-md-7 span-1 ">
									<h3><?php echo $row_product["product_title"];?></h3>
									<p class="in-para"> <?php echo $row_product["product_desc"];?></p>
									<div class="price_single">
									  <span class="reducedfrom ">Rs <?php echo $row_product["product_price"];?></span>
									
									 <div class="clearfix"></div>
									</div>
									 <div class="add-to">
										   <button class="btn btn-danger my-cart-btn my-cart-btn1 " data-id="<?php echo $row_product["product_id"];?>" data-name="<?php echo $row_product["product_title"];?>" data-summary="summary 24" data-price="<?php echo $row_product["product_price"];?>" data-quantity="1" data-image="<?php echo $row_product["product_image"];?>">Add to Cart</button>
										</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
							
							<?php }?>
					
		</div>
	</div>
</div>

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
      currencySymbol: '$',
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      classProductQuantity: 'my-product-quantity',
      classProductRemove: 'my-product-remove',
      classCheckoutCart: 'my-cart-checkout',
      affixCartIcon: true,
      showCheckoutModal: true,
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      clickOnCartIcon: function($cartIcon, products, totalPrice, totalQuantity) {
        console.log("cart icon clicked", $cartIcon, products, totalPrice, totalQuantity);
      },
      checkoutCart: function(products, totalPrice, totalQuantity) {
        var checkoutString = "Total Price: " + totalPrice + "\nTotal Quantity: " + totalQuantity;
        checkoutString += "\n\n id \t name  \t price \t quantity \t image path";
		
        $.each(products, function(){
          checkoutString += ("\n " + this.id + " \t " + this.name + " \t " + this.price + " \t " + this.quantity + " \t " + this.image);
		  console.log("yo yo pande", this.id,this.name,this.price);
	      $.post("cart.php", {pid:this.id,pname:this.name,pq:this.quantity,prodaprice:this.price,pi:this.image});	   
        });
       
		  function pageRedirect() {

       window.location.replace("http://localhost/CMS1/checkout.php");

       }      
       pageRedirect();
    //setTimeout("pageRedirect()", 0);
        console.log("checking out", products,checkoutString, totalPrice, totalQuantity);
      },
      getDiscountPrice: function(products, totalPrice, totalQuantity) {
        console.log("calculating discount", products, totalPrice, totalQuantity);
        return totalPrice * 1;
      }
    });

  });
  </script>
  
</body>
</html>
