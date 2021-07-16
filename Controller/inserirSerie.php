<?php
include_once("../View/header.php");
require_once("../Model/bancoSerie.php");
require_once("../Model/conexao.php");

extract($_REQUEST,EXTR_OVERWRITE);

if (insereSerie($conexao, $serie, $ano, $temporada, $episodio, $genero, $capa, $url, $sinopse)){
    header("Location: ../View/areaFuncionario.php");
}else{
    header("Location: ../View/visualizarSerie.php");
}


include_once("../View/footer.php");