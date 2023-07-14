<!DOCTYPE html>
<html>
  <?php
  session_start();// aprire la sessione
  ?>
  <head>
    <title>GestioneSito</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Gestione Sito Parrucchieri">
    <script src="https://use.fontawesome.com/e958663004.js"></script> <!--ICONS -->
    <link rel="stylesheet" href="css/pagine.css">
  </head>
  <body>
    <div id="sfondoform"> <!-- div sfondo -->
      <div id="Menu1"> <!--div menu chi siamo -->
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



      <!--<button onclick="location.href='MostraAppuntamenti.php'">MostraAppuntamenti</button> 
<br> <br>


<div id="button"> 
<button onclick="location.href='MostraClienti.php'">MostraClienti</button> 
</div> <br> <br>

<div id="button"> 
<button onclick="location.href='FormProprietario.php'">InserisciCliente</button> 
</div> <br><br>


<div id="button">
<button onclick="location.href='FormEliminaCliente.php'"> FormEliminaCliente </button>
</div> <br> <br>

<div id="button">
<button onclick="location.href='FormEliminaAppuntamento.php'"> FormEliminaAppuntamento </button>
</div> <br> <br>

<div id="button">
<button onclick="location.href='FormCerca.php'"> FormCercaCliente </button>
</div> <br> <br>

<div id="button">
<button onclick="location.href='FormModificaCliente.php'"> FormModificaCliente </button>
</div> <br> <br> -->

      <div id="posizioneTable">
        <table>
          <tr>
            <th>Appuntamenti</th>
            <th>Clienti</th>
          </tr>

          <tr>
            <td>MostraAppuntamento <a href='MostraAppuntamenti.php'> <i class="fa fa-eye" aria-hidden="true"></i></a>  </td>
            <td>MostraClienti <a href='MostraClienti.php'> <i class="fa fa-eye" aria-hidden="true"></i></a> </td>
          </tr>
        </table>
      </div>
      <style>
        #posizioneTable {
          padding: 17% 25%;

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
          font-size: 30px;
        }


        tr:nth-child(even){background-color: none}

      </style>




    </div> <!--chiusura div immagine -->
  </body>
</html>