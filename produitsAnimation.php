<!DOCTYPE html>
<html>
<head>
<title>Events Change Life plateforme de reservation en ligne</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="ECL platforme de reservation en ligne ... " />
<script type="application/x-javascript"> 
	addEventListener("load", function() 
	{ 
		setTimeout(hideURLbar, 0);
	}, false); 
	
	function hideURLbar(){
		 window.scrollTo(0,1); 
	} 
</script>

<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>
	$(document).ready(function()
	{
		$(".megamenu").megamenu();
	});
</script>

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
		<?php include("php/header.php"); ?>

	<!-- header-section-ends -->
		<?php include("php/Menu.php"); ?>
	<div class="wrap">
		<div class="clearfix"></div>
		</div>
		<div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>ANIMATION</h3>
    		</div>
    		<div class="sort">
    		<p>Trier par:
    			<select>
    				<option>Prix ​​le plus bas</option>
    				<option>Prix ​​le plus élevé</option>
    				<option>En Stock</option>  				   				
    			</select>
    		</p>
    		</div>
			
    	<!-- j'ai efface la div class="show" --> 
		
    		<div class="page-no">
    			<p>Pages :<ul>
    				<li><a href="#">1</a></li>
    				<li class="active"><a href="#">2</a></li>
    				<li><a href="#">3</a></li>
    				<li>[<a href="#"> >>></a >]</li>
    				</ul></p>
    		</div>
    		<div class="clearfix"></div>
    	</div>
	      <div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="single.html"><img src="images/animateur_micro.jpg" alt="" /></a>
					 <h2>Lorem Ipsum is simply </h2>
					 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					 <p><span class="price">505.22 €</span></p>
					  <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="single.html" class="cart-button">Ajouter au panier</a></span> </div>
				     <div class="button"><span><a href="single.html" class="details">Détails</a></span></div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="single.html"><img src="images/animateur_micro.jpg" alt="" /></a>
					 <h2>Lorem Ipsum is simply </h2>
					 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					 <p><span class="price">620.87 €</span></p>
				     <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="single.html" class="cart-button">Ajouter au panier</a></span> </div>
				     <div class="button"><span><a href="single.html" class="details">Détails</a></span></div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="single.html"><img src="images/animateur_micro.jpg" alt="" /></a>
					 <h2>Lorem Ipsum is simply </h2>
					 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					 <p><span class="price">220.97 €</span></p>
				      <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="single.html" class="cart-button">Ajouter au panier</a></span> </div>
				     <div class="button"><span><a href="single" class="details">Détails</a></span></div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="single.html"><img src="images/animateur_micro.jpg"  alt="" /></a>
					 <h2>Lorem Ipsum is simply </h2>
					 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
					 <p><span class="price">415.54 €</span></p>
				      <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="single.html" class="cart-button">Ajouter au panier</a></span> </div>
				     <div class="button"><span><a href="single.html" class="details">Détails</a></span></div>
				</div>
				<div class="clearfix"></div>
	  </div>
	  
			<div class="section group">
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="single.html"><img src="images/animateur_micro.jpg" alt="" /></a>
					 
					 <h2>Lorem Ipsum is simply </h2>
					 <p><span class="price">403.66 €</span></p>
				     <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="single.html" class="cart-button">Ajouter au panier</a></span> </div>
				     <div class="button"><span><a href="single.html" class="details">Détails</a></span></div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="single.html"><img src="images/animateur_micro.jpg" alt="" /></a>
					
					 <h2>Lorem Ipsum is simply </h2>
					 <p><span class="price">621.75 €</span></p>
				      <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="single.html" class="cart-button">Ajouter au panier</a></span></div>
				     <div class="button"><span><a href="single.html" class="details">Détails</a></span></div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
					<a href="single.html"><img src="images/animateur_micro.jpg" alt="" /></a>
					
					 <h2>Lorem Ipsum is simply </h2>
					 <p><span class="price">428.02 €</span></p>
				      <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="single.html" class="cart-button">Ajouter au panier</a></span> </div>
				     <div class="button"><span><a href="single.html" class="details">Détails</a></span></div>
				</div>
				<div class="grid_1_of_4 images_1_of_4">
				 <a href="single.html"><img src="images/animateur_micro.jpg" alt="" /></a>
				 	 <h2>Lorem Ipsum is simply </h2>					 
					 <p><span class="price">457.88 €</span></p>
				      <div class="button"><span><img src="images/cart.jpg" alt="" /><a href="single.html" class="cart-button">Ajouter au panier</a></span> </div>
				     <div class="button"><span><a href="single.html" class="details">Détails</a></span></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		
		<!-- slider avec les prestataires payant leur pub -->
		<?php include("listProduitsPubPayee.php") ?>
		</div>
		
    <!-- footer -->
	 	<?php include("footer.php") ?>	
		
</body>
</html>