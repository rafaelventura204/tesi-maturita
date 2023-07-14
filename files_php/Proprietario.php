    <?php
	include("db_con.php"); // Include il file di connessione al database
    ?>
   
        <?php 
        $form_Nome=$_POST["Nome"];
        $form_Cognome=$_POST["Cognome"];
		$form_DataNascita=$_POST["DataNascita"];
        $form_Email=$_POST["Email"];
		$form_TipoTaglio=$_POST["TipoTaglio"];
        $form_UltimaData=$_POST["UltimaData"];
        $query="INSERT INTO  proprietario (Nome, Cognome, DataNascita,Email, TipoTaglio, UltimaData) values('" . $form_Nome . "','" . $form_Cognome . "' , '" .$form_DataNascita. "','" .$form_Email. "','" .$form_TipoTaglio. "','" .$form_UltimaData. "')";
		$risultato=mysql_query($query) or die(mysql_error());
     
        header("Refresh: 1; url=" . "http://ralfbarbershop.altervista.org/FormProprietario.php");
		?>