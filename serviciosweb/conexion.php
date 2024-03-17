<?php

    define("hostname","localhost");
    define("user","id21887929_cmrk2024");
    define("password","jijijijaCMRK_4_XD");
    define("database","id21887929_bd_deliverylions");
    function query($query){
        $cnn=mysqli_connect(hostname,user,password,database);
        if(mysqli_connect_errno()){
            printf("conexion al servidor de base de datos ha fallado: %\n", mysqli_connect_errno());
        exit();
        }
        $res=mysqli_query($cnn,$query);
        $cnn->close();
        return $res;
    }
?>