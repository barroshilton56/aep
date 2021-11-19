<?php 

$servidor = "localhost"; //local
$dbname = "aep"; //nome do banco de dados
$dbusuario = "root"; //usuario do banco de dados
$dbsenha = ""; //senha do banco de dados

$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);

if (!$conn) {
    die ("Conexao falhou: " . mysqli_connect_error());
}
?>