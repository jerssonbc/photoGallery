<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Fotos Subidas</title>
	<link rel="stylesheet" href="slick/slick.css" type="text/css">
	<link rel="stylesheet" href="slick/slick-theme.css" type="text/css">
	<link rel="stylesheet" href="css/app.css" type="text/css">

</head>
<body>

<?php if(count($output) > 0): ?>
	<h1>Mi galleria de fotos</h1>
	<div class="gallery">
		<?php foreach ($output as $file): 	 ?>
			<div><img src="uploads/<?=$file ?>" ></div>
		<?php endforeach; ?>
	</div>
<?php  else: ?>
<h4>Tu no has subido ningún archivo</h4>
<?php endif ?>


	<p><a href="upload.php">Subir imágen</a></p>

	<script   src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>

  <script type="text/javascript" src="slick/slick.min.js"></script>

  <script type="text/javascript" src="js/slide.js"></script>
</body>
</html>