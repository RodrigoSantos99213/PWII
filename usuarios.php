<?php include "cabecalho.php"; ?>

<?php 
if( isset($_GET["pesquisa"]) )
{
    $pesquisa = $_GET["pesquisa"];
    if( empty($pesquisa) )
    {
       //Se a variavel estiver vazia executa aqui 
       include "conexao.php";
       $sql = "Select Id, Login, Senha from Usuarios order by Id ASC";
       $resultado = $conexao->query($sql);
       
       $conexao->close();
    }
    else
    {
        //Aqui vai a lógica da pesquisa
        include "conexao.php";
        $sql = "Select Id, Login, Senha
                from Usuarios
                where Id like '%$pesquisa%' 
                order by Id desc";
        $resultado = $conexao->query($sql);
        
        $conexao->close();
    }
}
else
{
    $pesquisa = "";
    
    include "conexao.php";
       $sql = "Select Id, Login, Senha from Usuarios order by Id ASC";
       $resultado = $conexao->query($sql);
       
       $conexao->close();
}


?>
<br>
<?php
    if(isset($_GET["erro"]) && !empty($_GET["erro"]) )
    {
        echo "<div class='alert alert-danger'>";
        echo $_GET["erro"];
        echo "</div>";
    }
?>
<br>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                Usuarios
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <a href="novo_usuario.php" class="btn btn-success" >
                            Nova Usuario
                        </a>
                    </div>
                    <div class="col-8">
                        <form action="usuarios.php" method="get">
                            <div class="input-group mb-3">
                                <input type="text" 
                                        name="pesquisa" 
                                        value="<?php echo $pesquisa; ?>"  
                                        class="form-control" 
                                        placeholder="Digite sua pesquisa aqui..." />


                                <button class="btn btn-primary" type="submit">
                                    Pesquisar
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-2"></div>
                </div>

                <div class="row">
                    <div class="col-12">
                        
                        <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Login</th>
                                <th scope="col">Senha</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            include "conexao.php";
                            $sql = "Select Id, Login, Senha from Usuarios order by Id ASC";
                            //$resultado = $conexao->query($sql);
                            
                            $conexao->close();
                            if ($resultado->num_rows > 0) {
                                while($row = $resultado->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $row["Id"] . "</td>";
                                    echo "<td>" . $row["Login"] . "</td>";
                                    echo "<td>" . $row["Senha"] . "</td>";
                                    echo "<td><a href='editar_categoria.php?Id=$row[Id]' class='btn btn-warning' >Editar</a>  ";
                                    echo "<a href='excluir_categoria.php?Id=$row[Id]' class='btn btn-danger'>Excluir</a></td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='3'>Nenhum registro encontrado</td></tr>";
                            }
                            ?>
                                                    
                        </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include "rodape.php"; ?>