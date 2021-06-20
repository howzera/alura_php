<?php
 


for($i = 1; $i <= 15; $i++){
    if ($i == 13){
        break;
    }
   
    echo("Aluno: $i\n");

}


for($i = 1; $i <= 15; $i++){
    if ($i == 13){
        continue;
    }
   
    echo("Aluno: $i\n");

}

?>