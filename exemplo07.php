<?php
	function exibir(){
		Static $ano;
		$ano++;
		echo "<br/>".$ano;
	}
	echo exibir();
	echo exibir();
	echo exibir();
 ?>