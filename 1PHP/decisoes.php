<?php 


echo "Você só pode entrar se tiver a partir de 18 anos ou 16 porém acompanhado\n";

$idade = readline("Qual sua idade ?");

if($idade < 18 ){

       
    echo "Você só pode entrar se tiver mais de 18 anos." . PHP_EOL;
    
    if($acompanhado = readline("Está acompanhado? 0-NÃO 1-SIM") == 1){

        echo "Você é de menor porém está acompanhado, portanto pode entrar.";
        

    }

    else{
        echo "Desculpe, você não pode entrar";
    }

}
else{

    echo "Você tem $idade anos.\nPode entrar." . PHP_EOL;

}



?>