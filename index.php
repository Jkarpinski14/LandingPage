<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta name="viewport" content="width=device width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body class="IndexBody">
	<div class="links">
		<br/>
		<a href="index.php" class="button1">Home</a>
		<a href="works.php" class="button2">Past Works</a>
		<a href="contact.php" class="button3">Contact Me</a>
	</div>

	<div class="AboutMe">
		<div class="left-side">
			<h2 class="about-head">About Me</h2>
			<p id="about-text">
				Hello, I am Jonah Karpinski, a student at Pasadena High School. I have been in the coding business for the better part of the last two years, and have completed numerous projects (<a href="works.php">Examples</a>). Among these are an Instagram API, a working to-do list, a portfolio-style website, and my own version of the game Awesomenauts, just to name a few. My experience is in the languages HTML/CSS, JS, and PHP.
			</p>
			<div class="language-buttons">
				<input type="submit" id="byBtn" value="Translate To Spanish" onclick="changeSpanish()">
				<br>
				<input type="submit" id="byBtn" value="Translate To Italian" onclick="changeItalian()">
				<br>
				<input type="submit" id="byBtn" value="Translate To French" onclick="changeFrench()">
				<br>
				<input type="submit" id="byBtn" value="Translate To Armenian" onclick="changeArmenian()">
				<br>
				<br>
				<input type="submit" id="byBtn" value="Return To English" onclick="changeEnglish()">
			</div>
		</div>
		<div class="right-side">
			<img src="img/me.jpg" class="me">
		</div>
		<img class="tractor" src="http://www.gifs.net/Animation11/Transportation/Cars/4_wheel_drive.gif">
	</div>
	<script type="text/javascript" src="js/main.js"></script>
	<?php 
		echo '<script type="text/javascript">';
		echo 'motor.play();';
		echo '</script>';
	?>
</body>
</html>