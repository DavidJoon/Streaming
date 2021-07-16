<?php

function insereAnime($conexao, $anime, $ano, $temporada, $episodio, $genero, $capa, $url, $sinopse){
    $query = "insert into tbanime(nomeani,anoani,temporadaani,episodioani,generoani,capaani,urlani,sinani) values('{$anime}', '{$ano}', '{$temporada}', '{$episodio}', '{$genero}', '{$capa}','{$url}','{$sinopse}')";
    $resultado = mysqli_query($conexao,$query);
    return $resultado;
}

function visuCodigoAnime($conexao, $codigo){
    $query = "Select * from tbanime where codani={$codigo}";
    $resultado = mysqli_query($conexao,$query);

    return $resultado;
}

function alterAnime($conexao, $codani, $anime, $ano, $temporada, $episodio, $genero, $capa, $url, $sinopse){
    $query = "update tbanime set nomeani='{$anime}', anoani='{$ano}', temporadaani ='{$temporada}', episodioani = '{$episodio}', generoani = '{$genero}', capaani = '{$capa}', urlani = '{$url}', sinani = '{$sinopse}' where codani='{$codani}' ";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function deleteAnime($conexao, $codani){

    $query = "delete from tbanime where codani='{$codani}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;

}

function visuNomeAnime($conexao, $anime, $ano){
    if($anime==""){
        $query = "Select * from tbanime where anoani like '%{$ano}%'";
    }elseif ($ano=="") {
        $query = "Select * from tbanime where nomeani like '%{$anime}%'";
    }else{
        $query = "Select * from tbanime where nomeani like '%{$anime}%' or anoani = '%{$ano}%'";
    }
       
        $resultado = mysqli_query($conexao, $query);
        
        return $resultado;
    }