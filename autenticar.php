<?php

session_start();

include "conexao.php";

if( (isset($_POST["login"]) && !empty($_POST["login"]) )
    && (isset($_POST["senha"]) && !empty($_POST["senha"]) )
){

    $sql = "Select Id from Usuarios where Login = '$_POST[login]' AND Senha = '$_POST[senha]'";
    $resultado = $conexao->query($sql);

    if($resultado->num_rows > 0)
    {
        $usuario = $resultado->fetch_assoc();
        $idUsuario = $usuario['Id'];
        $_SESSION["UsuarioLogado"] = $_POST["login"];
        $_SESSION["Permissoes"] = [];
        $sql_permissoes = "Select Role from USUARIOS_PERMISSOES inner join Permissoes 
                            on(Permissoes.Id = USUARIOS_PERMISSOES.Permissao_Id)
                             where Usuario_Id = $idUsuario";
        $resultado_permissoes = $conexao->query($sql_permissoes);

        while ($permissao = $resultado_permissoes->fetch_assoc()) {
            array_push($_SESSION["Permissoes"], $permissao["Role"]);
        }

        header("location: index.php");
    }
    else
    {
        header("location: login.php?erro=login e senha incorreto");
    }

}

?>