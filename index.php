
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
					autoPlay: false,
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
	<div class="header">
		<div class="top-header">
			<div class="wrap">
				<div class="header-left">
					<ul>
						<li><a href="#">24x7 Service Client </a></li> |
						<li><a href="order.html"> Suivi commande </a></li>
					</ul>
				</div>
				<div class="header-right">
					<ul>
						<li>
							<i class="user"></i>
							<a href="account.php">Mon compte</a>
						</li>
						<li class="login">
							<i class="lock"></i>
							<a href="login.php">Se connecter</a>|
							<a href="login.php">S'identifier</a>			
						</li>
						<li>
							<i class="cart"></i>
							<a href="#">Mon Panier</a>
						</li>
						<li class="last">5</li>
					</ul>					
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
			
		<div class="wrap">
			<div class="header-bottom">
				<div class="logo">
					<a href="index.html"><img src="images/logo.png" class="img-responsive" alt="" /></a>
				</div>
				<div class="search">
					<div class="search2">
					  <form>
						<input type="submit" value="">
						 <input type="text" value="Rechercher un prestataire" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search for a product, category or brand';}"/>
					  </form>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>	
	<!-- header-section-ends -->
	
				<!-- start header menu -->				
				<?php include("headerMenu.php") ?>
				<div class="main-top">
				<div class="col-md-8 banner">
			
				<!-- start slider -->
				
				<!----->
				<div class="slider">	  
					  <div class="callbacks_container">
						  <ul class="rslides" id="slider">
							 <li>
								 <img src="images/slider1.jpg" alt=""/>
							 </li>
							 <li>
								 <img src="images/slider2.jpg" alt=""/>
							 </li>
							 <li>
								 <img src="images/slider3.jpg" alt=""/>
							 </li>
							 <li>
								 <img src="images/slider4.jpg" alt=""/>
							 </li>
						  </ul>	      
					  </div>
				</div>
				<!----->
				<!-- end  slider -->
		   </div>
		   
		   <div class="col-md-4 right-grid">
				<div class="right-grid-top">
					<div class="r-sale text-center">
						<h6>Winter wear</h6>
						<h2>Sale</h2>
					</div>
					<div class="r-discount">
						<span>upto</span>
						<h2>50%</h2>
						<p>OFF</p>
						<a href="#">shop now<i class="go"></i></a>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="right-grid-bottom">
					<div class="right-grid-bottom-left">
						<h3>Deal of the Day</h3>
						<p>Expires in 3:42:56</p>
						<h5>Wireless Headphones</h5>
						<h2>Extra 33% OFF</h2>
						<a href="single.html">shop now<i class="go"></i></a>
					</div>
					<div class="right-grid-bottom-right">
						<img src="images/headset.png" alt="" />
					</div>
					<div class="clearfix"></div>
				</div>
		   </div>
		   <div class="clearfix"></div>
		</div>
		
		<div class="new-arrivals text-center">
			<div class="col-md-3 new-arrival-head">
				<h2>EVENEMENTS FUTURS EN CORSE</h2>			
				<a class="btn btn-1 btn-1d" href="products.html">En savoir plus</a>
			</div>
			<div class="col-md-3 product-item">
				<a href="products.html"><img src="images/foire_bogognano.jpg" class="img-responsive" alt="" /></a>
				<h3>Foire de Bocognano</h3>
				<a href="single.html">Découvrir<i class="go"></i></a>
			</div>
			<div class="col-md-3 product-item">
				<a href="products.html"><img src="images/carnaval.jpg" class="img-responsive zoom-img" alt="" /></a>
				<h3>Carnaval de Sartene</h3>
				<a href="single.html">Découvrir<i class="go"></i></a>
			</div>
			<div class="col-md-3 product-item">
				<a href="products.html"><img src="images/calvi.jpg" class="img-responsive zoom-img" alt="" /></a>
				<h3>Calvi on the Rocks</h3>
				<a href="single.html">Découvrir<i class="go"></i></a>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="best-sellers">
			<div class="best-sellers-head">
				<h3>Populaires</h3>
			</div>
			<div class="best-sellers-menu">
				<ul> 
				<!-- c'est pareil ici pour un nom long ca depasse le cadre  -->
					<li><a class="active" href="#">Animation</a></li>
					<li><a href="#">Music</a></li>
					<li><a href="#">Spectacle de Rue</a></li>
					<li><a href="#">Autres</a></li>
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="device">
			<div class="course_demo">
		          <ul id="flexiselDemo">	
					<li>
						<div class="ipad text-center">
							<img src="images/magicien.JPG" alt="" />
							<h3>150 €</h3>
							<p>Magicien</p>																
							<ul>
								<li><i class="cart-1"></i></li>
								<li><a class="cart" href="#">Ajouter au panier</a></li>
							</ul>
							<div class="clearfix"></div>
							<ul>
								<li><i class="heart"></i></li>
								<li><a class="cart" href="#">Réserver</a></li>
							</ul>
					  </div>
					</li>
					<li>
						<div class="ipad text-center">
							<img src="images/contorsionniste.jpg" alt="" />
							<h3>275 €</h3>
							<!-- il faut voir quand le nom est trop long il s'encadre plus dans le cadre
							Contorsionniste - nom trop long donc pas bon affichage
							a voir plus tard quand on lis les donnees depuis la base de donnnee .. une condition a mettre
							 -->
							<p>Contorsio...</p>																
							<ul>
								<li><i class="cart-1"></i></li>
								<li><a class="cart" href="#">Ajouter au panier</a></li>
							</ul>
							<div class="clearfix"></div>
							<ul>
								<li><i class="heart"></i></li>
								<li><a class="cart" href="#">Réserver</a></li>
							</ul>
					  </div>
					</li>	
					<li>
					<div class="ipad text-center">
							<img src="images/maquillage_enfant.jpg" alt="" />
							<h3>90 €</h3>
							<p>Maquilleuse</p>																
							<ul>
								<li><i class="cart-1"></i></li>
								<li><a class="cart" href="#">Ajouter au panier</a></li>
							</ul>
							<div class="clearfix"></div>
							<ul>
								<li><i class="heart"></i></li>
								<li><a class="cart" href="#">Réserver</a></li>
							</ul>
					  </div>
					</li>	
					<li>
						<div class="ipad text-center">
							<img src="images/clown.jpg" alt="" />
							<h3>50 €</h3>
							<p>Clown</p>																
							<ul>
								<li><i class="cart-1"></i></li>
								<li><a class="cart" href="#">Ajouter au panier</a></li>
							</ul>
							<div class="clearfix"></div>
							<ul>
								<li><i class="heart"></i></li>
								<li><a class="cart" href="#">Réserver</a></li>
							</ul>
					  </div>
					</li>	
					<li>
					<div class="ipad text-center">
							<img src="images/musicien.jpg" alt="" />
							<h3>150 €</h3>
							<p>Musicien</p>																
							<ul>
								<li><i class="cart-1"></i></li>
								<li><a class="cart" href="#">Ajouter au panier</a></li>
							</ul>
							<div class="clearfix"></div>
							<ul>
								<li><i class="heart"></i></li>
								<li><a class="cart" href="#">Réserver</a></li>
							</ul>
					  </div>
					</li>							    	  	       	   	  									    	  	       	   	    	
				</ul>
	  </div>
	  </div>
	  <div class="clients">
		<div class="course_demo1">
		          <ul id="flexiselDemo1">	
					<li>
						<div class="client">
							<img src="images/c1.jpg" alt="" />
						</div>
					</li>
					<li>
					    <div class="client">
							<img src="images/c2.jpg" alt="" />
						</div>
					</li>	
					<li>
					    <div class="client">
							<img src="images/c4.jpg" alt="" />
						</div>
					</li>	
					<li>
					    <div class="client">
							<img src="images/c3.jpg" alt="" />
						</div>
					</li>	
					<li>
						<div class="client">
							<img src="images/c5.jpg" alt="" />
						</div>
					</li>	
					<li>
						<div class="client">
							<img src="images/c6.jpg" alt="" />
						</div>
					</li>
					<li>
						<div class="client">
							<img src="images/c7.jpg" alt="" />
						</div>
					</li>
				</ul>
		</div>
			<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
				<script type="text/javascript">
			$(window).load(function() {
				$("#flexiselDemo1").flexisel({
					visibleItems: 7,
					animationSpeed: 1000,
					autoPlay: false,
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
</div>
		<div class="transport-grid">
			<div class="col-md-4 shipping">
				<h3><i class="shipping-icon"></i>Free Shipping</h3>
				<p>Syphogrants called into the council chamber, and these are changed every day. It is a fundamental rule of their government,</p>
			</div>
			<div class="col-md-4 shipping">
				<h3><i class="correct-icon"></i>100 % Original</h3>
				<p>Syphogrants called into the council chamber, and these are changed every day. It is a fundamental rule of their government,</p>
			</div>
			<div class="col-md-4 return">
				<h3><i class="return-icon"></i>Free Return</h3>
				<p>Syphogrants called into the council chamber, and these are changed every day. It is a fundamental rule of their government,</p>
			</div>
			<div class="clearfix"></div>
		</div>
	  </div>

	<!-- footer --> 
	<?php include("footer.php") ?>
	
</body>
</html>