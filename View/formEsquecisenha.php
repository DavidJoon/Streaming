<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Esqueci a Senha</title>
</head>
<body background="img/nort.jpg">
<div class="container">
<h4 class="textesqueci">Preencha corretamente os campos abaixo</h4>
<?php
session_start();

$msg = isset($_SESSION ["msg"])?$_SESSION ["msg"]:"";

?>

<form id="formEsqueceusenha" action="../Controller/trocarsenha.php" method="POST">
  <?=$msg?>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-1 col-form-label">Email</label>
    <div class="col-sm-8">
      <input type="email" name="email" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputpin" class="col-sm-1 col-form-label">PIN</label>
    <div class="col-sm-8">
      <input type="number" min="00001" max="99999" name="pin" class="form-control" id="inputpin">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputSenha" class="col-sm-1 col-form-label">Nova Senha</label>
    <div class="col-sm-8">
      <input type="password" name="novasenha" class="form-control" id="inputSenha">
    </div>
  </div>
  <button type="submit" class="btn btn-success">Trocar a senha</button>
  <a class="btn btn-danger" href="acessofun.php">Voltar</a>
</form>
<?php
$_SESSION ["msg"] = " ";
?>
</div>
</body>
</html>