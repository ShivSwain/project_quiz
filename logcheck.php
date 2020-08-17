<?php
	session_start();
    require_once "include/config.php";
    $uname=$_POST["txtemail"];
    $pass=$_POST["txtpass"];

    $sql="select * from login where (username='".$uname."' OR email='".$uname."') AND password='".$pass."'";
    $row=mysqli_query($con,$sql);
    $result=mysqli_fetch_array($row);

    if((($uname==$result["username"])  || $uname==$result["email"]) && ($pass==$result["password"]))
    {
    	header("location:dashboard.php");
    	$_SESSION["usname"]=$result["username"];
        $_SESSION["useridno"]=$result["id"];
    	echo $_SESSION["usname"];
    }
    else
    {
    	header("location:login.php?errmsg=Username & Password does not match");
    }


?>
