<?php

print_r($_GET);

include("cabecalho.php");

$codigo = $_GET['cod'];

$dados = file("agenda.csv");

foreach ($dados as $linha) {
	$colunas = explode(";", $linha);

	if ($colunas[0]==$codigo) {
		$nome = $colunas[1];
		$telefone = $colunas[2];
		$email = $colunas[3];
		if($colunas[4]!=''){
			$foto = $colunas[4];
		}else{
			$foto = 'imagens/semfoto.png';
		}
	}
}
print('<img src="'.$foto.'">');
print('<h2>'.$nome.'</h2>');
print('<p>'.$telefone.'</p>');
print('<p>'.$email.'</p>');

include("rodape.html");
?>