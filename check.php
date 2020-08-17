<?php
	include "include/config.php";

	$uname=$_POST["username"];
	$pass=$_POST["password"];
	
	$row=mysqli_query($con,"select MAX(id) from login");
	$result=mysqli_fetch_array($row);

	$newid=$result["MAX(id)"]+1;

	$sql="insert into login values (".$newid.",'r@gmail.com','".$uname."','".$pass."')";
	mysqli_query($con,$sql);

	header("location:home.php");
?>