<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Domine&family=Great+Vibes&display=swap" rel="stylesheet">
</head>
<body>
    <?php

        include "db/db.php";
        
        
    ?>
    <div class="container">
        
    <h1>Create your own account!</h1>
    <form action="add.php" method="GET">
        <label for="input-voornaam">Firstname</label> <br>
        <input type="text" id="input-voornaam" name="Voornaam" required> <br><br>

        <label for="input-achternaam">Lastname</label> <br>
        <input type="text" id="input-achternaam" name="Achternaam" required> <br><br>

        <label for="input-leeftijd">Age</label> <br>
        <input type="number" id="input-leetijd" name="Leeftijd" required> <br><br>

        <label for="input-geslacht">Gender</label> <br>
        <input type="text" id="input-geslacht" name="Geslacht" required> <br><br>

        <label for="input-color">Favourite color</label> <br>
        <input type="text" id="input-color" name="Lievelingskleur" required> <br><br>

        

        <br>
        <button  class="button-64" type="submit" >
        <span class="text">Add person!</span>
        </button>
        
    </form><br></div>


    
</body>
</html>