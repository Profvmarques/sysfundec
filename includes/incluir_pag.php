<?php
	 if ($_GET["pg"]=="") {
	 
		include "view/ocorrencias/ocorrencias.php";
					
		 }else{
			 		
		
		include $_GET["pg"];		
						
	 }	
?>