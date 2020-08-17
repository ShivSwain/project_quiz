<?php
	session_start();
	require_once "include/config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quiz - Home</title>
	<link rel="stylesheet" type="text/css" href="css/header-main.css"/>
	<link rel="stylesheet" type="text/css" href="css/footer.css"/>
	<link rel="stylesheet" type="text/css" href="css/question.css"/>
	<script type="text/javascript"></script>
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
				<h2 class="heading">STARTS FOR QUIZ COMMPETITIONS QUESTION </h2>
				<div class="question-box" style="box-shadow: 3px 3px 8px 4px rgba(106,106,106,1)">
					<?php
						
						$sql="select * from questions_list where ques_id=".$_GET["nques"];
						$row=mysqli_query($con,$sql);

						$result=mysqli_fetch_array($row);
					?>
					<div class="question-cont"><?php echo $result["ques_id"]; ?>. <?php echo $result["ques"]; ?>
					</div>
					<div class="opt-cont">
						<form method="post" action="anscheck.php">
							<div class="opt-value-cont"><input type="radio" name="opt1" value="1"><label class="opt-label"><?php echo $result["opt1"]; ?></label></div>
							<div class="opt-value-cont"><input type="radio" name="opt1" value="2"><label class="opt-label"><?php echo $result["opt2"]; ?></label>
							</div>
							<div class="opt-value-cont"><input type="radio" name="opt1" value="3"><label class="opt-label"><?php echo $result["opt3"]; ?></label>
							</div>
							<div class="opt-value-cont"><input type="radio" name="opt1" value="4"><label class="opt-label"><?php echo $result["opt4"]; ?></label></div>
							
						</div>
						
						<input type="hidden" name="ques_no" value="<?php echo $_GET["nques"];?>">
						<input type="hidden" name="points" value="<?php echo $_GET["points"];?>">
						<input type="hidden" name="att" value="<?php echo $_GET["attm"];?>">
				</div>
				<div class="next-btn-cont">
					<input type="submit" value="Next" class="submit-btn">
				</div>
			</form>
			</div>



			<!------ footer starts ---->

			<?php 

				require_once "include/footer.php";

			?>			
			
		</div>
	</div>
</body>
</html>