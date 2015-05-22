
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

<script type="text/javascript">
	    function checkPassword(){

            password1 = document.form1.password1.value
            password2 = document.form1.password2.value
     
            if (password1 == password2){
                alert("Compte crée avec succès!");
                return true;
            }
            else{
                alert("Les mots de passe ne sont pas pareils. Merci de les vérifier.");
                return false;          
            }
    	}

    	//Funcion para comprobar €-m@!L
	    function validarEmail(email) {
	    	expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	    	if ( !expr.test(email) ){
	    		return "false";
            }else{
              return "true";
            }
	    }


</script>
<style>
    .error {font-weight: bold; color:red;}
</style>

</head>
<body>
	<!-- header-section-starts -->
	<?php include("header.php"); ?>
	
		<div class="wrap">
			
		</div>
		<!-- start registration -->
		<section id="main">
	<div class="content">
		<div class="pag-nav">
			<ul class="p-list">
				<li><a href="index.php">Home</a></li> &nbsp;&nbsp;/&nbsp;
				<li class="act">&nbsp;Register</li>
			</ul>
		</div>
		<div class="coats">
			<h3 class="c-head">CREER VOTRE COMPTE <br/>Events Change Life</h3>
			<p>Lorem ipsum dolor sit amet enim. Etiam ullamcorp uspendisse a pellentesque.</p>
		</div>
		<div class="register">
		<div class="register-but">
	  	  <form name="form1" onsubmit="return checkPassword();" ACTION="MySQL/signUp_Insert.php" METHOD="GET"> 
			 <div class="register-top-grid">
			
				 <div>
					<span>Nom*</span>
					<input type="text" name="nom" value="" id="nom" placeholder="" autofocus required /> 
				 </div>
				 <div>
					<span>Prenom*</span>
					<input type="text" name="prenom" value="" id="prenom" placeholder="" required /> 
				 </div>
				 <div>
					 <span>Adresse e-mail*</span>
					 <input type="text" size="40" name="email" id="email" value="" placeholder="Merci d'écrire un e-mail valide." onfocus="this.value = '';" onblur = "if (validarEmail(this.value) == 'false'){this.value=''};" autofocus required />
				 </div>
				 <div>
					 <span>Nom d'utilisateur*</span>
					 <input type="text" name="utilisateur" value="" id="utilisateur" placeholder="" required /> 
				 </div>
				  <div class="clearfix"></div>
		     </div>
				 
			<div class="clearfix"></div>
				<div class="sgn">
				<label for="sexe">Homme</label><input type="radio" name="sexe" title="Male" value="1" id="sexe" class="radio" required/>
				</div>
				<div class="sgn">
				<label for="sexe">Femme</label><input type="radio" name="sexe" title="Female" value="2" id="sexe" class="radio" required/>
				</div>
			<div class="clearfix"></div>
			     <div class="register-bottom-grid">
					  
						 <div>
							<span>Créez un mot de passe*</span>
							<input type="password" name="password1" id="password1" required />
						 </div>
						 <div>
							<span>Confirmez votre mot de passe*</span>
							<input type="password" name="password2" id="password2" required />
						 </div>
				 </div>
				 <input type="submit" value="Valider">
				   	<div class="clearfix"> </div>
			</form>
		</div>
			<div class="clearfix"> </div>
			<div class="register-but">
			   <a href="index.php">Annuler<i class="go"></i></a>
			   <br/>
			   <p>* Champs obligatoires.</p>
			</div>
	   </div>
	</div>
	</div>
	</div>
		</div>
	 </div>

	 <?php include("footer.php"); ?>
</body>
</html>