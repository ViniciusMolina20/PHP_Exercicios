<?php 
	/*
		Entrar com o número de vezes que se deseja
		imprimir a palavra SOL e imprimir
	*/

	//Mostrando o numero do exercicio na tela
	echo "<center><h2>Exercicio 9 </center></h2>";
?>

<form method="get" action="exercicio_9.php">
	<?php

		//Box para receber o numero de vezes que sera imprimido a palavra 
		echo "<center><input type = 'text' name = 'imprimir' placeholder = 'Numero de vezes'>";

		//Botao para enviar os dados
		echo " <input type = 'submit' value = 'Enviar'>";


		//Guardando o valor na variavel
		$imprimir = $_GET ['imprimir'];

		//For para mostrar na tela a palavra sol
		for ($i=0; $i < $imprimir ; $i++) 
		{ 
			//Mostrando a palavra sol
			echo "<center><br>SOL</center>";
		}










	?>
</form>