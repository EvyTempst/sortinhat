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

<div class="container">
    

    
    <?php 
    include "db/db.php";
    $conn = makeConnectionWithDatabase();

    $ID = $_GET["ID"];
    $number = 1;
    $newID = $ID + $number;
    $persons = getQuery($conn, "select * from persons where ID = $ID;");

    $procentgryff = getQuery($conn, "select count(*),
    (round(( SELECT COUNT( * ) FROM votes where ID_house = 1 AND ID_person = $ID) / 
    ( SELECT COUNT( * ) FROM votes where ID_person = $ID) * 100 )) AS percentage
    from votes 
    ;"); 
    $procentrav = getQuery($conn, "select count(*),
    (round(( SELECT COUNT( * ) FROM votes where ID_house = 2 AND ID_person = $ID) / 
    ( SELECT COUNT( * ) FROM votes where ID_person = $ID) * 100 )) AS percentage
    from votes 
    ;"); 
    $procenthuff = getQuery($conn, "select count(*),
    (round(( SELECT COUNT( * ) FROM votes where ID_house = 3 AND ID_person = $ID) / 
    ( SELECT COUNT( * ) FROM votes where ID_person = $ID) * 100 )) AS percentage
    from votes 
    ;");  
    $procentslyt = getQuery($conn, "select count(*),
    (round(( SELECT COUNT( * ) FROM votes where ID_house = 4 AND ID_person = $ID) / 
    ( SELECT COUNT( * ) FROM votes where ID_person = $ID) * 100 )) AS percentage
    from votes 
    ;"); 
    
    ?>
    <h1>You voted for <?php
        foreach ($persons as $person){
        echo $person["Voornaam"];
        
        }
        
        ?></h1>

    <div class="rij">
        <div class="gryffindor">
            <p class="text">Gryffindor</p>
            <p class="text"> <?php foreach ($procentgryff as $pr){
                echo $pr['percentage'];} ?> %</p>
        </div>
        <div class="ravenclaw">
            <p class="text">Ravenclaw</p>
            <p class="text"> <?php foreach ($procentrav as $pr){
                echo $pr['percentage'];} ?> %</p>
        </div>
    </div>
    <div class="rij">
        <div class="hufflepuff">
            <p class="text">Hufflepuff</p>
            <p class="text"> <?php foreach ($procenthuff as $pr){
                echo $pr['percentage'];} ?> %</p>
        </div>
        <div class="slytherin">
            <p class="text">Slytherin</p>
            <p class="text"> <?php foreach ($procentslyt as $pr){
                echo $pr['percentage'];} ?> %</p>
        </div>
    </div>
    <br>
    <br>

    <?php 
        $next = "house.php?ID=$newID";
        $stop = "end.php";
        $lenght = mysqli_query($conn, "SELECT ID FROM persons");

        $row_cnt = mysqli_num_rows($lenght);


        

    ?>


    <div id="next-person">
                <a class="button-64" href=<?php
                if  ($newID <= $row_cnt)
                {
                    echo $next;
                }

                else{
                    echo $stop;
                }
                
                ?> > <span class="text">Go to the next person</span></a><br>
                <br>
     </div>

</div>
</body>
</html>