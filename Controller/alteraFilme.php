<?php
include_once('../View/header.php');
include_once('../Model/conexao.php');
include_once('../Model/bancoFilme.php');

extract($_REQUEST,EXTR_OVERWRITE);

if(alterFilme($conexao, $codfil, $filme, $genero, $sinopse, $ano, $capa, $url)){
header("Location: ../View/visualizarFilme.php");
}else{
    header("Location: ../View/areaFuncionario.php");
}

include_once('../View/footer.php');
?>