<?php

$voornaam = $_POST['voornaam'];
$achternaam = $_POST['achternaam'];

try {
    include "connectdb.php";
    $sql = "INSERT INTO student (voornaam, achternaam) VALUES ('$voornaam', '$achternaam')";
    $db->exec($sql);
    // header("Location: http://localhost/basiccrud/index.php");
    echo "
    <script type='text/javascript'>
        alert('User added correctly');
        location='index.php';
    </script>
    ";
} catch(PDOException $err) {
    echo $sql . "<br />" . $err->getMessage();
}

