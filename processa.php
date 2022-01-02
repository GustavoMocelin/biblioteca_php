<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$cep = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$newsletter = filter_input(INPUT_POST, 'newsletter', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO cadastro (nome, sobrenome, email, senha, telefone, cep, sexo, newsletter) VALUES ('$nome', '$sobrenome','$email', '$senha','$telefone', '$cep', '$sexo', '$newsletter')";
$resultado_usuario = mysqli_query($conn, $result_usuario);
  
if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "";
	header("Location: cadastro.php");
}else{
	$_SESSION['msg'] = "";
	header("Location: cadastro.php");
} 



if($nome == ""){
    echo "Nome não informado";
}




//  $time   = strtotime($_POST["data_nascimento"]);
//  $data_nascimento = date('Y-m-d',$time); 

/*$consulta = "SELECT nome, sobrenome, email, senha, telefone, sexo, newsletter FROM cadastro WHERE nome = {$nome}";

    while($dados = mysqli_fetch_array($resultado_usuario)){
        echo "Dados do usuário: " . $dados['dnome'] . "<br>";
    }

	$consulta = "SELECT nome, sobrenome, email, senha, telefone, sexo, newsletter FROM cadastro WHERE nome = {$nome}";

    while($dados = mysqli_fetch_array($resultado_usuario)){
        echo "Dados do usuário: " . $dados['nome'] . "<br>";
    }

    */