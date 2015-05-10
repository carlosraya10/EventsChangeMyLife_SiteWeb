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
							<a href="spaceClient.php">Mon espace client</a>
						</li>
						<li>
							<i class="cart"></i>


							<?php
	//Connecter ou déconnecter selon la sessino
	require_once("sesion.class.php");
	$sesion = new sesion();
	$user = $sesion->get("user");
	if( $user == false )
	{
		echo "<a href='spaceClient.php'> Me connecter </a>";
	}
	else 
	{
		echo "<a href='fermerSession.php'> Me déconnecter </a>";	
	}
	?>

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
					<a href="index.php"><img src="images/logo.png" class="img-responsive" alt="" /></a>

					<!--<a href="index.php"><img src="images/logo.png" class="img-responsive" alt="" /></a>-->
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