<?php
include_once('../View/header.php');
include_once('../Model/conexao.php');
include_once('../Model/bancoSerie.php');

extract($_REQUEST,EXTR_OVERWRITE);

if(alterSerie($conexao, $codserie, $serie, $ano, $temporada, $episodio, $genero, $capa, $url, $sinopse)){
    header("Location: ../View/visualizarSerie.php");
}else{
    header("Location: ../View/areaFuncionario.php");
}

include_once('../View/footer.php');

?>