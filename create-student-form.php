<?php include "templates/header.php"; ?>
<body>
    <div class="container">
        <form action="create-student.php" method="post">
            <div class="form-group">
                <label for="voornaam">Voornaam: </label>
                <input class="form-control" type="text" id="voornaam" name="voornaam">
            </div>

            <div class="form-group">
                <label for="achternaam">Achternaam: </label>
                <input class="form-control" type="text" id="achternaam" name="achternaam">
            </div>

            <input class="btn btn-primary" type="submit" name="submit" value="Send">

        </form>
    </div>
</body>
<?php include "templates/footer.php" ?>