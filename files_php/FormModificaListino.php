<!DOCTYPE html>
<html>
<?php
  session_start();// aprire la sessione
  ?>
    <head>
        <title>Prenotazione</title>
            <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
			<meta name="description" content="Gestione Sito Parrucchieri">
        <link rel="stylesheet" href="css/pagine.css">
    </head>
    <body>
    <div id="sfondoform"> <!-- div sfondo -->
   <div id="Menu1"> <!--div menu chi siamo -->
      <nav class="main-nav">
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

          <li><a href="logout.php">Logout</a></li>

          <?php } 
          else{ ?>

          <li><a href="accesso.php">Login</a></li>

          <?php } ?>

        </ul>
      </nav> <!-- chiusara nav menu ChiSiamo -->
    </div> <!--chiusura menu ChiSiamo -->

<div id="form">
      <form action="ModificaListino.php" method="post">
        <label class="nomeform">
        		Tipo taglio 
        
        </label>
        <label for="name"></label>
            <input type="text" id="name" name="Taglio">
                <br><br>
		
         <label class="nomeform">
        		Prezzo
        
        </label>
        <label for="cognome"></label>
            <input type="text" id="cognome" name="Prezzi">
                    <br><br>
                    
              <input type="submit" value="Conferma">
              <input type="reset" value="Reset">
     	 </form>
        </div>
</div> <!--chiusura div immagine -->
</body>
</html>