<!DOCTYPE html>
<html>
<head>
<title>Was</title>
<?php print file_get_contents("http://www.humancreature.nl/scripts.php")?>
</head>
<body>
<?php print file_get_contents("http://www.humancreature.nl/analyticstracking.php") ?>
<center>
<div id="container">
	<div id="header">
		<h1>
			<font>
				Human Creature:<br><li>Was</li>
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
				<a href="#was1" id="galerij">
					<img src="was2b.jpg">
				</a>
				<a href="#_" class="lightbox" id="was1">
					<img src="was2.jpg">
				</a>
					
				<a href="#was2" id="galerij">
					<img src="was3b.jpg">
				</a>
				<a href="#_" class="lightbox" id="was2">
					<img src="was3.jpg">
				</a>
			</div>
		</center>
	</div>
</div>
</center>
</body>
</html>
