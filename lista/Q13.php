<?php
	$numeros = [2, 5, 2, 8, 5, 2, 10, 8, 5, 5];
	$maior = $notas[0];
	$Smaior = $notas[0];
	
	foreach($numeros as $dados) {
		if($dados > $maior) {
			$Smaior = $maior;
			$maior = $dados;
		}
	}
	
	echo "Maior número: $maior\nSegundo maior: $Smaior";
?>