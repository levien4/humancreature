<!DOCTYPE html>
<html>
<head>
<title>Beeldhouwwerk</title>
<?php print file_get_contents("http://www.humancreature.nl/scripts.php")?>
</head>
<body>
<center>
<div id="container">
	<div id="header">
		<h1>
			<font>
				Human Creature:<br><li>Beeldhouwwerk</li>
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
				<a href="#bld1" id="galerij2">
					<img src="bld1.JPG">
				</a>
				<a href="#_" class="lightbox" id="bld1">
					<img src="bld1.JPG">
				</a>
			</div>
		</center>
	</div>
</div>
</center>
</body>
</html>
