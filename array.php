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
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>



<div class="container">
  <h1>Array</h1>

  <p> As variaveis do tipo array são muito utilizadas 
    quando vamos limpar listar coisas.
    Os arrays em php são listas de quaisquer tipo de dados.
  </p>
  <pre>
        $array = [];
        $array = Array();
        $array[0] = "OI";
        $array[2] = 10;
        $array["Fernando"] = "Professor" ;
        $array[$array[2]] = "teste" ;
        
  </pre>
  <?php                //0  1     2     3      4    5 
        $array = Array("Oi",10,"Prof","teste",1.99,true);
        echo "<h2>Como saber se deu certo ?</h2> ";
        var_dump($array);

        echo "<pre>";
        print_r($array);
        echo "</pre>"; 

        echo "<pre>";
        var_dump($array);
        echo "</pre>";

        for($i = 0; $i <count($array); $i++ )
        {
            echo " $array[$i] <br>";
        }

    ?>

    <p> Existem diversas formas de criar uma variavel array </p>
    <pre>
        $array (
            chave => valor,
            chave2 => valor2,
            chave3 => valor3,
            ...
        )
    </pre>
   <p>
        Esse tipo Array ( chave e valor) funciona da mesma
        forma porem não existem mais os indices com o números passando
        a usar string como chave para os valores
   </p>
   <?php
        $array = array(
        "foo" => "bar",
        "bar" => "foo",
        );

        // Utilizando a sintaxe curta
    $array = [
    "foo" => "bar",
    "bar" => "foo",
    ];
    echo "<pre>";
    print_r($array);
    echo "</pre>";

    $resultados = [
        "Id" => 1,
        "Nome"=> "Fernando",
        "Idade" => 34,
        "Salario"=> 5325.50,
        "Professor" => true,        
    ];
    echo "<pre>";
    print_r($resultados);
    echo "</pre>";

    echo $resultados["Nome"];
    ?>
    <p>Para varrer todo array de chave e valor
       precisamos de um laço de repetição exclusivo chamado
       foreach()</p>
       <pre>
        foreach ($array as $Chave => $Valor)
        {
            echo $resultados[$Chave];
            // ou
            echo $Valor;
        }
    </pre>
    <?php   // variavel array   chave    valor
        foreach ($resultados as $Chave=> $Valor)
        {
            echo "Valor pela chave: ".$resultados[$Chave]."<br>";
            // ou
            echo "Apenas valor: ".$Valor."<br>";
            echo "Apenas Chave: ".$Chave."<br>";
        }

    ?>
</div>


  <script src= "bootstrap.bundle.min.js"></script>
</body>
</html>