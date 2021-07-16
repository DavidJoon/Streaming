<?php
include_once('../View/header.php');
include_once('../Model/conexao.php');
include_once('../Model/bancoAnime.php');

extract($_REQUEST,EXTR_OVERWRITE);

if(alterAnime($conexao, $codani, $anime, $ano, $temporada, $episodio, $genero, $capa, $url, $sinopse)){
    header("Location: ../View/visualizarAnime.php");
}else{
    header("Location: ../View/areaFuncionario.php");
}

include_once('../View/footer.php');

?>