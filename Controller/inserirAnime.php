<?php
include_once("../View/header.php");
require_once("../Model/bancoAnime.php");
require_once("../Model/conexao.php");

extract($_REQUEST,EXTR_OVERWRITE);

if (insereAnime($conexao, $anime, $ano, $temporada, $episodio, $genero, $capa, $url, $sinopse)){
    header("Location: ../View/areaFuncionario.php");
}else{
    header("Location: ../View/visualizarAnime.php");
}

include_once("../View/footer.php");