<?php include "cabecalho.php"; ?>
 
<?php
 
    if (isset($_POST['Id']) && !empty($_POST['Id']) &&
        isset($_POST['Login']) && !empty($_POST['Login']) &&
        isset($_POST['Senha']) && !empty($_POST['Senha'])
        ) {
 
            include 'conexao.php';
            $sql = "UPDATE Usuarios SET Login = '$_POST[Login]', Senha = $_POST[Senha], Permissoes_Id = $_POST[Permissoes_Id] WHERE Id = $_POST[Id]";
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
        $sql = "SELECT Id, Login, Senha, Permissoes_Id FROM Usuarios WHERE Id = $_GET[Id]";
        $resultado = $conexao->query($sql);
        if ($resultado) {
            if ($resultado->num_rows > 0) {
                while ($row = $resultado->fetch_assoc()) {
                    $id = $row["Id"];
                    $login = $row["Login"];
                    $senha = $row["Senha"];
                }
            }
            else {
                header('location: usuarios.php?erro=Nenhum registro encontrado');
            }
        }
        else {
           header('location: usuarios.php?erro=Erro do if do resultado');
        }
    }
    else {
        header('location: usuarios.php?erro=Nenhum Id informado');
    }
?>
 
<form action="editar_usuarios.php?Id=<?php echo $id; ?>"method="post">
    <input name="Id" value="<?php echo $id ?>"/>
    <input name="Login" value="<?php echo $login ?>"/>
    <input name="Senha" value="<?php echo $senha ?>"/>
    
    <button type="submit">Salvar alterações</button>
 
   
 
    <select name="Permissoes_Id">
 
    <?php
    $sql_categorias = "Select Id, Descricao from Permissoes";
    $resultado_agora = $conexao->query($sql_categorias);
 
    if ($resultado_agora->num_rows > 0) {
        while($row = $resultado_agora->fetch_assoc())
        {

            if($categoria_Id == $row['Id'])
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
