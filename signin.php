
<!DOCTYPE html>
<html>
<head>
    <title>Quiz - Home</title>
    <link rel="stylesheet" type="text/css" href="css/signin.css"/>
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
            <!-- SIGNIN PAGE -->

            <div class="login-register">
                <div class="login">
                    <h2> Register  </h2>       
                </div>
                   
                        <div class="login1">
                            
                             <form action="register.php" method="POST">
                                <div class="input-menu-itam">
                                    <input type="text" placeholder="first name" name="txtfname">
                                    <input type="text" placeholder="last name" name="txtlname">
                                    <input type="text" placeholder="Email Address" name=txtemail 
                                    style="height: 30px; width: 395px;">
                                    <input type="text" placeholder="Username" name="txtusername">
                                    <input type="password" placeholder="Password" name="txtpass">
                                    <input type="password" placeholder="Confirm Password" name="txtconpass">
                                </div>
                                <div submit-btn-cont>
                                    <button type="sumbmit" class="submit-btn">Register</button>
                                </div>                                                                    
                             </form>
                    
                        </div>
                    </div>
            </div>
         
           
            <!-- Footer Starts -->
            
            
        </div>  
    </div>  
</body>
</html> 
