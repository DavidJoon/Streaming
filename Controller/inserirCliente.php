<?php
include_once("../View/header.php");
require_once("../Model/bancoCliente.php");
require_once("../Model/conexao.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(insereCliente($conexao, $nome, $cpf, $email, $fone)){
    header("Location: ../View/areaFuncionario.php");
}else{
    header("Location: ../View/visualizarCliente.php");
}


include_once("../View/footer.php");