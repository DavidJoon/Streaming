<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include_once('headerr.php');
?>

<div class="container mt-4">
<form action="../Controller/inserirAnime.php" method="get" class="row g-3">
  
  <div class="col-md-8">
    <label for="inputAnime" class="form-label">Anime</label>
    <input type="text" name="anime" class="form-control" id="inputAnime" placeholder="Nome do Anime" required>
  </div>

  <div class="col-md-4">
    <label for="inputGenero" class="form-label">Gênero</label>
    <input type="text"  name="genero" class="form-control" id="inputGenero" placeholder="Gênero do Anime" required>
  </div>
  
  <div class="col-md-2">
    <label for="inputAno" class="form-label">Ano</label>
    <input type="text"  name="ano" class="form-control" id="inputAno" placeholder="Ano do Anime" required>
  </div>
  
  <div class="col-md-5">
    <label for="inputTemporada" class="form-label">Temporada</label>
    <input type="text"  name="temporada" class="form-control" id="inputTemporada" placeholder="Temporada do Anime" required>
  </div>
  
  <div class="col-md-5">
    <label for="inputEpisodio" class="form-label">Episódio</label>
    <input type="text"  name="episodio" class="form-control" id="inputEpisodio" placeholder="Episódio do Anime" required>
  </div>

  <div class="col-md-12">
    <label for="inputCapa" class="form-label">Capa</label>
    <input type="text"  name="capa" class="form-control" id="inputCapa" placeholder="Capa do Anime" required>
  </div>

  <div class="col-12">
    <label for="inputURL" class="form-label">URL</label>
    <input type="text"  name="url" class="form-control" id="inputURL" placeholder="URL do Anime" required>
  </div>

  <div class="col-12">
    <label for="inputSinopse" class="form-label">Sinopse</label>
    <textarea class="form-control" name="sinopse" placeholder="Digite um resumo do Anime" id="floatingTextarea2" style="height: 100px"></textarea>
    </div>

  <div class="col-12">
    <button type="submit" class="btn btn-success">Cadastro</button>
  </div>

</form>

</div>

<?php
include('footer.php');
?>