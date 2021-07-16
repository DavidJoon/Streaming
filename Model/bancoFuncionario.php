<?php

function insereFun($conexao, $codusuFK, $nomefun, $fonefun, $funcaofun)
{
    $query = "insert into tbfuncionario(codusuFK,nomefun,fonefun,funcaofun) values ('{$codusuFK}', '{$nomefun}', '{$fonefun}', '{$funcaofun}')";
    $resultado = mysqli_query($conexao, $query);
    
    return $resultado;
}

function visuCodigoFuncionario($conexao, $codigo){
    $query = "Select * from tbfuncionario where codfun={$codigo}";
    $resultado = mysqli_query($conexao,$query);

    return $resultado;
}
function limpaCadastroFun(){
    session_destroy();
}

function alterFuncionario($conexao, $codfun, $nome, $fone, $funcao){
    $query = "update tbfuncionario set nomefun='{$nome}', fonefun='{$fone}', funcaofun ='{$funcao}' where codfun='{$codfun}' ";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function deleteFuncionario($conexao, $codfun){

    $query = "delete from tbfuncionario where codfun='{$codfun}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;

}

function visuNomeFuncionario($conexao, $funcionario){

    $query = "Select * from tbfuncionario where nomefun like '%{$funcionario}%'";
    $resultado = mysqli_query($conexao, $query);
    
    return $resultado;
}