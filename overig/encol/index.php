<!DOCTYPE html>
<html>
<head>
<title>Encoustique & collage</title>
<?php print file_get_contents("http://www.humancreature.nl/scripts.php")?>
</head>
<body>
<?php print file_get_contents("http://www.humancreature.nl/analyticstracking.php")?>
<center>
<div id="container">
	<div id="header">
		<h1>
			<font>
				Human Creature:<br><li>Encoustique & collage</li>
			</font>
		</h1>
	</div>
	<div id="center">
		<div id="slideshow">
			<div>
				<img src="http://www.humancreature.nl/encoustique.jpg"  width="100%">
			</div>
		</div>
	</div>

	<div id="content">
		<center>
			<?php print file_get_contents("http://www.humancreature.nl/menu.php")?>
			<div id="galerij">
				<a href="#encol1" id="galerij">
					<img src="encol1a.JPG">
				</a>
				<a href="#_" class="lightbox" id="encol1">
					<img src="encol1a.JPG">
				</a>

				<a href="#encol2" id="galerij">
					<img src="encol2.JPG">
				</a>
				<a href="#_" class="lightbox" id="encol2">
					<img src="encol2.JPG">
					<br>Jozef in de put
				</a>
			</div>
		</center>
	</div>
</div>
</center>
</body>
</html>
