<?php 
	
	$nome = "Armandinho";

	function exibir(){
		$nome = "Josefina";
		echo "Valor da variável dentro da função " . $nome;
	}
	 	exibir();
	 	echo "<br /> valor da variável fora da função " . $nome;

 ?>