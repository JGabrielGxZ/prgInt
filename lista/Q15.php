<?php
	$alunos = [
		["nome" => "Ana", "nota1" => 8.0, "nota2" => 7.0],
		["nome" => "Carlos", "nota1" => 5.0, "nota2" => 4.5],
		["nome" => "Maria", "nota1" => 9.0, "nota2" => 9.5],
		["nome" => "João", "nota1" => 6.0, "nota2" => 5.0],
		["nome" => "Pedro", "nota1" => 3.0, "nota2" => 7.0]
	];
	$media;
	foreach ($alunos as $alunos => $nome $nota1 as $nota2) {
		$media = ($nota1 + nota2)/2;
		if($media >= 6) {
			echo "Aluno: $nome\nNota 1: $nota1\nNota 2: $nota2\nMedia: $media\nSituação: Aprovado\n\n====\n\n";
		} elseif($media < 6) {
			echo "Aluno: $nome\nNota 1: $nota1\nNota 2: $nota2\nMedia: $media\nSituação: Reprovado\n\n====\n\n";
		}
	}
?>