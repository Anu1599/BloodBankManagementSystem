<?php
ob_start();
session_start();
require "DB_conn.php";

?>


<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/main2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="js/script.js"></script>



</head>
<body>

<div class="col-12" style="height: 650px">
	<div id="comname">
		<i aria-hidden="true"></i><br><br><b>BBMS</b>
	</div>
	<div id="nav" class="col-12">
		<ul>
		  <li><a class="active" href="index.php">Home</a></li>
		  <li><a href="about.php">About</a></li>
		  <li><a href="contact.php">Contact</a></li>
		  <li><a href="register.php">Be A Donor</a></li>
		  <li><a href="change_details.php">Change Details</a></li>
		  <li><a href="aadhaar.html">Find Donor</a></li>
		  <?php 
		  	if(isset($_SESSION['sess_user_id'])&&!empty($_SESSION['sess_user_id'])){
				echo '<li style="background-color: rgba(255,0,0,0.5);"><a href="logout.php">Logout</a></ul>';
			}
		  ?>
		</ul>
	</div>
	<span id="info1">Find A Blood Donor</span>
	<div id="info" class="col-12">
		<form>
				<input type="button" class="qw" style="font-size: 16px; color: white;" onclick="goto1()" value="Enter Blood Group">
		</form>
	</div>
	<img class="mySlides col-12" src="images/1.jpeg">
	<img class="mySlides col-12" src="images/2.png">
	<img class="mySlides col-12" src="images/3.png">
	<img class="mySlides col-12" src="images/4.png">
</div>
	<div style="margin: 0; padding: 5%; text-align: center;">
		<span style="font-size: 40px;color: rgb(168, 28, 6);font-weight: bold;">OUR VISIONS</span><br><br>
		<p style="text-align: left;"><p>To pave way for a safer and better tommorrow.</p>
		<p>Safer, by bringing blood donors and those in need to a common platform.</p>
		<p>To make the best use of contemporary technologies in delivering a promising web portal to bring together all the blood donors in Hyderabad; thereby fulfilling every blood request in our city.</p>
		</p>
	</div>
	<div style="padding: 5%; text-align: center; overflow: auto;">
		<span class="col-4" style="float: left; padding: 3px;overflow: hidden;text-overflow: ellipsis;">
			<i class="fa fa-bed" aria-hidden="true"></i><br><br><br><h3>Compassion</h3> Compassinate toward the betterment of the society
		</span>
		
		<span class="col-4" style="float: right; padding: 3px;overflow: hidden;text-overflow: ellipsis;">
			<i class="fa fa-child" aria-hidden="true"></i><br><br><br><h3>Advancement</h3>Using technology for fulfilment of society need
		</span>

		<span class="col-4" style="float: right; padding: 3px;overflow: hidden;text-overflow: ellipsis;">
			<i class="fa fa-building" aria-hidden="true"></i><br><br><br><h3>Network</h3> Connecting people to a common platform
		</span>
	</div>


<div id="footer" class="col-12" style="margin: 0; padding: 0;overflow: auto;">
	<?php include "footer.php"; ?>
</div>







<script>carousel();
function goto1(){
  window.location = "aadhaar.html";
}

</script>

</body>


</html>