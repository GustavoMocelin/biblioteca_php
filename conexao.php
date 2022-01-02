<?php
$servidor = "localhost";
$usuario = "epiz_30428436_biblioteca";
$senha = "procopio495";
$dbname = "epiz_30428436_biblioteca";

//Criar a conexao
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

if(!$conn){
    die('Não foi possivel fazer a conexão com o banco de dados ' . mysqli_connect_error());
}else{
   
}