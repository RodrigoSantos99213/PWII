<?php include "<cabecalho.php"; ?>

<?php 
if( isset($_GET['Id']) && !empty($_GET['Id']) )
{
    include "conexao.php";
    $sql = "Select Id, Descricao, Valor, Codigo_Barras from produtos where Id = $_GET[Id]";
    $resultado = $conexao->query($sql);
   if($resultado)
   {

     if($resultado->num_rows > 0){
        while($row = $resultado->fetch_assoc())
        {
        $id = $row["Id"];
        $descricao = $row["Descricao"];
        $valor = $row["Valor"];
        $codigo_Barras = $row["Codigo_Barras"];
        }
     }else
        {
        header("location: produto.php");
        }
    }

} else
  {
  header("location: produto.php");
  }


?>

<form action ="editar_produto.php" method="post">
    <input name = "Id" value="<?php echo $id ?>" />
    <input name = "Descricao" value="<?php echo $descricao ?>" />
    <input name = "Valor" value="<?php echo $valor ?>" />
    <input name = "Codigo_Barras" value="<?php echo $codigo_Barras ?>" />
    <button type ="subimit" >
        Salvar Alterações
    
    </button>
</form>


<?php include "<rodape.php"; ?>