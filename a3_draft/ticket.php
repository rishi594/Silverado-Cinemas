<!DOCTYPE html>
<html lang="en">

<?php include 'header.php';?>

<?php
session_start();


?>

<body>


	<section >
		<header>
			<div class="wrapper">
				<a href="#"><img src="img/logo.png" class="logo" alt="" titl=""/></a>
				<a href="#" class="hamburger"></a>
				<nav>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="rishi.php">Now Showing</a></li>
						<li><a href="contact.php">Contact Us</a></li>
					</ul>
				</nav>
			</div>
		</header><!--  end header section  -->

	
	</section>


	<section class="search">
		<div class="wrapper">
			<form action="#" method="post">
				<input type="text" id="search" name="search" placeholder="Select seat type and others..."  autocomplete="off"/>
				<input type="submit" id="submit_search" name="submit_search"/>
			</form>
			
		</div>


	</section>
	



	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
			<form action="rishi.php" method="post">
			My final pricw is <?php echo $_POST["fprice"] ?><br>
				My Selected session was <?php echo $_POST["sessionlist"] ?><br>
	My Selected movie was <?php echo $_SESSION["cart_movie"] ?><br>
	
	
	</section>	<!--  end listing section  -->

<?php include 'footer.php';?>

</body>
</html>