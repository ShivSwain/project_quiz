<?php
	require_once "include/config.php";
	$fname=trim($_POST["txtfname"]);
	$lname=trim($_POST["txtlname"]);
	$email=$_POST["txtemail"];
	$username=$_POST["txtusername"];
	$pass=$_POST["txtpass"];
	$conpass=$_POST["txtconpass"];
	$newid=0;

	$sql="select MAX(id) from login";
    $row=mysqli_query($con,$sql);
    $result=mysqli_fetch_array($row);
    $newid=$result["MAX(id)"]+1;
    if($newid==1)
    {
    	$newid=101;
    }


	$query="insert into login values(".$newid.",'".$fname."','".$lname."','".$email."','".$username."','".$pass."')";
	echo $query;
	mysqli_query($con,$query);
	header("location:login.php?regsuc=Registration Successful");


?>