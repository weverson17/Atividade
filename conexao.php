<?php

	try{
		$pdo=new PDO("mysql:host=localhost;dbname=atividade","root","")	;
	}catch(PDOException $e){
		echo $e->getMessage() ;
	}
	
?>