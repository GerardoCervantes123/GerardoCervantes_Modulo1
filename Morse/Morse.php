<!DOCTYPE html>
<html>
<head>
	<title>Traductor</title>
</head>
</html>
<?php
	$morse = [
		'A' => '.-', 
		'B' => '-...', 
		'C' => '-.-.', 
		'D' => '-..', 
		'E' => '.', 
		'F' => '..-.', 
		'G' => '--.', 
		'H' => '....', 
		'I' => '..', 
		'J' => '.---' , 
		'K' => '-.-', 
		'L' => '.-..', 
		'M' => '--',
		'N' => '-.', 
		'Ñ' => '– – . – –',
		'O' => '---', 
		'P' => '.--.', 
		'Q' => '--.-', 
		'R' => '.-.', 
		'S' => '...', 
		'T' => '-', 
		'U' => '..-',
		'V' => '...-',
		'W' => '.--',
		'X' => '-..-',
		'Y' => '-.--',
		'Z' => '--..',
        "1" =>".----",
		"2" =>"..---",
        "3" =>"...--",
        "4" =>"....-",
        "5" =>".....",
        "6" =>"-....",
        "7" =>"--...",
        "8" =>"---..",
        "9" =>"----.",
        "0" =>"-----",
		"." =>".-.-.-",
        "?" =>"..--..",
        "," =>"-.-.--",
        "'" =>".-..-.",
        "!" =>"--..--",
        " " =>"/" 
	];

	if(isset($_POST['code'])){
		$salida = '';
		$mensaje = strtoupper($_POST['code']);
		

		if(isset($_POST['morse'])){
			$palabra = explode('/', $mensaje);
		}else{
			$palabra = explode(' ', $mensaje);
		}
		foreach($palabra as $i => $palabra){
			if(isset($_POST['morse'])){
				$letras = explode(' ', $palabra);
				$n = 0;
				foreach($letras as $i => $code){
					$salida .= array_search($code, $morse);
					$n++;
				}
				if($n == count($letras)){
					$salida .= ' ';
				}
			}else{
				for($n = 0; $n< strlen($palabra); $n++){
					$salida .= $morse[$palabra[$n]].'   ';

					if($n == (strlen($palabra)-1)){
						$salida .= '/';
					}
				}
			}
		}
		echo "<h1>" . "Su texto a traducir: " . "</h1>";
		echo $mensaje . "<br>";
		echo "<h1>" . "Su traducción es: " . "</h1>";
		echo $salida;
	}
?>
<html><br><br><br>
<form action="Morse.html">
	<input type="submit" value="Volver">
	</form>
</html>
    