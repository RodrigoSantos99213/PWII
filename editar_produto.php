<?php include "cabecalho.php"; ?>
 
<?php
 
    if (isset($_POST['Id']) && !empty($_POST['Id']) &&
        isset($_POST['Descricao']) && !empty($_POST['Descricao']) &&
        isset($_POST['Valor']) && !empty($_POST['Valor']) &&
        isset($_POST['Codigo_barras']) && !empty($_POST['Codigo_barras'])) {
 
            include 'conexao.php';
            $sql = "UPDATE Produtos SET Descricao = '$_POST[Descricao]', Valor = $_POST[Valor], Codigo_barras = $_POST[Codigo_barras], Categoria_id = $_POST[categoria_ID];WHERE Id = $_POST[Id]"/
            $resultado = $conexao->query($sql);
            if ($resultado) {
                //lógica para mensagem de sucesso
            }                                    
            else {
                //caso o update dê false
            }    
        }
 
    if (isset($_GET['Id']) && !empty($_GET['Id'])) {
        include 'conexao.php';
        $sql = "SELECT Id, Descricao, Valor, Codigo_barras FROM produtos WHERE Id = $_GET[Id]";
        $resultado = $conexao->query($sql);
        if ($resultado) {
            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
                    $id = $row["Id"];
                    $descricao = $row["Descricao"];
                    $valor = $row["Valor"];
                    $codigo_barras = $row["Codigo_barras"];
                }
            }
            else {
                header('location: produtos.php?erro=Nenhum registro encontrado');
            }
        }
        else {
           header('location: produtos.php?erro=Erro do if do resultado');
        }
    }
    else {
        header('location: produtos.php?erro=Nenhum Id informado');
    }
?>
 
<form action="editar_produto.php?Id=<?php echo $id; ?>"method="post">
    <input name="Id" value="<?php echo $id ?>"/>
    <input name="Descricao" value="<?php echo $descricao ?>"/>
    <input name="Valor" value="<?php echo $valor ?>"/>
    <input name="Codigo_barras" value="<?php echo $codigo_barras ?>"/>
 
    <button type="submit">Salvar alterações</button>
 
   
 
    <select name="categoria_id">
 
    <?php
    $sql_categorias = "Select Id, Nome from categorias";
    $resultado_agora = $conexao->query($sql_categorias);
 
    if ($resultado_agora->num_rows > 0) {
        while($row = $resultado_agora->fetch_assoc())
        {
 
        echo "<option value='$row[id]'> $row[Nome] </option>";
 
        }else{
            echo "<option value='0'> Não tem categoria </option>";
        }

    }
 
    ?>
       
        <option value="2"> Valor 2</option>
        <option value="3"> Valor 3</option>
</select>    
 
<br>
</form>
 
<?php include "rodape.php"; ?>
tem menu de contexto


tem menu de contexto