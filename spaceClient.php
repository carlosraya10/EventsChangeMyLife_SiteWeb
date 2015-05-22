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
	<style>
    .error {font-weight: bold; color:red;}
    .mensaje {color:#030;}
    .listadoImagenes img {border:1px solid #ccc; padding:2px;margin:2px;}
    </style>
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
                	if(password2!=''){
                		alert("Le mot de passe à bien été mise à jour.");
                	}
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
              document.location.href="spaceClient_delete.php";
            }
            
            else{
              // si pulsamos en cancelar
              //alert('Has dicho que no');
            }
          }
      </script>
	</head>
	<body>
		<?php include("header.php"); ?>		
		
		<div class="wrap">
			<!-- start header menu -->
	<?php
	//Montrer le menu_client si connecté
	require_once("sesion.class.php");
	$sesion = new sesion();
	$user = $sesion->get("user");
	if( $user == false )
	{
	}
	else 
	{
		include("menu_client.php");
	}
	?>


<?php
//On créé la connexion
    require_once 'mysql/Singleton_Database.class.php';
    //On accede à la méthode singleton qui va créer une instance de notre classe
	$newSingleton = SingletonPattern::singleton();

			//Seleccionamos el id_photo del usuario actual desde PEOPLE_PHOTOS
			$res = "SELECT * FROM PEOPLE_PHOTOS where id_people = (SELECT id_people from PEOPLE where username = '$user' or email='$user');";
			$idphoto = $newSingleton->query($res);
			foreach ($idphoto as $row):
				$idphoto = $row["id_photo"];
				//echo "idphoto = ".$idphoto;
			endforeach;

	//**************************IMAGENES**************************
			//Elimina errores si los hay en el if
			error_reporting (0);
# Comprovamos que se haya subido un fichero
if (is_uploaded_file($_FILES["userfile"]["tmp_name"]))
{
    # verificamos el formato de la imagen
    if ($_FILES["userfile"]["type"]=="image/jpeg" || $_FILES["userfile"]["type"]=="image/pjpeg" || $_FILES["userfile"]["type"]=="image/gif" || $_FILES["userfile"]["type"]=="image/bmp" || $_FILES["userfile"]["type"]=="image/png")
    {
        # Cogemos la anchura y altura de la imagen
        $info=getimagesize($_FILES["userfile"]["tmp_name"]);
        //echo "<BR>".$info[0]; //anchura
        //echo "<BR>".$info[1]; //altura
        //echo "<BR>".$info[2]; //1-GIF, 2-JPG, 3-PNG
        //echo "<BR>".$info[3]; //cadena de texto para el tag <img

        # Escapa caracteres especiales
        $imagenEscapes=mysql_real_escape_string(file_get_contents($_FILES["userfile"]["tmp_name"]));

        # Actualizamos la imagen a la base de datos
			//on accede au méthode "query2"
			$res = "UPDATE PHOTOS SET photo='$imagenEscapes' WHERE id_photo='$idphoto';";
			$usuario = $newSingleton->query2($res);
    }else{
        echo "<div class='error'>Error: Le format du fichier doit être JPG, GIF, BMP ou PNG.</div>";
    }
}

//****************Recuperamos datos de people******************
	$res2 = "SELECT * FROM PEOPLE where username = '$user' or email = '$user';";
	$datos = $newSingleton->query1($res2);
	foreach ($datos as $row2):
		$_id_people = $row2["id_people"];
		$_fname = $row2["fname"];
		$_lname = $row2["lname"];
		$_email = $row2["email"];
		$_sex = $row2["sex"];
		if ($_sex == "h"){
			$_sex = "Homme";
		}else{
			$_sex = "Femme";
		}
		$_username = $row2["username"];
	endforeach;
//****************Insertamos si no estan vacios******************
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password1 = $_POST['password1'];
	$password2 = $_POST['password2'];
	if (!empty($fname)){
		$res = "UPDATE PEOPLE SET fname='$fname' WHERE username='$user' or email = '$user';";
		$usuario = $newSingleton->query2($res);
		$_fname = $fname;
	}
	if (!empty($lname)){
		$res = "UPDATE PEOPLE SET lname='$lname' WHERE username='$user' or email = '$user';";
		$usuario = $newSingleton->query2($res);
		$_lname = $lname;
	}
	if (!empty($email)){
		$res = "UPDATE PEOPLE SET email='$email' WHERE username='$user' or email = '$user';";
		$usuario = $newSingleton->query2($res);
		$_email = $email;
	}
	if (!empty($username)){
		$res = "UPDATE PEOPLE SET username='$username' WHERE username='$user' or email = '$user';";
		$usuario = $newSingleton->query2($res);
		$_username = $username;
	}
	if (!empty($password1)){
		$res = "UPDATE PEOPLE SET pass='$password1' WHERE username='$user' or email = '$user';";
		$usuario = $newSingleton->query2($res);
	}
?>

			<!-- start account -->
			<div class="login-page">
				    <div class="dreamcrub">
				   <div class="account_grid">
				   <!--Premier carreau-->
				   <div class="col-md-6 login-right">
				  	 <h3>METTRE A JOUR MON PROFIL</h3>
				  	 <div class="available">
					 	<FORM enctype="multipart/form-data" name='frmUpdate' id='frmUpdate' action='<?php echo $_SERVER["PHP_SELF"]?>' onsubmit="return checkPassword();" method='POST'>
					 	<div>
				      		<span>Changer ma photo de profil</span>
				          	<input name="userfile" type="file" />
				        </div>
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
				      	</div>
				      	<br/><br/><br/>
				      	<span><a href="javascript:confirmar();">Supprimer compte</a></span>
						
				   </div>

				   <!--Deuxième carreau-->

				   <div class="col-md-6 login-right">
				  	<h3>MON PROFIL</h3>
				  	<p>
<div class="listadoImagenes"><center>
    <?php
    //On montre tous les photos
			 $res = "SELECT * FROM PHOTOS where id_photo = '$idphoto';";
			 $usuario = $newSingleton->query1($res);
	  //echo "idphoto = ".$idphoto;
	  echo "<img src='mysql/imagen_mostrar.php?id=$idphoto'/>";
    ?>
</div></center>
<p>
<div class="available">
<form name="frmLogin" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="identfrm" autocomplete="on">
					  <div>
						<span>Prénom : </span>
						<p><?= $_fname ?></p>
					  </div>
					  <div>
						<span>Nom : </span>
						<p><?= $_lname ?></p>
					  </div>
					  <div>
						<span>E-mail : </span>
						<p><?= $_email ?></p>
					  </div>
					  <div>
						<span>Sexe : </span>
						<p><?= $_sex ?></p>
					  </div>
					  <div>
						<span>Nom d'utilisateur : </span>
						<p><?= $_username ?></p>
					  </div>
				    </form>
				    </div>
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



<!--
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
-->
	<?php
	}//else (SY ESTA LOGUEADO)
?>