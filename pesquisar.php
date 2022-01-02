<?php
include_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<link href="css/estilo.css" rel="stylesheet">
		<title>Pesquisar</title>		
	</head>
	<body>
	<?php include 'nav.php' ?>
	<div class="centraliza-1200">
		<div class="engloba-pesquisar">
			<p class="titulo-pesquisa">Buscar Cadastros</p>
			<div class="centraliza-form">
		<form method="POST" action="" class="form-pesquisar">
			<input type="text" name="nome" placeholder="Digite um nome" class="digita">
			<input name="SendPesqUser" type="submit" value="Buscar" class="buscar">
		</form>
		</div>
		<div class="espaco-usuario">
		<?php
		$SendPesqUser = filter_input(INPUT_POST, 'SendPesqUser', FILTER_SANITIZE_STRING);
		if($SendPesqUser){
			$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
			$result_usuario = "SELECT * FROM cadastro WHERE nome LIKE '%$nome%' ORDER BY id desc";
			$resultado_usuario = mysqli_query($conn, $result_usuario);
		
			
			while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
				

				echo "<div class='separa'></div>";
				echo "<p class='padrao-espaco'> Nome: " . $row_usuario['nome'] . "</p>";
				echo "<p class='padrao-espaco'> Sobrenome: " . $row_usuario['sobrenome'] . "</p>";
				echo "<p class='padrao-espaco'> Email: " . $row_usuario['email'] . "</p>";
				echo "<p class='padrao-espaco'> Senha: " . $row_usuario['senha'] . "</p>";
				echo "<p class='padrao-espaco'> Telefone: " . $row_usuario['telefone'] . "</p>";
				echo "<p class='padrao-espaco'> Cep: " . $row_usuario['cep'] . "</p>";
				echo "<p class='padrao-espaco'> sexo: " . $row_usuario['sexo'] . "</p>";
				if($row_usuario['newsletter'] == 1)
				{
					echo "<p class='padrao-espaco'> Receber noticias: Sim</p>";
				}else{
					echo "<p class='padrao-espaco'> Receber noticias: Não</p>";
				}		
				echo "<br><br>";
			}
		
		}
		?>
		</div>
		</div>
			</div>
			<div class="fundo-baixo-pesq"></div>
	</body>
</html>