<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vista de subida</title>
</head>
<body>
	<?php 
		$folder = "uploads";

		if(is_dir($folder)){
			$handler = opendir($folder);
			$output = "";

			while($files = readdir($handler)){
				if(!is_dir($files)){
					$output .= "<img src=\"uploads/{$files}\" width='180' height='180'>";
				}
			}
		}
		echo $output;
	 ?>
	<p><a href="index.php">Atras</a></p>
</body>
</html>