<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$tabela = "exemplo";
$conexao = mysqli_connect($servidor, $usuario, $senha) or
die("Não foi pssivel conectar ao servidor do BD");

mysqli_select_db($tabela, $conexao) or
die("Não foi pssivel conectar a tabela do BD");
?>