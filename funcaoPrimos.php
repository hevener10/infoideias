<?php
function primos($inicio,$fim){
    for($i=$inicio; $i<$fim; $i++){
        $contador = 0;
        for($j=1; $j<=$i; $j++){
            if($i%$j==0){
                $contador++;
            }
        }
        if($contador==2){
            echo $i."<p>";
        }
    }
}

primos(10,29);