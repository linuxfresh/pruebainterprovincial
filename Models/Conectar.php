<?php

class Conectar  
{


    public static function conexion(){
        $base = 'oci:dbname=192.168.10.224/MOVIL';
        $user = 'pasajes';
        $pass = 'movil16';
        try{
            $conn = new PDO($base, $user,$pass);
            $conn->exec("SET CARACTER SER utf8");
        }

        catch(Exception $e){
            echo "Error de conexion: ".$e->getMessage();
        }

        return $conn;
    }
}
?>