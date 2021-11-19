<?php 
include_once("config.php");
 ?>
<html>
<body>
<?php

$nome_animal = $_POST["nome_animal"];
$especie_animal = $_POST["especie_animal"];
$data_nasc = $_POST["data_nasc"];
$sexo = $_POST["sexo"];
$status = $_POST["status"];
$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$conn = mysqli_connect($servidor, $dbusuario, $dbsenha, $dbname);
mysqli_select_db($conn, '$dbname');
$sql = "INSERT INTO aep (nome_animal, especie_animal, sexo, data_nasc, status) VALUES ('$nome_animal', '$especie_animal', '$sexo', '$data_nasc', '$status')";

if (mysqli_query($conn, $sql)) {
    echo "<script> alert('Salvei seus dados !'); window.location = 'index.php';</script>";
    
} else {
    echo "Deu erro: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);

?>
</body>
</html>