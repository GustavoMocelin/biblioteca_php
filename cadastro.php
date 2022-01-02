<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Cadastro biblioteca</title>		
		<link href="css/estilo.css" rel="stylesheet">
	</head>
	<body>
	<?php include 'nav.php' ?>
	
		<?php
		if(isset($_SESSION['msg'])){
			echo "<script>alert('Usuario cadastrado com sucesso!');</script>";
			unset($_SESSION['msg']);
		}
		?>
	<div class="centraliza-1200"> 
		<p class="titulo-cadastro">Cadastro Biblioteca</p>
		<div class="engloba-form">
				<form method="POST" action="processa.php">
						<label>Nome: </label>
						<input type="text" id="nome" name="nome" placeholder="Insira seu nome" required="required"><br><br>
						<label>Sobrenome:</label>
						<input type="text" id="sobrenome" name="sobrenome" placeholder="Insira seu sobrenome" required="required" /><br><br>
						<label>E-mail: </label>
						<input type="email"  id="email" name="email" placeholder="Digite o seu e-mail" required="required"><br><br>
						<label>Senha: </label>
						<input type="password"  id="senha" name="senha" placeholder="Digite uma senha" required="required"><br><br>
						<label>Telefone: </label>
						<input type="number"  id="telefone" name="telefone" placeholder="Digite seu telefone" required="required"><br><br>
						<label>CEP: </label>
						<input type="text"  id="cep" name="cep" placeholder="Digite seu CEP" required="required"><br><br>
					<div class="colunas">
						<div class="sexo"> 				
								<label for="sexo">Sexo:</label>
								<select name="sexo" id="sexo" >
									<option value="">informar...</option>
									<option value="Masculino">Masculino</option>
									<option value="Feminino">Feminino</option>
									<option value="Não informado">Não informar</option>
								</select>  
						</div>
						<div class="news">
							<label for="newsletter">Newsletter</label>
							<input type="checkbox" id="newsletter" name="newsletter" value="1"/>
							<small>Desejo receber novidades</small>
						</div>
					</div> 
					<input type="submit" value="Cadastrar" class="enviar">
				</form>
			</div>
		</div>
		<div class="fundo-baixo-pesq"></div>
	</body>
</html>