<?php

function getMovement ($type)
{
    $move = '';
    
    if($type === '1' || $type === '2' || $type === '3')
    {
        $move = '12';
    }
    else
    {
        $move = '9 (12)';
    }
    
    return $move;
}



?>