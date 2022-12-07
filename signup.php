<?php
    Header("Location:index.html");
    $dbhost = "127.0.0.1";
    $dbuser = "root";
    $dbpwd = "";
    $dbname = "rpg";

    $connection = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);
    $name = $_POST['name'];
    $password = $_POST['pwd'];

    if($name<>"" && $password<>"" && $name<>mysqli_query($connection, "SELECT name FROM stats WHERE name === $name")){
        mysqli_query($connection, "INSERT INTO stats (name, password) VALUES('$name', '$password')");
    }
?>