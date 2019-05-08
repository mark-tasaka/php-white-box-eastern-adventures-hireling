<?php

function getSave ($type)
{
    $save = '';
    
    if($type === '1' || $type === '2' || $type === '3')
    {
        $save = '19';
    }
    else
    {
        $save = '15';
    }
    
    return $save;
}



?>