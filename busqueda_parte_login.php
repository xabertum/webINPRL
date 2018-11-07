<?php
include 'datos/conexion.php';
include 'helps/helps.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    if (isset($_POST['usuario']) || isset($_POST['fecha_accidente']) || isset($_POST['nombre']) ||
        isset($_POST['causa_lesion']) || isset($_POST['tipo_lesion']) || isset($_POST['parte_lesionada']) ||
        isset($_POST['gravedad']) || isset($_POST['baja']) || isset($_POST['comunidad_autonoma']) ||
        isset($_POST['fecha_nacimiento']) || isset($_POST['sexo'])) {

        $query = "SELECT * From Parte LEFT JOIN Trabajador ON Parte.DNI = Trabajador.DNI
                          UNION SELECT * From Parte RIGHT JOIN Trabajador ON Parte.DNI = Trabajador.DNI";

        $conexion = Conexion::conectar();

        $resultado = $conexion->prepare($query);

        $resultado->execute();

        if ($resultado->rowCount() > 0) {
            $filas = $resultado->fetchAll();

        }

    }

}

?>

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
    <link rel="stylesheet" href="css/overhang.css">

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
                        <a class="nav-link" href="nuevo_parte.html">Nuevo Parte de Accidente<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="modificar_parte.html">Modificar Parte<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="consulta_partes_login.html">Consulta de Partes<span class="sr-only">(current)</span></a>
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

            <div class="row">
                <div class="col-md-12">
                    <h3>Busqueda de Accidentes</h3>
                    <table>
                        <tr>
                            <th>Codigo Accidente</th>
                            <th>Nombre Accidentado</th>
                            <th>Causa Accidente</th>
                            <th>Tipo Lesion</th>
                            <th>Parte del cuerpo</th>
                            <th>Gravedad</th>
                            <th>Baja</th>
                            <th>Comunidad Autónoma</th>
                            <th>Edad</th>
                            <th>Sexo</th>
                        </tr>
                        <tr>
                            <td><?php echo $filas[1]['DNI']?></td>
                            <td><?php echo $filas[0]['nombre']?></td>
                            <td><?php echo $filas[0]['Causa_accidente']?></td>
                            <td><?php echo $filas[0]['Tipo_lesion']?></td>
                            <td><?php echo $filas[0]['Partes_cuerpo_lesionado']?></td>
                            <td><?php echo $filas[0]['Gravedad']?></td>
                            <td><?php echo $filas[0]['Baja']?></td>
                            <td><?php echo $filas[0]['com_autonoma']?></td>
                            <td><?php echo $filas[0]['fecha_nacimiento']?></td>
                            <td><?php echo $filas[0]['sexo']?></td>
                        </tr>


                    </table>
                    
                </div>

            </div>

            <div class="row">
                <div id="capaformulario" class="col-md-12"></div>
            </div>



        </div><!-- /container -->

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
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

    <!--
    <script src="js/overhang.js"></script>
    <script src="js/app.js"></script>
    -->
</body>

</html>


