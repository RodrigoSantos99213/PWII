<?php include "cabecalho.php"; ?>

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


<?php include "rodape.php"; ?>