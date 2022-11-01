<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head><title> Jogo da Forca </title>
	<meta charset="utf-8">
</head>

<body>
	<form method="get">
	
		<input type="submit" name="novo" value="Novo Jogo">
	</form>

	    <h4>Adivinhe o nome da fruta:</h4>
	<form method="get">

		<br>
		<span>Digite uma letra:</span>
		<input type="text" name="letra" placeholder="letra" required>
		<br>
	
		<input type="submit" name="enviar" value="enviar">
	</form>


	<?php
	if(isset($_GET["novo"])){
		$_SESSION["tentativasTotais"]=6;
		$_SESSION["tentativasUsadas"]=0;
		$_SESSION["palavraCerta"]="Uva";
		$_SESSION["palavraOculta"]=" _ _ _";
		}

		$palavraCerta=$_SESSION["palavraCerta"];
		$palavraOculta=$_SESSION["palavraOculta"];


	if(isset($_GET["enviar"])){
	
		$tentativaLetra=$_GET["letra"];

		$indx=strpos($palavraCerta, $tentativaLetra);
		echo $indx;

		if($indx===false){
			$_SESSION["tentativasUsadas"]=$_SESSION["tentativasUsadas"]+1;
			echo "Errou.";
		}
		else{
			$palavraOculta[$indx+1+1*$indx]=$tentativaLetra;
			$_SESSION["palavraOculta"]=$palavraOculta;
		}
		//else{
		//	$_SESSION["tentativasUsadas"]=$_SESSION["tentativasUsadas"]+1;
		//}

	}

	echo "<br><h2>".$_SESSION["palavraOculta"]."</h2>";
				
	?>


</body>
</html>