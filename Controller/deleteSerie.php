<?php
include_once("../View/header.php");
include_once("../Model/bancoSerie.php");
include_once("../Model/conexao.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(deleteSerie($conexao, $codserie)){
    header("Location: ../View/areaFuncionario.php");
}else{
    header("Location: ../View/visualizarSerie.php");
}


include_once("../View/footer.php");

?>