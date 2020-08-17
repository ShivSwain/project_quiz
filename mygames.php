<?php session_start();
require_once "include/config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quiz - Home</title>
	<link rel="stylesheet" type="text/css" href="css/mygames.css"/>
	<link rel="stylesheet" type="text/css" href="css/header-main.css"/>
	<link rel="stylesheet" type="text/css" href="css/footer.css"/>
	<script type="text/javascript">
		
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
			<!-- QUIZ GAME -->
			<div class="about" >
				<h2 class="heading">Previous Games</h2>
				<div class="res-table-cont">
				<table border="1" style="width: 100%;">
					<tr style="padding: 10px;">
						<th style="padding: 10px;">Game No.</th>
						<th style="padding: 10px;">Points</th>
						<th style="padding: 10px;">Attempted</th>
						<th style="padding: 10px;">Percentage</th>
						<th style="width: 20%;padding: 10px;">Result</th>
						<th style="width: 20%;padding: 10px;">Date</th>
					</tr>
					<?php
						$sql1="select * from played_games where playerid=".$_SESSION["useridno"];
						$row1=mysqli_query($con,$sql1);

						if(mysqli_fetch_fields($row1)>0)
						{
							$j=0;
							while($j<=($result1=mysqli_fetch_array($row1)))
							{
					?>
					<tr style="padding: 10px;">
						<td style="padding: 10px;"><?php echo $result1["gameid"];?></td>
						<td style="padding: 10px;"><?php echo $result1["total"];?></td>
						<td style="padding: 10px;"><?php echo $result1["attempted"];?></td>
						<td style="padding: 10px;"><?php echo $result1["percent"];?></td>
						<td style="width: 20%;padding: 10px;"><?php echo $result1["result"];?></td>
						<td style="width: 20%;padding: 10px;"><?php echo $result1["date"];?></td>
					</tr>
					<?php $j++; } }?>
				</table>
				</div>
			</div>



			<!------ footer starts ---->

			<?php 
				require_once "include/footer.php"
			?>

		</div>
	</div>
</body>
</html>