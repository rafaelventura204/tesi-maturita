<!DOCTYPE html>
<html> 
  <?php
  session_start();// aprire la sessione
  ?>
  <head>
    <title>Style</title>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css' >
    <meta name="description" content="Gestione Sito Parrucchieri">
    <link rel="stylesheet" href="css/pagine.css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!--  START  Nivo Slider -->
    <link rel="stylesheet" href="NivoSlider_files/stili/nivo-slider.css" type="text/css" media="screen" /> 
    <!--In style.css la regola #slider {} definisce l'aspetto dello slider per adattarlo alla nostra pagina. -->
    <link rel="stylesheet" href="NivoSlider_files/stili/style.css" type="text/css" media="screen" />
    <script type="text/javascript" src="NivoSlider_files/scripts/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="NivoSlider_files/scripts/jquery.nivo.slider.js"></script>

    <script type="text/javascript">

      $(window).load(function() {
        $('#slider').nivoSlider({
          effect:'random',
          pauseTime: 3000
        });
      });
    </script>
    <!--  END  Nivo Slider -->
  </head>

  <body>
    <div id="imgSfondoStyle"> 
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

      <!--  START  Nivo Slider -->
      <div class="secondo">

        <h4> Scegli il tuo stile </h4> 
        <br><br>

        <img src="/imgSfondo/imgSfondoStyleLogo2.png" height="268" width="190">

		<br><br>
        	<h4>da Ralf's Barber Shop è tutto possibile..</h4>
        <br><br>

        <div id="slider" class="nivoSlider">
          <img src="imgStyle/imgStyle8.jpg" alt="" />
          <img src="imgStyle/imgStyle7.jpg" alt="" />
          <img src="imgStyle/imgStyle6.jpg" alt="" />
          <img src="imgStyle/imgStyle4.jpg" alt="" />
          <img src="imgStyle/imgStyle3.jpg" alt="" />
          <img src="imgStyle/imgStyle2.jpg" alt="" />
          <img src="imgStyle/imgStyle1.jpg" alt="" />
        </div>
      </div>

      <!--  END  Nivo Slider -->

    </div> <!--chiusura div immagine sfondo -->
  </body>
</html>