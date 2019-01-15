<!DOCTYPE html>
<html lang="en">

<?php include 'header.php';?>

<?php
session_start();

$_SESSION["cart_movie"] = $_POST["movieName"] ;
$_SESSION["cart_price"] = $_POST["movieprice"];

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
	
			Welcome <?php echo $_POST["movieName"]." the price is ".$_POST["movieprice"]; ?><br>
			<form action="ticket.php" id="booking-form" method='post'>
    <fieldset><legend>Booking Form</legend>
  
      <p><label>Session</label>
	  <select name="sessionlist" id="sessionlist">
        <option value="--Select--">--Select--</option>
        <option value="Mon-Tue(All Day)">Mon-Tue(All Day)</option>
        <option value="Mon-Fri(1pm Only)">Mon-Fri(1pm Only)</option>
        <option value="Wed-Fri(After 1pm)">Wed-Fri(After 1pm)</option>
        <option value="Sat-Sun(All Day)">Sat-Sun(All Day)</option>
      </select>
	  </p>
      <fieldset><legend>Seats</legend>
        <fieldset><legend>Standard</legend>
          <p><label>Adult</label><select name="stand_a" id="stand_a">
            <option value="--Select--">--Select--</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
          </select></p>
          <p><label>Concession</label><select name="stand_c" id="stand_c">
            <option value="00">--Select--</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
          </select></p>
          <p><label>Child</label><select name="stand_k" id="stand_k">
            <option value="00">--Select--</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
          </select></p>
        </fieldset>
        <fieldset><legend>First Class</legend>
          <p><label>Adult</label><select name="first_a" id="first_a">
            <option value="00">--Select--</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
          </select></p>
          <p><label>Child</label><select name="first_c" id="first_c">
            <option value="00">--Select--</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
          </select></p>
        </fieldset>
        <fieldset><legend>Bean Bags</legend>
          <p><label>Adult</label><select name="bean_a" id="bean_a">
            <option value="00">--Select--</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
          </select></p>
          <p><label>Family</label><select name="bean_f" id="bean_f">
            <option value="00">--Select--</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
          </select></p>
          <p><label>Child</label><select name="bean_c" id="bean_c">
            <option value="00">--Select--</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
          </select></p>
        </fieldset>
      </fieldset>
      <p><input type="submit" class="like" value="book" onclick="testingSelect()"></p>
	  <input type="hidden" id="fprice" name="fprice" value="price">
	  
    </fieldset>
  </form>
			
<input type="button" value="test" onclick="testingSelect();">

			
	</section>	<!--  end listing section  -->

<?php include 'footer.php';?>


</body>

<script>

function testingSelect()
{
	//for sessions
	var e = document.getElementById("sessionlist");
	var $strUser = e.options[e.selectedIndex].value;
	//console.log(strUser);
	
	
	
	//for standard seats
	var s = document.getElementById("stand_a")
	var stand_adult = s.options[s.selectedIndex].value;
	console.log("std adult: "+stand_adult);
	
	var s1 = document.getElementById("stand_c")
	var stand_con  = s1.options[s1.selectedIndex].value;
	console.log("std con: "+stand_con);
	
	var s2 = document.getElementById("stand_k")
	var stand_child  = s2.options[s2.selectedIndex].value;
	
	//for first class
	var f1 = document.getElementById("first_a")
	var first_adult  = f1.options[f1.selectedIndex].value;
	
	var f2 = document.getElementById("first_c")
	var first_child  = f2.options[f1.selectedIndex].value;
	
	//for bean bags
	var b1 = document.getElementById("bean_a")
	var bean_adult  = b1.options[b1.selectedIndex].value;
	
	var b2 = document.getElementById("bean_f")
	var bean_family  = b2.options[b2.selectedIndex].value;
	
	var b3 = document.getElementById("bean_c")
	var bean_child  = b3.options[b3.selectedIndex].value;
	
	if($strUser==("Mon-Tue(All Day)") || ($strUser=="Mon-Fri(1pm Only)"))
	{
	
		var price=(12.5*stand_adult)+(10.5*stand_con)+(8.5*stand_child)+(25*first_adult)+(20*first_child)+(22*bean_adult)+(20*bean_family)+(20*bean_child);
		console.log("price="+price)
		console.log("session="+$strUser)
	}
	
	else if($strUser==("Wed-Fri(After 1pm)") || ($strUser=="Sat-Sun(All Day)"))
	{	
		var price=(18.5*stand_adult)+(15.5*stand_con)+(12.5*stand_child)+(30*first_adult)+(25*first_child)+(33*bean_adult)+(30*bean_family)+(30*bean_child);
		console.log("price="+price)
		
	}
	document.getElementById("fprice").value=price;

}



</script>

</html>