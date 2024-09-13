<?php include "cabecalho.php"; ?>

    <h1>Variaveis em PHP</h1>
    <p> $numero =10; //Aqui é uma variavel inteira </p>
    <p> $string ="camisa 10"; </p>
    <p> $string1 ="camisa 10" .$numero; </p>
    <p> $string2 ="camisa 10 $numero"; </p>
    <p> $Valor Decimal ="10.50"; </p>
    <p> $Ativo ="true"; </p>
    <p> /* Aqui é um bloco de comentario */ </p>
    <?php // Tudo que está entre as tags php não aparece na tela ?>

    <?php // a não ser que usemos a função echo string ?>
        <?php
            echo"Hello Word";
            echo "<br>";
            $numero = 10;
            $nome = "Rodrigo";
            $frase1 = "<p> $nome camisa $numero frase com paragrafo </p>";
            $frase2 = "$nome camisa" .$numero; // cocatenação das antigas
            echo $frase1;
            echo "$frase2 É o que tem dentro da variavel";


            ?>
</div>

<?php include "rodape.php"; ?>