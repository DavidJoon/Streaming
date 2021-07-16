<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include_once('headerr.php');


$email = isset($_SESSION["emailusubusca"]) ? $_SESSION["emailusubusca"] : "/";
$codusu = isset($_SESSION["codusubusca"]) ? $_SESSION["codusubusca"] : "";

if ($email != "/") {
    $aparenciaForm2 = "visible";
    $aparenciaForm1 = "invisible";
} else {
    $aparenciaForm2 = "invisible";
    $aparenciaForm1 = "visible";
}
?>

<div class="container mt-4">
    <form action="../Controller/buscaEmailCli.php" method="post" class="row g-3 <?= $aparenciaForm1 ?>">

        <div class="col-12">
            <label class="form-label"> Digite um e-mail de usuário valido </label>
            <input type="e-mail" class="form-control" name="email" placeholder="Digite aqui" required>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-secondary"> Localizar </button>
        </div>

    </form>


<form action="../Controller/inserirCliente.php" method="get" class="row g-3 <?= $aparenciaForm2 ?>">
  <div class="col-md-8">
    <input type="hidden" name="codusuFK" value="<?=$codusu?>">
    <label for="inputEmail" class="form-label">E-mail</label>
    <input type="email"  disabled value="<?=$email?>" name="email" class="form-control" id="inputEmail" placeholder="E-mail do cliente" required>
  </div>
  
  <div class="col-md-12">
    <label for="inputNome" class="form-label">Nome</label>
    <input type="text" name="nome" class="form-control" id="inputNome" placeholder="Nome do cliente" required>
  </div>

  <div class="col-md-6">
    <label for="inputCPF" class="form-label">CPF</label>
    <input type="text"  name="cpf" class="form-control" id="inputCPF" placeholder="CPF do cliente" required>
  </div>
  
  <div class="col-md-6">
    <label for="inputFone" class="form-label">Telefone</label>
    <input type="text"  name="fone" class="form-control" id="inputFone" placeholder="Telefone do cliente" required>
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-success">Cadastro</button>
  </div>

</form>

</div>

<?php
include('footer.php');
?>