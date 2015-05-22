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
		//Elimina errores si los hay en el if
		error_reporting (0);
		$currentIdAd = $_GET['currentIdAd'];
		$finalprice = $_GET['finalprice'];
		
			
//On créé la connexion
    require_once 'mysql/Singleton_Database.class.php';
    //On accede à la méthode singleton qui va créer une instance de notre classe
	$newSingleton = SingletonPattern::singleton();

			//Seleccionamos el id_people del usuario actual desde PEOPLE
				$res = "SELECT id_people from PEOPLE where username = '$user' or email='$user';";
				$idpeople = $newSingleton->query($res);
				foreach ($idpeople as $row):
					$idpeople = $row["id_people"];
					//echo "idpeople = ".$idpeople;
				endforeach;

			//Recuperamos datos desde ADS del anuncio actual
				$res = "SELECT * FROM ADS where id_ad = $currentIdAd;";
				//$res = "SELECT * FROM ADS where id_people = (SELECT id_people from PEOPLE where username = '$user' or email='$user') ORDER BY id_ad ASC;"; //ASC porque recorre todos y termina en el ultimo
				$datosAD = $newSingleton->query($res);
				foreach ($datosAD as $row):
					$_id_sub2category = $row["id_sub2category"];
					$_title = $row["title"];
					$_description = $row["description"];
					$_price = $row["price"];
					$_iso = $row["iso"];
					$_address = $row["address"];
					$_cellphone = $row["cellphone"];
					$_phone = $row["phone"];
					$_availability = $row["availability"];
					$_move = $row["move"];
					$_rating = $row["rating"];
				endforeach;
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
	<script src="js/AjaxCode.js"></script>
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
      <script type="text/javascript">

    //Funcion para comprobar Prix
          function validarHeures( heures ) {
            expr = /^([0-9]{0,1})+$/; //{0,1} quiere decir que cualquiera de los caracteres permitidos en nuestro campo, repetidos de 0 a 10 veces.
            if ( !expr.test(heures) ){
                alert("Erreur: Ecrivez de numéros uniquement. Par ex: 3");
                return "false";
                var miVariableJS =0;
                var horas = heures;
			    miVariableJS='<?php echo $_price ?>';
			    miVariableJS = miVariableJS * horas;
			    document.location.href="spaceClient_ad_selection.php?finalprice="+miVariableJS;
            }else{
              return "true";
            }
          }
    //Funcion para comprobar phone
          function validarCellphone( cellphone ) {
            expr = /^([0-9]{0,10})+$/; //{0,1} quiere decir que cualquiera de los caracteres permitidos en nuestro campo, repetidos de 0 a 10 veces.
            if ( !expr.test(cellphone) ){
                alert("Erreur: Ecrivez de numéros uniquement. Par ex: 0610203040");
                return "false";
            }else{
              return "true";
            }
          }

    //Funcion para confirmar el borrado
          function confirmar()
          {
            respuesta = confirm("Etes-vous sûr de supprimer cette annonce? Cette operation ne pourra pas être annulée.");
            if (respuesta){
              // si pulsamos en aceptar
              

              	var miVariableJS ="Asignado en JS";
			    miVariableJS='<?php echo $currentIdAd ?>';
			    document.location.href="spaceClient_ad_delete.php?currentIdAd="+miVariableJS;


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


	//**************************IMAGENES**************************
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
			$res = "UPDATE ADS SET photo='$imagenEscapes' WHERE id_ad='$currentIdAd';";
			$usuario = $newSingleton->query2($res);
    }else{
        echo "<div class='error'>Error: Le format du fichier doit être JPG, GIF, BMP ou PNG.</div>";
    }
}

?>

			<!-- start account -->
			<div class="login-page">
				    <div class="dreamcrub">
				   <div class="account_grid">
				   <!--Premier carreau-->
				   <div class="col-md-6 login-right">
				  	 <h3>CONTACTER LE PRESTATAIRE</h3>
				  	 <div class="available">
				  	 <FORM enctype="multipart/form-data" name='frmUpdate' id='frmUpdate' action='spaceClient_ad.php?currentIdAd=<?=$currentIdAd?>' method='POST'>
					 	<div class="available">
						<span>Département de l'événement :*</span>
<select name="provinciaList" id="provinciaList" onChange="return provinciaListOnChange()" >
	<option value = "no">Sélectionnez votre département</option>		
	<?php
	$xml = simplexml_load_file('provinciasypoblaciones.xml');
	$result = $xml->xpath("/lista/provincia/nombre | /lista/provincia/@id");
	for ($i=0;$i<count($result);$i+=2) 
	{
	$e=$i+1;
	$provincia=UTF8_DECODE($result[$e]);
	echo("<option value='$result[$i]'>$provincia</option>");
	}
	?>
