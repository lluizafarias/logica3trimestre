<?php
include("cabecalho.php");

print(date("l, F d, Y, H:i:s"));
?>
		<a href="inserirContato.php">Inserir novo contato...</a>

<?php
	$dados = file("agenda.csv");

	print('<table border="1">');
	$cont=0;
	foreach ($dados as $linha) {
		$partes = explode(";", $linha);
		if($cont==0){
			print('<tr>
				     <th>'.$partes[1].'</th>
				     <th>'.$partes[3].'</th>
				   </tr>');

		}else{
			if($cont%2==0){
				$cor = 'cinza';
			}else{
				$cor = 'branco';
			}
			print('<tr class="'.$cor.'">
				     <td><a href="contato.php?cod='.$partes[0].'">'.$partes[1].'</a></td>
				     <td>'.$partes[3].'</td>
				   </tr>');
		}
		$cont++;
	}
	print('<tr><td colspan="2">'.($cont-1).' contato(s) listado(s)</td></tr>');
	print('</table>');


	$rodape = file_get_contents('rodape.html');
	print($rodape);
?>