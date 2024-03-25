<?php
	$nome = "Leonardo";
	$peso = 68;
	$altura = 1.73;
	function calcular ($peso,$altura){
	return ($peso/($altura*$altura));
}
	$imc = calcular($peso,$altura);
	printf("Olá ".$nome.", seu peso é ".$peso ."Kg, sua altura é " .$altura."m, e seu IMC é %.2f",$imc);
 ?>