<?php
include_once('../Model/conexao.php');
include_once('../Model/bancoCliente.php');

extract($_REQUEST,EXTR_OVERWRITE);

if(alterCliente($conexao, $codcli, $nome, $cpf, $email, $fone)){
header("Location: ../View/visualizarCliente.php");
}else{
    header("Location: ../View/areaFuncionario.php");
}

include_once('../View/footer.php');
?>