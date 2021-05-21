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

$username ="ali718";
$pw ="1";

if($fam == $username && $pw == $password){

    header("location:content.php");


}else{
    header("location:index.php");


}



}

?>
<h2>you have logged in to the system bitch!</h2>