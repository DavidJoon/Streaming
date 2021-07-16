<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include_once('headerr.php');
include_once("../Model/bancoCliente.php");
include_once("../Model/conexao.php");
?>

<div class="container mt-4">
    <form action="" method="post" class="row g-3">

        <div class="col-12">
            <label class="form-label"> Digite o CPF Cliente </label>
            <input type="text" class="form-control" name="cpf" placeholder="000.000.000-00">
        </div>

        <div class="col-12">
            <label class="form-label"> Digite o E-mail do Cliente </label>
            <input type="email" class="form-control" name="email" placeholder="example@example.com">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-secondary"> Localizar </button>
        </div>

    </form>

<?php 
$cpf = isset($_POST["cpf"]) ? $_POST["cpf"]:"";
$email = isset($_POST["email"]) ? $_POST["email"]:"";

if(!$cpf and !$email){
}else{

$dado = visuNomeCliente($conexao, $cpf, $email);
foreach($dado as $dados) :
?>
  <div class="taborganizar">
  <table class="table table-striped mt-4">
    <thead>
      <tr>
        <th scope="col">Código do Cliente</th>
        <th scope="col">Nome</th>
        <th scope="col">CPF</th>
        <th scope="col">E-mail</th>
        <th scope="col">Telefone</th>
        <th scope="col">Alterar/Apagar</th>
      </tr>
    </thead>

    <tbody class="teste">
      <tr>
        <th class="genserie"scope="row"><?=$dados["codcli"]?></th>
        <td class="genserie"><?=$dados["nomecli"]?></td>
        <td class="diserie"><?=$dados["cpfcli"]?></td>
        <td class="genserie"><?=$dados["emailcli"]?></td>
        <td class="diserie"><?=$dados["fonecli"]?></td>
        <td><a class="btn btn-secondary mt-3" href="alterarCliente.php?codigo=<?=$dados["codcli"]?>">Alterar</a>
          <form action="../Controller/deleteCliente.php" method="Post">
          <input type="hidden" name="codcli" value="<?=$dados["codcli"]?>">
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