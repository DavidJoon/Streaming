<?php
include_once("../View/header.php");
include_once("../Model/bancoFilme.php");
include_once("../Model/conexao.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(deleteFilme($conexao, $codfil)){
    header("Location: ../View/areaFuncionario.php");
}else{
    header("Location: ../View/visualizarFilme.php");
}

include_once("../View/footer.php");

?>