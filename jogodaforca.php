<!DOCTYPE html>
<html>
<head><title> Jogo da Forca </title>
	<meta charset="utf-8">
</head>

<body>
    <h4>Adivinhe o nome da fruta:</h4>
	<form method="get">
		<!-- <span>Digite seu nome:</span> -->
		<!-- <input type="text" name="nome" placeholder="nome" required> -->
		<br>
		<span>Digite uma letra:</span>
		<input type="text" name="letra" placeholder="letra" required>
		<br>
	

		<input type="submit" name="enviar" value="enviar">
	</form>

	<?php
		if(isset($_GET["enviar"])){
			$numeroTentativa=6;
			$palavraCerta="Uva";
			$palavraOculta="_ _ _";
			$palavraOcultaTeste="___";
			//$nome=$_GET["nome"];
			$tentativaLetra=$_GET["letra"];

			

			echo "<br><h2>".$palavraOculta."</h2>";
			echo "<br><h2>".$palavraOcultaTeste."</h2>";
		}
	?>
</body>
</html>