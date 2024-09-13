<?php include "cabecalho.php"; ?>

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


<?php include "rodape.php"; ?>