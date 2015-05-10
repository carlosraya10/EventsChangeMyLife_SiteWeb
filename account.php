<?php
require_once("login.php");
?>

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
	<?php include("header.php"); ?>
	
	
	<div class="wrap">
		<!-- start header menu -->
		<!-- ?php include("Menu.php"); ?> -->

		<!-- start account -->
		<div class="login-page">
			    <div class="dreamcrub">
			   <div class="account_grid">
			   <div class="col-md-6 login-left">
			  	 <h3>DEVENIR MEMBRE GRATUITEMENT</h3>
				 <p>Créer un compte sur notre portail vous permet d'effectuer le paiement plus rapide, stocker des adresses d'expédition multiples, consulter et suivre vos commandes dans votre compte et plus encore.</p>
				 <a class="acount-btn" href="SignUp.php">Creer un compte</a>
			   </div>
			   <div class="col-md-6 login-right">
			  	<h3>SE CONNECTER</h3>
				<p>Si vous êtes déjà membre, veuillez vous connecter.</p>
				<form name="frmLogin" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="identfrm" autocomplete="on">
				  <div>
				  <p class="required"><?= $msg ?></p>
					<span>Utilisateur*</span>
					<input type="text" size="40" name="user" value="" id="user" placeholder="Votre login" autofocus required />
				  </div>
				  <div>
					<span>Mot de passe*</span>
					<input type="password" size="40" autocomplete="off" name="pass" value="" id="pass" placeholder="Mot de passe" required />
				  </div>
				  <p class="required">* Champs obligatoires</p>
				  <a class="forgot" href="#">Mot De Passe Oublié?</a>
				  <input type="submit" name="btnOk" value="OK" id="btnOk" />
			    </form>
			   </div>	
			   <div class="clearfix"> </div>
			 </div>
		   </div>
</div>
		</div>
		
	<!-- footer -->
	 <?php include("footer.php") ?>
</body>
</html>