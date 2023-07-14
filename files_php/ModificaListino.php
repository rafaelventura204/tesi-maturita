    <?php
include("db_con.php"); // Include il file di connessione al database
 ?>   
   <?php     
         $form_Taglio=$_POST["Taglio"];
         $form_Prezzi=$_POST["Prezzi"];
        
    	 echo  $form_Taglio. "," .$form_Prezzi;
   
  
    $query="UPDATE Listino_Promozioni SET Prezzi='$form_Prezzi' WHERE Taglio='$form_Taglio'";
      $risultato=mysql_query($query) or die(mysql_error());
                                                                                       
    ?>
        
        <?php
        
        echo "Modifica listino effettuata correttamente";
         header("Refresh: 2; url=" . "http://ralfbarbershop.altervista.org/FormModificaListino.php");

        ?>