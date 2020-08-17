<?php
	require_once "include/config.php";
	session_start();
	$fname=trim($_POST["txtfname"]);
	$lname=trim($_POST["txtlname"]);
	$email=$_POST["txtemail"];
	$pass=$_POST["txtpass"];
	$conpass=$_POST["txtconpass"];
	$newid=0;

	$sql="select id,username from login where username='".$_SESSION["usname"]."'";
    $row=mysqli_query($con,$sql);
    $result=mysqli_fetch_array($row);
    echo $result["id"];
    echo $result["username"];

	$query="replace into login values(".$result['id'].",'".$fname."','".$lname."','".$email."','".$result['username']."','".$pass."')";
	echo $query;
	mysqli_query($con,$query);
	header("location:dashboard.php?updsuc=Update Successful");


?>