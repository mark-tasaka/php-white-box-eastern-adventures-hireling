<?php

function getHitPoints ($type, $hp)
{
    $hitPoints = 0;
    
    if($type === '1' || $type === '2' || $type === '3')
    {
        if($hp === '1')
        {
            $hitPoints = rand(1, 5);
        }
        else if($hp === '2')
        {
            $hitPoints = 3;
        }
        else if($hp === '3')
        {
            $hitPoints = 5;
        }
    }
    else
    {
        if($hp === '1')
        {
            $hitPoints = rand(2, 7);
        }
        else if($hp === '2')
        {
            $hitPoints = 5;
        }
        else if($hp === '3')
        {
            $hitPoints = 7;
        }
    }
    
    
    return $hitPoints;
        
}

function getHitDice ($type)
{
    
    $hd = '';
    
    if($type === '1' || $type === '2' || $type === '3')
    {
        $hd = '1-1';
    }
    else
    {
        $hd = '1+1';
    }
    
    return $hd;
}



?>