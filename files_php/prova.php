<!DOCTYPE html>
<html>
	<head>
	<title> AccessoEffettuato </title> 
	<link href="css/stile.css" rel="stylesheet" type="text/css"/>		
	</head>

    <body>
          <div id="spazio">
        <div id="Menu">
         <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="ChiSiamo.php">Chi Siamo</a></li>
              <li><a href="Style.php">Style</a></li>
              <li><a href="ListinoPromozioni.php">Listino e promozioni</a></li>
              <li><a href='Form.php'>Prenota</a></li>
              <li><a href="Contatti.php">Contatti</a></li>
                <ul style="float:right;list-style-type:none;">
                    <li><a href="accesso.php">Login</a></li>
               </ul>
        </ul>
             </div>
        </div>
    
<?php 
        echo "Ti sei loggato con successo";
        
 ?>

<button onclick="location.href='logout.php'">Logout</button> 
    
    </body>
</html>