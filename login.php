<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>BOX SHOP an E-Commerce online Shopping Category Flat Bootstarp responsive Website Template| Login :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="BOX SHOP Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- start slider -->
<script src="js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<!--end slider -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
				<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo").flexisel({
					visibleItems: 5,
					animationSpeed: 1000,
					autoPlay: true,
					autoPlaySpeed: 3000,    		
					pauseOnHover: true,
					enableResponsiveBreakpoints: true,
			    	responsiveBreakpoints: { 
			    		portrait: { 
			    			changePoint:480,
			    			visibleItems: 1
			    		}, 
			    		landscape: { 
			    			changePoint:640,
			    			visibleItems: 2
			    		},
			    		tablet: { 
			    			changePoint:768,
			    			visibleItems: 3
			    		}
			    	}
			    });
			    
			});
		</script>
		<script type="text/javascript" src="js/jquery.flexisel.js"></script>
</head>
<body>
	<!-- header-section-starts -->
	<?php include("header.php") ?>

		<!-- start header menu -->				
		<?php include("headerMenu.php") ?>	
	
		<!-- start login -->
		<section id="main">
		<div class="login-content">
			<div class="pag-nav">
				<ul class="p-list">
					<li><a href="index.html">Home</a></li> &nbsp;&nbsp;/&nbsp;
					<li class="act">&nbsp;Login</li>
				</ul>
			</div>
			<div class="login-signup-form">
				<div class="col-md-5 login text-center">
					<h4>login</h4>
					<div class="how_to">
						<a href="#"><div class="reg_fb"><img src="images/facebook.png" alt=""><i>Facebook</i><div class="clearfix"></div></div></a>
						<a href="#"><div class="reg_gp"><img src="images/gp.png" alt=""><i>GOOGLE</i><div class="clearfix"></div></div></a>
						<p><img src="images/locked.png" alt="" />Be assured, we do not store your password</p>
					</div>
					<h5>OR</h5>
					<div class="cus_info_wrap">
						<label class="labelTop">
						Email:
						<span class="require">*</span>
						</label>
						<input type="text" value="">
					</div>
					<div class="clearfix"></div>
					<div class="cus_info_wrap">
						<label class="labelTop">
						Password:
						<span class="require">*</span>
						</label>
						<input type="text" value="">
					</div>
					<div class="clearfix"></div>
					<div class="sky-form">
					<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>Remember me on this computer </label>
				</div>
				<div class="botton1">
					<input type="submit" value="SIGNIN" class="botton">
				</div>
				<div class="forgetit">
					<a href="">forgot your password?</a>
					<input type="text" class="text" value="Enter email to reset it" onFocus="this.value = '';" onBlur="if (this.value == 'Enter email to reset it') {this.value = 'Enter email to reset it';}">
					<input type="submit" value="SUBMIT" class="botton">
				</div>
				</div>
				<div class="col-md-5 sign-up text-center">
					<h4>signup</h4>
					<div class="cus_info_wrap">
						<label class="labelTop">
						Email Id:
						<span class="require">*</span>
						</label>
						<input type="text" value="">
					</div>
					<div class="clearfix"></div>
				    <div class="cus_info_wrap">
						<label class="labelTop">
						Password:
						<span class="require">*</span>
						</label>
						<input type="text" value="">
					</div>
					<div class="clearfix"></div><div class="cus_info_wrap">
						<label class="labelTop confirmpass">
						Conform Password:
						<span class="require">*</span>
						</label>
						<input type="text" value="">
					</div>
					<div class="botton1">
					<input type="submit" value="SIGNIN" class="botton">
				</div>
				</div>
				<div class="col-md-2 benefits">
					<h4>Benefits of signup</h4>
					<p>Manage your purchases anytime: Track your order status and print your vouchers</p>
					<p>Quick shopping: no need to fill in your contact and shipping details while buying</p>
					<p>Easy access to member only benefits</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		</div>
		</section>

		<!-- footer -->
	 	<?php include("footer.php") ?>
</body>
</html>