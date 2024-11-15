<?php include "cabecalho.php"; ?>
 
<?php
 
    if (isset($_POST['Id']) && !empty($_POST['Id']) &&
        isset($_POST['nome'])) {
 
            include 'conexao.php';
            $sql = "UPDATE Categorias SET nome = '$_POST[nome]' WHERE Id = $_POST[Id]";
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
        $sql = "SELECT Id, nome FROM Categorias WHERE Id = $_GET[Id]";
        $resultado = $conexao->query($sql);
        if ($resultado) {
            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
                    $id = $row["Id"];
                    $nome = $row["nome"];
                    
                }
            }
            else {
                header('location: categorias.php?erro=Nenhum registro encontrado');
            }
        }
        else {
           header('location: categorias.php?erro=Erro do if do resultado');
        }
    }
    else {
        header('location: categorias.php?erro=Nenhum Id informado');
    }
?>
 
<form action="editar_categoria.php?Id=<?php echo $id; ?>"method="post">
    <input name="Id" value="<?php echo $id ?>"/>
    <input name="nome" value="<?php echo $nome ?>"/>
    
 
    <button type="submit">Salvar alterações</button>
 
   
 
    <select name="categoria_Id">
 
    <?php
    $sql_categorias = "Select Id, Nome from categorias";
    $resultado_agora = $conexao->query($sql_categorias);
 
    if ($resultado_agora->num_rows > 0) {
        while($row = $resultado_agora->fetch_assoc())
        {

            if($categoria_Id == $row['Id'])
            {
                echo "<option selected value='$row[Id]'> $row[Nome] </option>";
            }
            else
            {
                echo "<option value='$row[Id]'> $row[Nome] </option>";
            }
        }

    }
    else
    {
        echo "<option value='0'> Não tem categoria </option>";
    }
 
    ?>
       
        
</select>    
 
<br>
</form>
 
<?php include "rodape.php"; ?>
