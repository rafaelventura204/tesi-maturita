<!DOCTYPE html>
<html> 
  <?php
  session_start();// aprire la sessione
  ?>
  <head>
    <title>MostraClienti</title>
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
    	
    <style>
      #posizioneTable {
        padding: 28% 23%;
 
      }
      #posizioneTable a {
      	color: #fff;	
      }
      table {
        border-collapse: collapse;
        text-align: center;
        color: #fff;
      }

      th, td {
        text-align: left;
        padding: 25px; 
      }
  
    </style>

    <?php
     include("db_con.php"); // Include il file di connessione al database
 	$form_Nome=$_POST["Nome"];
    $form_Cognome=$_POST["Cognome"];
    $form_DataNascita=$_POST["DataNascita"];
    $form_TipoTaglio=$_POST["TipoTaglio"];
    $form_UltimaData=$_POST["UltimaData"];
    
    $query = "select Nome, Cognome, DataNascita, TipoTaglio, UltimaData from proprietario where Cognome like '%" .$form_Cognome. "%' OR Nome like '%" .$form_Nome. "%' ";
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
    echo "<tr> <th>Nome</th> <th>Cognome</th> <th>DataNascita</th> <th>Trattamento</th> <th>UltimaData</th> </tr>";
    for($i=0;$i<$numero_righe;$i++){
      $riga=mysql_fetch_array($record_selezionati);
      $idCliente = $riga[id_contatore];
      echo "<tr> <td>$riga[Nome]</td><td>$riga[Cognome]</td><td>$riga[DataNascita]</td> <td>$riga[TipoTaglio]</td> <td>$riga[UltimaData]</td> <td>&nbsp;<a href='FormModificaCliente.php'><i class='fa fa-wrench' aria-hidden='true'></i></a> &nbsp;<a href='EliminaCliente.php?id=$idCliente'><i class='fa fa-trash-o' aria-hidden='true'></i></a>  </td> </tr>";
    }
        ?>

      </table> <!-- chiusura table -->
    </div> <!--chiusura div posizione table -->
		</div>
  </body>
</html>
