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
    <h3 class="destaquesmiau">Destaques</h3>
    <div class="d-flex">

    <div class="cardmiau">
        <a href="https://topflix.one/media/assistir-online-um-lugar-silencioso---parte-ii/" target="_blank"><img src="img/silecap.jpg" class="card-img-topp" alt="Um Lugar Silencioso 2" title="Um Lugar Silencioso 2"></a>
        <div class="card-bodyy">
        <h5 class="card-destaques">Um Lugar Silencioso 2</h5>
        </div>
    </div>
    
    <div class="cardmiau">
        <a href="https://maxseries.top/series-e-animes/loki/" target="_blank"><img src="img/lokicap.jpg" class="card-img-topp" alt="Loki" title="Loki"></a>
        <div class="card-bodyy">
        <h5 class="card-destaques">Loki</h5>
        </div>
    </div>

    <div class="cardmiau">
        <a href="https://topflix.one/media/assistir-online-sem-remorso/" target="_blank"><img src="img/semrecap.jpg" class="card-img-topp" alt="Sem Remorso" title="Sem Remorso"></a>
        <div class="card-bodyy">
        <h5 class="card-destaques">Sem Remorso</h5>
        </div>
    </div>

    <div class="cardmiau">
        <a href="https://maxseries.top/series-e-animes/the-boys/" target="_blank"><img src="img/thebcap.jpg" class="card-img-topp" alt="The Boys" title="The Boys"></a>
        <div class="card-bodyy">
        <h5 class="card-destaques">The Boys</h5>
        </div>
    </div>
    
    <div class="cardmiau">
        <a href="https://topflix.one/media/velozes-e-furiosos-9/" target="_blank"><img src="img/fastcap.jpg" class="card-img-topp" alt="Velozes e Furiosos 9" title="Velozes e Furiosos 9"></a>
        <div class="card-bodyy">
        <h5 class="card-destaques">Velozes e Furiosos 9</h5>
        </div>
    </div>
      
    </div>
    
  </section>

  <section class="cardgen">
    <h3 class="filmesmiau">Filmes</h3>
    <div class="d-flex">
    
    <div class="cardmiau">
        <a href="https://topflix.one/media/assistir-online-mortal-kombat/" target="_blank"><img src="img/mkcap.jpeg" class="card-img-topp" alt="Mortal Kombat" title="Mortal Kombat"></a>
        <div class="card-bodyy">
        <h5 class="card-filmes">Mortal Kombat</h5>
        </div>
    </div>
    
    <div class="cardmiau">
        <a href="https://topflix.one/media/assistir-online-godzilla-vs-kong/" target="_blank"><img src="img/godcap.jpg" class="card-img-topp" alt="Godzilla vs Kong" title="Godzilla vs Kong"></a>
        <div class="card-bodyy">
        <h5 class="card-filmes">Godzilla vs Kong</h5>
        </div>
    </div>

    <div class="cardmiau">
        <a href="https://www1.assistirsuperflix.com/filmes/assistir-1917-online/" target="_blank"><img src="img/filcap.jpg" class="card-img-topp" alt="1917" title="1917"></a>
        <div class="card-bodyy">
        <h5 class="card-filmes">1917</h5>
        </div>
    </div>

    <div class="cardmiau">
        <img src="img/juncap.jpg" class="card-img-topp" alt="Jungle Cruise" title="Jungle Cruise">
        <div class="card-bodyy">
        <h5 class="card-filmes">Jungle Cruise</h5>
        </div>
    </div>
      
    <div class="cardmiau">
        <a href="https://topflix.one/media/assistir-online-dunkirk/" target="_blank"><img src="img/dunkcap.jpg" class="card-img-topp" alt="Dunkirk" title="Dunkirk"></a>
        <div class="card-bodyy">
        <h5 class="card-filmes">Dunkirk</h5>
        </div>
    </div>

    </div>
  </section>

    <a href="visuFilme.php">
    <div class="procurar">
    <h6 class="proc">Procurar</h6>
    </div></a>

  <section class="cardgen">
    <h3 class="seriesmiau">Séries</h3>
    <div class="d-flex">
    
    <div class="cardmiau">
        <a href="https://maxseries.top/series-e-animes/cobra-kai/" target="_blank"><img src="img/cobracap.jpg" class="card-img-topp" alt="Cobra Kai" title="Cobra Kai"></a>
        <div class="card-bodyy">
        <h5 class="card-series">Cobra Kai</h5>
        </div>
    </div>
    
    <div class="cardmiau">
        <a href="https://maxseries.top/series-e-animes/lucifer/" target="_blank"><img src="img/luccap.jpg" class="card-img-topp" alt="Lucifer" title="Lucifer"></a>
        <div class="card-bodyy">
        <h5 class="card-series">Lucifer</h5>
        </div>
    </div>

    <div class="cardmiau">
        <a href="https://maxseries.top/series-e-animes/la-casa-de-papel/" target="_blank"><img src="img/lacasacap.jpg" class="card-img-topp" alt="La Casa de Papel" title="La Casa de Papel"></a>
        <div class="card-bodyy">
        <h5 class="card-series">La Casa de Papel</h5>
        </div>
    </div>

    <div class="cardmiau">
        <a href="https://maxseries.top/series-e-animes/breaking-bad-a-quimica-do-mal/" target="_blank"><img src="img/breakcap.jpg" class="card-img-topp" alt="Breaking Bad" title="Breaking Bad"></a>
        <div class="card-bodyy">
        <h5 class="card-series">Breaking Bad</h5>
        </div>
    </div>

    <div class="cardmiau">
        <a href="https://maxseries.top/series-e-animes/game-of-thrones/" target="_blank"><img src="img/gotcap.jpg" class="card-img-topp" alt="Game of Thrones" title="Game of Thrones"></a>
        <div class="card-bodyy">
        <h5 class="card-series">Game of Thrones</h5>
        </div>
    </div>
      
    </div>
  </section>

    <a href="visuSerie.php">
    <div class="procurar">
    <h6 class="proc">Procurar</h6>
    </div></a>

  <section class="cardgen">
    <h3 class="animesmiau">Animes</h3>
    <div class="d-flex">
    
    <div class="cardmiau">
        <a href="https://maxseries.top/series-e-animes/shingeki-no-kyojin/" target="_blank"><img src="img/attcap.jpg" class="card-img-topp" alt="Shingeki no Kyojin" title="Shingeki no Kyojin"></a>
        <div class="card-bodyy">
        <h5 class="card-animes">Shingeki no Kyojin</h5>
        </div>
    </div>
    
    <div class="cardmiau">
        <a href="https://maxseries.top/series-e-animes/kimetsu-no-yaiba/" target="_blank"><img src="img/kimcap.jpg" class="card-img-topp" alt="Kimetsu no Yaiba" title="Kimetsu no Yaiba"></a>
        <div class="card-bodyy">
        <h5 class="card-animes">Kimetsu no Yaiba</h5>
        </div>
    </div>

    <div class="cardmiau">
        <a href="https://maxseries.top/series-e-animes/naruto-shippuden/" target="_blank"><img src="img/narutcap.jpg" class="card-img-topp" alt="Naruto Shippuden" title="Naruto Shippuden"></a>
        <div class="card-bodyy">
        <h5 class="card-animes">Naruto Shippuden</h5>
        </div>
    </div>

    <div class="cardmiau">
        <a href="https://maxseries.top/series-e-animes/dragon-ball-super/" target="_blank"><img src="img/dragoncap.jpg" class="card-img-topp" alt="Dragon Ball Super" title="Dragon Ball Super"></a>
        <div class="card-bodyy">
        <h5 class="card-animes">Dragon Ball Super</h5>
        </div>
    </div>

    <div class="cardmiau">
        <a href="https://maxseries.top/?s=akame+ga+kill" target="_blank"><img src="img/akamcap.jpg" class="card-img-topp" alt="Akame Ga Kill" title="Akame Ga Kill"></a>
        <div class="card-bodyy">
        <h5 class="card-animes">Akame Ga Kill</h5>
        </div>
    </div>
      
    </div>
  </section>

    <a href="visuAnime.php">
    <div class="procurar">
    <h6 class="proc">Procurar</h6>
    </div></a>

  </main>

<!--FOOTER-->
<footer>
  <a href="https://github.com/DavidJoon" target="blanck"><img src="img/git.png"  widht="40" height="40" class="git" alt="Link Github" title="Rede Social Github"></a> <!-- Icone Link Github -->
  <p class="direitos" alt="Direitos autorais" title="Direitos autorais"> © 2021 Direitos autorais reservados.</p>
</footer>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>