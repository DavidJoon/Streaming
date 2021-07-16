<?php
include_once("../Model/bancoUsuario.php");
include_once("../Model/bancoFilme.php");
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
        <img src="img/espicap.png" class="card-img-topp" alt="Espiral" title="Espiral">
        <div class="card-bodyy">
        <h5 class="card-destaques">Espiral</h5>
        </div>
    </div>
    
    <div class="cardmiau">
        <img src="img/paracap.jpeg" class="card-img-topp" alt="Parasita" title="Parasita">
        <div class="card-bodyy">
        <h5 class="card-destaques">Parasita</h5>
        </div>
    </div>

    <div class="cardmiau">
        <img src="img/viuvcao.png" class="card-img-topp" alt="Viúva Negra" title="Viúva Negra">
        <div class="card-bodyy">
        <h5 class="card-destaques">Viúva Negra</h5>
        </div>
    </div>
    
    <div class="cardmiau">
        <img src="img/creedcap.jpeg" class="card-img-topp" alt="Creed II" title="Creed II">
        <div class="card-bodyy">
        <h5 class="card-destaques">Creed II</h5>
        </div>
    </div>

    <div class="cardmiau">
        <img src="img/freicap.jpeg" class="card-img-topp" alt="A Freira" title="A Freira">
        <div class="card-bodyy">
        <h5 class="card-destaques">A Freira</h5>
        </div>
    </div>
      
    </div>
    
  </section>
  
    <div class="container">
      <form action="" method="post" class="row g-3">
        <div class="col-9">
          <input type="text" placeholder="Procurar pelo nome do filme" class="form-control" name="filme">
        </div>
        <div class="col-3">
            <input type="text" min="1900" max="2050" class="form-control" name="ano" placeholder="Procurar pelo ano do filme">
        </div>
        <div class="col-12">
          <button type="submit" class="botoes"> Buscar </button>
        </div>
      </form>
    </div>

    <?php 
$filme = isset($_POST["filme"]) ? $_POST["filme"]:"";
$ano = isset($_POST["ano"]) ? $_POST["ano"]:"";

if(!$filme and !$ano){
}else{

$dado = visuNomeFilme($conexao, $filme, $ano);
foreach($dado as $dados) :
?>
  <div class="taborganizar">
  <table class="table table-striped mt-4">
    <thead>
      <tr>
        <th scope="col">Capa</th>
        <th scope="col">Filme</th>
        <th scope="col">Gênero</th>
        <th scope="col">Ano</th>
        <th scope="col">Sinopse</th>
        <th scope="col"></th>
      </tr>
    </thead>

    <tbody class="teste">
      <tr>
        <td class="capafil"><img src="<?=$dados["capafil"]?>" width="150" height="200" ></td>
        <td class="genserie"><?=$dados["nomefil"]?></td>
        <td class="genfil"><?=$dados["generofil"]?></td>
        <td class="anofil"><?=$dados["anofil"]?></td>
        <td class="sinfil"><?=$dados["sinopsefil"]?></td>
        <td><a class="btn btn-success mt-3" href="areaCliente.php">Assistir</a>
      </tr>

<?php
endforeach;
}
?>

    </tbody>
  </table>
  </div>
</div>
</main>

<?php
include('footer.php');
?>
