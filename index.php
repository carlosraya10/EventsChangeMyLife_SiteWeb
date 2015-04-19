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
<meta name="keywords" content="ECL ... " />
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
	<?php include("php/header.php"); ?>
	<!-- header-section-ends -->
	
				<!-- start header menu -->				
				<?php include("php/Menu.php") ?>
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
					<p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié.</p>
				</div>
				<div class="right-grid-bottom">
					<div class="right-grid-bottom-left">
						<h3>JEU CONCOURS</h3>
						<p>Valable 3:42:56</p>
						<h5>Quizz</h5>
						<h2>Inscription gratuite</h2>
						<a href="single.html">Je m'inscris<i class="go"></i></a>
					</div>
					<div class="right-grid-bottom-right">
						<img src="images/jeu_concours.png" alt="" />
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
		
		
		<!-- slider avec les prestataires payant leur pub -->
		<?php include("listProduitsPubPayee.php") ?>
		
		
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
				<h3><i class="shipping-icon"></i>Service à domicile</h3>
				<p>Syphogrants called into the council chamber, and these are changed every day. It is a fundamental rule of their government,</p>
			</div>
			<div class="col-md-4 shipping">
				<h3><i class="correct-icon"></i>100 % garantie</h3>
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
		<?php include("php/footer.php") ?>		
		
</body>
</html>