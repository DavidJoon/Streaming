<?php
include_once("../Model/bancoUsuario.php");
include_once("../Model/bancoAnime.php");
include_once("../Model/conexao.php");
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
     <title>Área do Cliente</title>
</head>

<body background="img/nort.jpg">

<header class="areaf">

  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
    <a href="areaCliente.php"><img class="logotipof" alt="Logo" title="Logo" src="img/logotipof.jpeg" height="45" width="50"></a>
    <h5 class="textlogo"  alt="MiauFlix" title="MiauFlix" >MiauFlix</h5>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
      <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="areaCliente.php">Início</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Filme</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="../View/visuFilme.php">Buscar</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Série</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="../View/visuSerie.php">Buscar</a></li>
            </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Anime</a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="../View/visuAnime.php">Buscar</a></li>
            </ul>
        </li>

        <li class="ola">Seja Bem-Vindo (a)</li>

        <li class="nav-sair">
          <a class="nav-link" id="navbarDropdownMenuLink" href="../Controller/logout.php">Sair</a>
        </li>

      </ul>
    </div>
  
  </div>
</nav>
</header>

<main class="mcliente">

<section class="carddest">
    <h3 class="ultimosadd">Últimos Adicionados</h3>
    <div class="d-flex">

    <div class="cardmiau">
        <img src="img/bleacap.jpg" class="card-img-topp" alt="Bleach" title="Bleach">
        <div class="card-bodyy">
        <h5 class="card-destaques">Bleach</h5>
        </div>
    </div>
    
    <div class="cardmiau">
        <img src="img/deatcap.jpg" class="card-img-topp" alt="Death Note" title="Death Note">
        <div class="card-bodyy">
        <h5 class="card-destaques">Death Note</h5>
        </div>
    </div>

    <div class="cardmiau">
        <img src="img/nancap.jpg" class="card-img-topp" alt="Nanatsu no Taizai" title="Nanatsu no Taizai">
        <div class="card-bodyy">
        <h5 class="card-destaques">Nanatsu no Taizai</h5>
        </div>
    </div>

    <div class="cardmiau">
        <img src="img/onecap.png" class="card-img-topp" alt="One Piece" title="One Piece">
        <div class="card-bodyy">
        <h5 class="card-destaques">One Piece</h5>
        </div>
    </div>
    
    <div class="cardmiau">
        <img src="img/samcap.jpg" class="card-img-topp" alt="Samurai X" title="Samurai X">
        <div class="card-bodyy">
        <h5 class="card-destaques">Samurai X</h5>
        </div>
    </div>
      
    </div>
    
  </section>
  
    <div class="container">
      <form action="" method="post" class="row g-3">
        <div class="col-9">
          <input type="text" placeholder="Procurar pelo nome do anime" class="form-control" name="anime">
        </div>
        <div class="col-3">
            <input type="text" min="1900" max="2050" class="form-control" name="ano" placeholder="Procurar pelo ano do anime">
        </div>
        <div class="col-12">
          <button type="submit" class="botoes"> Buscar </button>
        </div>
      </form>
    </div>

    <?php 
$anime = isset($_POST["anime"]) ? $_POST["anime"]:"";
$ano = isset($_POST["ano"]) ? $_POST["ano"]:"";

if(!$anime and !$ano){
}else{

$dado = visuNomeAnime($conexao, $anime, $ano);
foreach($dado as $dados) :
?>

  <div class="taborganizar">
  <table class="table table-striped mt-4">
    <thead>
      <tr>
        <th scope="col">Capa</th>
        <th scope="col">Anime</th>
        <th scope="col">Gênero</th>
        <th scope="col">Ano</th>
        <th scope="col">Sinopse</th>
        <th scope="col"></th>
      </tr>
    </thead>

    <tbody class="teste">
      <tr>
        <td><img src="<?=$dados["capaani"]?>" width="150" height="200"></td>
        <td class="genserie"><?=$dados["nomeani"]?></td>
        <td class="diserie"><?=$dados["generoani"]?></td>
        <td class="diserie"><?=$dados["anoani"]?></td>
        <td class="sinfil"><?=$dados["sinani"]?></td>
        <td><a class="btn btn-success mt-2" href="areaCliente.php">Assistir</a></td>
      </tr>

<?php
endforeach;
}
?>

    </tbody>
  </table>
  </div>
</div>

<?php
include('footer.php');
?>
