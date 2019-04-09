<?php
/*
	$nom=$_POST['txt_nombre'];
	$pass=$_POST['txt_pass'];

	
	if(($nom=="byron")&&($pass=="123")){
		
	header("Location: ../PAGINAS/autos.html");
	}
	else{
		echo "ERROR";
	}
	
*/
	//LOGIN CON UN SWITCH Y REDIRECCIONAR A VARIAS PAGINAS 
	
	$nom=$_POST['txt_nombre'];
	$pass=$_POST['txt_pass'];
	echo "<br/>";
	switch(true)
	{
		case $nom=="Byron" && $pass=="123": 
		header("Location: ../PAGINAS/autos.html");
		break;
		case $nom=="Juan"&&$pass=="456": 
		echo "BIENVENIDO JUAN";
		break;
		case $nom=="Anita"&&$pass=="789": 
		echo "BIENVENIDO ANITA";
		break;
		default: 
		echo "ESTE USUARIO NO ES PARTE DEL SISTEMA";
		break;
	}


	
	        

?>