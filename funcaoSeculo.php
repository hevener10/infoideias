<?php
function seculoAno($ano)
{
    
    $seculo = $ano / 100;
    
    return ceil($seculo);

}

echo seculoAno(101);