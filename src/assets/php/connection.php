<?php
$host = "localhost"; // ip do servidor do banco
$usuario = "root"; // usuario do banco
$pass = ""; // senha do banco
$db = "OdontoSync"; // nome do banco de dados
$con = mysqli_connect($host, $usuario, $pass, $db) //conecta ao banco
or die ("Erro ao estabelecer a conexão: ".mysqli_error());//trata erro na conexao
$bd = mysqli_select_db($con, $db) //seleciona o banco
or die ("Não conseguiu selecionar");//tratamento de erro na selecao
// versao simplificado
// $con = mysqli_connect("127.0.0.1", "root", "", "OdontoSync");
// $bd = mysqli_select_db($con, "OdontoSync");