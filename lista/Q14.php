<?php
	$numeros = [2, 5, 2, 8, 5, 2, 10, 8, 5, 5];
	$contagem = [];
	
	foreach($numeros as $dados) {
		if(isset($contagem[$dados])) {
			$contagem[$dados]++;
		}else {
			$contagem[$dados] = 1;
		}
	}
	
	foreach($contagem as $dados => $qtd) {
		echo "O número $dados apareceu $qtd vezes\n";
	}
?>