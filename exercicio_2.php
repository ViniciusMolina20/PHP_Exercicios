<?php 
	/*
		Entrar com um número e informar se ele é
		divisível por 10, por 5, por 2 ou se não é
		divisível por nenhum destes
	*/

	//Mostrando na tela o numero do exercicio
	echo "<h2><center>Exercicio 2</h2></center>";
?>
	
	<form method="get" action="exercicio_2.php">
	<?php 
		//Fazendo uma box para guardar o numero
		echo "<center><input type = 'text' name = 'caixa1' placeholder = 'Digite um numero'>";

		//Botao para enviar os dados
		echo "<center><br><input type = 'submit' value = 'Enviar'>";

		//Recebendo o dado e guardando na minha variavel
		$numero = $_GET ['caixa1'];

		//Quebra de linha
		echo "<br><br>";

		//Usando o modulo para saber se o numero é divisivel por aquele valor
		//If o modulo for igual a 0 então é divisivel
		if ($numero % 10 == 0) 
		{
			//Mostrando na tela que ele é divisivel por 10, usando o script de Javascript
			echo "<script> alert ('Numero divisivel por 10'); </script>";
		}

		else if ($numero % 5 == 0) 
		{
			//Mostrando na tela que ele é divisivel por 5, usando o script de Javascript
			echo "<script> alert ('Numero divisivel por 5'); </script>";
		}

		else if ($numero % 2 == 0) 
		{
			//Mostrando na tela que ele é divisivel por 2, usando o script de Javascript
			echo "<script> alert ('Numero divisivel por 2'); </script>";
		}

		else 
		{
			//Mostrando na tela que ele é não é divisivel por nenhum desses, usando o script de Javascript
			echo "<script> alert ('Numero não é divisivel por nenhum'); </script>";
		}
	?>