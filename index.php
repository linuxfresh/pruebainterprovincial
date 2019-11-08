<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salidas de buses desde terminales de Lima</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <!-- <script src="tableExport/tableExport.js"></script> -->
    <!-- <script type="text/javascript" src="tableExport/jquery.base64.js"></script> -->
    <!-- <script src="js/custom_export.js"></script> -->

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/jszip-2.5.0/b-1.6.1/b-html5-1.6.1/datatables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css"/>
    
    

    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/jszip-2.5.0/b-1.6.1/b-html5-1.6.1/datatables.min.js"></script>

    <script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    <script src="script/calendario.js" ></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="css/estilos.css">

</head>
<body> 
    <h1>Salidas de terminales de Lima</h1><br>
    <div class="columns">
        <div class="column">
            <p class="columna">
                <form action="Controllers/Salidas_controller.php" method="post">
                    <label for="fecha">Fecha: </label><input type="text" name="fecha" id="fecha" autocomplete="off"/>
                    <input type="submit" value="Enviar">
                </form>
            </p>
        </div>
    </div>
</body>
</html>