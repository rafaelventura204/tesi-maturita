<?php
include("db_con.php"); // Include il file di connessione al database
session_start();// aprire la sessione
?>
<?php
if($_SESSION["logged"] != ''){

  $form_nome=$_POST["nome"];
  $form_cognome=$_POST["cognome"];
  $form_telefono=$_POST["telefono"];
  $form_email=$_POST["email"];
  $form_data=$_POST["data"];
  $form_ora=$_POST["ora"];
  $form_descrizione=$_POST["descrizione"];
  $query="INSERT INTO  inserimento (nome, cognome, telefono, email, data, ora, descrizione) values('" . $form_nome . "','" . $form_cognome . "' , '" . $form_telefono . "','"  . $form_email . "','" .$form_data. "','" .$form_ora. "','" .$form_descrizione. "')";
  $risultato=mysql_query($query) or die(mysql_error());
  header("Refresh: 1; url=" . "http://ralfbarbershop.altervista.org/Form.php");
}
?>