<?php
    $dbhost = "127.0.0.1";
    $dbuser = "root";
    $dbpwd = "";
    $dbname = "rpg";

    $kapcsolat = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);

    $name = $_POST['loggedinname2'];

    $query1 = "UPDATE stats SET active = DEFAULT";
    mysqli_query($kapcsolat, $query1);

    $query2 = "UPDATE stats SET active=1 WHERE name=$name";
    mysqli_query($kapcsolat, $query2);
?>