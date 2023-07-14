<!DOCTYPE html>
<html>
  <head>
    <title>EliminaAppuntamento</title> 
    <link href="css/stile.css" rel="stylesheet" type="text/css"/>		
  </head>

  <body>
    <?php
    include("db_con.php"); // Include il file di connessione al database
    ?>

    <?php


    $id=$_GET["id"];
    echo $id;


    $query = "DELETE FROM Listino_Promozioni WHERE id_listino = '".$id."' ";
    $risultato= mysql_query($query) or die(mysql_error());
    //$num=mysql_num_rows($risultato);
    if (mysql_query($query) or die (mysql_error())){ 
      echo "Listino modificato con successo"; 
      header("Refresh: 2; url=" . "http://ralfbarbershop.altervista.org/ListinoPromozioni.php");
    } else{
      echo "Appuntamento non presente";
      header("Refresh: 2; url=" . "http://ralfbarbershop.altervista.org/ListinoPromozioni.php");
    }
    ?>