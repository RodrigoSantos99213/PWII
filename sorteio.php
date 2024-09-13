<?php include "cabecalho.php"; ?>

  <h1>Sorteio</h1>

<?php
$sorteio = array(

        "nome" => "JONAS SILVA JATOBA",      
        "nome" => "MARCOS VINÍCIUS SANCHES CARDOSO",    
        "nome" => "MARIANA DOS SANTOS",      
        "nome" => "MATHEUS MARQUEZIM GENEBRA",       
        "nome" => "RAFAEL TSUTAI MASSAKI",       
        "nome" => "REBÉCA RODRIGUES DE OLIVEIRA",        
        "nome" => "RODOLFO LEONARDO ROMO",       
        "nome" => "RODRIGO MIRANDA DOS SANTOS",      
        "nome" => "SARAH VITÓRIA PEDROSO DA SILVA",      
        "nome" => "TAYNA ADRIANA DA SILVA",      
        "nome" => "VANESSA ALVARES BERNARDO",        
        "nome" => "VINICIUS GABRIEL GONÇALVES DOS SANTOS",       
        "nome" => "VITOR TAKAYUKI HIROTOMI",     
        "nome" => "WYLLIAM DOS SANTOS FLORENTINO",
);

echo rand(0,10), "\n";
$numero = rand(0,10);

echo $sorteio["nome"];

?>

</div>

<?php include "rodape.php"; ?>
