<?php
include_once('../View/header.php');
include_once('../Model/conexao.php');
include_once('../Model/bancoFuncionario.php');

extract($_REQUEST,EXTR_OVERWRITE);

if(alterFuncionario($conexao, $codfun, $nome, $fone, $funcao)){
header("Location: ../View/visualizarFuncionario.php");
}else{
    header("Location: ../View/areaFuncionario.php");
}

include_once('../View/footer.php');
?>