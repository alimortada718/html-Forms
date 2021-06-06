<?php

include "includes/data.php";

 if(isset($_POST["submit"])) {

$fam = $_POST["fam"];
$password = $_POST ["password"];

$username ="ali718";
$pw ="1";

if($fam == $username && $pw == $password){

    header("location:employeetracking.php");

}else{
    header("location:index.php?error='2'");

}

}

?>
<h2>you have logged in to the system bitch!</h2>