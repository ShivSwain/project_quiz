<?php session_start();
require_once "include/config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quiz - Home</title>
	<link rel="stylesheet" type="text/css" href="css/dashboard.css"/>
	<link rel="stylesheet" type="text/css" href="css/header-main.css"/>
	<link rel="stylesheet" type="text/css" href="css/footer.css"/>
	<script type="text/javascript">
		<?php
			if(isset($_GET["resmsg"]))
			{
		?>
			alert("<?php echo $_GET['resmsg'];?>");
			window.location.href="dashboard.php";
		<?php }?>
	</script>
	<meta charset="utf-8">
</head>
<body class="img-box">
	
	<div class="container">
		
		<div class="wrapper">
			
			<!-- Header Starts -->
			
			<?php 
				require_once "include/header.php";
			?>			
			<!--------- QUIZ GAME ----->
			<div class="about">
				<h2 class="heading">DASHBOARD </h2>
			<div class="img-logo" style="margin-bottom: 50px;">
				<img src="images/dashboardicon.png" >
			</div>
				<?php
						$sql="select firstname,lastname from login where username='".$_SESSION["usname"]."'";
					    $row=mysqli_query($con,$sql);
					    $result=mysqli_fetch_array($row);
					    
						if(isset($_SESSION["usname"]))
						{
					?>
						<span style="margin: 0px 390px;display: inline-block; font-size: 18px; font-weight: bold; width: 300px;text-align: center; text-transform: capitalize;"><?php echo "Welcome ".$result["firstname"]." ".$result["lastname"];?></span>
					<?php } ?>
				
			</div>



			<!------ footer starts ---->

			<?php 
				require_once "include/footer.php"
			?>

		</div>
	</div>
</body>
</html>