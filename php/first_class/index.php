<?php
    $nome = "Dieguinho do Grau"; 
    $idade = 18;
    $altura = 1.81;
    $casado = false;


    if($_GET)
    {
        print "<h1 style='color:blue'> Olá, Mundo! </h1><br> \n";
        echo "Prazer {$_GET['nome']}! Seja muito bem vindo! Sua idade é de {$_GET['idade']} anos <br> \n
        Altura: $altura é casado gatão? $casado";
        if($casado){
            echo " Opa, lua de mel?";
        } else{
            echo "F soldado talvez a próxima!";
        }
    }
    else
    {
        header("location:index.html");
    }

    
?>