<?php


function getArmourClass ($type)
{
    $ac = '';
    
    if($type === '1' || $type === '2' || $type === '3')
    {
        $ac = '9 [10]';
    }
    else
    {
        $ac = '5 [14]';
    }
    
    return $ac;
    
}



?>