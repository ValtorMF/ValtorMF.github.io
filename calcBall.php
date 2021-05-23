<?php


	session_start();

	function callback()
	{
		header("Location: index.php");
		exit;
	}

	if(strlen($_POST['five']) == 0 || strlen($_POST['four']) == 0 || strlen($_POST['three']) == 0 || strlen($_POST['two']) == 0)
	{}
	else{


		$five = $_POST['five'] * 5;
		$four = $_POST['four'] * 4;
		$three = $_POST['three'] * 3;
		$two = $_POST['two'] * 2;
		
		$totalNumber = $five + $four + $three + $two;

		$lengthNumber = $_POST['five'] + $_POST['four'] + $_POST['three'] + $_POST['two'];


		$result = round($totalNumber / $lengthNumber, 1);
		$_SESSION['result'] = $result;
		callback();

	}


