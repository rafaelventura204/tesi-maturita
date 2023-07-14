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
      
	<?php 
    	if($_SESSION["logged"] != ''){
      ?>
      
<div id="form">
      <form action="appuntamento.php" method="post">
        <label class="nomeform">
        		Nome 
        <span class="asteriscoform">*</span>
        </label>
        <label for="name"></label>
            <input type="text" id="name" name="nome">
                <br><br>
		
         <label class="nomeform">
        		Cognome 
        <span class="asteriscoform">*</span>
        </label>
        <label for="cognome"></label>
            <input type="text" id="cognome" name="cognome">
                    <br><br>

		 <label class="nomeform">
        		Telefono
        <span class="asteriscoform">*</span>
        </label>
        <label for="Telefono"></label>
            <input type="text" name="telefono" id="quantity">
                  <br><br>
	
     <label class="nomeform">
        		Email
        <span class="asteriscoform">*</span>
        </label>
        <label for="Email"></label>
           <input type="email" name="email" id="email">
                 <br><br>

		 <label class="nomeform">
        		Data 
        <span class="asteriscoform">*</span>
        </label>
         <label for="data"></label>
             <input type="date" name="data" id="data">
                 <br><br>

		<label class="nomeform">
        		Ora
        <span class="asteriscoform">*</span>
        </label>
          <label for="ora"></label>
              <input type="time" name="ora" >
                   <br><br>

			 <label class="nomeform">
        		Descrizione
        </label>
          <label for="descrizione"></label>
            <textarea rows="4" cols="50" name="descrizione" > </textarea>
               <br><br>
              
              <input type="submit" value="Conferma">
              <input type="reset" value="Reset">
     	 </form>
        </div>
            
         <?php } 
          else{ ?>
          	<div id="scrittaLoginForm"> 
          	<p> Non sei connesso al nostro sito, fai l'accesso per prenotare il tuo appuntamento. </p>
            	<p> Ti aspettiamo nei nostri saloni </p>
                    <a href='accesso.php'>Clicca qui e accedi</a>
                <?php } ?>
                </div> <!-- chiusura div scrittaLoginForm -->
</div> <!--chiusura div immagine -->
</body>
</html>