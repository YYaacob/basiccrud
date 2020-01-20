<?php

$voornaam = empty($_POST["voornaam"]) ? null : $_POST["voornaam"];
$achternaam = empty($_POST["achternaam"]) ? null : $_POST["achternaam"];

try {
    include "connectdb.php";
    $sql = "INSERT INTO student (voornaam, achternaam) VALUES (:voornaam, :achternaam)";
    $sth = $db->prepare($sql);
    $sth->execute(array(':voornaam' => $voornaam, ':achternaam' =>$achternaam));
    echo "
    <script type='text/javascript'>
        alert('User added correctly');
        location='index.php';
    </script>
    ";
} catch(PDOException $err) {
    echo $sql . "<br />" . $err->getMessage();
}


