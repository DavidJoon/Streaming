<?php

function insereFilme($conexao, $filme, $genero, $sinopse, $ano, $capa, $url)
{
    $query = "insert into tbfilme(nomefil,generofil,sinopsefil,anofil,capafil,urlfil) values ('{$filme}', '{$genero}', '{$sinopse}', '{$ano}', '{$capa}', '{$url}')";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function visuCodigoFilme($conexao, $codigo){
    $query = "Select * from tbfilme where codfil={$codigo}";
    $resultado = mysqli_query($conexao,$query);

    return $resultado;
}

function alterFilme($conexao, $codfil, $filme, $genero, $sinopse, $ano, $capa, $url){
    $query = "update tbfilme set nomefil='{$filme}', generofil='{$genero}', sinopsefil ='{$sinopse}', anofil = '{$ano}', capafil = '{$capa}', urlfil = '{$url}' where codfil='{$codfil}' ";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function deleteFilme($conexao, $codfil){

    $query = "delete from tbfilme where codfil='{$codfil}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;

}

function visuNomeFilme($conexao, $filme, $ano){
if($filme==""){
    $query = "Select * from tbfilme where anofil like '%{$ano}%'";
}elseif ($ano=="") {
    $query = "Select * from tbfilme where nomefil like '%{$filme}%'";
}else{
    $query = "Select * from tbfilme where nomefil like '%{$filme}%' or anofil = '%{$ano}%'";
}
   
    $resultado = mysqli_query($conexao, $query);
    
    return $resultado;
}