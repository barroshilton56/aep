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
padding:  300px;
margin-left: 200px;
}

</style>

<body>
<div class="principal">
<!--    <form class="row g-3">
    <p class="fs-1" style = "fontcolor:#0d6efd">Bem Vindo!</p>
    <p style='color:#0d6efd; font-size:20px;'><b>Informe os dados de acesso para entrar no portal.</b></p>
    <div class="col-auto">
        <label for="staticEmail2" class="visually-hidden">Email</label>
        <input type="text"class="form-control" id="staticEmail2" placeholder="Usuário" name="usuario">
    </div>
    <div class="col-auto">
        <label for="inputPassword2" class="visually-hidden">Senha</label>
        <input type="password" class="form-control" id="inputPassword2" placeholder="Senha" name="senha">
    </div>
    <div class="col-auto">
        <button type="submit" class="btn btn-primary mb-3">Entrar</button>
    </div>
    </form>
</div>

</form>
-->
<form action="login_vai.php" method="post">
Sistema Autenticação de Notícias.<BR>
Login: <input type="text" name="usuario"><br>
Senha: <input type="password" name="senha"><br>
<input type="submit" value="OK!">
</form>


</body>
  </div>
</html>