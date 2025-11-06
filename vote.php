<?php
$message="";


if(isset($_COOKIE["answer"])){
    $message = "Vous avez déja voté, merci d'attendre 24h";
    
} else if (isset($_POST["submit"]) && (!empty($_POST["team"]))){
    $answer = $_POST["team"];
    setcookie("answer",true, time() + 86400);
    setcookie("getAnswer",$_POST["team"], time() + 86400);
    $message = " <br> votre réponse est " . $_POST["team"] . " <br> Il faut attendre 24h avant de voter de nouveau";
} else {
    "Faites votre choix";
}
?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <h1> Vous êtes team :</h1>
    <form action="" method="POST">
        <label for="chocolatine"> Chocolatine</label>
        <input type="radio" name="team" id="chocolatine" value="chocolatine">

        <label for="painChocolat"> Pain au chocolat</label>
        <input type="radio" name="team" id="painChocolat" value="painChocolat">
        <br>
        <input type="submit" name="submit">
    </form>

   <?php
       echo $message;
       ?>
  </body>
</html>