<?php

function insereCliente($conexao, $nome, $cpf, $email, $fone)
{
    $query = "insert into tbcliente(nomecli,cpfcli,emailcli,fonecli) values ('{$nome}', '{$cpf}', '{$email}', '{$fone}')";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function visuCodigoCliente($conexao, $codigo){
    $query = "Select * from tbcliente where codcli={$codigo}";
    $resultado = mysqli_query($conexao,$query);

    return $resultado;
}

function alterCliente($conexao, $codcli, $nome, $cpf, $email, $fone){
    $query = "update tbcliente set nomecli='{$nome}', cpfcli='{$cpf}', emailcli ='{$email}', fonecli = '{$fone}' where codcli='{$codcli}' ";

    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}

function deleteCliente($conexao, $codcli){

    $query = "delete from tbcliente where codcli='{$codcli}'";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;

}

function visuNomeCliente($conexao, $cpf, $email){
if($cpf==""){
    $query = "Select * from tbcliente where emailcli like '%{$email}%'";
}elseif ($email=="") {
    $query = "Select * from tbcliente where cpfcli like '%{$cpf}%'";
}else{
    $query = "Select * from tbcliente where cpfcli like '%{$cpf}%' or emailcli = '%{$email}%'";
}
   
    $resultado = mysqli_query($conexao, $query);
    
    return $resultado;
}

function insereClienteGroup($conexao, $codcliFK,$codusuFK){
    
    $query = "insert into tbgrupo(codcliFK,codusuFK) values ('{$codcliFK}', '{$codusuFK}')";
    $resultado = mysqli_query($conexao, $query);
    return $resultado;
}