</select>
						<span>Commune de l'événement :*</span>
<select name="localidadList" id="localidadList" >
	<option value = "no">Sélectionnez votre commune</option>
</select><span id="advice"> </span>
					 </div>
					 </div>
					 <div>
						 <span>Quel jour? Date :</span>
						 <input type="text" size="40" name="title" id="title" value="" placeholder="DD/MM/YYYY Ex. 01/06/2015" autofocus  />
					 </div>
					 <div>
						 <span>Description de l'événement :</span>
						 <textarea cols="47" rows="11" name="description" id="description" placeholder="Description de l'événement." ></textarea>
					 </div>
					 <div>
							 <span>Combien d'heures de service?</span>
							 <input type="text" size="40" name="heures" id="heures" value="" placeholder="Numéros uniquement. Ex: 3" onfocus="this.value = '';" onblur = "if (validarHeures(this.value) == 'false'){this.value=''};" autofocus  />H
					 </div>
					 <div>
							 Prix à payer : <?= $finalprice ?>€
					 </div>
				          	<div class="available">
				     </div>
				    	<div>
					    	<span>
					    	<P style="COLOR: #000000; BACKGROUND-COLOR: #FFFFFF">
					    	<FONT FACE="arial" SIZE=4>
						 		Vos informations personnelles
						 	</FONT>
						 	</P>
						 	</span>
							 <span>Adresse de l'événement</span>
							 <input type="text" name="address" value="" id="address" placeholder=""  />
						 </div>
						 <div>
							 <span>Téléphone portable</span>
							 <input type="text" name="cellphone" value="" id="cellphone" placeholder="Numéro à 10 chiffres" onfocus="this.value = '';" onblur = "if (validarCellphone(this.value) == 'false'){this.value=''};" />
						 </div>
						 <div>
							 <span>Téléphone fixe</span>
							 <input type="text" name="phone" value="" id="phone" placeholder="Numéro fixe" onfocus="this.value = '';" onblur = "if (validarCellphone(this.value) == 'false'){this.value=''};" />
						 </div>
					<div class="register-bottom-grid">
					</div>
						<input type="submit" value="Envoyer demmande">
					</div></div>
				      	</FORM>
				   </div>




				   <!--Deuxième carreau-->

				   <div class="col-md-6 login-right">
				  	<h3>ANNONCE</h3>
				  	<p>
<div class="listadoImagenes"><center>
    <?php
    //On montre la photo
	  echo "<img src='mysql/imagen_mostrar_ads.php?id=$currentIdAd'/>";
    ?>
</div></center>
<p>
<form name="frmLogin" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="identfrm" autocomplete="on">
					  <div>
						<span>Catégorie : </span>
						<p><?php
							if($_id_sub2category==0){echo "ANIMATION - Animateur D'enfants";}
							if($_id_sub2category==1){echo "ANIMATION - Animateur Polyvalent";}
							if($_id_sub2category==2){echo "SPETACLE - Comédiens";}
							if($_id_sub2category==3){echo "SPETACLE - Danseur Salsa";}
							if($_id_sub2category==4){echo "AUTRES - Décorateur";} ?></p>
					  </div>
					  <div>
						<span>Title : </span>
						<p><?= $_title ?></p>
					  </div>
					  <div>
						<span>Desciption : </span>
						<p><?= $_description ?></p>
					  </div>
					  <div>
						<span>Price : </span>
						<p><?= $_price ?></p>
					  </div>
					  <div>
						<span>Adresse : </span>
						<p><?php echo $_address." ".$_iso ?></p>
					  </div>
					  <div>
						<span>Téléphone Portable : </span>
						<p><?= $_cellphone ?></p>
					  </div>
					  <div>
						<span>Téléphone Fixe : </span>
						<p><?= $_phone ?></p>
					  </div>
					  <div>
						<span>Liens vidéos : </span>
						<p><?= $_availability ?></p>
					  </div>
					  <div>
						<span>Je bouge : </span>
						<p><?php if($_move==1){echo "Oui";}else{echo "Non";} ?></p>
					  </div>
					  <div>
						<span>Note d'Evaluation : </span>
						<p><?= $_rating ?></p>
					  </div>
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
	<?php
	}//else (SY ESTA LOGUEADO)
?>