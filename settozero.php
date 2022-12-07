<?php
    $dbhost = "127.0.0.1";
    $dbuser = "root";
    $dbpwd = "";
    $dbname = "rpg";

    $kapcsolat = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);

    $name = $_POST['loggedinname'];

    $query1 = "UPDATE stats SET position, maxhp, hp, strength, defence, atk, crit_damage, crit_rate, speed, dodge, ultimate_cost, helmet, chestplate, leggings, boots, charm, energy = DEFAULT WHERE name=$name";
    mysqli_query($kapcsolat, $query1);

    $query2 = "UPDATE stats SET active = DEFAULT";
    mysqli_query($kapcsolat, $query2);

    $query3 = "UPDATE stats SET active=1 WHERE name='kalap'";
    mysqli_query($kapcsolat, $query3);
?>