<?php session_start();
require_once "include/config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quiz - Home</title>
	<link rel="stylesheet" type="text/css" href="css/Conditions.css"/>
	<link rel="stylesheet" type="text/css" href="css/header-temp.css"/>
	<link rel="stylesheet" type="text/css" href="css/footer.css"/>
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
			
			<!-- Terms and Conditions -->

			<div class="about">
				<h2 class="heading">Terms and Conditions </h2>

				<ul class="terms">
					<li>When you use this Website, open an account and play quizzes you enter into a legally binding contract with the as it operates this Website and the quizzes promoted on it. This legally binding contract is subject to the terms and conditions set out below, the privacy policy and the quiz rules displayed on this Website from time to time together with any and all other applicable terms and conditions (the "Terms and Conditions").</li>
					<li>Players are responsible for their own internet connection. It is their responsibility to maintain their connection during play. Players accept any losses arising from not answering questions due to their loss of internet connection or not answering questions or any other reason.</li>
					<li>By registering and playing on this Website you agree to comply with the Terms and Conditions.</li>
					<li>Participation in the quizzes and quizzes on this Website (the "Quizzes") is open to residents of any country (unless the determines otherwise) and the reserves the right at any time to close accounts registered.</li>
					<li>You are only permitted to use the Website for your own use. Any other entrance, access, use or reuse of the Website is strictly prohibited.</li>
					<li>Only one account per person is permitted for which you must register using your own actual name.</li>
					<li>The reserves the right to withhold payment to any player pending verification of the player's identity. All details which you provide to the either during the registration process or at any time thereafter must be true. We reserve the right to run checks with third party agencies using the information you provide us on registration.</li>
					<li>We make every effort to ensure that errors or mistakes do not occur in any Quiz. We reserve the right to void winnings or cash payments resulting from wins resulting from any obvious error or mistake or any technical fault (including, but not limited to, incorrect quiz payouts) with any of the Quizzes offered. You will forfeit any winnings/losses that result from such errors or mistakes or technical faults.</li>
					<li>We reserve the right to transfer, assign, sublicense or pledge these Terms and Conditions, in whole or in part, to any person (but without your consent) without notice, provided that any such assignment will be on the same terms or terms that are no less advantageous to you. You may not assign, sublicense or otherwise transfer in any manner whatsoever any of your rights or obligations under these Terms and Conditions.</li>

				</ul>	
			</div>
			<!------ footer starts ---->

			<?php 
				require_once "include/footer.php";
			?>			
			

		</div>
	</div>
</body>
</html>