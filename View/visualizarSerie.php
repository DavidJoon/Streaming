<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include_once('headerr.php');
include_once("../Model/bancoSerie.php");
include_once("../Model/conexao.php");
?>

<div class="container mt-4">
    <form action="" method="post" class="row g-3">

        <div class="col-12">
            <label class="form-label"> Digite o nome da Série </label>
            <input type="text" class="form-control" name="serie" placeholder="Digite aqui">
        </div>

        <div class="col-12">
            <label class="form-label"> Digite o ano da Série </label>
            <input type="text" min="1900" max="2050" class="form-control" name="ano" placeholder="Digite aqui">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-secondary"> Localizar </button>
        </div>

    </form>

<?php 
$serie = isset($_POST["serie"]) ? $_POST["serie"]:"";
$ano = isset($_POST["ano"]) ? $_POST["ano"]:"";

if(!$serie and !$ano){
}else{

$dado = visuNomeSerie($conexao, $serie, $ano);
foreach($dado as $dados) :
?>

<div class="taborganizar">
  <table class="table table-striped mt-4">
    <thead>
      <tr>
      <th scope="col">Código</th>
      <th scope="col">Capa</th>
      <th scope="col">Série</th>
      <th scope="col">Gênero</th>
      <th scope="col">Ano</th>
      <th scope="col">Sinopse</th>
      <th scope="col">Alterar/Apagar</th>
    </tr>
  </thead>

  <tbody class="teste">

    <tr>
      <th class="diserie" scope="row"><?=$dados["codserie"]?></th>
      <td><img src="<?=$dados["capaserie"]?>" width="100" height="150"></td>
      <td class="diserie"><?=$dados["nomeserie"]?></td>
      <td class="genserie"><?=$dados["generoserie"]?></td>
      <td class="diserie"><?=$dados["anoserie"]?></td>
      <td class="sinfil"><?=$dados["sinserie"]?></td>
      <td><a class="btn btn-secondary mt-2" href="alterarSerie.php?codigo=<?=$dados["codserie"]?>">Alterar</a>
        <form action="../Controller/deleteSerie.php" method="Post">
        <input type="hidden" name="codserie" value="<?=$dados["codserie"]?>">
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