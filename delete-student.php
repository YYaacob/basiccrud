<?php
$id = empty($_GET["id"]) ? null : $_GET["id"];
include "connectdb.php";
$sql = "DELETE FROM student WHERE id = :id";
$params = array(
    ":id" => $id
);
try {
    $sth = $db->prepare($sql);
    $sth->execute($params);
    echo "
    <script type='text/javascript'>
        alert('User deleted correctly');
        location='index.php';
    </script>
    ";
} catch(PDOException $err) {
    echo $sql . "<br />" . $err->getMessage();
}
