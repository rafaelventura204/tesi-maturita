<?php
include("db_con.php"); // Include il file di connessione al database
?>

<?php
$id=$_GET["id"];


$query = "DELETE FROM proprietario WHERE id_contatore = '".$id."' ";
$risultato= mysql_query($query) or die(mysql_error());
//$num=mysql_num_rows($risultato);
if (mysql_query($query) or die (mysql_error())){ 
  header("Refresh: 1; url=" . "http://ralfbarbershop.altervista.org/MostraClienti.php");
}
?>