<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include_once('headerr.php');
include_once("../Model/bancoAnime.php");
include_once("../Model/conexao.php");
?>

<div class="container mt-4">
    <form action="" method="post" class="row g-3">

        <div class="col-12">
            <label class="form-label"> Digite o nome do Anime </label>
            <input type="text" class="form-control" name="anime" placeholder="Digite aqui">
        </div>

        <div class="col-12">
            <label class="form-label"> Digite o ano do Anime </label>
            <input type="text" min="1900" max="2050" class="form-control" name="ano" placeholder="Digite aqui">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-secondary"> Localizar </button>
        </div>

    </form>

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
      <th scope="col">Código</th>
      <th scope="col">Capa</th>
      <th scope="col">Anime</th>
      <th scope="col">Gênero</th>
      <th scope="col">Ano</th>
      <th scope="col">Sinopse</th>
      <th scope="col">Alterar/Apagar</th>
    </tr>
  </thead>

  <tbody class="teste">

    <tr>
      <th class="diserie" scope="row"><?=$dados["codani"]?></th>
      <td><img src="<?=$dados["capaani"]?>" width="100" height="150"></td>
      <td class="diserie"><?=$dados["nomeani"]?></td>
      <td class="genserie"><?=$dados["generoani"]?></td>
      <td class="diserie"><?=$dados["anoani"]?></td>
      <td class="sinfil"><?=$dados["sinani"]?></td>
      <td><a class="btn btn-secondary mt-2" href="alterarAnime.php?codigo=<?=$dados["codani"]?>">Alterar</a>
        <form action="../Controller/deleteAnime.php" method="Post">
        <input type="hidden" name="codani" value="<?=$dados["codani"]?>">
        <button type="submit" class="btn btn-danger mt-4">Deletar</button>
        </form>
      </td>
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