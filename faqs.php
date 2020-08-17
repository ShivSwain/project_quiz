<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>Quiz - Home</title>
	<link rel="stylesheet" type="text/css" href="css/faqs.css"/>
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
			<!-- FAQs Starts -->
			<div class="contant-page">
				<div class="frequently">
					<h2> FREQUENTLY ASKED QUESTIONS</h2>
				</div>
				<div class="welcomemsg">
					<p style="text-align: justify;">
						<span style="font-size: 24px">
							<strong>General</strong> 
						</span>
					</p>
					<p style="text-align: justify;">
						<strong>Question:</strong> 
						What is Quiz Commpetition?
						<br>
						<br> 
						<strong>Answer:</strong> 
						Quiz is a website offering free or prize competition quizzes on a wide variety of subjects. To keep you entertained we intend to continually add new style quizzes to the website.
					</p>
					<p style="text-align: justify;">
						<strong>Question:</strong> 
						 Is Quiz Commpetition free?
						<br>
						<br> 
						<strong>Answer:</strong>
						Yes it is free if you select "Play for Free".
					</p>
					<br>				
					<p style="text-align: justify;">
						<span style="font-size: 24px">
							<strong>Playing Quizzes </strong> 
						</span>
					</p>
					<p style="text-align: justify;">
						<strong>Question:</strong> 
						How long do I get to answer a question? 
						<br>
						<br> 
						<strong>Answer:</strong>
						The amount of time is 16 seconds per question
					</p>
					<p style="text-align: justify;">
						<strong>Question:</strong> 
						 Can I pause the timer? 
						<br>
						<br> 
						<strong>Answer:</strong>
						No, definitely not. The clock is designed to continually run to create an element of tension in our quizzes.
					</p>
					<p style="text-align: justify;">
						<strong>Question:</strong> 
						I answered a question correctly, but it's shown as incorrect, why? 
						<br>
						<br> 
						<strong>Answer:</strong>
						Whilst we spend an incredible amount of time verifying our quiz questions and answers unfortunately a rogue answer can occasionally slip through.
					</p>
					You can help us by telling us on our<span class="txt1"><a href="contact.php"> Contact Us</a></span> page the name of the quiz, what the question was, what you believe to be the correct answer. We will do our best to hunt it down and correct it.
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