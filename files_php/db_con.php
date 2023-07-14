<?php
	$host="localhost";
	$utente="root";
	$password="";
	$nome_db="my_ralfbarbershop";
	$conn=mysql_connect($host,$utente,$password) or die(mysql_error());
	mysql_select_db($nome_db);
    ?>