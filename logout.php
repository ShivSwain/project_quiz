<?php
	session_start();
	unset($_SESSEION["usname"]);
	session_destroy();
	header("location:index.php");
?>