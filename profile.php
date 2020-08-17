<?php 
	session_start();
	require_once "include/config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Quiz - Home</title>
	<link rel="stylesheet" type="text/css" href="css/profile.css"/>
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
			
			
			<!-- PROFILE  EDIT    -->
			<div class="profile-edit">
                <h2 class="login"> EDIT PROFILE </h2>       
                
                   <div class="profile-manu">
                        <div class="profile-itma">
                             <?php
                             	$sql="select * from login where username='".$_SESSION["usname"]."'";
							    $row=mysqli_query($con,$sql);
							    $result=mysqli_fetch_array($row);
							    
                             ?>
                             <form action="updateprofile.php" method="POST">                                 
                                  	<h2 style="font-size: 15px;">EDIT PROFILE</h2>
                                    <input type="email" placeholder="Email Address" name="txtemail" value="<?php echo $result['email']; ?>" style="width: 475px; height: 30px;">
                                    <input type="text" placeholder="First Name" name="txtfname" value="<?php echo $result['firstname']; ?>">
                                    <input type="text" placeholder="Last Name" name="txtlname" value="<?php echo $result['lastname']; ?>">
                                    <input type="password" placeholder="New Password" name="txtpass">                      
                                    <input type="password" placeholder="Confirm New Password" name="txtconpass">                 
                            		<div class="sumbmitwarp">
                            		<input type="submit" value="SAVE" class="submit-btn">	
                            		</div>
                             </form>
   
                        </div>
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