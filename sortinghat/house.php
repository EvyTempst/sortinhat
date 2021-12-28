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
        // show persons
         include "db/db.php";
        $conn = makeConnectionWithDatabase();
        $ID = $_GET["ID"];
        $persons = getQuery($conn, "select * from persons where ID = $ID;"); 
        
        
        ?>

<div class="container">
        <h1>Put people in a house</h1>
        <div>
        <?php
        foreach ($persons as $person){ ?>
        
        <div class="showperson">
        
        <p><?php echo $person["Voornaam"]." ".$person["Achternaam"]?></p>
        <p><?php echo $person["Leeftijd"]?></p>
        <p><?php echo $person["Geslacht"]?></p>
        <p><?php echo $person["Lievelingskleur"]?></p>
        
        </div>

        <?php
        }
        ?>

                       

<form id="addhouseform" action="addtohouse.php" method="GET" name="form" >
        <div class="rij">
        <button class="gryffindor" type="submit" class="house-button" name="house" value="1" >
        Gryffondor!
        </button>
        <button  class="ravenclaw" type="submit" class="house-button" name="house" value="2">
        Ravenclaw!
        </button>
        </div>
        <div class="rij">
        <button  class="hufflepuff" type="submit" class="house-button" name="house" value="3">
        Hufflepuff!
        </button>
        <button  class="slytherin" type="submit" class="house-button" name="house" value="4">
        Slytherin!
        </button>
        </div>
        <input  id="ID" name="ID" value="<?php echo $ID?>">
        
</form>
</div>
        
    </body>
</html>