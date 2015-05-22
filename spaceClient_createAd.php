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
	<script src="js/AjaxCode.js"></script>
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
          function validarPrix( price ) {
            expr = /^([0-9])+([\.])+([0-9]{0,10})+$/; //{0,1} quiere decir que cualquiera de los caracteres permitidos en nuestro campo, repetidos de 0 a 10 veces.
            if ( !expr.test(price) ){
                alert("Erreur: Ecrivez de numéros uniquement. Par ex: 15.00");
                return "false";
            }else{
              return "true";
            }
          }
    //Funcion para comprobar cellphone
          function validarCellphone( cellphone ) {
            expr = /^([0-9]{0,10})+$/; //{0,1} quiere decir que cualquiera de los caracteres permitidos en nuestro campo, repetidos de 0 a 10 veces.
            if ( !expr.test(cellphone) || cellphone.length<10){
                alert("Erreur: Ecrivez de numéros uniquement. Par ex: 0610203040");
                return "false";
            }else{
              return "true";
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
//Elimina errores si los hay en el if
			error_reporting (0);
//On créé la connexion
    require_once 'mysql/Singleton_Database.class.php';
    //On accede à la méthode singleton qui va créer une instance de notre classe
	$newSingleton = SingletonPattern::singleton();

			//Seleccionamos el id_people del usuario actual desde PEOPLE
			$res = "SELECT id_people from PEOPLE where username = '$user' or email='$user';";
			$datosPEOPLE = $newSingleton->query($res);
			foreach ($datosPEOPLE as $row):
				$_id_id_people = $row["id_people"];
				//echo "_id_id_people = ".$_id_id_people;
			endforeach;

//****************Recuperamos desde campos******************
	$category = $_POST['category'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	$price = $_POST['price'];
	$iso = $_POST['localidadList'];
	$address = $_POST['address'];
	$cellphone = $_POST['cellphone'];
	$phone = $_POST['phone'];
	$availability = $_POST['availability'];
	$move = $_POST['move'];

	if (!empty($title)){
		/*if (!empty($cellphone)){
			$cellphone = "";
		}
		if (!empty($phone)){
			$phone = "";
		}
		if (!empty($availability)){
			$availability = "";
		}*/
		$res = "INSERT INTO ADS(id_people,id_sub2category,title,description,price,iso,address,cellphone,phone,availability,move) values('$_id_id_people','$category','$title','$description','$price','$iso','$address','$cellphone','$phone','$availability','$move');";
			if ($usuario = $newSingleton->query2($res)){
				echo "<script type='text/javascript'>alert('La nouvelle annonce à été créée. Vous pourrez la consulter dans quelques instants.')</script>";
				//Seleccionamos el id_ad del usuario actual desde ADS
				$res = "SELECT id_ad FROM ADS where id_people = (SELECT id_people from PEOPLE where username = '$user' or email='$user') ORDER BY id_ad ASC;"; //ASC porque recorre todos y termina en el ultimo
				$idad = $newSingleton->query($res);
				foreach ($idad as $row):
					$idad = $row["id_ad"];
					//echo "idphoto = ".$idphoto;
				endforeach;
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
							$res = "UPDATE ADS SET photo='$imagenEscapes' WHERE id_ad='$idad';";
							$usuario = $newSingleton->query2($res);
							//echo "<script type='text/javascript'>alert('La nouvelle annonce à été créée. Vous pourrez la consulter dans quelques instants. PHOTO')</script>";
				    }else{
				        echo "<div class='error'>Error: Le format du fichier doit être JPG, GIF, BMP ou PNG.</div>";
				    }
				}//**************************IMAGENES**************************
				header("Location: spaceClient_myAds.php");
			}//if hacemos insert
	}//if(!=empty(title))
//echo $idad."---".$_id_id_people."---".$category."---".$title."---".$description."---".$price."---".$iso."---".$address."---".$cellphone."---".$phone."---".$availability."---".$move."---".$imagenEscapes;
?>

			<!-- Form annonce -->
<div class="content">
		<div class="pag-nav">
			<ul class="p-list">
				<li><a href="index.php">Home</a></li> &nbsp;&nbsp;/&nbsp;
				<li class="act">&nbsp;Register</li>
			</ul>
		</div>
		<div class="coats">
			<h3 class="c-head">PUBLIER UNE ANNONCE GRATUITE <br/>Events Change Life</h3>
		</div>
		<div class="register">
			<div class="register-but">
		  	  <form enctype="multipart/form-data" name="frmUpdate" ACTION='<?php echo $_SERVER["PHP_SELF"]?>' onsubmit="" METHOD="POST"> 
				 <div class="register-top-grid">
				
					 <div>
						<span>Catégorie*</span>
						<select name="category" size=1 autofocus required>
							<option disabled>-- ANIMATION --</option>
								<option value="0">Animateur D'enfants</option>
								<option value="1">Animateur Polyvalent</option>
							<option disabled>-- SPECTACLE --</option>
								<option value="2">Comédiens</option>
								<option value="3">Danseur Salsa</option>
							<option disabled>-- AUTRES --</option>
								<option value="4">Décorateur</option>
						</select>
					 </div>
					 <div>
						<span>Sélectionnez votre département :*</span>
<select name="provinciaList" id="provinciaList" onChange="return provinciaListOnChange()" required>
	<option>Sélectionnez votre département</option>		
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
						<span>Sélectionnez votre commune :*</span>
<select name="localidadList" id="localidadList" >
	<option>Sélectionnez votre commune</option>
</select><span id="advice"> </span>
					 </div>
					 <div>
						 <span>Titre de l'annonce*</span>
						 <input type="text" size="40" name="title" id="title" value="" placeholder="Merci d'écrire un titre." autofocus required />
					 </div>
					 <div>
						 <span>Description*</span>
						 <textarea cols="47" rows="11" name="description" id="description" placeholder="Description de l'annonce." required></textarea>
					 </div>
					 <div>
							 <span>Prix par heure*</span>
							 <input type="text" size="40" name="price" id="price" value="" placeholder="Numéros uniquement. Ex: 19.00" onfocus="this.value = '';" onblur = "if (validarPrix(this.value) == 'false'){this.value=''};" autofocus  required/>€
						 </div>
					 <div>
				      		<span>Photo de l'nnonce (Optionnel)</span>
				          	<input name="userfile" type="file" />
				     </div>
				     <div> 	<span><br></br><br></br></span>	 </div>
				    	<div>
					    	<span>
					    	<P style="COLOR: #000000; BACKGROUND-COLOR: #FFFFFF">
					    	<FONT FACE="arial" SIZE=4>
						 		Vos informations personnelles
						 	</FONT>
						 	</P>
						 	</span>
						</div>
						 <div>
						 	<span><P style="COLOR: #000000; BACKGROUND-COLOR: #FFFFFF"><br></br></P><br></br></span>
						 </div>
						 <div>
							 <span>Adresse de l'annonce*</span>
							 <input type="text" name="address" value="" id="address" placeholder="" required />
						 </div>
						 <div> 	<span><br></br><br></br></span>	 </div>
						 <div>
							 <span>Téléphone portable</span>
							 <input type="text" name="cellphone" value="" id="cellphone" placeholder="Numéro à 10 chiffres" onfocus="this.value = '';" onblur = "if (validarCellphone(this.value) == 'false'){this.value=''};" />
						 </div>
						 <div>
							 <span>Téléphone fixe</span>
							 <input type="text" name="phone" value="" id="phone" placeholder="Numéro à 10 chiffres" onfocus="this.value = '';" />
						 </div>
					     	<label>Suis-je disponible pour bouger dans une autre ville?*</label>
							<div class="sgn">
								<label for="move">Oui</label><input type="radio" name="move" title="move" value="1" id="move" class="radio" required/>
								<label for="move">Non</label><input type="radio" name="move" title="move" value="0" id="move" class="radio" required/>
						</div>
						<div>
							 <span>Lien vers une vidéo (Optionnel)</span>
							 <input type="text" name="availability" value="" id="availability" placeholder="ex: http://youtube.com/MaVidéo" />
							 <!--<textarea cols="40" rows="1" name="availability" id="availability" placeholder="availability" required></textarea>-->
						</div>
					<div class="register-bottom-grid">
					</div>
					
					<div>
						<input type="submit" value="Valider">
					</div>
				</form>
				<div>	<span><br></br><br></br>	</span></div>
			</div>
			<div class="register-but">
			   <a href="spaceClient.php">Annuler<i class="go"></i></a>
			   <br/>
			   <p>* Champs obligatoires.</p>
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