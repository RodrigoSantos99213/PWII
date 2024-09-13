<?php include "cabecalho.php"; ?>

  <h1>Estrutura Condicional (IF / ELSE)</h1>
  <p> $inteira = 10</p>
  <p>$nome = "Prof"</p>
  <p>$valor = 10.50</p>
  <p>$valor = true</p>

  <pre>
  <p>if ($inteira == 10)
      {
          echo "o conteudo é 10";
      }
      else if($inteira >= 11);
      {
        echo "maior ou igual a 11";
      }
      else
      {
        echo "não é 20";
      }
    </pre>
    <?php
        $inteira=10;
        if($inteira ==10)
        {
            echo "<h2> A variavel é 10</h2>";
        }
        else if ($inteira >= 11)
        {
            echo "<h2> A variavel é maior ou igual a 11</h2>";
        }
        else
        {
            echo "<h2> A variavel só pode ser menor que 10 </h2>";
        }
        ?>

    <p>
        As variaveis string podem ser cotados os caracteres e usados no if
    </p>
    <pre>
        if ( count($nome) > 10 )
        {
            echo "seu nome tem mais que 10 caracteres";
        }
    </pre>
    <p>
        Podemos verificar se a variavel $nome está vazia
    </p>
    <pre>
        if (empty($nome) )
        {
           echo "Sua variavel esta vazia";
        }
    </pre>
    <p>
        Também podemos comparar string normalmente
    </p>
    <pre>
        if ($nome == "Rodrigo") )
        {
           echo "Nome igual";
        }
        else 
        {
            echo "Nome diferente";
        }
    </pre>
    <?php
    $nome = "Rodrigo";
    if(strlen($nome) > 5 )
    {
        echo "<h2>seu nome tem mais que 10 caracteres quantidade é ".strlen($nome)."</h2>";
    }
    else
    {
        echo "<h2>seu nome tem menos 5 caracteres quantidade é ".strlen($nome)."</h2>";
    }
    ?>

    <p>
        Podemos verificar se a variavel é verdadeira ou falsa
    </p>
    <pre>
    if($ativo)
    {
     echo "verdadeira";
    }
    else 
    {
    echo "falso";
    }
</pre>
</div>






<?php include "rodape.php"; ?>