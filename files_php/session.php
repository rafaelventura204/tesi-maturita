<?php
 Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <title>Accesso</title>
        <meta name="description" content="Gestione Sito Parrucchieri">

<body>
<?php
 Set session variables
$_SESSION["login_user"] = "$username";

echo $_SESSION['login_user'];
?>

    </body>
</html>



<?php
include("db_con.php");
session_start();// Starting Session
Storing Session
$user_check=$_SESSION['login_user'];
SQL Query To Fetch Complete Information Of User
$ses_sql=mysql_query("select username from login where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location: accesso.php'); // Redirecting To Home Page
}
?>
