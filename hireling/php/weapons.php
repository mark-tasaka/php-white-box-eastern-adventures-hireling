<?php

function getTwoHandedWeapon()
{
        $weapon = array(
        'Sasumata (polearm) [2-h martial weapon]',
        'Naginata (polearm) [2-h martial weapon]',
        'Nagimaki (polearm) [2-h martial weapon]',
        'Tsukubo (polearm) [2-h martial weapon]',
        'Yari (great spear) [2-h martial weapon]',
        'O-dachi (great sword) [2-h martial weapon]'
    );
    
    $lastElement = sizeof($weapon);
    
    $random = rand(0, $lastElement-1);
    
    return $weapon[$random];
}


function getMartialWeapon()
{
        $weapon = array(
        'Ono (hand axe) [martial weapon]',
        'Katana (longsword) [martial weapon]',
        'Wakizashi (short sword) [martial weapon]',
        'Ninjato (short sword) [martial weapon]',
        'Tanto (long dagger) [martial weapon]'
    );
    
    $lastElement = sizeof($weapon);
    
    $random = rand(0, $lastElement-1);
    
    return $weapon[$random];
}


function getBow()
{
        $weapon = array(
        'Daikyu (longbow), 12 arrows',
        'Hankyu (short bow), 12 arrows'
    );
    
    $lastElement = sizeof($weapon);
    
    $random = rand(0, $lastElement-1);
    
    return $weapon[$random];
}


function getWeapons ($type)
{
    $weapons = '';
    
    if($type === '4' || $type === '5')
    {
        $randNum = rand(0, 9);
        
        if($randNum >= 0 && $randNum <= 3)
        {
            $weapons = 'Katana (longsword) [martial weapon]' . '<br/>' . 'Wakizashi (short sword) [martial weapon]';
        }
        else if($randNum >= 4 && $randNum <= 7)
        {
            $weapons = getTwoHandedWeapon() . '<br/>' . getMartialWeapon();
        }
        else if($randNum >= 8 && $randNum <= 9)
        {
            $weapons = getBow() . '<br/>' . getMartialWeapon();
        }
        else
        {
            $weapons = 'ERROR';
        }
    }
    
    return $weapons;
        
}

function getArmour($type)
{
    $armour = '';
    
    if($type === '4' || $type === '5')
    {
        $armour = 'Medium Armour';
    }
    
    
    return $armour;
}



?>