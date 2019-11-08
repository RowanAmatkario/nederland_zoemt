<html>
<head>
    <head>
        <title>Homepage</title>
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
<body style="background-color: goldenrod;">
<img src="img/header.jpg" style="width: 100%; height: 50%; background-size: cover; " alt="Cinque Terre">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="img/logo.png" style="width: 4%;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link" href="index.php">Homepage</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="bijensoort.php">Bijensoorten</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="overons.php">Over Ons</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="inloggen.php">Inloggen</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container" style="background-color: white;">
    <div class="card">
        <div class="card-body" style="margin: 7% 10% 7% 10%;">
            <img src="img/loginimage.jpg" class="rounded-circle" style="width: 40%; margin-left: 30%; margin-bottom: 3%;">
            <h2 style="text-align: center; ">Aanmelden</h2> <br>
            <div class="form-group" >
                <label for="exampleInputEmail1">Naam</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Plaats uw Naam">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Achternaam</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Plaats uw Achternaam">
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Postcode</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Plaats uw postcode">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Woonplaats</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Plaats uw Woonplaats">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Telefoonnummer</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Plaats uw Telefoonnummer">
                </div>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">E-mail</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Plaats uw e-mail">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Wachtwoord</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Plaats uw wachtwoord">
            </div>
            <label for="exampleFormControlSelect2">Selecteer uw locatie</label>
            <select class="form-control">
                <option>Park</option>
                <option>Achteruin</option>
                <option>Stad</option>
            </select> <br>
            <a class="btn btn-warning" href="index.php" style="width: 100%;">Aanmelden</a> <br> <br>
        </div>


    </div>

</div>



<footer class="page-footer font-small blue" style="background-color: #f8f9fa;">


    <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="https://mdbootstrap.com/education/bootstrap/"> HeelNederlandZoemt.nl</a>
    </div>

</footer>

</body>
</html>