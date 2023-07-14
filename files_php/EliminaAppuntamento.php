<?php
include("db_con.php"); // Include il file di connessione al database
?>

<?php

$id=$_GET["id"];

$query = "DELETE FROM inserimento WHERE id_codice = '".$id."' ";
$risultato= mysql_query($query) or die(mysql_error());

if (mysql_query($query) or die (mysql_error())){ 
	header("Refresh: 1; url=" . "http://ralfbarbershop.altervista.org/MostraAppuntamenti.php");
	} 
?>