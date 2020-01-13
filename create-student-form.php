<?php include "templates/header.php"; ?>
<body>
    <form action="create-student.php" method="post">
        Voornaam: <input type="text" name="voornaam">
        Achternaam: <input type="text" name="achternaam">
        <input type="submit" name="submit" value="Send">
    </form>
</body>
<?php include "templates/footer.php" ?>