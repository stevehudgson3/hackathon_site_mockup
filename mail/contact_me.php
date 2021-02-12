<?php
// Check for empty fields
if(empty($_POST['name']))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = strip_tags(htmlspecialchars($_POST['name']));
	
return true;			
?>
