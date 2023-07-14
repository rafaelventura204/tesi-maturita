<!DOCTYPE html>
<html>
<?php
  session_start();// aprire la sessione
  echo $_SESSION["logged"];
  echo $_SESSION['Cliente/Admin'];
  echo $_SESSION['name']; 
  ?>
    <head>
        <title>InserimentoListino</title>
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
      
      <form action="InserimentoListino.php" method="post">
        <label class="nomeform">
        		Taglio 
        	</label>
        <label for="taglio"></label>
            <input type="text" id="taglio" name="taglio">
                <br><br>
		
         <label class="nomeform">
        		Prezzo
       	 	</label>
        <label for="prezzo"></label>
            <input type="text" id="prezzo" name="prezzo">
                    <br><br>
                    
              <input type="submit" value="Conferma">
              <input type="reset" value="Reset">
     	 </form> <!-- Chiusura Form -->
        </div> <!-- Chiusura Div contenente form -->