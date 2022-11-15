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
	//inicicializa a sessão, reinicia o jogo.
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
		echo "Posição da letra: ".$indx;

		if($indx===false){
			$_SESSION["tentativasUsadas"]=$_SESSION["tentativasUsadas"]+1;
			echo "Errou.";
		}

		else{
			$len=strlen($palavraCerta);
			echo "Tamanho da palavra: ".$len;

			for ($i=0; $i < $len; $i++) { 

				if($palavraCerta[$i]==$tentativaLetra){
					$palavraOculta[$i+1+1*$i]=$tentativaLetra;
					$_SESSION["palavraOculta"]=$palavraOculta;
				}
				
			}
		}

	}

	echo "<br><h2>".$_SESSION["palavraOculta"]."</h2>";
				
	?>


</body>
</html>