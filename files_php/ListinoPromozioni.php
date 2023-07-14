<!DOCTYPE html>
<html>
  <?php
  session_start();// aprire la sessione
  include("db_con.php"); // Include il file di connessione al database
  ?>
  <head>
    <title>Listino/promozioni</title>
    <meta name="description" content="Gestione Sito Parrucchieri">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="css/superslides.css">
    <link rel="stylesheet" href="css/pagine.css" >
    <script src="https://use.fontawesome.com/e958663004.js"></script> <!--ICONS -->
    <link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>  
  </head>

  <body>
    <div id="SfondoListinoPromozioni"> <!--Sfondo listino e promozioni -->

      <header id="titoloPrincipale" class="alt">
        	 <h4> Listino e promozioni</h4>
              <br>
               <?php if ($_SESSION['Cliente/Admin'] == true){ ?>
            <p style="color:#fff; font-size:23px;"> Aggiungi prezzo: 
            	<a style="color:#fff;" href='FormListinoPromozioni.php'><i class='fa fa-plus' aria-hidden='true'></i> </a>
                </p>
                <?php } ?>
                <br>
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
        </nav> <!-- chiusara nav menu -->
      </div> <!--chiusura menu -->

      <style>
        #posizioneTable {
          padding: 28% 25%;

        }
        table {
          border-collapse: collapse;
          width: 50vw;
          text-align: center;
        }

        th, td {
          text-align: left;
          padding: 20px; 
          color: #fff;
        }
        tr {
          font-size: 20px;
        }


        tr:nth-child(even){background-color: none}
		
      </style>

      <div id="posizioneTable">
              <?php
        $query="select * from Listino_Promozioni";
        $risultato=mysql_query($query) or die(mysql_error());
        $num=mysql_num_rows($risultato);
     
        ?>

        <table> <!-- apertura table -->
         
          <?php
          	
          echo "<table>";
          echo "<tr> <th>Taglio</th> <th>Prezzi</th> </tr>";
		while($row = mysql_fetch_array($risultato)) { 
         $idListino = $row[id_listino];
         	if ($_SESSION['Cliente/Admin'] == true){
          echo "<tr> <td> $row[Taglio]</td> <td> $row[Prezzi] &#8364;</td> <td><a style='color:#fff;' href='eliminaListino.php?id=$idListino'><i class='fa fa-trash-o' aria-hidden='true'></i></a> &nbsp;<a style='color:#fff;' href='FormModificaListino.php'><i class='fa fa-wrench' aria-hidden='true'></i> </a> </td> </tr>";
			
            }else {
            echo "<tr> <td> $row[Taglio]</td> <td> $row[Prezzi] &#8364;</td> </tr> ";
            }
                
         } 
         ?>

        </table> <!-- chiusura table -->
      </div>
    </div> <!--fine sfondo listino e promozioni -->

  </body>
</html>	