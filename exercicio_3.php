<?php 
	/*
		Entrar com nome, sexo e idade de uma
		pessoa. Se a pessoa for do sexo feminino e
		tiver menos que 25 anos, imprimir nome e a
		a mensagem: ACEITA. Caso contrário,
		imprimir nome e a mensagem: NÃO ACEITA.
	*/

	//Imprimindo na tela numero dos exercicios
	echo "<h2><center>Exercicio 3</h2></center>";
?>

	<form method="get" action="exercicio_3.php">
		<?php
			//Fazendo uma box para receber o nome
			echo "<center><input type = 'text' name = 'nome' placeholder = 'Digite seu nome'>";

			//Fazendo um select para a pessoa escolher o sexo
			echo "<br><br>
				  <select name = 'sexo'>
				  	<option>Masculino</option>
				  	<option>Feminino</option>
				  </select>";

			//Box para receber a idade da pessoa
			echo "<center><br><input type = 'text' name = 'idade' placeholder = 'Digite sua idade'>";

			//Botão de enviar
			echo "<center><br><input type = 'submit' value = 'Enviar'>";


			//Guardando os valores digitados em variaveis
			$nome = $_GET ['nome'];
			$sexo = $_GET ['sexo'];
			$idade = $_GET ['idade'];

			//Se o sexo for igual a feminino e a idade menor que 25 entrar nessa funcao
			if ($sexo == 'Feminino' && $idade < 25) 
			{
				//Mostrando na tela usando o script alert, a mensagem solicitada pelo exercicio
				echo "<script> alert ('$nome: Aceita');</script>";
			}

			//Se não entrar nessa função
			else 
			{
				//Mostrando na tela usando o script alert, a mensagem solicitada pelo exercicio
				echo "<script> alert ('$nome: Não Aceita');</script>";
			}
		?>
	</form>