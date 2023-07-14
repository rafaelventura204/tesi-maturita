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
    <div id="form"> <!-- form -->
  	  <form action="Proprietario.php" method="post">
      	
        <label class="nomeform">
        		Nome 
        </label>
        <label for="name"></label>
            <input type="text" id="name" name="Nome">
                <br><br>

         <label class="nomeform">
        		Cognome
        </label>
        <label for="name"></label>
            <input type="text" id="cognome" name="Cognome">
                <br><br>

        <label class="nomeform">
        		Data di nascita
        </label>
        <label for="name"></label>
            <input type="date" id="data" name="DataNascita">
                <br><br>
                 
              <label class="nomeform">
        		Email
        </label>
        <label for="name"></label>
            <input type="text" id="Email" name="Email">
                <br><br>
                 

         <label class="nomeform">
        		Trattamento
        </label>
        <label for="name"></label>
            <input type="text" id="TipoTaglio" name="TipoTaglio">
                <br><br>
                 
              <label class="nomeform">
        		Ultima data
        </label>
        <label for="name"></label>
            <input type="date" id="data" name="UltimaData">
                <br><br>

         
              <input type="submit" value="Conferma">
              <input type="reset" value="Reset">
          
      </form> <!-- chiusura form -->
</div> <!-- chiusura div -->     
</div> <!--chiusura div immagine -->
</body>
</html>