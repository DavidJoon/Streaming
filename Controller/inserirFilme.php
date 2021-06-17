<?php
include_once("../View/header.php");
require_once("../Model/bancoFilme.php");
require_once("../Model/conexao.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(insereFilme($conexao, $filme, $genero, $sinopse, $ano, $capa, $url)){
    echo("Filme cadastrado com sucesso");
}else{
    echo("O Filme não foi para o banco de dados");
}

include_once("../View/footer.php");