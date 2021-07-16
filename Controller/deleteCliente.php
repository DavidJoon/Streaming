<?php
include_once("../View/header.php");
include_once("../Model/bancoCliente.php");
include_once("../Model/conexao.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(deleteCliente($conexao, $codcli)){
    header("Location: ../View/areaFuncionario.php");
}else{
    header("Location: ../View/visualizarCliente.php");
}


include_once("../View/footer.php");

?>