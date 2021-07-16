<?php

function insereSerie($conexao, $serie, $ano, $temporada, $episodio, $genero, $capa, $url, $sinopse){
    $query = "insert into tbserie(nomeserie,anoserie,temporadaserie,episodioserie,generoserie,capaserie,urlserie,sinserie) values('{$serie}', '{$ano}', '{$temporada}', '{$episodio}', '{$genero}', '{$capa}','{$url}','{$sinopse}')";
    $resultado = mysqli_query($conexao,$query);
    return $resultado;
}

function visuCodigoSerie($conexao, $codigo){
    $query = "Select * from tbserie where codserie={$codigo}";
    $resultado = mysqli_query($conexao,$query);

    return $resultado;
}

function alterSerie($conexao, $codserie, $serie, $ano, $temporada, $episodio, $genero, $capa, $url, $sinopse){
    $query = "update tbserie set nomeserie='{$serie}', anoserie='{$ano}', temporadaserie ='{$temporada}', episodioserie = '{$episodio}', generoserie = '{$genero}', capaserie = '{$capa}', urlserie = '{$url}', sinserie = '{$sinopse}' where codserie='{$codserie}' ";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function deleteSerie($conexao, $codserie){

    $query = "delete from tbserie where codserie='{$codserie}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;

}

function visuNomeSerie($conexao, $serie, $ano){
    if($serie==""){
        $query = "Select * from tbserie where anoserie like '%{$ano}%'";
    }elseif ($ano=="") {
        $query = "Select * from tbserie where nomeserie like '%{$serie}%'";
    }else{
        $query = "Select * from tbserie where nomeserie like '%{$serie}%' or anoserie = '%{$ano}%'";
    }
       
        $resultado = mysqli_query($conexao, $query);
        
        return $resultado;
    }