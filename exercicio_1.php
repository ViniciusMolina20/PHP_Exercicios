<?php 
	/*
		Construir um algoritmo que leia 2 números e
		efetue a adição. Caso o valor somado seja
		maior que 20, este deverá ser apresentando
		somando-se a ele mais 8; caso o valor
		somado seja menor ou igual a 20, este deverá
		ser apresentado subtraindo-se 5
	*/

	//Mostrando na tela o numero do exercicio e centralizando
	echo "<h2><center>Exercicio 1</center></h2>";

?> 
	<?php //Method get então é possivel passar valores por URL ?>
	<form method="get" action="exercicio_1.php">
		<?php 
			//Fazendo um box para receber um numero e o nome da box é "caixa1"
			echo "<center><input type = 'text' name = 'caixa1' placeholder = 'Digite um numero'></center>";
			echo "<center>+</center>";

			//Fazendo um box para receber outro numero e o nome da box é "caixa2"
			echo "<center><input type = 'text' name = 'caixa2' placeholder = 'Digite mais um numero'></center>";

			//Botao para enviar os dados
			echo "<br><center><input type = 'submit' value = 'Enviar'>";

			//Guardando o valor da primeira box na minha variavel "$numero1"
			$numero1 = $_GET ['caixa1'];

			//Guardando o valor da segunda box na minha variavel "$numero2"
			$numero2 = $_GET ['caixa2'];

			//Somando os dois numeros e guardando em minha variavel "$Resultado"
			$resultado = $numero1 + $numero2;

			//Se o resultado foi maior que 20 entrar nessa função
			if ($resultado > 20) 
			{
				//Como o resultado é maior que 20 vamos somar mais 8, como o exercicio solicitou
				$resultado = $resultado + 8;

				//Usando um script de Javascript para aparecer um alerta com o resultado da soma
				echo "<script> alert ('Resultado: $resultado');</script>";
			}

			//Se o resultado for menor igual que 20 entrar nessa função
			else 
			{
				//Como o resultado é menor que 20 vamos subtrair 5, como o exercicio solicitou
				$resultado = $resultado - 5;

				//Usando um script de Javascript para aparecer um alerta com o resultado da subtração
				echo "<script> alert ('Resultado: $resultado');</script>";
			}
		?>
	</form>
	







