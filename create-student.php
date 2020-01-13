<?php

$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];


//echo "Hello, $voornaam $achternaam";

try {
    include "connectdb.php";
    $sql = "INSERT INTO student (voornaam, achternaam) VALUES ('$voornaam', '$achternaam')";
    $db->exec($sql);
    echo "New record created succesfully";
} catch(PDOException $err) {
    echo $sql . "<br />" . $err->getMessage();
}

