<?php




if(isset($_POST["submit"])) {

    $shelf1 = $_POST["shelf1"];
    $shelf2 = $_POST["shelf2"];
    $shelf3 = $_POST["shelf3"];
    $shelf4 = $_POST["shelf4"];
    $shelf5 = $_POST["shelf5"];
    $shelf6 = $_POST["shelf6"];




    $carton1 = $_POST["carton1"];
    $carton2 = $_POST["carton2"];
    $carton3 = $_POST["carton3"];
    $carton4 = $_POST["carton4"];
    $carton5 = $_POST["carton5"];
    $carton6 = $_POST["carton6"];

    $chew1 = $_POST["chew1"];
    $chew2 = $_POST["chew2"];
    $chew3 = $_POST["chew3"];
    $chew4 = $_POST["chew4"];
    $chew5 = $_POST["chew5"];
    $chew6 = $_POST["chew6"];



    $scratch1 = $_POST["scratch1"];
    $scratch2 = $_POST["scratch2"];
    $scratch3 = $_POST["scratch3"];
    $scratch4 = $_POST["scratch4"];
    $scratch5 = $_POST["scratch5"];
    $scratch6 = $_POST["scratch6"];



    $scratch7 = $_POST["scratch7"];
    $scratch8 = $_POST["scratch8"];
    $scratch9 = $_POST["scratch9"];
    $scratch10 = $_POST["scratch10"];
    $scratch11 = $_POST["scratch11"];
    $scratch12 = $_POST["scratch12"];





    $endday1 = $_POST["endday1"];
    $endday2 = $_POST["endday2"];
    $endday3 = $_POST["endday3"];
    $endday4 = $_POST["endday4"];
    $endday5 = $_POST["endday5"];
    $endday6 = $_POST["endday6"];





    echo($scratch1)."</br>";
    echo($scratch2)."</br>";
    echo($scratch3)."</br>";
    echo($scratch4)."</br>";
    echo($scratch5)."</br>";
    echo($scratch6)."</br>";

    echo($carton1)."</br>";
    echo($carton2)."</br>";
    echo($carton3)."</br>";
    echo($carton4)."</br>";
    echo($carton5)."</br>";
    echo($carton6)."</br>";


    echo($chew1)."</br>";
    echo($chew2)."</br>";
    echo($chew3)."</br>";
    echo($chew4)."</br>";
    echo($chew5)."</br>";
    echo($chew6)."</br>";

    echo($scratch1)."</br>";
    echo($scratch2)."</br>";
    echo($scratch3)."</br>";
    echo($scratch4)."</br>";
    echo($scratch5)."</br>";
    echo($scratch6)."</br>";

    echo($scratch7)."</br>";
    echo($scratch8)."</br>";
    echo($scratch9)."</br>";
    echo($scratch10)."</br>";
    echo($scratch11)."</br>";
    echo($scratch12)."</br>";

    echo($endday1)."</br>";
    echo($endday2)."</br>";
    echo($endday3)."</br>";
    echo($endday4)."</br>";
    echo($endday5)."</br>";
    echo($endday6)."</br>";








} 
   
    
?>

<!DOCTYPE HTML>
<html>

<head>
    <link rel="stylesheet" href="css/style.css">

