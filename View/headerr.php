<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
     <title>Área do Funcionário</title>
</head>
<body background="img/nort.jpg">
<header class="areaf">

<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
    <a href="areaFuncionario.php"><img class="logotipof" alt="Logo" title="Logo" src="img/logotipof.jpeg" height="45" width="50"></a>
    <h5 class="textlogo"  alt="MiauFlix" title="MiauFlix" >MiauFlix</h5>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="areaFuncionario.php">Home</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Usuário
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="cadastroUsuario.php">Cadastrar</a></li>
            <li><a class="dropdown-item" href="../View/visualizarUsuario.php">Buscar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Funcionário
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="cadastroFuncionario.php">Cadastrar</a></li>
            <li><a class="dropdown-item" href="../View/visualizarFuncionario.php">Buscar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Cliente
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="cadastroCliente.php">Cadastrar</a></li>
            <li><a class="dropdown-item" href="../View/visualizarCliente.php">Buscar</a></li>
          </ul>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Filme
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="../View/cadastroFilme.php">Cadastrar</a></li>
            <li><a class="dropdown-item" href="../View/visualizarFilme.php">Buscar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Série
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="../View/cadastroSerie.php">Cadastrar</a></li>
            <li><a class="dropdown-item" href="../View/visualizarSerie.php">Buscar</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Anime
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="../View/cadastroAnime.php">Cadastrar</a></li>
            <li><a class="dropdown-item" href="../View/visualizarAnime.php">Buscar</a></li>
          </ul>
        </li>

        <li class="dropdown-item"><a class="dropdown-item" href="#">Olá, <?php echo($_SESSION["funcionario"]);?></a></li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="../Controller/logout.php">
            Sair
          </a>
        </li>

      </ul>
    </div>
  </div>
</nav>
</header>