<!DOCTYPE html>
<html>

  <!-- aprire la sessione -->
  <?php
  session_start();
  ?>

  <head>
    <title>FormModificaCliente</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/pagine.css">
    <link rel="stylesheet" href="css/Sito.css">
    <meta name="description" content="Gestione Sito Parrucchieri">
  </head>

  <div id="sfondoform"> 

    <body>

      <div id="Menu"> <!--div menu chi siamo -->
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
        <form action="ModificaClienti.php" method="post">

          <label class="nomeform">
            Nome 
          </label>
          <label for="name"></label>
          <input type="text" id="name" name="Nome">
          <br><br>

          <label class="nomeform">
            Cognome 
          </label>
          <label for="cognome"></label>
          <input type="text" id="cognome" name="Cognome">
          <br><br>

          <label class="nomeform">
            DataNascita
          </label>
          <label for="data"></label>
          <input type="date" name="DataNascita" id="data">
          <br><br>
          
            <label class="nomeform">
           Email
          </label>
          <label for="email"></label>
          <input type="text" name="Email" id="data">
          <br><br>

          <label class="nomeform">
            Trattamento
          </label>
          <label for="descrizione"></label>
          <input type="text" name="TipoTaglio">
          <br><br>

          <label class="nomeform">
            UltimaData 
          </label>
          <label for="data"></label>
          <input type="date" name="UltimaData" id="data">
          <br><br>

          <input type="submit" value="Modifica">
          <input type="reset" value="Reset">


        </form>
      </div>
    </body>
    </html> 