<!DOCTYPE html>
<html>
<?php
session_start();// aprire la sessione
echo $_SESSION["logged"];
?>
    <head>
        <title>FormModificaAppuntamento</title>
            <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <meta name="description" content="Gestione Sito Parrucchieri">
        <link rel="stylesheet" href="Sito.css">
    </head>
    <body>
       
        
        <div id="Menu">
                 <ul>
                   <li><a href="index.php">Home</a></li>
              <li><a href="ChiSiamo.php">Chi Siamo</a></li>
              <li><a href="Style.php">Style</a></li>
              <li><a href="ListinoPromozioni.php">Listino e promozioni</a></li>
              <li><a href='Form.php'>Prenota</a></li>
              <li><a href="Contatti.php">Contatti</a></li>
                <?php
             if($_SESSION["logged"] != ''){
             ?>
             <ul style="float:right;list-style-type:none;">
                    <li><a href="logout.php">Logout</a></li>
               </ul>
              <?php } 
              else{ ?>
               <ul style="float:right;list-style-type:none;">
                    <li><a href="accesso.php">Login</a></li>
               </ul>
              <?php }
              ?>  
            </ul>
     </div>
     
              
          
        
     <div id="form">
       <form action="ModificaAppuntamento.php" method="post">
     
           <label for="Cognome">Cognome</label>
             <input type="text" name="Cognome" id="Cognome">
                 <br></br>
                 
          <label for="Data">Data</label>
             <input type="date" name="Data" id="Data">
                 <br></br>

          <label for="Ora">Ora</label>
              <input type="time" name="Ora" >
                   <br></br>

          <label for="Descrizione">Descrizione</label>
              <input type="text" name="Descrizione">
               <br></br>

              <input type="submit" value="ModificaAppuntamento">
              <input type="reset" value="Reset">
          
      </form>
    </body>
</html>