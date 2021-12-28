<?php
    function makeConnectionWithDatabase() {
        $hostname = "ID362596_sortinghat.db.webhosting.be";
        $dbUser = "ID362596_sortinghat"; 
        $dbPassword = "wachtwoord2021"; 
        $dbName = "ID362596_sortinghat";
        

        
        $conn = mysqli_connect($hostname, $dbUser, $dbPassword, $dbName);
        

        // Checken of ik connectie heb met de DB
        if ($conn == false) {
            echo "ik kan de database niet bereiken";
            die();
        }

        // connectie terug geven
        return $conn;
    }
    

    function getQuery($conn, $query) {
        return mysqli_query($conn, $query)->fetch_all(MYSQLI_ASSOC);
    }

    function insertQuery($conn, $query) {
        mysqli_query($conn, $query);
    }

    function closeConnection($conn) {
        $conn->close();
    }

                               