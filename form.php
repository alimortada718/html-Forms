<?php
/* session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
    header("location:index.php");
}
if(isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {
    echo("set");
}
*/
if(isset($_POST["submit"])) {

$fam = $_POST["fam"];
$password = $_POST ["password"];
echo("username: ").$fam;
echo("<br>");

echo("password:  ").$password ;


}

?>
<h2>you have logged in to the system bitch!</h2>