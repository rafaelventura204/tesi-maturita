
<!--<html>

    <head>
        <title>FormEliminaCliente</title>
            <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="description" content="Gestione Sito Parrucchieri">
        <link rel="stylesheet" href="Sito.css">
    </head>
    <body>
       
        
        <div id="Menu">
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
             <ul style="float:right;list-style-type:none;">
                    <li><a href="logout.php">Logout</a></li>
               </ul>
              <?php } 
              else{ ?>
               <ul style="float:right;list-style-type:none;">
                    <li><a href="accesso.php">Login</a></li>
               </ul>
              <?php }
              ?>  
            </ul>
     </div>
     

     <div id="form">
      <form action="EliminaCliente.php" method="post">
        <label for="name">Nome</label>
            <input type="text" id="name" name="Nome">
                <br></br>

        <label for="cognome">Cognome</label>
            <input type="text" id="Cognome" name="Cognome">
                    <br></br>

                 
                  <label for="data">UltimaData</label>
                     <input type="date" name="UltimaData" id="data">
                     <br></br>

              <input type="submit" value="Elimina">
              <input type="reset" value="Reset">
          
      </form>
    </body>
</html>   -->