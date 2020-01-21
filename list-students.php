<?php
include "connectdb.php";
//include "templates/header.php";
$sql = "SELECT * FROM student";
$sth = $db->prepare($sql);
$sth->execute();
?>

<table class="table">
    <thead>
    <tr>
        <th>Id</th>
        <th>Voornaam</th>
        <th>Achternaam</th>
        <th>Acties</th>
    </tr>
    </thead>
    <tbody>
    <?php while($row = $sth->fetch()) { ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["voornaam"]; ?></td>
            <td><?php echo $row["achternaam"]; ?></td>
            <td><a class="btn btn-info" href="update-student-form.php?id=<?php echo $row["id"]?>">Wijzig</a> <a class="btn btn-danger" href="delete-student.php?id=<?php echo $row["id"]?>">Wijzig</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
