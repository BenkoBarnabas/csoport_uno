<?php
    $dbhost = "127.0.0.1";
    $dbuser = "root";
    $dbpwd = "";
    $dbname = "rpg";

    $kapcsolat = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);

    $query = "SELECT * FROM stats WHERE active = 1";
    $results = mysqli_query($kapcsolat, $query);

    $accounts = mysqli_fetch_all($results, MYSQLI_ASSOC);
    
    echo json_encode($accounts);
?>