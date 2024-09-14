<?php include "cabecalho.php"; ?>

  <h1>Sorteio</h1>

<?php
$sorteio = array(

         "JONAS SILVA JATOBA",      
         "MARCOS VINÍCIUS SANCHES CARDOSO",    
         "MARIANA DOS SANTOS",      
         "MATHEUS MARQUEZIM GENEBRA",       
         "RAFAEL TSUTAI MASSAKI",       
         "REBÉCA RODRIGUES DE OLIVEIRA",        
         "RODOLFO LEONARDO ROMO",       
         "RODRIGO MIRANDA DOS SANTOS",      
         "SARAH VITÓRIA PEDROSO DA SILVA",      
         "TAYNA ADRIANA DA SILVA",      
         "VANESSA ALVARES BERNARDO",        
         "VINICIUS GABRIEL GONÇALVES DOS SANTOS",       
         "VITOR TAKAYUKI HIROTOMI",     
         "WYLLIAM DOS SANTOS FLORENTINO",
);

$numero=0;
$numero= rand(0,13);


echo $sorteio[$numero];

?>

</div>

<?php include "rodape.php"; ?>
