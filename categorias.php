<?php include "cabecalho.php"; ?>

<?php

if( isset($_GET["pesquisa"]) )
{
    $pesquisa = $_GET["pesquisa"];
    if( empty($pesquisa) )
    {
       
       include "conexao.php";
       $sql = "Select Id,  Valor, Codigo_barras, Imagem from categorias order by Id desc";
       $resultado = $conexao->query($sql);
       
       $conexao->close();
    }
    else
    {
        
        include "conexao.php";
        $sql = "Select Id, Descricao, Valor, Codigo_barras, Imagem 
                from categorias  
                where Descricao like '%$pesquisa%' || Codigo_Barras = '$pesquisa'
                order by Id desc";
        $resultado = $conexao->query($sql);
        
        $conexao->close();
    }

}

?>

<?php include "rodape.php"; ?>