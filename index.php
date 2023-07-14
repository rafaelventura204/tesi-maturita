<!DOCTYPE html>
<html>

  <?php
  session_start();// aprire la sessione
  ?>

  <head>

    <title>Ralf's Barber Shop</title>
    <meta name="description" content="Gestione Sito Parrucchieri">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="css/Sito.css">
    <link rel="stylesheet" href="css/superslides.css">
    <link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
    <script src="https://use.fontawesome.com/e958663004.js"></script> <!-- ICONS -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="javascripts/jquery.easing.1.3.js"></script> 
    <script src="javascripts/jquery.animate-enhanced.min.js"></script> 
    <script src="javascripts/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>

    <script>
      $(function() {
        $('#slides').superslides({
          hashchange: true,
          play: 5000
        });
      });
    </script> 

  </head>

  <body>

    <div class="container"> <!-- container page -->
      <div class="pagina" id="containerHome"> <!-- container home, prima pagina -->

        <header id="titolo" class="alt">

          <h1> <a href="index.php"></a>Ralf's</h1> 
          
          <img src="/imgSfondo/imgindex.png"  width="200" height="200" >
          
          <h1> <img style="text-align:left;"src="/imgLogo/BarberLogo.png" width="30" />  Barber Shop <img style="text-align:left;"src="/imgLogo/BarberLogo.png" width="30" /> </h1>

          <?php if ($_SESSION['Cliente/Admin'] == true){ ?>
          <div id="posizioneGestisci">
            <br>
            <a style="color:#fff;" href='GestioneSito.php'> <i class="fa fa-cogs  fa-3x" aria-hidden="true"></i> </a>
          </div>
          <?php } else { ?>
          		<img src= /imgLogo/BarberLogo2.png  width="120"/>
         <?php } ?>

        </header>

        <!-- scroll image background -->
        <div id="slides"> <!--div slideshow -->
          <div class="slides-container">
            <img src="imgSfondo/imgSfondo2.jpg" width="1024" height="683" >
            <img src="imgSfondo/imgSfondo3.jpg" width="1024" height="685" >
          </div>
        </div> <!-- chiusura div slide show-->

        <!-- fine scroll background -->

        <nav class="main-nav">
          <ul>
            <li><a href="files_php/index.php">Home</a></li>
            <li><a href="files_php/ChiSiamo.php">Chi Siamo</a></li>
            <li><a href="files_php/Style.php">Style</a></li>
            <li><a href="files_php/ListinoPromozioni.php">Listino e promozioni</a></li>
            <li><a href='files_php/Form.php'>Prenota</a></li>
            <li><a href="files_php/Contatti.php">Contatti</a></li>

            <?php
            if($_SESSION["logged"] != ''){
            ?>

            <li><a href="logout.php">Logout</a></li>

            <?php } 
            else{ ?>

            <li><a href="accesso.php">Login</a></li>

            <?php } ?>

          </ul>
        </nav> <!-- chiusara nav menu -->
       
      </div> <!-- chiusura container home -->

      <div id="containerChiSiamo">   <!-- div container chi siamo -->

        <h4>  Chi Siamo</h4> 
    
        <br><br><br><br><br><br>

        <div id="anteprima"> 
          <p>Ralf's Barber Shop nasce a Milano nel 2000 grazie alla collaborazione di tre amici Massimiliano Dagri, Marco Carmini e Gianluca Ratt&#224;.<br/>
            <br/>Da allora inizia un percorso che li porta ad avere 25 saloni di propriet&#224; in costante aumento. L'espansione avviene anche grazie ai migliori collaboratori oggi soci Renato Chavez, Giancarlo Inche.<br/><br/>I centri sono rinomati per l'eccellenza nei parrucchieri, make-up ed istruzione.<br/>Ci&#242; che contraddistingue il marchio Ralf's</p> 
        </div>

        <!-- script continua a leggere, collegamento all'altra pagina chi siamo -->
        <script type="text/javascript">
          var salva = document.getElementById("anteprima").innerHTML;
          document.getElementById("anteprima").innerHTML = salva.substring(0, 500) + " ..." + " <a href='http://ralfbarbershop.altervista.org/ChiSiamo.php'>Leggi tutto</a>";
          function continua()
          {
            document.getElementById("anteprima").innerHTML = salva;
          }
        </script> <!--chiusura script continua a leggere -->

        <br><br>

        <div id="imgLogo-barber-mind"> <!--div logo -->
          <img src="/imgLogo/ImmagineBarberSite.png" />
        </div> <!-- chiusura div logo -->

      </div> <!-- chiusura container chi siamo -->

      <div id="containerContatti" > <!-- div container contatti -->

        <h4>Contattaci subito...</h4>

        <br><br><br><br><br><br>   <!-- SPAZIO -->

        <div id="anteprima1" >
          <h2 style="font-size:30px;" >Chiamaci per fissare un appuntamento!</h2> <br>
          <br>
          <p>Per avere un preventivo dei nostri interventi, non esitate a contattarci al numero 02.1111111. Saremo felici di consigliarvi il tipo di acconciatura ideale per non passare inosservati in ogni occasione, dalle semplici serate mondane alle cerimonie piu importanti ed esclusive.</p>
        </div>

        <!-- script continua a leggere, collegamento all'altra pagina chi siamo -->
        <script type="text/javascript">
          var salva1 = document.getElementById("anteprima1").innerHTML;
          document.getElementById("anteprima1").innerHTML = salva1.substring(0, 500) + " ..." + " <a href='http://ralfbarbershop.altervista.org/Contatti.php'>Scopri di pi&#249;</a>";
          function continua()
          {
            document.getElementById("anteprima").innerHTML = salva;
          }
        </script> <!--chiusura script continua a leggere -->

        <br><br><br>

        <h2 style="font-size:30px;">...oppure prenota online</h2>
        <br> 

        <div id="button"> 
          <h4 style="color:#fff; font-size:35px;">Prenota... <a style="color:#fff;" href='Form.php'><i class="fa fa-scissors fa-2x" aria-hidden="true"></i></a>  </h4>
        </div> 

        <br><br><br>

        <h2 style="font-size:30px;">Orari di apertura</h2> 

        <br>

        <p>MAR - MER - VEN - SAB: 9.00 - 18.30<br/> GIO: 9.00 - 20 .00<br/> LUN - DOM: <h style="color:#FF0000">chiuso </h> </p>   

        <br><br><br><br>
        
        	<!--Social -->
        	<h2 style="font-size:30px;">Seguici sui nostri social</h2>
            <a href="https://www.facebook.com">	<i class="fa fa-facebook-official" aria-hidden="true"></i></a> &nbsp; <a href="https://twitter.com/login"> <i class="fa fa-twitter" aria-hidden="true"></i></a> &nbsp; <a href="https://www.instagram.com/"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
			<!-- chiusura Social -->
            
			<br><br><br><br><br><br>
            
        <div id="position-logo">
          <p> Ralf's Barber Shop </p>
          <img src="/imgLogo/img-baffi-logo.png" />
          <p> ti aspetta </p>
        </div>

      </div> <!-- chiusura container Contatti -->

    </div> <!-- Chiusura tutto container -->

  </body>
</html>