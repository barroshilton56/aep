<?php 
session_start();
include_once("config.php");
 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Relatório de Cadastros</title>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<style type="text/css">
.principal{
padding:  50px;
}
</style>

<body>

<div class="principal">
<nav aria-label="Navegação de página exemplo">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="http://localhost:8181/AEP/index.php">Cadastros</a></li>
    <li class="page-item"><a class="page-link" href="http://localhost:8181/AEP/relatorio.php">Relatório</a></li>
    <li class="page-item"><a class="page-link" href="http://localhost:8181/AEP/login.php">Sair</a></li>
  </ul>
</nav>
<p class="fs-1" style = "fontcolor:#0d6efd"> Relatório de Animais Cadastrados</p>
    <?php
    $result_aep = "SELECT * FROM aep";
    $resultado_aep = mysqli_query($conn, $result_aep);

            if ($result_aep == 0) {
                echo "<p style='color:red; font-size:20px;'><b>Nenhum animal foi cadastrado!</b></p>";
            }
                else {
                    while($row_aep = mysqli_fetch_assoc($resultado_aep)) {
                        echo  "ID Animal: " . $row_aep['id_animal'] . "<br>";
                        echo  "Nome Animal: " . $row_aep['nome_animal'] . "<br>";
                        echo  "Especie Animal: " . $row_aep['especie_animal'] . "<br>";
                        echo  "Sexo Animal: " . $row_aep['sexo'] . "<br>";
                        echo  "Data Nasc Animal: " . $row_aep['data_nasc'] . "<br>";
                        echo  "Status Animal: " . $row_aep['status'] . "<br>";
                        echo "------------------------------------" . "<br>";
                    }

                }
    ?>

    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3" onClick="window.location.reload()">Consultar Animais</button>
    </div>

</div>

</body>
</html>