<?php
session_start();
$_SESSION = array();
session_destroy(); //distruggo tutte le sessioni
//ritorno a index.php usando GET posso recuperare e stampare a schermo il messaggio di avvenuto logout
header("Refresh:1; url=" . "http://ralfbarbershop.altervista.org/index.php#1");
exit();
?>