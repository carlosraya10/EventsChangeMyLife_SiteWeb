<?php
	//VEFIFIER SI L'UTILISATEUR EST LOGIN
	require_once("sesion.class.php");
	$sesion = new sesion();
	$user = $sesion->get("user");
	//Elimina errores si los hay en el if
			error_reporting (0);
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
          function validarPrix( price ) {
            expr = /^([0-9])+([\.])+([0-9]{0,10})+$/; //{0,1} quiere decir que cualquiera de los caracteres permitidos en nuestro campo, repetidos de 0 a 10 veces.
            if ( !expr.test(price) ){
                alert("Erreur: Ecrivez de numéros uniquement. Par ex: 35,00")
                return "false";
            }else{
              return "true";
            }
          }
    //Funcion para comprobar cellphone
          function validarCellphone( cellphone ) {
            expr = /^([0-9]){0,10})+$/; //{0,1} quiere decir que cualquiera de los caracteres permitidos en nuestro campo, repetidos de 0 a 10 veces.
            if ( !expr.test(cellphone) || cellphone.length<10){
                alert("Erreur: Ecrivez de numéros uniquement. Par ex: 0610203040")
                return "false";
            }else{
              return "true";
            }
          }
      </script>

	</head>
	<body>
		<?php include("header.php"); ?>		
		
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
		$motcle = $_POST['motcle'];
	}
	?>
<div class="wrap">
	<div class="main_bg">
		<div class="main">



		<!-- ADS Liste -->
			 <div class="section group">
<?php

//On créé la connexion
    require_once 'mysql/Singleton_Database.class.php';
    //On accede à la méthode singleton qui va créer une instance de notre classe
	$newSingleton = SingletonPattern::singleton();

			//Seleccionamos el id_people del usuario actual desde PEOPLE
				/*$res = "SELECT id_people from PEOPLE where username = '$user' or email='$user';";
				$idpeople = $newSingleton->query($res);
				foreach ($idpeople as $row):
					$idpeople = $row["id_people"];
					//echo "idpeople = ".$idpeople;
				endforeach;
				$nohay=0;*/
			//Recuperamos datos desde ADS del anuncio actual
				$res = "SELECT * FROM ADS where title LIKE '%".$motcle."%' ORDER BY title ASC;"; //ASC porque recorre todos y termina en el ultimo
				$datosAD = $newSingleton->query($res);
				foreach ($datosAD as $row):
					$_id_ad = $row["id_ad"];
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
				
//echo "_id_ad=".$_id_ad."<br>"."_title=".$_title."<br>"."_description=".$_description."<br>"."_price=".$_price."<br>";
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
			$res = "UPDATE ADS SET photo='$imagenEscapes' WHERE id_ad='$_id_ad';";
			$usuario = $newSingleton->query2($res);
    }else{
        echo "<div class='error'>Error: Le format du fichier doit être JPG, GIF, BMP ou PNG.</div>";
    }
}
			//**********************Creamos cada elemento en HTML*******
			if($_id_ad>0)
			{
				$reduction=intval($_price+$_price*.11);
				echo "<div class='grid_1_of_4 images_1_of_4'>";
				echo "<a href='spaceClient_ad.php?currentIdAd=$_id_ad'>";//link
					echo "<img src='mysql/imagen_mostrar_ads.php?id=$_id_ad'/></a>";//image
				echo "<h2>$_title</h2>";//Title
				echo "<p>$_description</p>";//Description
				echo "<p><span class='strike'>$reduction €</span><span class='price'>$_price €</span></p>";//Price
				echo "<div class='button'><span><a href='spaceClient_ad_onlyWatch.php?currentIdAd=$_id_ad' class='details'>Détails</a></span></div>";//Détails
				echo "<div class='button'><span><img src='images/cart.jpg' alt='' /><a href='spaceClient_ad_selection.php?currentIdAd=$_id_ad' class='cart-button'>Selectionner</a></span></div>";//Button Séleccioner
				echo "</div>";
				$nohay++;
			}
endforeach;
			if($nohay==0){
				echo "<p><span class='price'>Il n'y a pas d'annnoces dans cette section.</span></p>";//Price
			}
?>



				<div class='clearfix'></div>
			</div>


		</div>
	</div>
</div>
			
		<!-- footer -->
		 <?php include("footer.php") ?>
	</body>
	</html>
