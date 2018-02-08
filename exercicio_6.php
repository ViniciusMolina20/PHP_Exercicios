<?php 
	/*
		Ler um número inteiro entre 1 e 12 e escrever
		o mês correspondente. Caso o número seja
		fora desse intervalo, informar que não existe
		mês com este número
	*/

	//Mostrando na tela o numero do exercicio
	echo "<h2><center>Exercicio 6 </h2></center>";
?>

<form method="get" action="exercicio_6.php">
	<?php

		//Box que ira receber o numero 
		echo "<center><input type = 'text' name = 'mes' placeholder = 'Numero entre 1 a 12'>";

		//Botao para enviar os dados
		echo "<center><br><input type = 'submit' value = 'Enviar'>";

		//Guardando o valor na minha variavel
		$mes = $_GET ['mes'];

		//If mes for igual ao numero correspondente entrar na função ideal
		if ($mes == 1) 
		{
			//Mostrando na tela o mes
			echo "<script> alert ('Janeiro'); </script>";
		}

		else if ($mes == 2) 
		{
			//Mostrando na tela o mes
			echo "<script> alert ('Fevereiro'); </script>";
		}

		else if ($mes == 3) 
		{
			//Mostrando na tela o mes
			echo "<script> alert ('Março'); </script>";
		}

		else if ($mes == 4) 
		{
			//Mostrando na tela o mes
			echo "<script> alert ('Abril'); </script>";
		}

		else if ($mes == 5) 
		{
			//Mostrando na tela o mes
			echo "<script> alert ('Maio'); </script>";
		}

		else if ($mes == 6) 
		{
			//Mostrando na tela o mes
			echo "<script> alert ('Junho'); </script>";
		}

		else if ($mes == 7) 
		{
			//Mostrando na tela o mes
			echo "<script> alert ('Julho'); </script>";
		}

		else if ($mes == 8) 
		{
			//Mostrando na tela o mes
			echo "<script> alert ('Agosto'); </script>";
		}

		else if ($mes == 9) 
		{
			//Mostrando na tela o mes
			echo "<script> alert ('Setembro'); </script>";
		}

		else if ($mes == 10) 
		{
			//Mostrando na tela o mes
			echo "<script> alert ('Outubro'); </script>";
		}

		else if ($mes == 11) 
		{
			//Mostrando na tela o mes	
			echo "<script> alert ('Novembro'); </script>";
		}

		else if ($mes == 12) 
		{
			//Mostrando na tela o mes
			echo "<script> alert ('Dezembro'); </script>";
		}

		else 
		{
			//Mostrando na tela que não existe mes com esse numero
			echo "<script> alert ('Não existe mês com o numero $mes'); </script>";
		}
	?>
</form>