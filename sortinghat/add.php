<?php
    // get parameters
    $Voornaam = $_GET["Voornaam"];
    $Achternaam = $_GET["Achternaam"];
    $Leeftijd = $_GET["Leeftijd"];
    $Geslacht = $_GET["Geslacht"];
    $Lievelingskleur= $_GET["Lievelingskleur"];
   

    // get connection DB
    include "db/db.php";

    // connection maken
    $conn = makeConnectionWithDatabase();

    // check if song is existing
    $getSql = "select * from persons where Voornaam like '$Voornaam' and Achternaam like '$Achternaam'";
    $person = getQuery($conn, $getSql);
   

    // insert query
    if (sizeof($person) > 0) {
        header("Location: http://evytempst.be/error.php");
    } else {
        insertQuery($conn, "INSERT INTO persons (Voornaam, Achternaam, Leeftijd, Geslacht, Lievelingskleur) VALUES ('$Voornaam', '$Achternaam', '$Leeftijd', '$Geslacht', '$Lievelingskleur');");

        header("Location: http://evytempst.be/added.php"); // redirect
    }

    // connection closed
    $conn->close();

