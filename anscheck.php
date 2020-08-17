<?php
	require_once "include/config.php";
	$ch_opt=$_POST["opt1"];
	$qno=$_POST["ques_no"];
	$next_ques=$qno+1;
	$sql="select answer from questions_list where ques_id=".$qno;
	$row=mysqli_query($con,$sql);
	$point=$_POST["points"];
	$result=mysqli_fetch_array($row);
	$attempt=$_POST["att"];
	
	if($ch_opt == $result["answer"])
	{
		$point=$point+1;
	}
	if($ch_opt == "")
	{

	}
	else
	{
		$attempt=$attempt+1;
	}
	if($qno <15)
	{
		header("location:questions".$next_ques.".php?points=".$point."&nques=".$next_ques."&attm=".$attempt);
	}
	else
	{
		header("location:result.php?points=".$point."&fattm=".$attempt);
	}
?>