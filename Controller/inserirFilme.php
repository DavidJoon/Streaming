<?php
include_once("../View/header.php");
require_once("../Model/bancoFilme.php");
require_once("../Model/conexao.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(insereFilme($conexao, $filme, $genero, $sinopse, $ano, $capa, $url)){
    header("Location: ../View/areaFuncionario.php");
}else{
    header("Location: ../View/visualizarFilme.php");
}


include_once("../View/footer.php");