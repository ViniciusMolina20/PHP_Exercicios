<?php 
	/*
		Entrar com 3 números e imprimi-los em
		ordem decrescente (suponha números
		diferentes)
	*/

	//Exibindo na tela o numero do exercicio 
	echo "<h2><center>Exercicio 4</center></h2>";
?>

<form method="get" action="exercicio_4.php">
	<?php 
		//Box para receber um numero
		echo "<center><input type = 'text' name = 'numero1' placeholder = 'Digite um numero'></center>";

		//Box para receber outro numero
		echo "<br><center><input type = 'text' name = 'numero2' placeholder = 'Digite outro numero'></center>";

		//Box para receber mais um numero
		echo "<br><center><input type = 'text' name = 'numero3' placeholder = 'Digite mais um numero'></center>";

		//Botão para enviar os dados
		echo "<br><center><input type = 'submit' value = 'Enviar'></center>";

		//Guardando os dados nas variaveis
		$numero1 = $_GET  ['numero1'] ;
		$numero2 = $_GET  ['numero2'] ;
		$numero3 = $_GET  ['numero3'] ;

		//Se o numero 1 for maior que o numero 2 e o numero 3 entrar nessa função
		if ($numero1 > $numero2 && $numero1 > $numero3) 
		{
			//Se o numero 2 for maior que o numero 3 entrar nessa função
			if ($numero2 > $numero3) 
			{	
				//Mostrando na tela com o alert do JS, a ordem decrescente dos numeros digitados
				echo "<script> alert ('Ordem: $numero1, $numero2, $numero3');</script>";
			}

			//Se não entrar enssa função
			else 
			{
				//Mostrando na tela com o alert do JS, a ordem decrescente dos numeros digitados
				echo "<script> alert ('Ordem: $numero1, $numero3, $numero2');</script>";
			}
		}

		//Se o numero 2 for maior que o numero 1 e o numero 3 entrar nessa função
		else if ($numero2 > $numero1 && $numero2 > $numero3) 
		{
			//Se o numero 1 for maior que o numero 3 entrar nessa funcao
			if ($numero1 > $numero3) 
			{
				//Mostrando na tela com o alert do JS, a ordem decrescente dos numeros digitados
				echo "<script> alert('Ordem: $numero2, $numero1, $numero3');</script>";
			}

			//Se não entrar enssa função
			else 
			{
				//Mostrando na tela com o alert do JS, a ordem decrescente dos numeros digitados
				echo "<script> alert ('Ordem: $numero2, $numero3, $numero1');</script>";
			}
		}

		//Se o numero 3 for maior que o numero 2 e o numero 1 entrar nessa função
		else 
		{
			//Se o numero 1 for maior que o numero 2 entrar nessa funcao
			if ($numero1 > $numero2) 
			{
				//Mostrando na tela com o alert do JS, a ordem decrescente dos numeros digitados
				echo "<script> alert ('Ordem: $numero3, $numero1, $numero2');</script>";
			}

			//Se não entrar enssa função
			else 
			{
				//Mostrando na tela com o alert do JS, a ordem decrescente dos numeros digitados
				echo "<script> alert ('Ordem: $numero3, $numero2, $numero1');</script>";
			}
		}
	?>	
</form>