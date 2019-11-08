<?php
    require_once("../Models/Salidas_model.php");

    $fec = $_POST["fecha"]; 
    // echo $fec;
    echo "<title>Salidas terminales Lima ".$fec."</title>" ;
    $salida = new Salidas_model();
    $matriz = $salida->get_Salidas($fec);


    require_once("../Views/Salidas_view.php");
?>