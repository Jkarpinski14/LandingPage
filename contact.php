<!DOCTYPE html>
<html>
<head>
	<title>Contact Me</title>
	<meta name="viewport" content="width=device width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body class="ContactBody">
	<div class="links-contact">
		<br/>
		<a href="index.php" class="button1">Home</a>
		<a href="works.php" class="button2">Past Works</a>
		<a href="contact.php" class="button3">Contact Me</a>
	</div>
	
	<div class="address">
		<address>
			<!--<a href="mailto:jkarpinski14@gmail.com">Contact - Email here</a>.<br>-->
			<h2>Send e-mail or suggestions to me:</h2>
				<form action="mail.php" method="post" enctype="text/plain">
					Name:<br>
				<input type="text" name="name" value="" size="40"><br>
					E-mail:<br>
				<input type="text" name="mail" value="" size="40"><br>
					Comment:<br>
				<input type="text" name="comment" value="" size="40"><br><br>
				<input type="submit" value="Send">
				<input type="reset" value="Reset">
				</form>
			<br>
			Visit at:<br>
			2925 E. Sierra Madre Blvd. Pasadena, CA 91106
			<br>
			<br>
			Call at:<br>
			(626) 482 - 1103
			<br>
			<br>
			<a href="facebook.com"><img src="img/facebook.png" class="face"></a>
			<a href="twitter.com"><img src="img/twitter-icon.png" class="tweet"></a>
			<a href="https://plus.google.com/u/0/"><img src="img/googleplus.png" class="goog"></a>
		</address>
	</div>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>