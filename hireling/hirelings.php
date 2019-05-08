<!DOCTYPE html>
<html>
<head>
<title>Hirelings: White Box Eastern Adventures</title>
 
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
	<meta charset="UTF-8">
	<meta name="description" content="Hirelings: White Box Eastern Adventures Generator. Tasaka Games.">
	<meta name="keywords" content="Hirelings: White Box Eastern Adventures, Tasaka Games,HTML5,CSS,JavaScript">
	<meta name="author" content="Mark Tasaka 2019">
		

	<link rel="stylesheet" type="text/css" href="css/hireling.css">

    
    
</head>

    <body>
    
    <!--- php --->
        
        <?php
        
        include 'php/characterSheet.php';
        include 'php/armourClass.php';
        include 'php/hitPoints.php';
        include 'php/movement.php';
        include 'php/save.php';
        include 'php/sex.php';
        include 'php/names.php';
        include 'php/weapons.php';
        include 'php/personality.php';
        
        
            
        if(isset($_POST["theHirelingType"]))
        {
            $hirelingType = $_POST["theHirelingType"];
    
        }
        
        
        if(isset($_POST["theHitPoints"]))
        {
            $hpOption = $_POST["theHitPoints"];
    
        }
        
        
        if(isset($_POST["theHirelingSex"]))
        {
            $sexOption = $_POST["theHirelingSex"];
    
        }
        
        if(isset($_POST["theHirelingName"]))
        {
            $nameOption = $_POST["theHirelingName"];
    
        }
        
        if(isset($_POST["thePersonality"]))
        {
            $personalityOption = $_POST["thePersonality"];
    
        }
        
        $characterSheet = getCharacterSheet ($hirelingType);
        
        $armourClass = getArmourClass ($hirelingType);
        
        $hitPoints0 = getHitPoints ($hirelingType, $hpOption);
        $hitPoints1 = getHitPoints ($hirelingType, $hpOption);
        $hitPoints2 = getHitPoints ($hirelingType, $hpOption);
        $hitPoints3 = getHitPoints ($hirelingType, $hpOption);
        $hitPoints4 = getHitPoints ($hirelingType, $hpOption);
        $hitPoints5 = getHitPoints ($hirelingType, $hpOption);
        $hitPoints6 = getHitPoints ($hirelingType, $hpOption);
        $hitPoints7 = getHitPoints ($hirelingType, $hpOption);
        $hitPoints8 = getHitPoints ($hirelingType, $hpOption);
        $hitPoints9 = getHitPoints ($hirelingType, $hpOption);
        
        $hitDice = getHitDice ($hirelingType);
        
        $moveRate = getMovement ($hirelingType);
        
        $savingThrow = getSave ($hirelingType);
        
        $sex0 = getSex($sexOption);
        $sex1 = getSex($sexOption);
        $sex2 = getSex($sexOption);
        $sex3 = getSex($sexOption);
        $sex4 = getSex($sexOption);
        $sex5 = getSex($sexOption);
        $sex6 = getSex($sexOption);
        $sex7 = getSex($sexOption);
        $sex8 = getSex($sexOption);
        $sex9 = getSex($sexOption);
        
        $displaySex0 = showSex($sex0, $sexOption);
        $displaySex1 = showSex($sex1, $sexOption);
        $displaySex2 = showSex($sex2, $sexOption);
        $displaySex3 = showSex($sex3, $sexOption);
        $displaySex4 = showSex($sex4, $sexOption);
        $displaySex5 = showSex($sex5, $sexOption);
        $displaySex6 = showSex($sex6, $sexOption);
        $displaySex7 = showSex($sex7, $sexOption);
        $displaySex8 = showSex($sex8, $sexOption);
        $displaySex9 = showSex($sex9, $sexOption);
        
        $hirelingName0 = getName ($nameOption, $sex0);
        $hirelingName1 = getName ($nameOption, $sex1);
        $hirelingName2 = getName ($nameOption, $sex2);
        $hirelingName3 = getName ($nameOption, $sex3);
        $hirelingName4 = getName ($nameOption, $sex4);
        $hirelingName5 = getName ($nameOption, $sex5);
        $hirelingName6 = getName ($nameOption, $sex6);
        $hirelingName7 = getName ($nameOption, $sex7);
        $hirelingName8 = getName ($nameOption, $sex8);
        $hirelingName9 = getName ($nameOption, $sex9);
        
        $hirelingWeapons0 = getWeapons ($hirelingType);
        $hirelingWeapons1 = getWeapons ($hirelingType);
        $hirelingWeapons2 = getWeapons ($hirelingType);
        $hirelingWeapons3 = getWeapons ($hirelingType);
        $hirelingWeapons4 = getWeapons ($hirelingType);
        $hirelingWeapons5 = getWeapons ($hirelingType);
        $hirelingWeapons6 = getWeapons ($hirelingType);
        $hirelingWeapons7 = getWeapons ($hirelingType);
        $hirelingWeapons8 = getWeapons ($hirelingType);
        $hirelingWeapons9 = getWeapons ($hirelingType);
        
        $hirelingArmour0 = getArmour ($hirelingType);
        $hirelingArmour1 = getArmour ($hirelingType);
        $hirelingArmour2 = getArmour ($hirelingType);
        $hirelingArmour3 = getArmour ($hirelingType);
        $hirelingArmour4 = getArmour ($hirelingType);
        $hirelingArmour5 = getArmour ($hirelingType);
        $hirelingArmour6 = getArmour ($hirelingType);
        $hirelingArmour7 = getArmour ($hirelingType);
        $hirelingArmour8 = getArmour ($hirelingType);
        $hirelingArmour9 = getArmour ($hirelingType);
        
        $hirelingPersonality0 = getPersonality ($personalityOption);
        $hirelingPersonality1 = getPersonality ($personalityOption);
        $hirelingPersonality2 = getPersonality ($personalityOption);
        $hirelingPersonality3 = getPersonality ($personalityOption);
        $hirelingPersonality4 = getPersonality ($personalityOption);
        $hirelingPersonality5 = getPersonality ($personalityOption);
        $hirelingPersonality6 = getPersonality ($personalityOption);
        $hirelingPersonality7 = getPersonality ($personalityOption);
        $hirelingPersonality8 = getPersonality ($personalityOption);
        $hirelingPersonality9 = getPersonality ($personalityOption);
        
        
        
        
        ?>
        
        <!-- html id tags -->
        
        
  <img id="character_sheet"/>
        
        <aside id="left1">
            
            <span id="ac0">
                <?php
                
                echo $armourClass;
                
                ?>
            </span>
            
            <span id="hp0">
                <?php
                
                echo $hitPoints0;
                
                ?>
            </span>
            
            <span id="maxHp0">
                <?php
                
                echo $hitPoints0;
                
                ?>
            </span>
            
            <span id="hd0">
                <?php
                
                echo $hitDice;
                
                ?>
            </span>
            
            <span id="move0">
                <?php
                
                echo $moveRate;
                
                ?>
            </span>
            
            <span id="save0">
                <?php
                
                echo $savingThrow;
                
                ?>
            </span>
            
            
            <span id="sex0">
                <?php
                
                echo $displaySex0;
                
                ?>
            </span>
            
            
            <span id="name0">
                <?php
                
                echo $hirelingName0;
                
                ?>
            </span>
            
            
            <span id="weapons0">
                <?php
                
                echo $hirelingWeapons0;
                
                ?>
            </span>
            <span id="armour0">
                <?php
                
                echo $hirelingArmour0;
                
                ?>
            </span>
            
            
            <span id="personality0">
                <?php
                
                echo $hirelingPersonality0;
                
                ?>
            </span>
        
        
        
        
        
        </aside>
        
        
                
        <aside id="right1">
            
            <span id="ac1">
                <?php
                
                echo $armourClass;
                
                ?>
            </span>
            
            <span id="hp1">
                <?php
                
                echo $hitPoints1;
                
                ?>
            </span>
            
            <span id="maxHp1">
                <?php
                
                echo $hitPoints1;
                
                ?>
            </span>
            
            <span id="hd1">
                <?php
                
                echo $hitDice;
                
                ?>
            </span>
            
            <span id="move1">
                <?php
                
                echo $moveRate;
                
                ?>
            </span>
            
            <span id="save1">
                <?php
                
                echo $savingThrow;
                
                ?>
            </span>
            
            
            <span id="sex1">
                <?php
                
                echo $displaySex1;
                
                ?>
            </span>
            
            
            <span id="name1">
                <?php
                
                echo $hirelingName1;
                
                ?>
            </span>
            
            
            <span id="weapons1">
                <?php
                
                echo $hirelingWeapons1;
                
                ?>
            </span>
            <span id="armour1">
                <?php
                
                echo $hirelingArmour1;
                
                ?>
            </span>
            
            
            <span id="personality1">
                <?php
                
                echo $hirelingPersonality1;
                
                ?>
            </span>
        
        
        
        
        
        </aside>
        
        
        <aside id="left2">
            
            <span id="ac2">
                <?php
                
                echo $armourClass;
                
                ?>
            </span>
            
            <span id="hp2">
                <?php
                
                echo $hitPoints2;
                
                ?>
            </span>
            
            <span id="maxHp2">
                <?php
                
                echo $hitPoints2;
                
                ?>
            </span>
            
            <span id="hd2">
                <?php
                
                echo $hitDice;
                
                ?>
            </span>
            
            <span id="move2">
                <?php
                
                echo $moveRate;
                
                ?>
            </span>
            
            <span id="save2">
                <?php
                
                echo $savingThrow;
                
                ?>
            </span>
            
            
            <span id="sex2">
                <?php
                
                echo $displaySex2;
                
                ?>
            </span>
            
            
            <span id="name2">
                <?php
                
                echo $hirelingName2;
                
                ?>
            </span>
            
            
            <span id="weapons2">
                <?php
                
                echo $hirelingWeapons2;
                
                ?>
            </span>
            <span id="armour2">
                <?php
                
                echo $hirelingArmour2;
                
                ?>
            </span>
            
            
            <span id="personality2">
                <?php
                
                echo $hirelingPersonality2;
                
                ?>
            </span>
        
        
        
        
        
        </aside>
        
        
                
        <aside id="right2">
            
            <span id="ac3">
                <?php
                
                echo $armourClass;
                
                ?>
            </span>
            
            <span id="hp3">
                <?php
                
                echo $hitPoints3;
                
                ?>
            </span>
            
            <span id="maxHp3">
                <?php
                
                echo $hitPoints3;
                
                ?>
            </span>
            
            <span id="hd3">
                <?php
                
                echo $hitDice;
                
                ?>
            </span>
            
            <span id="move3">
                <?php
                
                echo $moveRate;
                
                ?>
            </span>
            
            <span id="save3">
                <?php
                
                echo $savingThrow;
                
                ?>
            </span>
            
            
            <span id="sex3">
                <?php
                
                echo $displaySex3;
                
                ?>
            </span>
            
            
            <span id="name3">
                <?php
                
                echo $hirelingName3;
                
                ?>
            </span>
            
            
            <span id="weapons3">
                <?php
                
                echo $hirelingWeapons3;
                
                ?>
            </span>
            <span id="armour3">
                <?php
                
                echo $hirelingArmour3;
                
                ?>
            </span>
            
            
            <span id="personality3">
                <?php
                
                echo $hirelingPersonality3;
                
                ?>
            </span>
        
        
        
        
        
        </aside>
        
        
        
        <aside id="left3">
            
            <span id="ac4">
                <?php
                
                echo $armourClass;
                
                ?>
            </span>
            
            <span id="hp4">
                <?php
                
                echo $hitPoints4;
                
                ?>
            </span>
            
            <span id="maxHp4">
                <?php
                
                echo $hitPoints4;
                
                ?>
            </span>
            
            <span id="hd4">
                <?php
                
                echo $hitDice;
                
                ?>
            </span>
            
            <span id="move4">
                <?php
                
                echo $moveRate;
                
                ?>
            </span>
            
            <span id="save4">
                <?php
                
                echo $savingThrow;
                
                ?>
            </span>
            
            
            <span id="sex4">
                <?php
                
                echo $displaySex4;
                
                ?>
            </span>
            
            
            <span id="name4">
                <?php
                
                echo $hirelingName4;
                
                ?>
            </span>
            
            
            <span id="weapons4">
                <?php
                
                echo $hirelingWeapons4;
                
                ?>
            </span>
            <span id="armour4">
                <?php
                
                echo $hirelingArmour4;
                
                ?>
            </span>
            
            
            <span id="personality4">
                <?php
                
                echo $hirelingPersonality4;
                
                ?>
            </span>
        
        
        
        
        
        </aside>
        
        
                
        <aside id="right3">
            
            <span id="ac5">
                <?php
                
                echo $armourClass;
                
                ?>
            </span>
            
            <span id="hp5">
                <?php
                
                echo $hitPoints5;
                
                ?>
            </span>
            
            
            <span id="maxHp5">
                <?php
                
                echo $hitPoints5;
                
                ?>
            </span>
            
            <span id="hd5">
                <?php
                
                echo $hitDice;
                
                ?>
            </span>
            
            <span id="move5">
                <?php
                
                echo $moveRate;
                
                ?>
            </span>
            
            <span id="save5">
                <?php
                
                echo $savingThrow;
                
                ?>
            </span>
            
            
            <span id="sex5">
                <?php
                
                echo $displaySex5;
                
                ?>
            </span>
            
            
            <span id="name5">
                <?php
                
                echo $hirelingName5;
                
                ?>
            </span>
            
            
            <span id="weapons5">
                <?php
                
                echo $hirelingWeapons5;
                
                ?>
            </span>
            <span id="armour5">
                <?php
                
                echo $hirelingArmour5;
                
                ?>
            </span>
            
            
            <span id="personality5">
                <?php
                
                echo $hirelingPersonality5;
                
                ?>
            </span>
        
        
        
        
        
        </aside>
        
        
        <aside id="left4">
            
            <span id="ac6">
                <?php
                
                echo $armourClass;
                
                ?>
            </span>
            
            <span id="hp6">
                <?php
                
                echo $hitPoints6;
                
                ?>
            </span>
            
            <span id="maxHp6">
                <?php
                
                echo $hitPoints6;
                
                ?>
            </span>
            
            <span id="hd6">
                <?php
                
                echo $hitDice;
                
                ?>
            </span>
            
            <span id="move6">
                <?php
                
                echo $moveRate;
                
                ?>
            </span>
            
            <span id="save6">
                <?php
                
                echo $savingThrow;
                
                ?>
            </span>
            
            
            <span id="sex6">
                <?php
                
                echo $displaySex6;
                
                ?>
            </span>
            
            
            <span id="name6">
                <?php
                
                echo $hirelingName6;
                
                ?>
            </span>
            
            
            <span id="weapons6">
                <?php
                
                echo $hirelingWeapons6;
                
                ?>
            </span>
            <span id="armour6">
                <?php
                
                echo $hirelingArmour6;
                
                ?>
            </span>
            
            
            <span id="personality6">
                <?php
                
                echo $hirelingPersonality6;
                
                ?>
            </span>
        
        
        
        
        
        </aside>
        
        
                
        <aside id="right4">
            
            <span id="ac7">
                <?php
                
                echo $armourClass;
                
                ?>
            </span>
            
            <span id="hp7">
                <?php
                
                echo $hitPoints7;
                
                ?>
            </span>
            
            <span id="maxHp7">
                <?php
                
                echo $hitPoints7;
                
                ?>
            </span>
            
            <span id="hd7">
                <?php
                
                echo $hitDice;
                
                ?>
            </span>
            
            <span id="move7">
                <?php
                
                echo $moveRate;
                
                ?>
            </span>
            
            <span id="save7">
                <?php
                
                echo $savingThrow;
                
                ?>
            </span>
            
            
            <span id="sex7">
                <?php
                
                echo $displaySex7;
                
                ?>
            </span>
            
            
            <span id="name7">
                <?php
                
                echo $hirelingName7;
                
                ?>
            </span>
            
            
            <span id="weapons7">
                <?php
                
                echo $hirelingWeapons7;
                
                ?>
            </span>
            <span id="armour7">
                <?php
                
                echo $hirelingArmour7;
                
                ?>
            </span>
            
            
            <span id="personality7">
                <?php
                
                echo $hirelingPersonality7;
                
                ?>
            </span>
        
        
        
        
        
        </aside>
        
        
                
        <aside id="left5">
            
            <span id="ac8">
                <?php
                
                echo $armourClass;
                
                ?>
            </span>
            
            <span id="hp8">
                <?php
                
                echo $hitPoints8;
                
                ?>
            </span>
            
            
            <span id="maxHp8">
                <?php
                
                echo $hitPoints8;
                
                ?>
            </span>
            
            <span id="hd8">
                <?php
                
                echo $hitDice;
                
                ?>
            </span>
            
            <span id="move8">
                <?php
                
                echo $moveRate;
                
                ?>
            </span>
            
            <span id="save8">
                <?php
                
                echo $savingThrow;
                
                ?>
            </span>
            
            
            <span id="sex8">
                <?php
                
                echo $displaySex8;
                
                ?>
            </span>
            
            
            <span id="name8">
                <?php
                
                echo $hirelingName8;
                
                ?>
            </span>
            
            
            <span id="weapons8">
                <?php
                
                echo $hirelingWeapons8;
                
                ?>
            </span>
            <span id="armour8">
                <?php
                
                echo $hirelingArmour8;
                
                ?>
            </span>
            
            
            <span id="personality8">
                <?php
                
                echo $hirelingPersonality8;
                
                ?>
            </span>
        
        
        
        
        
        </aside>
        
        
        
                
        <aside id="right5">
            
            <span id="ac9">
                <?php
                
                echo $armourClass;
                
                ?>
            </span>
            
            <span id="hp9">
                <?php
                
                echo $hitPoints9;
                
                ?>
            </span>
            
            
            <span id="maxHp9">
                <?php
                
                echo $hitPoints9;
                
                ?>
            </span>
            
            <span id="hd9">
                <?php
                
                echo $hitDice;
                
                ?>
            </span>
            
            <span id="move9">
                <?php
                
                echo $moveRate;
                
                ?>
            </span>
            
            <span id="save9">
                <?php
                
                echo $savingThrow;
                
                ?>
            </span>
            
            
            <span id="sex9">
                <?php
                
                echo $displaySex9;
                
                ?>
            </span>
            
            
            <span id="name9">
                <?php
                
                echo $hirelingName9;
                
                ?>
            </span>
            
            
            <span id="weapons9">
                <?php
                
                echo $hirelingWeapons9;
                
                ?>
            </span>
            <span id="armour9">
                <?php
                
                echo $hirelingArmour9;
                
                ?>
            </span>
            
            
            <span id="personality9">
                <?php
                
                echo $hirelingPersonality9;
                
                ?>
            </span>
        
        
        
        
        
        </aside>
        
        
        
        
        <!-- JavaScript -->
        <script>
            
            
       let imgData = "images/<?php echo $characterSheet; ?>";
      
        $("#character_sheet").attr("src", imgData);
        
        </script>
    
    </body>
    
</html>