<?php 
	/*
		A biblioteca de uma universidade deseja fazer
		um algoritmo que leia o nome do livro que
		será emprestado, o tipo de usuário (professor
		ou aluno) e possa imprimir um recibo
		conforme mostrado a seguir. Considerar que
		o professor tem 10 dias para devolver o livro
		o aluno somente 3 dias
	*/

	//Mostrando na tela o numero do exercicio
	echo "<center><h2>Exercicio 7 </center><h2>";
?>

<form method="get" action="exercicio_7.php">
	<?php 
		//Box para receber o nome do livro
		echo "<center><input type = 'text' name = 'nome_livro' placeholder = 'Nome do livro'>";

		//Select para escolher o tipo de usuario
		echo "<br><br><select name = 'tipo_usuario'>
		   		<option value='' disabled selected>Tipo de usuario</option>
				<option>Professor</option>
				<option>Aluno</option>
			  </select>";

		//Botao para enviar os dados
		echo "<center><br><input type = 'submit' value = 'Enviar'>";

		//Guardando os valores digitados nas variaveis
		$nome = $_GET ['nome_livro'];
		@$tipo_user = $_GET ['tipo_usuario'];

		//Se o tipo de usuario for professor entrar nessa função
		if ($tipo_user == "Professor") 
		{
			//Mostrando recibo com dias de devolução igual a 10
			echo "<script> alert ('$nome, Dias para devolução: 10 dias'); </script>";
		} else if ($tipo_user == "Aluno") {
			//Mostrando recibo com dias de devolução igual a 3
			echo "<script> alert ('$nome, Dias para devolução: 3 dias'); </script>";
		}else {
			//Mostrando que o tipo de usuario é invalido
			echo "<script> alert ('Tipo de usuario invalido'); </script>";
		}
	?>
</form>