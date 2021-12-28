<?php
    // get parameters voor add to house
    $House = $_GET["house"];
    $ID =$_GET["ID"];
    

    // get connection DB
    include "db/db.php";

    

    // connection maken
    $conn = makeConnectionWithDatabase();
    
        insertQuery($conn, "INSERT INTO votes (ID_person, ID_house) VALUES ($ID,$House);");

        header("Location: http://evytempst.be/vote.php?ID=".$ID); // redirect
    

    // connection closed
    $conn->close();