<!DOCTYPE html>
<html>
<head>
<title>Launch Page: White Box Eastern Adventures Hireling Generator</title>
    
	<meta charset="UTF-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Mark Tasaka 2019">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
    
	<link rel="stylesheet" href="css/githubMCC.css"/> 
	<link rel="stylesheet" href="css/bf_additions.css"/> 
	<link rel="stylesheet" href="css/bf_additions2.css"/> 
	<link rel="stylesheet" href="css/general.css"/> 

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="utf-8" />
	

	</head>
	
	
<body>
    

	
	<section>
		
		<h1><img src="images/title.png" alt="White Box Eastern Adventures HIreling Generator" class="image" /></h1>
		
				
			
		
                                
                
            <br/>
            <br/>
        
        <p>The ‘White Box: Eastern Adventures’ Hireling Generator is designed with PHP to randomly generate a list of 10 hirelings.  Five drop down menus appear on the Launch Page, providing the user with options for customizing the hirelings generated.  POST methods are used to collect the data from the drop down menus, where the data is sent to hirelings.php.  Wherever possible, external PHP files have been created to store related functions; thus, aiming to create a program with high cohesion and low coupling, an important principle of object-orientated design.  </p>    

        <br/>
        <br/>
            

            
		<form action="" id ="hirelingForm"  target="_blank" method="post">
            

                    <div class="content1b">
                
  

                
                    
                <span class="formIputDescription1b">Type:</span>	
			  <select id="hirelingType" name="theHirelingType" class="">	
				<option value="1" selected>Unskilled</option>
				<option value="2">Artisan</option>
				<option value="3">Academic</option>
				<option value="4">Soldier</option>
				<option value="5">Specialist</option>
			  </select>
    
                            
                <span class="formIputDescription1b">Name:</span>	
			  <select id="hirelingName" name="theHirelingName" class="">	
				<option value="1" selected>Full Name</option>
				<option value="2">Given Name</option>
				<option value="3">Blank</option>
			  </select>

                
                            
                <span class="formIputDescription1b">HP:</span>	
			  <select id="hitPoints" name="theHitPoints" class="">	
				<option value="1" selected>Random</option>
				<option value="2">Average</option>
				<option value="3">Max</option>
			  </select>
                        
                        <br/>
                        <br/>
                               
                <span class="formIputDescription1b">Sex:</span>	
			  <select id="hirelingSex" name="theHirelingSex" class="">	
				<option value="1" selected>Random</option>
				<option value="2">Male</option>
				<option value="3">Female</option>
				<option value="4">Blank</option>
			  </select>
                        
                <span class="formIputDescription1b">Personality/Traits:</span>	
			  <select id="personality" name="thePersonality" class="">	
				<option value="1" selected>Random</option>
				<option value="2">Blank</option>
			  </select>

        
            			  
			<div class="generatorButtonA2">
			
			     <span class="generatorbuttonsC1">

				
                    <input type="submit" value="" id="generate_characters2"/>
			     
                </span>
				
			     <span class="generatorbuttonsC1">
				
                     <input type="reset"  value="" id="reset_generator2"/>
		
				</span>
                
		
            </div>
            </div>
            
            
            </form>
            
            
            
                
                
                	
                <script>
        
                    $("#generate_characters2").click(function(){
         
    
                        $("#hirelingForm").attr('action', "hireling/hirelings.php");
    
                    });
                    
                </script>
        
                
    </section>


</body>
</html>