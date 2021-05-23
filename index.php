<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Средний балл в аттестате</title>
	<link rel="stylesheet" href="templates/index.css">
	<link rel="shortcut icon" href="templates/icon.png" type="image/png">
</head>
<body style="background-color: #151515; overflow-x: hidden;">

	<div class="content">
		<h1 style="color: white; font-family: Arial; text-align: center;">Узнайте свой средний балл аттестата!</h1><br>
		<h1 style="color: white; font-family: Arial; text-align: center; position: relative; top: -40px;">(школьный аттестат 9-ого и 11-ого класса)</h1>
		<h1 style="text-align: center; color:white; font-family: Arial;"><?php echo "Ваш балл в аттестате: ".$_SESSION['result'] . "."?></h1><br><br><br>

		<div class="form">
			<form action="calcBall.php" method="POST">
				<div class="s5">
					<h2>Введите количество <span id="five">"5"</span></h2>
					<input type="text" name="five" placeholder="Введите кол-во оценок"><br>
				</div><br>

				<div class="s4">
					<h2>Введите количество <span id="four">"4"</span></h2>
					<input type="text" name="four" placeholder="Введите кол-во оценок"><br>
				</div><br>

				<div class="s3">
					<h2>Введите количество <span id="three">"3"</span></h2>
					<input type="text" name="three" placeholder="Введите кол-во оценок"><br>
				</div><br>

				<div class="s2">
					<h2>Введите количество <span id="two">"2"</span></h2>
					<input type="text" name="two" placeholder="Введите кол-во оценок"><br>
				</div><br>

				<input type="submit" id="post" value="Узнать балл"><br>		
			</form>
		</div>
	</div>

	<footer style="text-align: center; color: white; font-family: Arial;">
		Все права защищены &copy; 2021
	</footer>
	
</body>
</html>
