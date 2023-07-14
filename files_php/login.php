<?php
session_start();// aprire la sessione
include("db_con.php"); // Include il file di connessione al database
$name = $_POST['username'];
$password = $_POST['password'];

$check = mysql_query("SELECT * FROM users WHERE Username ='".$name."'");

$numrows = mysql_num_rows($check);

$i = 0;
if ($numrows == 0) {
  echo "Username e/o password errati";
  echo"user";
} else {
  while($row = mysql_fetch_assoc($check)) {
    if ($password != $row['Password']) {

      echo "Username e/o password errati";
      header("Refresh: 2; url=" . "http://ralfbarbershop.altervista.org/accesso.php");

    } else {
      $_SESSION['logged'] = $row["id"];
      $_SESSION['name'] = $row["Username"];
      header("Refresh: 1; url=" . "http://ralfbarbershop.altervista.org/index.php#1");
      if($row["Amministratore"]== 1){
        header("Refresh: 1; url=" . "http://ralfbarbershop.altervista.org/index.php#1");
        $_SESSION['Cliente/Admin'] = $row["Amministratore"];
        header("Refresh: 1; url=" . "http://ralfbarbershop.altervista.org/index.php#1");
      }

    }
  }
}

?>