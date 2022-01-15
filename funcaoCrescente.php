<?php

    //ao encontra a sequencia crescente return true



    function eCrescente($array){
        foreach($array as $key => $valor){
            $temp=$array;
            unset($temp[$key]);
            $temp=array_values($temp);
            
            $sequencia=0;
            
            for($i=0; $i<(count($temp)-1); $i++){
                //verifica se o atual maior que o proximo
                if($temp[$i]<
                $temp[$i+1]){
                    $sequencia++;
                }
            }
            if($sequencia==count($temp)-1){
                return true;
            }
        }
        return false;
    }

    function testaImprimir($array){
        echo " [".implode(",",$array)."] ";
        if(eCrescente($array)){
            echo "True";
        }else{
            echo "False";
        }
        echo "<br>";
        
    }
    echo "<pre>";
    testaImprimir([1, 3, 2, 1]);
    testaImprimir([1, 3, 2]);
    testaImprimir([1, 2, 1, 2]);
    testaImprimir([3, 6, 5, 8, 10, 20, 15]);
    testaImprimir([1, 1, 2, 3, 4, 4]);
    testaImprimir([1, 4, 10, 4, 2]);
    testaImprimir([10, 1, 2, 3, 4, 5]);
    testaImprimir([1, 1, 1, 2, 3]);
    testaImprimir([0, -2, 5, 6]);
    testaImprimir([1, 2, 3, 4, 5, 3, 5, 6]);
    testaImprimir([40, 50, 60, 10, 20, 30]);
    testaImprimir([1, 1]);
    testaImprimir([1, 2, 5, 3, 5]);
    testaImprimir([1, 2, 5, 5, 5]);
    testaImprimir([10, 1, 2, 3, 4, 5, 6, 1]);
    testaImprimir([1, 2, 3, 4, 3, 6]);
    testaImprimir([1, 2, 3, 4, 99, 5, 6]);
    testaImprimir([123, -17, -5, 1, 2, 3, 12, 43, 45]);
    testaImprimir([3, 5, 67, 98, 3]);
    echo "<pre>";