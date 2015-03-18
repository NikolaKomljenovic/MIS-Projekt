<?php
	$target = "upload/";
	$target = $target . basename( $_FILES['uploaded']['name']) ; 
	$ok=1;
	
	//This is our size condition 
	if ($uploaded_size > 350000)
		{ 
	echo "Datoteka je prevelika.<br>";
	$ok=0;
	}
	
	//This is our limit file type condition
	if ($uploaded_type =="text/php") 
		{
	echo "No PHP files<br>";  
	$ok=0;  
	} 
	
	//Here we check that $ok was not set to 0 by an error  
	if ($ok==0)  
		{  
	echo "Došlo je do pogreške prilikom učitavanja datoteke!";  
	} 
	
	//If everything is ok we try to upload it 
	else  
	{
	if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target))  
	{
	echo "Datoteka ". basename( $_FILES['uploadedfile']['name']). " je učitana!";  
	} 
	else  
	{ 
	echo "Došlo je do pogreške prilikom učitavanja.";  
	}  
	}  
	?>
	
	
	
	
	
	