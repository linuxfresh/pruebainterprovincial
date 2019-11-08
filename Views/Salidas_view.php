<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- <link rel="stylesheet" href="../css/normalize_reset.css"> -->
	<!-- <link rel="shortcut icon" type="image/png" href="/media/images/favicon.png"> -->
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
	<!-- <link rel="stylesheet" type="text/css" href="/media/css/site-examples.css?_=8ffc0b31bc8d9ff82fbb94689dd1d7ff"> -->
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.0/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="../css/estilos_vista.css">
	<style type="text/css" class="init"></style>
	<!-- <script type="text/javascript" src="/media/js/site.js?_=df7cd4213eec7fc146048acf402cae00"></script> -->
	<!-- <script type="text/javascript" src="/media/js/dynamic.php?comments-page=extensions%2Fbuttons%2Fexamples%2Fhtml5%2Fsimple.html" async></script> -->
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
	<!-- <script type="text/javascript" language="javascript" src="../../../../examples/resources/demo.js"></script> -->
	<script type="text/javascript" class="init">
	        $(document).ready(function() {
            $('#example').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            } );
        } );
	</script>

    <!--  echo "<title>Salidas terminales Lima ".$fec."</title>" ;?> -->
</head>
<body>
    
    <!-- <font size=1 face='Trebuchet MS',arial,verdana> -->
        <?php 
            echo "<h1>Salidas de terminales Lima-Prov</h1>";
            // echo "<h3>Fecha: ".$fec."</h3>";
            // echo "<img border='0' src='../img/regresar.png' width='150' height='60' onClick='history.back()'>";
            // echo "<nav><a href=".$_SERVER['HTTP_REFERER'].">Regresar</a></nav><br>";
            echo "<nav><a href=".$_SERVER['HTTP_REFERER']."><img border='0' src='../img/regresar.png' width='140' height='50' onClick='history.back()'></a></nav>";
            
        ?>

        <table  id="example" class="display dataTable" style="width: 100%;" role="grid" aria-describedby="example_info">
            <thead>
                <tr>
                    <th>FECHA_PARTIDA</th>
                    <th>TURNO</th>
                    <th>O_D</th>
                    <th>SERVICIO</th>
                    <th>JAVIER PRADO-TERM</th>
                    <th>PASEO-TERM</th>
                    <th>TOMAS VALLE TERRA</th>
                </tr>
            </thead>

            <?php
                    foreach ($matriz as $item) {
                        // echo "<td>" . ($item !== null ? htmlentities($item, ENT_QUOTES) : "") . "</td>\n";
                        echo "<tr>";
                            echo "<td>".$item["FECHA_PARTIDA"]."</td>";
                            echo "<td>".$item["TURNO"]."</td>";
                            echo "<td>".$item["O_D"]."</td>";
                            echo "<td>".$item["SERVICIO"]."</td>";
                            echo "<td>".$item["'JAVIER PRADO-TERM'"]."</td>";
                            echo "<td>".$item["'PASEO-TERM'"]."</td>";
                            echo "<td>".$item["'TOMAS VALLE TERRA'"]."</td>";
                        echo "</tr>";
                    }
            ?>
        </table>
</body>
</html>