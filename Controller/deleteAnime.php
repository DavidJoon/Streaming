<?php
include_once("../View/header.php");
include_once("../Model/bancoAnime.php");
include_once("../Model/conexao.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(deleteAnime($conexao, $codani)){
    header("Location: ../View/areaFuncionario.php");
}else{
    header("Location: ../View/visualizarAnime.php");
}


include_once("../View/footer.php");

?>