<?php

$conexao2 = mysqli_connect('216.172.161.118', 'unipu628', 'publica#ftp', 'unipu628_unyflex');



        $provasfeitas = mysqli_query($conexao2, "SELECT * FROM tbPontuacao WHERE motivo='prova concluida com' ORDER BY id");
        $provas=0;
       while ($prova = mysqli_fetch_array($provasfeitas)) {
        $hora=$prova['hora'];
        $provas++;
        echo  $provas,'  ', $hora, '<br>';

       }
      echo '<h2> Provas feitas no UNYFLEX desde o dia 03/08/2021: </h2><h1> ', $provas, '</h1><br>';


?>
