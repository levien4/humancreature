<!DOCTYPE html>
<html>
<head>
<title>Encoustique</title>
<?php print file_get_contents("http://www.humancreature.nl/scripts.php")?>
<script src="https://www.humancreature.nl/loadpic.js"></script>
</head>
<body onload="loadJSON()">
<?php print file_get_contents("https://www.humancreature.nl/analyticstracking.php") ?>
<center>
<div id="container">
	<div id="header">
		<h1>
			<font>
				Human Creature:<br><li>Encoustique</li>
			</font>
		</h1>
	</div>
	<div id="center">
		<div id="slideshow">
			<div>
				<img src="https://www.humancreature.nl/encoustique.jpg"  width="100%">
			</div>
		</div>
	</div>

	<div id="content">
		<center>
			<?php print file_get_contents("http://www.humancreature.nl/menu.php")?>
			<div id="galerij">
			</div>
		</center>
	</div>
</div>
</center>
</body>
</html>
