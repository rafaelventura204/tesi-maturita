<!DOCTYPE html> 
<?php
session_start();// aprire la sessione
?>

<html>	
  <head>
    <meta name="description" content="Gestione Sito Parrucchieri">
    <link href="css/form_style.css" rel='stylesheet' type='text/css' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Cool Login Form Tab Form,Login Forms,Sign up Forms,Registration Forms,News letter Forms,Elements"./>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <script src="js_form/jquery.min.js"></script>
    <script src="js_form/easyResponsiveTabs.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(document).ready(function () {
        $('#horizontalTab').easyResponsiveTabs({
          type: 'default', //Types: default, vertical, accordion           
          width: 'auto', //auto or any width like 600px
          fit: true   // 100% fit in a container
        });
      });
    </script>
    <link href='//fonts.googleapis.com/css?family=Quicksand:400,300,700' rel='stylesheet' type='text/css'>

  </head>

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

    <div class="wrap">
      <h1> <img style="text-align:left;"src="/imgLogo/BarberLogo.png" width="30" /> ACCESSO  <img style="text-align:left;"src="/imgLogo/BarberLogo.png" width="30" /> </h1>
      <div class="main-content">
        <div class="sap_tabs">	

          <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">

            <ul>
              <li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Login</span></li>
              <li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>create account</span></li>

            </ul>		
            <!---->

            <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
              <div class="register">
                <form method="post" action="login.php">										
                  <input name="username" placeholder="Your ID" class="mail" type="text" required="">									
                  <input name="password" placeholder="Password" class="lock" type="password" required="">				
                  <input type="submit" value="Login"/>
                </form>
                <!--<p>Forgot Your ID or Password?<a href="#"> Click here</a></p> -->
              </div>
            </div>	

            <div class="tab-2 resp-tab-content" aria-labelledby="tab_item-1">
              <div class="register">
                <form method="post" action="registration.php">	
                  <input name="username_reg"placeholder="Name" type="text" required="">
                  <input name="password_reg"placeholder="Password" type="password" required="">	
                  <input name="email_reg"placeholder="Email Address" type="text" required="">	
                  <div class="sign-up">
                    <input type="submit" value="Create Account"/>
                  </div>
                </form>
              </div>
            </div> 	        					            	      

          </div>	
        </div>
      </div>
    </div>
  </body>
</html>