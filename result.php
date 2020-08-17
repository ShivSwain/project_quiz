<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Quiz - Home</title>
	<link rel="stylesheet" type="text/css" href="css/result.css"/>
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
			<!-- RESULT Starts -->
			<div class="contant-page">
				<div class="contant">
					<h2> RESULT</h2>
				</div>
				<div class="table-menu-itam">
					<table class="table-menu"  style="box-shadow: 3px 3px 8px 4px rgba(106,106,106,1)">
						<tr>
							<td class="table-box">
								<strong>Total Marks</strong>
							</td>
							<td class="table-box1"><?php echo $_GET["points"];?>/15</td>
						</tr>
						<tr>
							<td class="table-box">
								<strong>Percentage</strong>
							</td>
							<td class="table-box1"><?php
								$pts=$_GET["points"];
								$pr=($pts/15)*100;
								$rpr=number_format((float)$pr,2,'.','');
								echo $rpr;
							?></td>
						</tr>
						<tr>
							<td class="table-box">
								<strong>Attempted Questions</strong>
							</td>
							<td class="table-box1"><?php echo $_GET["fattm"];?>/15</td>
						</tr>
						<tr>
							<td class="table-box">
								<strong>Pass/Fail</strong>
							</td>
							<td class="table-box1">
								<strong><?php 
									if($_GET["points"]>=8)
									{
										echo "Pass";
									}
									else
									{
										echo "Fail";
									}
								?></strong>
							</td>
						</tr>
						<tr>
							<td class="table-box"><form action="saveresult.php" method="post">
								<input type="hidden" name="fpoints" value="<?php echo $_GET['points']; ?>">
								<input type="hidden" name="attemptques" value="<?php echo $_GET['fattm'];?>">
								<input type="hidden" name="percent" value="<?php echo $rpr; ?>">
								<input type="submit" value="Save Result"/>
							</form></td>
							<td class="table-box"><a href="dashboard.php"><b>Dashboard</b></a></td>
						</tr>
					</table>
				</div>			
				
			</div>
			<!-- Footer Starts -->
			
			<?php
			
				require_once "include/footer.php";

			?>
		</div>
	</div>
</body>
</html>