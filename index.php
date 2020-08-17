<?php 
	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Quiz - Home</title>
	<link rel="stylesheet" type="text/css" href="css/index.css"/>
	<link rel="stylesheet" type="text/css" href="css/header-temp.css"/>
	<link rel="stylesheet" type="text/css" href="css/footer.css"/>
	<script type="text/javascript"></script>
	<meta charset="utf-8">
	
	<?php
	if(isset($_GET["updsuc"]))
	{
	?>
		<script>alert("Profile Updated Successful");</script>
	<?php } ?>

</head>
<body class="img-box">
	
	<div class="container">
		
		<div class="wrapper">
			
			<!-- Header Starts -->
			
			<?php 

				require_once "include/header.php";

			?>			
			<!-- Banner Starts -->
			
			<div class="banner-outer">
				<div class="banner-slider">
					<div class="slider-image"><img src="images/banner3.jpg" alt="Banner"  style="height: 100%; width: 100%;"/></div>
					<div class="slider-image"><img src="images/banner4.png" alt="Banner"  style="height: 100%; width: 100%;"/></div>
					<div class="slider-image"><img src="images/banner2.png" alt="Banner"  style="height: 100%; width: 100%;"/></div>
					<div class="slider-image"><img src="images/banner5.png" alt="Banner"  style="height: 100%; width: 100%;"/></div>
					<div class="slider-image"><img src="images/banner6.png" alt="Banner"  style="height: 100%; width: 100%;"/></div>
				</div>
			</div>

			<!-- Login/PlayNow Cont Starts -->
			
			<div class="login-cont">
				<a href="login.php">LOGIN - PLAY NOW</a>
			</div>
			
			<!-- Footer Starts -->
			
			<?php
			
				require_once "include/footer.php";

			?>
		</div>
	</div>
</body>
</html>