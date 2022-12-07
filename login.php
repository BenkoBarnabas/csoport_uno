<?php
    $dbhost = "127.0.0.1";
    $dbuser = "root";
    $dbpwd = "";
    $dbname = "rpg";

    $kapcsolat = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);

    $query = "SELECT name, password FROM stats";
    $results = mysqli_query($kapcsolat, $query);

    $accounts = "";

    while($row = mysqli_fetch_all($results)) {
        $accounts = $row;
    }
    
    echo json_encode($accounts);
?>