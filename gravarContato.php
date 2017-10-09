<?php


//ARRAY CRIADO AUTOMATICAMENTE, CONTENDO AS VARIAVEIS ENVIADAS POR MÉTODO POST
//print_r($_POST);

	//abrir arquivo e pegar o ultimo codigo existente nele
	$dados = file ("agenda.csv");
	foreach ($dados as $linha) {
		$colunas = explode(";", $linha);
		$cod_atual = $colunas [0];
	}

	$codigo = $cod_atual+1;
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$foto = $_POST['foto'];

	$texto = $codigo.";".$nome.";".$telefone.";".$email.";".$foto;

	print($texto);

	//abrir o arquivo agenda.csv em modo de escrita
	$arquivo = fopen("agenda.csv", "a+");

	//escrever o texto no arquivo
	fwrite($arquivo, "\n".$texto);

	//fechar o arquivo
	fclose($arquivo);

?>
<h2>Contato inserido com sucesso</h2>
<meta http-equiv="refresh" content="3;URL=index.php">