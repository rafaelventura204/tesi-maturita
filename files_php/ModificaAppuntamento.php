<!DOCTYPE html>
<html>
	<head>
	<title>ModificaAppuntamento</title> 
	<link href="css/stile.css" rel="stylesheet" type="text/css"/>		
	</head>

    <body>
    <?php
include("db_con.php"); // Include il file di connessione al database
 ?>   
   <?php     
         $form_Cognome=$_POST["Cognome"];
         $form_Data=$_POST["Data"];
         $form_Ora=$_POST["Ora"];
		 $form_Descrizione=$_POST["Descrizione"];
    
        $query="UPDATE inserimento SET Data='$form_Data', TipoTaglio='$form_Ora', Descrizione='$form_Descrizione', WHERE Cognome='$form_Cognome'";
	    $risultato=mysql_query($query) or die(mysql_error());                                                                                       
    ?>
        
        <?php
        
        
        echo "Modifica appuntamento effettuato correttamente";

        ?>