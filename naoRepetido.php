<?php
function criaArray(){
    $array = array();
    for($i=0; $i<20; $i++){
        $array[] = rand(0,10);
    }
    return $array;
}
function getUnicos($array){   
    $unicos=array();
    foreach($array as $key => $valor){
        $total=0;
        foreach($array as $key2 => $valor2){
            if($valor == $valor2){
                $total++;
            }
        }
        if($total==1){
            $unicos[]=$valor;
        }
        
    }
    return $unicos;
}

echo "<pre>";
var_dump(getUnicos( [2,5,8,2,8,5,3,9,6,3,4,6,3,1,2,1,2,3,7,1] ));
echo "<pre>";

//imprimeArray(criaArray());
?>