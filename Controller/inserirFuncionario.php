<?php

require_once("../Model/bancoFuncionario.php");
require_once("../Model/conexao.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(insereFun($conexao, $codusuFK, $nomefun, $fonefun, $funcaofun)){
    $_SESSION["emailusubusca"] = "/";
    header("Location: ../View/areaFuncionario.php");
}else{
    header("Location: ../View/visualizarFuncionario.php");
}


include_once("../View/footer.php");