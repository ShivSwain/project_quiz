<!DOCTYPE html>
<html>
<head>
    <title>Quiz - Home</title>
    <link rel="stylesheet" type="text/css" href="css/login.css"/>
    <link rel="stylesheet" type="text/css" href="css/header-temp.css"/>
    <link rel="stylesheet" type="text/css" href="css/login.css"/>
    <script type="text/javascript"></script>
    <meta charset="utf-8">
    <?php
    if(isset($_GET["errmsg"]))
    {
    ?>
        <script>alert("Username & Password does not match");</script>
    <?php } ?>
</head>
<body class="img-box">
    
    <div class="container">
        
        <div class="wrapper">
            
            <!-- Header Starts -->
            
            <?php require_once "include/header.php";?>

            <!-- LOGIN PAGE -->

            <div class="login-register">

                <span class="login"><h2> LOGIN </h2> </span>      

                        <div class="login1" style="box-shadow: 3px 3px 8px 4px rgba(106,106,106,1)">
                            
                             <form action="logcheck.php" method="POST">
                                <div class="imgcontainer">
                                   <img src="images/img_avatar2.png" alt="Avatar" style="height: 100px; width: 100px;">
                                </div>
                                <div class="input-main">                        
                                    <input type="text" placeholder="Email Address" name="txtemail">
                                    <input type="password" placeholder="Password" name="txtpass">
                                </div>                                   
                                <div class="submit-btn-cont"> 
                                    <button type="sumbmit" class="submit-btn">login</button>   
                                </div>
                             </form>

                             
                             <div><b>New User ?<a href="signin.php"> Register Here </b></a></div>
                        </div>
                    </div>
            </div>
         
           
            <!-- Footer Starts -->
            

        </div>  
    </div>  
</body>
</html> 
