<html>
<head>
    <head>
        <title>Bijensoort</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
                crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
                integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
                crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/index.css">
    </head>
</head>
<?php
//gegevens uit de database
try {
    $db = new PDO ("mysql:hoest=localhost;dbname=nederland_zoemt", "root","");

    $query = $db->prepare("SELECT * FROM bij");

    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error!" . $e->getMessage());
}
?>
<body style="background-color: goldenrod;">
<img src="img/header.jpg" style="width: 100%; height: 50%; background-size: cover; " alt="Cinque Terre">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="img/logo.png" style="width: 4%;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Homepage</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="bijensoort.php">Bijensoorten</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="overons.php">Over Ons</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="inloggen.php">Inloggen</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container" style="background-color: white">
    <div class="row">
        <div class="col-lg-10"  style="margin-bottom: 2.5rem">
            <h1 style="margin-bottom: 2.5rem; margin-top: 2.5rem;">Bijensoorten</h1> <br>

            <h4 style="text-align: center;"> Tellen kan beginnen !</h4>
        </div>

        <table class="table">
        <thead>
        <tr>
            <th scope="col">Bij</th>
            <th scope="col">Soort / Eigenschappen</th>
            <th scope="col">Optellen en Aftrekken</th>
        </tr>
        </thead>
        <tbody>
        <?php
        for ($i = 0; $i < sizeof($result); $i ++){ ?>
        <tr>
            <td class="w-25">
                <img src="img/<?=$result[$i]['latijnseNaam']?>.jpg" class="img-fluid img-thumbnail" alt="Niet beschikbaar">
            </td>
            <td style="width: 60%;">
                <B>Soort</B> <br> <?= $result[$i]['latijnseNaam']?> <br> <br>
                <B>Geslacht</B> <br> <?= $result[$i]['geslacht']?> <br> <br>
                <B>Voorkomen</B> <br> <?= $result[$i]['kenmerken']?> <br> <br>
                <B>Biotoop</B> <br> <?= $result[$i]['opmerkingen']?> <br> <br>
            <td>
                <button type="button" class="btn btn-success btn-lg">+</button> <button type="button" class="btn btn-danger btn-lg">-</button> <br><br>
                <p><B>Aantal :</B></p>
            </td>
        </tr>
        <?php
        }
        ?>
        </tbody>
        </table>

    </div>
</div>

    <footer class="page-footer font-small blue" style="background-color: #f8f9fa;">
        <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a href="https://mdbootstrap.com/education/bootstrap/"> HeelNederlandZoemt.nl</a>
        </div>
    </footer>

</body>
</html>



