<?php
$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '123456';
$dbName = 'formulario-login';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
//if($conexao->connect_errno)
//{
 // echo "Erro";
//}
//else{
// echo "Conexão ok";
//}
//?>