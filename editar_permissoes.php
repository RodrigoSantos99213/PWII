<?php include "cabecalho.php"; ?>
 
<?php
 
    if (isset($_POST['Id']) && !empty($_POST['Id']) &&
        isset($_POST['Descricao'])) {
 
            include 'conexao.php';
            $sql = "UPDATE Permissoes SET Descricao = '$_POST[Descricao]' WHERE Id = $_POST[Id]";
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
        $sql = "SELECT Id, Descricao FROM Permissoes WHERE Id = $_GET[Id]";
        $resultado = $conexao->query($sql);
        if ($resultado) {
            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
                    $Id = $row["Id"];
                    $Descricao = $row["Descricao"];
                    
                }
            }
            else {
                header('location: permissoes.php?erro=Nenhum registro encontrado');
            }
        }
        else {
           header('location: permissoes.php?erro=Erro do if do resultado');
        }
    }
    else {
        header('location: permissoes.php?erro=Nenhum Id informado');
    }
?>
 
<form action="editar_permissoes.php?Id=<?php echo $Id; ?>"method="post">
    <input name="Id" value="<?php echo $Id ?>"/>
    <input name="Descricao" value="<?php echo $Descricao ?>"/>
    
 
    <button type="submit">Salvar alterações</button>
 
   
 
    <select name="permissoes_Id">
 
    <?php
    $sql_permissoes = "Select Id, Descricao from permissoes";
    $resultado_agora = $conexao->query($sql_permissoes);
 
    if ($resultado_agora->num_rows > 0) {
        while($row = $resultado_agora->fetch_assoc())
        {

            if($permissoes_Id == $row['Id'])
            {
                echo "<option selected value='$row[Id]'> $row[Descricao] </option>";
            }
            else
            {
                echo "<option value='$row[Id]'> $row[Descricao] </option>";
            }
        }

    }
    else
    {
        echo "<option value='0'> Não tem permissoes </option>";
    }
 
    ?>
       
        
</select>    
 
<br>
</form>
 
<?php include "rodape.php"; ?>
