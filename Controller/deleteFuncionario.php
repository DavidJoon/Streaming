<?php
include_once("../View/header.php");
include_once("../Model/bancoFuncionario.php");
include_once("../Model/conexao.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(deleteFuncionario($conexao, $codfun)){
    header("Location: ../View/areaFuncionario.php");
}else{
    header("Location: ../View/visualizarFuncionario.php");
}

include_once("../View/footer.php");

?>