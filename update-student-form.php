<?php include "templates/header.php"; ?>
    <body>
    <?php include "read-student.php";?>
    <div class="container">
        <form action="update-student.php" method="post">
            <div class="form-group">
                <label for="voornaam">Voornaam: </label>
                <input class="form-control" type="text" id="voornaam" value="<?php echo $student["voornaam"];?>" name="voornaam">
            </div>

            <div class="form-group">
                <label for="achternaam">Achternaam: </label>
                <input class="form-control" type="text" id="achternaam" value="<?php echo $student["achternaam"];?>" name="achternaam">
            </div>
            <input type="hidden" name="id" value="<?php echo $student["id"]; ?>">
            <input class="btn btn-primary" type="submit" name="submit" value="Send">

        </form>
    </div>
    </body>
<?php include "templates/footer.php" ?>