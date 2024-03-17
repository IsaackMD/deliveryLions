<?php
    require('../../../serviciosweb/conexion.php');

    $id = $_POST["ID"];

    function listarDetMenu_x_ID($id) {
        $datos = array();
        $reg = 0;

        // Utilizamos una consulta preparada para evitar inyecciones SQL
        $renglon= query("CALL spListarDetMenu_x_ID('$id')");
        while ($resultado = mysqli_fetch_assoc($renglon)) {
            $datos[$reg]["ID"] = $resultado["ID"];
            $datos[$reg]["Negocio"] = $resultado["Negocio"];
            $datos[$reg]["Afiliado"] = $resultado["Afiliado"];
            $datos[$reg]["NomMenu"] = $resultado["NomMenu"];
            $datos[$reg]["imagen"] = $resultado["imagen"];
             $datos[$reg]["descripMenu"] = $resultado["descripMenu"];
            $datos[$reg]["comidaIncluida"] = $resultado["comidaIncluida"];
            $datos[$reg]["precio"] = $resultado["precio"];
            $reg++;
        }

        echo json_encode($datos);
    }

    // Llamamos a la función para que se ejecute
    $DetDatos= listarDetMenu_x_ID($id);
    return $DetDatos;
?>
