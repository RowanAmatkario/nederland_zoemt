<html>
    <head>
        <title>Gastenboek</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
    <?php
        $db = new \PDO("mysql:host=localhost;dbname=gastenboek", "root", "");
    ?>
    <body>
    <div class="jumbotron text-center" style="margin-bottom:0; padding: 1rem 2.5rem">
        <div class="container">
            <p>Gastenboek </p>
        </div>
    </div>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navigatie</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Gastenboek</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <form method="post" action="">
            <h2 style="text-align: center;">Voor uw gegevens in voor het Gastenboek</h2>
            <label class="col-2" style="margin-top: 1%;">Naam :</label>
            <input  type="text" name="naam"> <br>

            <label class="col-2">Achternaam :</label>
            <input  type="text" name="achternaam"> <br>

            <label class="col-2">E-mail :</label>
            <input  type="text" name="email"> <br>

            <label class="col-2">Bericht</label>
            <textarea  name="bericht"></textarea> <br>

            <input class="col-2" type="submit" name="verzenden" value="Verzenden" style="margin-left: 17%;">
            <br>
            <br>



        </form>
    </div>
    </body>
</html>

<?php

    try {
        //gegevens naar de databse
        if(isset($_POST['verzenden'])){
            $naam = filter_input(INPUT_POST, "naam", FILTER_SANITIZE_STRING);
            $achternaam = filter_input(INPUT_POST, "achternaam", FILTER_SANITIZE_STRING);
            $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);
            $bericht = filter_input(INPUT_POST, "bericht", FILTER_SANITIZE_STRING);

            $query = $db->prepare("INSERT INTO gasten(naam,achternaam,email,bericht)
                                                VALUES (:naam, :achternaam, :email, :bericht)");
            $query -> bindParam("naam", $naam);
            $query -> bindParam("achternaam", $achternaam);
            $query -> bindParam("email", $email);
            $query -> bindParam("bericht", $bericht);
            if($query->execute()) {
                echo "<div class='container'>";
                echo "Uw gegevens zijn toegevoegd";
            } else {
                echo "Er is een fout opgetreden";
            }
            echo "<h2>Uw bericht</h2>";

        }
    } catch (PDOException $e) {
        die("Error!: " . $e->getMessage());
    }

?>

<?php
//gegevens uit de database
        try {

            $query = $db->prepare("SELECT * FROM gasten");

            $query->execute();
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            foreach ($result as $data) {
                echo "<div class='container'>";
                echo "Voornaam : " . $data ['naam'] . "<br>";
                echo "Achternaam : " . $data ['achternaam'] . "<br>";
                echo "E-mail : " . $data ['email'] . "<br>";
                echo "Bericht : " . $data ['bericht'] . "<br>";
                echo "Datum bericht geplaatst :" . $data['datum'] . "<br>";
                echo "<br>";
                echo "</div>";
            }
        } catch (PDOException $e) {
            die("Error!" . $e->getMessage());
        }



?>


