<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web INPRL</title>

    <!-- Bootstrap's CSS -->
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- Customs CSS -->
    <link rel="stylesheet" href="css/partes_style.css">

</head>

<body>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="navbarWrapper">
            <a class="navbar-brand" href="index.html">INPRL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
                aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="riesgos.html">Información sobre riesgos <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="partes.html">Nuevo Parte de Accidente<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <main role="main">
        <div class="container">
            <!-- Example row of columns -->
            <div class="row section-padding">
                <div class="col-md-12">
                    <h2>Nuevo parte de accidente</h2>
                    <form class="formulario" action="">
                        <label for="fecha">Fecha de Accidente</label><br>
                        <input id="fecha" type="date" autofocus> <br>
                        <label for="dni">DNI/NIE de la persona accidentada</label><br>
                        <input id="dni" type="text" maxlength="9" pattern=" (([X-Z]{1})([-]?)(\d{7})([-]?)([A-Z]{1}))|((\d{8})([-]?)([A-Z]{1}))"> <br>
                        <label for="causa">Causa o tipología del accidente</label><br>
                        <input id="causa" type="text"> <br>
                        <label for="lesion">Tipo o naturaleza de la lesión</label><br>
                        <input id="lesion" type="text"><br>
                        <label for="parte_cuerpo">Parte del cuerpo lesionada</label><br>
                        <input id="parte_cuerpo" type="text"><br>
                        <label for="gravedad">Gravedad de la lesión</label><br>
                        <select name="gravedad" id="gravedad"><br>
                            <option value="Leve">Leve</option>
                            <option value="Moderado">Moderado</option>
                            <option value="Grave">Grave</option>
                            <option value="Muy grave">Muy Grave</option>
                            <option value="Mortal">Mortal</option>
                        </select><br>
                        <label for="baja">¿Ha causado baja?</label><br>
                        <input type="radio" name="baja"> Si
                        <input type="radio" name="baja"> No

                    </form>
                </div>
            </div>

        </div> <!-- /container -->

    </main>

    <footer class="container">
        <p>&copy; INPRL 2017-2018 - developed by xabertum</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/simple-slider/1.0.0/simpleslider.min.js"></script>
    <script>document.querySelector("#fecha").valueAsDate = new Date();</script>

</body>

</html>