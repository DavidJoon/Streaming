<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include_once('headerr.php');
include_once('../Model/conexao.php');
include_once('../Model/bancoSerie.php');

$codigo = $_GET["codigo"];

$resul = visuCodigoSerie($conexao, $codigo);
$serie = mysqli_fetch_assoc($resul);

?>

<div class="container mt-4">

  <form action="../Controller/alteraSerie.php" method="post" class="row g-3">

  <div class="col-md-1">
      <label for="inputCodigo" class="form-label">Código</label>
      <input type="text" readonly value="<?=$serie['codserie']?>"name="codserie" class="form-control" id="inputCodigo">
    </div>
    
    <div class="col-md-8">
      <label for="inputSerie" class="form-label">Série</label>
      <input type="text" value="<?=$serie['nomeserie']?>" name="serie" class="form-control" id="inputSerie">
    </div>

    <div class="col-md-3">
      <label for="inputGenero" class="form-label">Gênero</label>
      <input type="text" name="genero" value="<?=$serie['generoserie']?>" class="form-control" id="inputGenero">
    </div>

    <div class="col-md-2">
      <label for="inputAno" class="form-label">Ano</label>
      <input type="text" value="<?=$serie['anoserie']?>" name="ano" class="form-control" id="inputAno">
    </div>

    <div class="col-md-5">
      <label for="inputTemporada" class="form-label">Temporada</label>
      <input type="text" value="<?=$serie['temporadaserie']?>" name="temporada" class="form-control" id="inputTemporada">
    </div>

    <div class="col-md-5">
      <label for="inputEpisodio" class="form-label">Episódio</label>
      <input type="text" value="<?=$serie['episodioserie']?>" name="episodio" class="form-control" id="inputEpisodio">
    </div>

    <div class="col-md-10">
      <label for="inputCapa" class="form-label">Capa</label>
      <input type="text" value="<?=$serie['capaserie']?>" name="capa" class="form-control" id="inputCapa">
    </div>

    <div class="col-12">
      <label for="inputURL" class="form-label">URL</label>
      <input type="text" value="<?=$serie['urlserie']?>" name="url" class="form-control" id="inputURL">
    </div>

    <div class="col-12">
    <label for="inputSinopse" class="form-label">Sinopse</label>
    <textarea class="form-control" name="sinopse" placeholder="Digite um resumo da série" id="floatingTextarea2" style="height: 100px"><?=$serie['sinserie']?></textarea>
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-warning">Alterar</button>
    </div>

    </form>
</div>

<?php
include('footer.php');
?>