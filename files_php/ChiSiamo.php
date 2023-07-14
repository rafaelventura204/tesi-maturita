<!DOCTYPE html>
<html>
  <?php
  session_start();// aprire la sessione
  ?>
  <head>
    <title>ChiSiamo</title>
    <meta name="description" content="Gestione Sito Parrucchieri">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/superslides.css">
    <link rel="stylesheet" href="css/pagine.css" >
    <link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>  
  </head>

  <body>
    	<!--div di sfondo -->
        	<div id="SfondoChiSiamo"> 
        	
    <header id="titoloPrincipale" class="alt">
      <h4> Chi Siamo</h4>
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
        </nav> <!-- chiusara nav menu ChiSiamo -->
        </div> <!--chiusura menu ChiSiamo -->
 
	
    <div id="TestoChiSiamo"> <!-- Testo menu chi siamo -->
    
      <p>Ralf's Barber Shop nasce a Milano nel 2000 grazie alla collaborazione di tre amici Massimiliano Dagri, Marco Carmini e Gianluca Ratt&#224;.<br/>
            <br/>Da allora inizia un percorso che li porta ad avere 25 saloni di propriet&#224; in costante aumento. L'espansione avviene anche grazie ai migliori collaboratori oggi soci Renato Chavez, Giancarlo Inche.<br/><br/>I centri sono rinomati per l'eccellenza nei parrucchieri, make-up ed istruzione.<br/>Ci&#242; che contraddistingue il marchio Ralf's BarBer Shop &#232; il taglio di precisione e la perfezione nella colorazione all'interno di saloni immersi nel benessere e nel lusso.<br /><br />Il gruppo, come da pronostici, riceve ormai da tempo riconoscimenti da tutto il mondo per il proprio stile e metodo di lavoro. La fedelt&#224; al marchio &#232; garantita anche grazie alle spiccate potenzialit&#224; dei saloni, ci&#242; significa per voi e per noi far parte di un unico grande progetto, nascere e crescere nello stile.
        <br/><br />Ogni cliente &#232; libero di rilassarsi con la consapevolezza che ogni stilista, colorista  ed assistente ha raggiunto l'eccellenza nel proprio settore attraverso il nostro metodo d'insegnamento.
        <br/><br />La filosofia &#232; di fornire perfezionismo in tutti i servizi offerti.<br />Fare in modo che il cliente si senta sempre a proprio agio e raggiunto dalla pi&#249; alta qualit&#224; nei servizi offerti. Tutto ci&#242; &#232; indispensabile per arricchirsi con un'esperienza unica ad ogni visita nei nostri saloni.<br> </p>
    
    </div> <!-- Chiusura testo ChiSiamo -->
    
    	<div id="imgLogo-barber-mind"> <!--div logo -->
       <img src="/imgLogo/ImmagineBarberSite.png" />
		</div> <!-- chiusura div logo -->

		</div> <!-- chiusura div sfondo -->
  </body>
  </html>