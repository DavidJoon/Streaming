<?php
include("header.php");
?>

<div class="container">
<form action="../Controller/inserirSerie.php" method="get" class="row g-3">
  
  <div class="col-md-8">
    <label for="inputSerie" class="form-label">Série</label>
    <input type="text" name="serie" class="form-control" id="inputSerie" placeholder="Nome da Série">
  </div>

  <div class="col-md-4">
    <label for="inputGenero" class="form-label">Gênero</label>
    <input type="text"  name="genero" class="form-control" id="inputGenero" placeholder="Gênero da Série">
  </div>
  
  <div class="col-md-2">
    <label for="inputAno" class="form-label">Ano</label>
    <input type="text"  name="ano" class="form-control" id="inputAno" placeholder="Ano da Série">
  </div>
  
  <div class="col-md-5">
    <label for="inputTemporada" class="form-label">Temporada</label>
    <input type="text"  name="temporada" class="form-control" id="inputTemporada" placeholder="Temporada da Série">
  </div>
  
  <div class="col-md-5">
    <label for="inputEpisodio" class="form-label">Episódio</label>
    <input type="text"  name="episodio" class="form-control" id="inputEpisodio" placeholder="Episódio da Série">
  </div>

  <div class="col-md-12">
    <label for="inputCapa" class="form-label">Capa</label>
    <input type="text"  name="capa" class="form-control" id="inputCapa" placeholder="Capa da Série">
  </div>

  <div class="col-12">
    <label for="inputURL" class="form-label">URL</label>
    <input type="text"  name="url" class="form-control" id="inputURL" placeholder="URL da Série">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastro</button>
  </div>

</form>
</div>




<?php
include("footer.php");
?>