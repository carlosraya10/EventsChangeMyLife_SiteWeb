<?php
	//VEFIFIER SI L'UTILISATEUR EST LOGIN
	require_once("sesion.class.php");
	$sesion = new sesion();
	$user = $sesion->get("user");
	if( $user == false )
	{
		header("Location: account.php");
	}
	else 
	{
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


			<!--Scripts de validation des données-->
			<!-- funcion para comprobar contrasenias -->
      <script type="text/javascript">
          function checkPassword(){
                password1 = document.frmUpdate.password1.value
                password2 = document.frmUpdate.password2.value
                if (password1 == password2){
                    return true;
                }
                else{
                    alert("Les mots de passe ne sont pas pareils. Merci de les vérifier.");
                    return false;          
                }
          }
    //Funcion para comprobar €-m@!L
          function validarEmail( email ) {
            expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            if ( !expr.test(email) ){
                alert("Erreur: L'adresse e-mail <<" + email + ">> n'est pas valide. Merci d'écrire un e-mail valide.")
                return "false";
            }else{
              return "true";
            }
          }
    //Funcion para confirmar el borrado de cuenta
          function confirmar()
          {
            respuesta = confirm("Etes-vous sûr de supprimer votre compte? Cette operation ne pourra pas être annulée.");
            if (respuesta){
              // si pulsamos en aceptar
              //alert('Has dicho que si');
              document.location.href="php/MySQL/cuenta_delete.php";
            }
            
            else{
              // si pulsamos en cancelar
              //alert('Has dicho que no');
              document.location.href="spaceClient.php";
            }
          }
      </script>
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
				   <!--Premier carreau-->
				   <div class="col-md-6 login-right">
				  	 <h3>METTRE A JOUR MON PROFIL</h3>
					 	<FORM name='frmUpdate' id='frmUpdate' action='php/MySQL/cuenta_update.php' onsubmit="return checkPassword();" method='GET'>
					 	<div>
				      		<span>Changer prénom</span>
				          	<input type="text" size="40" name="fname" id="fname" value="" placeholder="Prénom" autofocus  />
				        </div>
				        <div>
				          <span>Changer nom</span>
				          <input type="text" size="40" name="lname" id="lname" value="" placeholder="Nom" autofocus  />
				        </div>
				        <div>
				          <span>Changer courrier électronique</span>
				          <input type="text" size="40" name="email" id="email" value="" placeholder="Courrier électronique - Email" onfocus="this.value = '';" onblur = "if (validarEmail(this.value) == 'false'){this.value=''};" autofocus  />
				        </div>
				        <div>
				          <!--<p>Le SEXE ne peut pas être changé</p>
				          <p>Homme - Femme</p>      <input type="radio" name="sex" id="sex" title="Male" value="h" />                 <input type="radio" name="sex" id="sex" title="Female" value="f" />-->

				          <span>Utilisateur*</span>
				          <input type="text" size="40" name="username" id="username" value="" placeholder="L'utilisateur ne peut pas être changé" onblur = "if (this.value != '') {this.value=''};"/>
				        </div>
				        <div>
				          <span>Changer mot de passe</span>
				          <input type="password" size="40" name="password1" id="password1" value="" placeholder="Mot de passe"  />
				        </div>
				        <div>
				            <span>Confirmez votre nouveau mot de passe</span>
				          <input type="password" size="40" name="password2" id="password2" value="" placeholder="Confirmez votre mot de passe*" />
				        </div>
				          <span class="pull-right"><input type="submit" name="btnOk" id="btnOk" value="Mettre à jour"></span>
				      	</FORM>
				      	<br/><br/><br/>
				      	<span><a href="javascript:confirmar();">Supprimer compte</a></span>
						
				   </div>


				   <!--Deuxième carreau-->

				   <div class="col-md-6 login-right">
				  	<h3>MON PROFIL</h3>
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




	<!DOCTYPE html>
	<html lang = "fr">
		<head>
			<meta charset = "UTF-8"/>
			<link href="css/styles.css" type="text/css" rel="stylesheet" />
			<title>Bonjour, <?= $user; ?></title>
		</head>
		<body style="background-color:#E0ECF8">
			<section id="frmSection">
			<fieldset>
			<legend id="mainLegend"><h1>Tu es connecté(e)</h1></legend>
			<p>Bienvenue <?= $user; ?>, maintenant tu es connecté(e) sur le site.</p>
			<a href="fermerSession.php"> Me déconnecter </a>
			</fieldset>
			</section>
		</body>
	</html>
	<?php 
	}//else (SY ESTA LOGUEADO)
?>