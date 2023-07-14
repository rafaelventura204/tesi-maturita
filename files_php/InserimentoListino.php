<!DOCTYPE html>
<html>
	<head>
	<title> InserimentoListino </title> 
	<link href="css/stile.css" rel="stylesheet" type="text/css"/>		
	</head>

    <body>
    <?php
include("db_con.php"); // Include il file di connessione al database
session_start();// aprire la sessione
    ?>
    <?php
       if($_SESSION["logged"] != ''){
        
        $form_taglio=$_POST["taglio"];
        $form_prezzo=$_POST["prezzo"];
        
        $query="INSERT INTO  Listino_Promozioni (taglio, prezzi) values('" . $form_taglio . "','" . $form_prezzo.  "')";
		$risultato=mysql_query($query) or die(mysql_error());
        echo "Inserimento inserito correttamente";
        header("Refresh: 2; url=" . "http://ralfbarbershop.altervista.org/ListinoPromozioni.php");
	} else {
    	echo "non sei connesso correttamente";
         header("Refresh: 2; url=" . "http://ralfbarbershop.altervista.org/ListinoPromozioni.php");
    }
      
        ?>
        
    	</body>
</html>
