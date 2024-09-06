<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap.min.css" rel="stylesheet"/>
    <title>Pagina incial do site</title>
</head>
<body>
     
    <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">
            Pagina Inicial 
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="variavel.php">
            Variavel
          </a>

          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="if.php">
            If  
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="variavel.php">
            Variavel
          </a>

        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#while.php">While</a></li>
            <li><a class="dropdown-item" href="for.php">For</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="foreach.php">Foreach</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" bootstrap.php">
            Bootstrap
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="array.php">
            Array
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ExerciciosArray.php">
            Exercicios Array
          </a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



<div class="container">
  <h1>Exercicio Array</h1>

  <?php //            0       1         2          
  $frutas = array ("maça","laranja", "banana");

  print_r($frutas); // Escreve na tela os dados básicos do array
  var_dump($frutas); // Detalhe os dados do array
  echo count($frutas); // escreve na tela a quantidade de itens que o array possui
  array_push($frutas, "Kiwi"); // adiciona um novo item ao array
  foreach($frutas as $fruta){
        echo $fruta;
  }
?>

<p>
//Exercicio 
Gere um Array que cada indice desse array receba um novo 
array com as Chaves Nome, idade e email
com seu respectivos valores inventados aleatoriamente.
</p>

 <?php

$pessoas = array(

    array(
        "nome" => "Rodrigo Santos",
        "idade" => "25",
        "email" => "rodrigo.santos@example.com",
        
    ),
    array(
        "nome" => "Renan Santos",
        "idade" => "25",
        "email" => "renan.santos@example.com"
        
    ),
    array(
        "nome" => "Jonas Santos",
        "idade" => "25",
        "email" => "jonas.santos@example.com"
        
    ),
    array(
        "nome" => "Marcos Santos",
        "idade" => "25",
        "email" => "marcos.santos@example.com"
        
    ),
    array(
        "nome" => "Vinicius Santos",
        "idade" => "25",
        "email" => "vinicius.santos@example.com"
        
    )
);
echo "<table border= '5'>";
echo "<tr>";
echo "<td> Nome </td>";
echo "<td> Idade </td>";
echo "<td> Email </td>";
echo "</tr>";
for ($i = 0; $i < count($pessoas); $i++)
{
    echo "<tr>";
    echo "<td>".$pessoas[$i]["nome"]."</td>";
    echo "<td>".$pessoas[$i]["idade"]."</td>";
    echo "<td>".$pessoas[$i]["email"]."</td>";
    echo "</tr>";

}

foreach($pessoas as $a)
{
    echo "<tr>";
    echo "<td>".$a["nome"]."</td>";
    echo "<td>".$a["idade"]."</td>";
    echo "<td>".$a["email"]."</td>";
    echo "</tr>";
    
}
echo"</table>";



?>


</div>


  <script src= "bootstrap.bundle.min.js"></script>
</body>
</html>