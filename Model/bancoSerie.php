<?php

function insereSerie($conexao, $serie, $ano, $temporada, $episodio, $genero, $capa, $url){
    $query = "insert into tbserie(nomeserie,anoserie,temporadaserie,episodioserie,generoserie,capaserie,urlserie) values('{$serie}', '{$ano}', '{$temporada}', '{$episodio}', '{$genero}', '{$capa}','{$url}')";
    $resultado = mysqli_query($conexao,$query);
    return $resultado;
}