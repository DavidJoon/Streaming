<?php
include_once("../Model/bancoUsuario.php");
liberaAcesso();
include_once('headerr.php');
include_once("../Model/bancoUsuario.php");
include_once("../Model/conexao.php");
?>

<div class="container mt-4">
    <form action="" method="post" class="row g-3">

        <div class="col-12">
            <label class="form-label"> Digite o e-mail do Usuário </label>
            <input type="text" class="form-control" name="usuario" placeholder="Digite aqui">
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-secondary"> Localizar </button>
        </div>

    </form>

    <?php 
$usuario = isset($_POST["usuario"]) ? $_POST["usuario"]:"";
$dado = visuNomeUsuario($conexao, $usuario); 
if(!$usuario){
}else{

foreach($dado as $dados) :
?>

  <div class="taborganizar">
  <table class="table table-striped mt-4">
    <thead>
      <tr>
      <th scope="col">Código de usuário</th>
      <th scope="col">E-mail de login</th>
      <th scope="col">PIN</th>
      </tr>
    </thead>
    
    <tbody class="teste">

      <tr>
      <th scope="row"><?=$dados["codusu"]?></th>
      <td><?=$dados["loginusu"]?></td>
      <td><?=$dados["pinusu"]?></td>
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