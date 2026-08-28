<?php
	$notas = [7.5, 4.0, 8.5, 6.0, 9.0, 3.5, 10.0, 5.5];
	$media = 0;
	$soma = 0;
	$maior6 = 0;
	$menor6 = 0;
	$maior = $notas[0];
	$menor = $notas[0];
	

	foreach($notas as $dados) {
		$soma = $soma + $dados;
		if($dados >= 6) {
			$maior6++;
		}else {
			$menor6++;
		}
		
		if($dados > $maior){
			$maior = $dados;
		}
		if($dados < $menor) {
			$menor = $dados;
		}
	}
	
	$media = $soma/count($notas);

    echo "media: $media\nMaiores que 6: $maior6\nMenores que 6: $menor6\nMaior nota: $maior\nMenor nota: $menor";
?>