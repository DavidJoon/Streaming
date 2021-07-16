<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include_once('headerr.php');
include_once('../Model/conexao.php');
include_once('../Model/bancoFuncionario.php');

$codigo = $_GET["codigo"];

$resul = visuCodigoFuncionario($conexao, $codigo);
$funcionario = mysqli_fetch_assoc($resul);

?>

<div class="container mt-4">

  <form action="../Controller/alteraFuncionario.php" method="post" class="row g-3">

  <div class="col-md-1">
      <label for="inputCodigo" class="form-label">Código</label>
      <input type="text" readonly value="<?=$funcionario['codfun']?>"name="codfun" class="form-control" id="inputCodigo">
    </div>
    
    <div class="col-md-8">
      <label for="inputFilme" class="form-label">Nome</label>
      <input type="text" value="<?=$funcionario['nomefun']?>"name="nome" class="form-control" id="inputNome">
    </div>

    <div class="col-md-3">
      <label for="inputGenero" class="form-label">Telefone</label>
      <input type="text" name="fone" value="<?=$funcionario['fonefun']?>" class="form-control" id="inputTelefone">
    </div>

    <div class="col-md-2">
      <label for="inputFuncao" class="form-label">Função</label>
      <select required name="funcao" class="form-select form-select" aria-label=".form-select-lg example">
                <option value="<?=$funcionario['funcaofun']?>" selected disabled><?=$funcionario['funcaofun']?></option>
                <option value="Gerente">Gerente</option>
                <option value="Operador">Operador</option>

            </select>
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-warning">Alterar</button>
    </div>

    </form>
</div>

<?php
include('footer.php')
?>