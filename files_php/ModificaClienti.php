    <?php
include("db_con.php"); // Include il file di connessione al database
 ?>   
   <?php     
         $form_Cognome=$_POST["Nome"];
         $form_Cognome=$_POST["Cognome"];
         $form_DataNascita=$_POST["DataNascita"];
         $form_Email=$_POST["Email"];
         $form_TipoTaglio=$_POST["TipoTaglio"];
         $form_UltimaData=$_POST["UltimaData"];
         $form_Email=$_POST["Email"];
   
   if( ($form_UltimaData) != ''){
      $query="UPDATE proprietario SET UltimaData='$form_UltimaData' WHERE Cognome='$form_Cognome'";
      $risultato=mysql_query($query) or die(mysql_error());
    }
    if( ($form_DataNascita) != ''){
      $query="UPDATE proprietario SET DataNascita='$form_DataNascita' WHERE Cognome='$form_Cognome'";
      $risultato=mysql_query($query) or die(mysql_error());
    }
    if( ( $form_Email) != ''){
      $query="UPDATE proprietario SET Email='$form_Email' WHERE Cognome='$form_Cognome'";
      $risultato=mysql_query($query) or die(mysql_error());
    }
    if( ($form_TipoTaglio) != ''){
      $query="UPDATE proprietario SET TipoTaglio='$form_TipoTaglio' WHERE Cognome='$form_Cognome'";
      $risultato=mysql_query($query) or die(mysql_error());
    }
   // $query="UPDATE proprietario SET TipoTaglio='$form_TipoTaglio' WHERE Cognome='$form_Cognome'";
     // $risultato=mysql_query($query) or die(mysql_error());
          
          header("Refresh: 1; url=" . "http://ralfbarbershop.altervista.org/MostraClienti.php");
    ?>