</head>
<div class="employeetracking">

    <div class="container">

        <div class="logo">
            <img src="images/LOGO.PNG" height="150px">
        </div>

        <form class="forms" action="#" method="post">
            <div class="column">
                <div>
                    <h3 style="background-color:powderblue;">shelf</h3>
                    <input size="10" type="text" id="shelf1" name="shelf1" placeholder="shelf 1">
                </div>
                <div>
                    <input size="10" type="text" id="shelf2" name="shelf2" placeholder="shelf 2">
                </div>
                <div>
                    <input size="10" type="text" id="shelf3" name="shelf3" placeholder="shelf 3">
                </div>
                <div>
                    <input size="10" type="text" id="shelf4" name="shelf4" placeholder="shelf 4">
                </div>
                <div>
                    <input size="10" type="text" id="shelf5" name="shelf5" placeholder="shelf 5">
                </div>
                <div>
                    <input size="10" type="text" id="shelf6" name="shelf6" placeholder="shelf 6">
                </div>
            </div>
            <div class="column">
                <h3 style="background-color:green;">chew</h3>
                <div>
                    <input size="10" type="text" id="chew1" name="chew1" placeholder="chew 1">
                </div>
                <div>
                    <input size="10" type="text" id="chew2" name="chew2" placeholder="chew 2">
                </div>
                <div>
                    <input size="10" type="text" id="chew3" name="chew3" placeholder="chew 3">
                </div>
                <div>
                    <input size="10" type="text" id="chew4" name="chew4" placeholder="chew 4">
                </div>
                <div>
                    <input size="10" type="text" id="chew5" name="chew5" placeholder="chew 5">
                </div>
                <div>
                    <input size="10" type="text" id="chew6" name="chew6" placeholder="chew 6">
                </div>
            </div>
            <div class="column">
                <h3 style="background-color: red;">carton</h3>
                <div>
                    <input size="10" type="text" id="carton1" name="carton1" placeholder="carton 1">
                </div>
                <div>
                    <input size="10" type="text" id="carton2" name="carton2" placeholder="carton 2">
                </div>
                <div>
                    <input size="10" type="text" id="carton3" name="carton3" placeholder="carton 3">
                </div>
                <div>
                    <input size="10" type="text" id="carton4" name="carton4" placeholder="carton 4">
                </div>
                <div>
                    <input size="10" type="text" id="carton5" name="carton5" placeholder="carton 5">
                </div>
                <div>
                    <input size="10" type="text" id="carton6" name="carton6" placeholder="carton 6">
                </div>
            </div>
            <div class="column">
                <h3 style="background-color:teal;">scratch tickets</h3>
                <div>
                    <input size="10" type="text" id="scratch1" name="scratch1" placeholder="scratch 1">
                </div>
                <div>
                    <input size="10" type="text" id="scratch2" name="scratch2" placeholder="scratch 2">
                </div>
                <div>
                    <input size="10" type="text" id="scratch3" name="scratch3" placeholder="scratch 3">
                </div>
                <div>
                    <input size="10" type="text" id="scratch4" name="scratch4" placeholder="scratch 4">
                </div>
                <div>
                    <input size="10" type="text" id="scratch5" name="scratch5" placeholder="scratch 5">
                </div>
                <div>
                    <input size="10" type="text" id="scratch6" name="scratch6" placeholder="scratch 6">
                </div>
            </div>

            <div class="column">
                <h3 style="background-color:#A0CFEC;">SCRATCHTICKETS</h3>
                <div>
                    <input size="10" type="text" id="scratch7" name="scratch7" placeholder="scratch 7">
                </div>
                <div>
                    <input size="10" type="text" id="scratch8" name="scratch8" placeholder="scratch 8">
                </div>
                <div>
                    <input size="10" type="text" id="scratch9" name="scratch9" placeholder="scratch 9">
                </div>
                <div>
                    <input size="10" type="text" id="scratch10" name="scratch10" placeholder="scratch 10">
                </div>
                <div>
                    <input size="10" type="text" id="scratch11" name="scratch11" placeholder="scratch 11">
                </div>
                <div>
                    <input size="10" type="text" id="scratch12" name="scratch12" placeholder="scratch 12">
                </div>
            </div>


            <div class="column">
                <h3 style="background-color:#FFCBA4;">END DAY</h3>
                <div>
                    <input size="10" type="text" id="endday1" name="endday1" placeholder="endday 1">
                </div>
                <div>
                    <input size="10" type="text" id="endday2" name="endday2" placeholder="endday 2">
                </div>
                <div>
                    <input size="10" type="text" id="endday3" name="endday3" placeholder="endday 3">
                </div>
                <div>
                    <input size="10" type="text" id="endday4" name="endday4" placeholder="endday 4">
                </div>
                <div>
                    <input size="10" type="text" id="endday5" name="endday5" placeholder="endday 5">
                </div>
                <div>
                    <input size="10" type="text" id="endday6" name="endday6" placeholder="endday 6">
                </div>
            </div>
            <div>
                <h3>drip</h3>
            </div>


            <div class="submitbutton">
                <input size="10" type="submit" name="submit" value="submit">
            </div>
        </form>
    </div>
</div>

</html>