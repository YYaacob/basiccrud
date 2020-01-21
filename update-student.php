<?php
$id = empty($_POST["id"]) ? null : $_POST["id"];
$voornaam = empty($_POST["voornaam"]) ? null : $_POST["voornaam"];
$achternaam = empty($_POST["achternaam"]) ? null : $_POST["achternaam"];
include "connectdb.php";

try {
    $sql = "UPDATE student SET voornaam = :voornaam, achternaam = :achternaam WHERE id = :id";
    $sth = $db->prepare($sql);
    $params = array(':id' => $id, ':voornaam' => $voornaam, ':achternaam' => $achternaam);
    $sth->execute($params);
    echo "
    <script type='text/javascript'>
        alert('User modified correctly');
        location='index.php';
    </script>
    ";
} catch(PDOException $err) {
    echo $sql . "<br />" . $err->getMessage();
}