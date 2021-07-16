<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include_once('headerr.php');
include_once('../Model/conexao.php');
include_once('../Model/bancoCliente.php');

$codigo = $_GET["codigo"];

$resul = visuCodigoCliente($conexao, $codigo);
$cliente = mysqli_fetch_assoc($resul);

?>

<div class="container mt-4">

  <form action="../Controller/alteraCliente.php" method="post" class="row g-3">

  <div class="col-md-1">
      <label for="inputCodigo" class="form-label">Código</label>
      <input type="text" readonly value="<?=$cliente['codcli']?>"name="codcli" class="form-control" id="inputCodigo">
    </div>
    
    <div class="col-md-8">
      <label for="inputNome" class="form-label">Nome</label>
      <input type="text" value="<?=$cliente['nomecli']?>"name="nome" class="form-control" id="inputNome">
    </div>

    <div class="col-md-3">
      <label for="inputCPF" class="form-label">CPF</label>
      <input type="text" name="cpf" value="<?=$cliente['cpfcli']?>" class="form-control" id="inputCPF">
    </div>

    <div class="col-md-8">
      <label for="inputEmail" class="form-label">E-mail</label>
      <input type="email" value="<?=$cliente['emailcli']?>" name="email" class="form-control" id="inputEmail">
    </div>

    <div class="col-md-4">
      <label for="inputFone" class="form-label">Telefone</label>
      <input type="text" value="<?=$cliente['fonecli']?>" name="fone" class="form-control" id="inputFone">
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-warning">Alterar</button>
    </div>

    </form>
    
</div>

<?php
include('footer.php');
?>