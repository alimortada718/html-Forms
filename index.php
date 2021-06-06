<?php
session_start();
$username ="user";
$password="password";
if(isset($_SESSION['loggedin']) && $_SESSION['logged_in'] == true) { 
    header("location:form.php");
}

if (isset($_post['username']) && isset($_POST['password'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password)

{
    $_SESSION['loggedin'] = true;
    header("location:form.php");

}

}

?>

<!DOCTYPE HTML>
<html>
<header>
    <link rel="stylesheet" href="css/style.css">

</header>
<div class="body">

    <div class="backgroundimages">
        <div class="container">

            <div class="logo">
                <img src="images/finger.jpg" height="50px">
            </div>
            <form class="forms" action="form.php" method="post">
                <div>
                    <input type="text" id="fam" name="fam" placeholder="firstname">
                </div>
                <div>

                    <input type="password" name="password">
                </div>
                <div>

                    <input type="submit" name="submit" value="login">
                </div>
            </form>
            <a href="resetpw.php">Reset Password </a>
        </div>
    </div>
    <?php 

if(isset($_GET["error"])){



    echo("<div class='try'>
    <h1 style='color:powderblue;'>try again</h1>
    </div>");
} 


?>

</div>

</html>