<?php

$cmd = $_REQUEST['cmd'];

switch($cmd){
  case "write":
            $first_name= $_REQUEST['first_name'];
			$last_name= $_REQUEST['last_name'];
             
			$fp = fopen("test.txt","w");
			fwrite($fp, $first_name." \n".$last_name);
			fclose($fp);
		    include("form.php");		
  
     break;
	 
	 case "read":
	        $fp = fopen("test.txt","r");
			$data = fread($fp,filesize("test.txt")); 
			fclose($fp);
	        
			echo $data;
	        
			break;
	 
	 default:
	    include("form.php");	
}


?>