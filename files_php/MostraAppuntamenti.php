<!DOCTYPE html>
<html> 
  <?php
  session_start();// aprire la sessione
  include("db_con.php"); // Include il file di connessione al database
  ?>
  <head>
    <title>MostraAppuntamenti</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="https://use.fontawesome.com/e958663004.js"></script> <!-- ICONS -->
    <meta name="description" content="Gestione Sito Parrucchieri">
    <link rel="stylesheet" href="css/pagine.css">
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

  </head>

  <body>
    <div id="sfondoImpostazioniAdmin"> 
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


      <div id="intestazione"> <!--div intestazione -->
        <h4> Lista appuntamenti: </h4>
      </div> <!--Chiusura div intestazione -->

      <style>
        #posizioneTable {
          padding: 30% 10%;

        }
        #posizioneTable a {
          color: #fff;	
        }
        table {
          border-collapse: collapse;
          text-align: center;
          color: #fff;
        }

        th {
          font-size: 21px;
          font-weight: 900;

        }

        th, td {
          text-align: left;
          padding: 30px; 

        }

      </style>

      <?php
      $query="select * from inserimento";
      $risultato=mysql_query($query) or die(mysql_error());
      $num=mysql_num_rows($risultato);
      ?>
      <!-- Contenuto -->    
      <!-- Paginazione -->
      <?php
      $record_selezionati=mysql_query($query);
      $numero_righe=mysql_num_rows($record_selezionati);
      ?>

      <!-- Contenuto -->    
      <?php
      if($numero_righe!=0) ?>
      <div id="posizioneTable"> <!-- apertura div posizione table -->
        <table> <!-- apertura table -->
          <?php
        echo "<table>";
      echo "<tr> <th>nome</th> <th>cognome</th> <th>telefono</th> <th>email</th> <th>data</th> <th>ora</th> <th>descrizione</th> </tr>";
      for($i=0;$i<$numero_righe;$i++){
        $riga=mysql_fetch_array($record_selezionati);
        $idCodice = $riga[id_codice];
        echo "<tr> <td>$riga[nome]</td> <td>$riga[cognome]</td> <td>$riga[telefono]</td> <td>$riga[email]</td> <td>$riga[data]</td> <td>$riga[ora]</td> <td>$riga[descrizione]</td> <td>$riga[UltimaData]</td> <td><a href='EliminaAppuntamento.php?id=$idCodice'><i class='fa fa-trash-o' aria-hidden='true'></i></a>  </td> </tr>";
      }
          ?>

        </table> <!-- chiusura table -->
      </div> <!--chiusura div posizione table -->
      <!--refresh-->
    </div>
  </body>
</html>