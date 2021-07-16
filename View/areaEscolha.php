<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Escolha</title>
</head>

<body background="img/nort.jpg">

<div class="logon">

<h3>Como gostaria de acessar nossa plataforma?</h3></br>
    <div class="cli">
    <h5>Cliente</h5>
    <a href="areaCliente.php"><button type="submit" class="assinar">Entrar</button></a>
    </div>

    <div class="fn">
    <h5>Funcionário</h5>
    <a href="areaFuncionario.php"><button type="submit" class="assinar">Entrar</button>
    </div>

</div>

</div>
</body>
</html>