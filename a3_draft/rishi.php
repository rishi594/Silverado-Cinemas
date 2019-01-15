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
	

	<section>
		<header>
			<div class="wrapper">
				<a href="#"><img src="img/logo.png" class="logo" alt=""/></a>
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

	</section>


	<section class="search">
		<div class="wrapper">
			<form action="#" method="post">
				<input type="text" id="search" name="search" placeholder="Book Now!"  autocomplete="off"/>
				<input type="submit" id="submit_search" name="submit_search"/>
			</form>
			
		</div>

		
	</section>


	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<form action="cartstart.php" method="post">
				<li>
				
				
					<a>
						<img height="220px" src="img/scarface.jpg" alt="scarface" title="" class="property_img"/>
					</a>
					<input type="submit" class="like" value="book" onclick="selectMe(1)">
					
					
					<div class="property_details">
						<h1>
							<a href="#">Scarface</a>
							<input type="hidden" id="movieName" name="movieName" value="umair">
							<input type="hidden" id="movieprice" name="movieprice" value="umair">
						</h1>
						<h2>Staring:Al Pacino<br>Rating:*****</h2>
					</div>
				</li>
				<li>
					<a>
						<img height="220px" src="img/gf.jpg" alt="" title="" class="property_img"/>
					</a>
					<input type="submit" class="like" value="Like" onclick="selectMe(2)">
					<span class="price">$10</span>
					<div class="property_details">
						<h1>
							<a href="#">Godfather</a>
						</h1>
						<h2>Al pacino <span class="property_size">(288ftsq)</span></h2>
					</div>
				</li>
				<li>
					<a>
						<img height="220px" src="img/starwars.jpg" alt="" title="" class="property_img"/>
					</a>
					<input type="submit" class="like" value="Like" onclick="selectMe(3)">
					<span class="price">$10</span>
					<div class="property_details">
						<h1>
							<a href="#">Godfather</a>
						</h1>
						<h2>Al pacino <span class="property_size">(288ftsq)</span></h2>
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


function selectMe(value)
{
	if(value=='1')
	{
		document.getElementById("movieName").value='Scarface ';
		document.getElementById("movieprice").value='$20 ';
	}
	else if(value=='2'){
		document.getElementById("movieName").value='Godfather';
		var price = 30;
		var discount = 10;
		var total_price = 30-(.10*30);
		document.getElementById("movieprice").value=total_price;
	}
	else if(value=='3'){
		document.getElementById("movieName").value='Starwars';
		document.getElementById("movieprice").value='$300';
	}
	console.log(value);
}



</script>

</html>