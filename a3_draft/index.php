<!DOCTYPE html>
<html lang="en">

<?php include 'header.php';?>

<?php
// Start the session
session_start();
?>

<body>
<?php

// Set session variables
$_SESSION["movie"] = "111";
$_SESSION["favanimal"] = "shayan";
#echo "Session variables are set.";
?>
	

	<section class="hero">
		<header>
			<div class="wrapper">
				<a href="#"><img src="img/logo.png" class="logo" alt="" title=""/></a>
				<a href="#" class="hamburger"></a>
				<nav>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="rishi.php">Now Showing</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
				</nav>
			</div>
		</header><!--  end header section  -->

			<section class="caption">
				<h2 class="caption">The home of cinema</h2>
				<h3 class="properties">Dolby Surround Sound - 3D Projector - Recliners</h3>
			</section>
	</section>


	<section class="search">
		<div class="wrapper">
			<form action="#" method="post">
				<input type="text" id="search" name="search" placeholder="Movies this month!"  autocomplete="off"/>
				<input type="submit" id="submit_search" name="submit_search"/>
			</form>
			
		</div>

		
	</section>


	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<form action="rishi.php" method="post">
				<li>
				
				
					<a>
						<img height="220px" src="img/scarface.jpg" alt="scarface" title="" class="property_img"/>
					</a>
					
					
					<div class="property_details">
						<h1>
							<a href="#">Scarface</a>
							<input type="hidden" id="movieName" name="movieName" value="Scarface">
							
						</h1>
						<h2>Staring:Al Pacino<br>Rating:*****</h2>
					</div>
				</li>
				<li>
					<a>
						<img height="220px" src="img/gf.jpg" alt="" title="" class="property_img"/>
					</a>
					
					<div class="property_details">
						<h1>
							<a href="#">Godfather</a>
						</h1>
						<h2>Staring:Marlon Brando,Al pacino<br>Rating:*****</h2>
					</div>
				</li>
				<li>
					<a>
						<img height="220px" src="img/starwars.jpg" alt="" title="" class="property_img"/>
					</a>
					
					<div class="property_details">
						<h1>
							<a href="#">Star Wars</a>
						</h1>
						<h2>Staring:Mark Hamil,CarrieFisher<br>Rating:****</h2>
					</div>
				</li>
				
				</form>
			</ul>
			<div class="more_listing">
				<a href="rishi.php" class="more_listing_btn">Book Tickets Here</a>
			</div>
		</div>
	</section>	<!--  end listing section  -->

<?php include 'footer.php';?>
	
</body>

<script>



</script>

</html>