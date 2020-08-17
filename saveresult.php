<?php
	session_start();
	require_once "include/config.php";
	$pnts=$_POST["fpoints"];
	$attques=$_POST["attemptques"];
	$per=$_POST["percent"];
	if($pnts>=8)
	{
		$res="Pass";
	}
	else
	{
		$res="Fail";
	}
	$sql="select MAX(gameid) from played_games";
    $row=mysqli_query($con,$sql);
    $result=mysqli_fetch_array($row);
    $newgameid=$result["MAX(gameid)"]+1;
    if($newgameid==1)
    {
    	$newgameid=4001;
    }
    date_default_timezone_set('Asia/Kolkata');
    $date=date("Y-m-d h:i:sa");
	$query="insert into played_games values(".$newgameid.",".$_SESSION["useridno"].",".$pnts.",".$per.",".$attques.",'".$res."','".$date."')";
	mysqli_query($con,$query);
	header("location:dashboard.php?resmsg=Results saved successfully&points=".$pnts."&fattm=".$attques);
?>