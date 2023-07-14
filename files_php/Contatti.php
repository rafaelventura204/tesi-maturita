<!DOCTYPE html>
<html>
  <?php
  session_start();// aprire la sessione
  ?>

  <head>
    <title>ChiSiamo</title>
    <meta name="description" content="Gestione Sito Parrucchieri">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/pagine.css" >
    <link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>  
    <script src="https://use.fontawesome.com/e958663004.js"></script> <!-- ICONS -->
  </head>

  <body>
    <div id="SfondoContatti"> <!-- SfondoContatti -->

      <header id="titoloPrincipale" class="alt">
        <h4> Contatti</h4>
      </header>

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
        </nav> <!-- chiusara nav menu Contatti -->
      </div> <!--chiusura menu Contatti -->

      <div id="testoContatti"> 
        <h2 style="font-size:30px;">Contatta il nostro salone</h2>
        <br>
        <p>Forti di un background unico, frutto di anni d esperienza, i professionisti, da sempre, pongono in primo piano la salute, il benessere e la bellezza dei capelli. Ogni formula delle linee professionali presente negli ateliers e stata testata dagli specialisti del Team di parucchieri garanzia d affidabilita, efficacia, qualita e flessibilita.</p>
        <br>
        <p>Il nostro staff e a vostra completa disposizione per fornirvi tutte le informazioni e le curiosita sul nostro salone di bellezza.

          Presso il nostro negozio potrete infatti richiedere acconciature speciali per eventi importanti come le vostre nozze o la vostra festa di laurea.</p>
        <br>
        <br>
        <h2 style="font-size:30px;">Chiamaci per fissare un appuntamento!</h2> 
        <br>
        <p>Per avere un preventivo dei nostri interventi, non esitate a contattarci al numero 02.1111111. Saremo felici di consigliarvi il tipo di acconciatura ideale per non passare inosservati in ogni occasione, dalle semplici serate mondane alle cerimonie piu importanti ed esclusive.</p>

        <br>

        <div id="button"> 
          <h4 style="color:#fff; font-size:25px;">Prenota... <a style="color:#fff;" href='Form.php'><i class="fa fa-scissors fa-2x" aria-hidden="true"></i></a>  </h4>
        </div> 

        <br>
        <br>
        <h2 style="font-size:30px;">Orari di apertura</h2>
        <br>
        <br>

        <p>MAR - MER - VEN - SAB: 9.00 - 18.30<br /> GIO: 9.00 - 20 .00<br /> LUN - DOM: <h style="color:#FF0000">chiuso</h> </p> 
      </div> <!-- chiusura div testo contatti -->      
      <h2 style="font-size:30px;"> Vieni a trovarci presso il centro di piazza Tito Lucrezio Caro 8 a Milano</h2>   
      <br>

      <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d732.5084866972086!2d12.73843!3d42.745334!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c408a3627611%3A0xd18e0c871432ca88!2sPiazza+Tito+Lucrezio+Caro%2C+8%2C+20136+Milano!5e0!3m2!1sit!2sit!4v1457082733132" width="0" height="0" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>   
    </div> <!-- Chiusura di sfondo -->     
  </body>
</html>