<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include_once('headerr.php');
include_once("../Model/bancoFuncionario.php");
include_once("../Model/conexao.php");
?>

<div class="container mt-4">
    <form action="" method="post" class="row g-3">

        <div class="col-12">
            <label class="form-label"> Digite o nome do Funcionário </label>
            <input type="text" class="form-control" placeholder="Digite aqui" name="funcionario">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-secondary"> Localizar </button>
        </div>

    </form>

<?php 
$funcionario = isset($_POST["funcionario"]) ? $_POST["funcionario"]:"";
$dado = visuNomeFuncionario($conexao, $funcionario); 

if(!$funcionario){
}else{

foreach($dado as $dados) :
?>

  <div class="taborganizar">
  <table class="table table-striped mt-4">
    <thead>
      <tr>
        <th scope="col">Código de funcionário</th>
        <th scope="col">Código de usuário</th>
        <th scope="col">Nome</th>
        <th scope="col">Telefone</th>
        <th scope="col">Função</th>
        <th scope="col">Alterar/Apagar</th>
      </tr>
    </thead>

    <tbody class="teste">

    <tr>
      <th class="genserie" scope="row"><?=$dados["codfun"]?></th>
      <td class="genserie"><?=$dados["codusuFK"]?></td>
      <td class="genserie"><?=$dados["nomefun"]?></td>
      <td class="diserie"><?=$dados["fonefun"]?></td>
      <td class="diserie"><?=$dados["funcaofun"]?></td>
      <td><a class="btn btn-secondary mt-3" href="alterarFuncionario.php?codigo=<?=$dados["codfun"]?>">Alterar</a>
          <form action="../Controller/deleteFuncionario.php" method="Post">
          <input type="hidden" name="codfun" value="<?=$dados["codfun"]?>">
          <button type="submit" class="btn btn-danger mt-4">Deletar</button>
          </form>
          </td>
      </tr>
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