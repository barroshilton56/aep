<?php 
include_once("config.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>AEP | 2021</title>

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
  <p class="fs-1" style = "fontcolor:#0d6efd" >Cadastrar Animal</p>
  <form class="row g-3" action="querecebe.php" method="post">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nome</label>
    <input type="text" class="form-control" name="nome_animal">
  </div>
  

  <div class="col-md-6">
    <label for="inputState" class="form-label">Raça</label>
    <select id="inputState" class="form-select" name="especie_animal">
      <option selected>...</option>
      <option>Holandesa</option>
      <option>Jersey</option>
      <option>Pardo-suíço</option>
      <option>Gir</option>
      <option>Guzerá</option>
      <option>Sindi</option>
      <option>Girolando</option>

    </select>
  </div>

  <div class="col-md-6">
    <label for="inputState" class="form-label">Sexo</label>
    <select id="inputState" class="form-select" name="sexo">
      <option selected>...</option>
      <option>Macho</option>
      <option>Femêa</option>
    </select>
  </div>

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Data Nascimento</label>
    <input type="date" class="form-control" name="data_nasc">
  </div>

  <div class="col-md-6">
    <label for="inputState" class="form-label">Status</label>
    <select id="inputState" class="form-select" name="status">
      <option selected>...</option>
      <option>Ativo</option>
      <option>Inativo</option>
    </select>
  </div>

  <div class="d-grid gap-2">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>

</body>
  </div>
</html>