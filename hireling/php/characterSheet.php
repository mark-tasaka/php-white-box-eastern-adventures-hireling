<?php

function getCharacterSheet ($type)
{
    $charSheet = '';
    
    if($type === '1')
    {
        $charSheet = 'unskilledHireling.png';
    }
    else if($type === '2')
    {
        $charSheet = 'artisanHireling.png';
    }
    else if($type === '3')
    {
        $charSheet = 'academicHireling.png';
    }
    else if($type === '4')
    {
        $charSheet = 'soldierHireling.png';
    }
    else if($type === '5')
    {
        $charSheet = 'specialistHireling.png';
    }
    
    return $charSheet;
    
    
}


?>