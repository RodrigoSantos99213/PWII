<?php

if( !empty($_GET['Id']) && isset( $_GET['Id'] ) )
{
    //Logica da exclusão
    include 'conexao.php';
    $sql = "Delete from Permissoes where Id = $_GET[Id]";
    $resultado = $conexao->query($sql);
    if($resultado)
    {
        header("location: permissoes.php");
    }
    else
    {
        //aqui vai uma lógica caso o delete from não funcione
        //aqui fica o mesmo redirecionamento porem com a mensagem de erro
    }
}
else
{
    header("location: permissoes.php");
}



?>