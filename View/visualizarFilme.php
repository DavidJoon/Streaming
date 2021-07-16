<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include_once('headerr.php');
include_once("../Model/bancoFilme.php");
include_once("../Model/conexao.php");
?>

<div class="container mt-4">
    <form action="" method="post" class="row g-3">

        <div class="col-12">
            <label class="form-label"> Digite o nome do Filme </label>
            <input type="text" class="form-control" name="filme" placeholder="Digite aqui">
        </div>

        <div class="col-12">
            <label class="form-label"> Digite o ano do Filme </label>
            <input type="text" min="1900" max="2050" class="form-control" name="ano" placeholder="Digite aqui">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-secondary"> Localizar </button>
        </div>

    </form>

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
        <th scope="col">Código</th>
        <th scope="col">Capa</th>
        <th scope="col">Filme</th>
        <th scope="col">Gênero</th>
        <th scope="col">Ano</th>
        <th scope="col">Sinopse</th>
        <th scope="col">Alterar/Apagar</th>
      </tr>
    </thead>

    <tbody class="teste">
      <tr>
        <th scope="row"><?=$dados["codfil"]?></th>
        <td class="capafil"><img src="<?=$dados["capafil"]?>" width="100" height="150" ></td>
        <td class="nomefil"><?=$dados["nomefil"]?></td>
        <td class="genfil"><?=$dados["generofil"]?></td>
        <td class="anofil"><?=$dados["anofil"]?></td>
        <td class="sinfil"><?=$dados["sinopsefil"]?></td>
        <td><a class="btn btn-secondary mt-3" href="alterarFilme.php?codigo=<?=$dados["codfil"]?>">Alterar</a>
          <form action="../Controller/deleteFilme.php" method="Post">
          <input type="hidden" name="codfil" value="<?=$dados["codfil"]?>">
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