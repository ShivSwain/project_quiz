<div class="header">
				<div class="logo-cont">
					<img src="images/logo1.png" alt="Logo" style="height: 100%; width: 100%;"/>
				</div>
				<div class="header-menu-cont">
					
					<span class="header-menu-items">
						<?php
							if(isset($_SESSION["usname"]))
							{
						?>
							<button class="login-btn"><a href="logout.php" style="color: black;">LOGOUT</a></button> 
						<?php
							}
							else
							{
						?>
							<button class="login-btn"><a href="login.php" style="color: black;">LOGIN / SIGNUP</a></button>
						<?php } ?>

					</span>
					<!-- OPtion Divider -->
					<?php
						if(isset($_SESSION["usname"]))
						{
					?>
						<span class="header-menu-items"><a href="profile.php"><b>PROFILE</b></a></span> 
					<?php
						}
						else
						{
					?>
						<span class="header-menu-items"><a href="contact.php"><b>CONTACT US</b></a></span>
					<?php } ?>
					<!-- 		OPtion Divider 		-->	
					<?php
						if(isset($_SESSION["usname"]))
						{
					?>
						<span class="header-menu-items"><a href="questions1.php"><b>PLAY QUIZ</b></a></span> 
					<?php
						}
						else
						{
					?>
						<span class="header-menu-items"><a href="login.php"><b>PLAY QUIZ</b></a></span>
					<?php } ?>
					<!--          OPtion Divider 		-->	
					<?php
						if(isset($_SESSION["usname"]))
						{
					?>
						<span class="header-menu-items"><a href="mygames.php"><b>MY GAMES</b></a></span> 
					<?php
						}
						else
						{
					?>
						<span class="header-menu-items"><a href="howtoplay.php"><b>HOW TO PLAY</b></a></span>
					<?php } ?>	
				
					
					<!--          OPtion Divider 		-->	
					<?php
						if(isset($_SESSION["usname"]))
						{
					?>
						<span class="header-menu-items"><a href="dashboard.php"><b>DASHBOARD</b></a></span> 
					<?php
						}
						else
						{
					?>
						<span class="header-menu-items"><a href="index.php"><b>HOME</b></a></span>
					<?php } ?>
					
					
				</div>
			</div>
