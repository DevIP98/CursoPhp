<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Como usar switch php</title>
</head>
<body>
    <form action="13switch.php" method="post">
        <input type="submit" name="btnValor" value="1">
<br/>
        <input type="submit" name="btnValor" value="2">
<br/>
        <input type="submit" name="btnValor" value="3">
    </form>
</body>
</html>

<?php

if($_POST){

    $boton=$_POST['btnValor'];
    switch($boton){
        case 1:
            echo "Presionaste el boton 1";
        break;

        case 2:
            echo "Presionaste el boton 2";
        break;

        case 3:
            echo "Presionaste el boton 3";
    }
}
?>