<?php 
    session_start();
    $usuario="";
    $nombre1="Gab";
    $rol="";
    $id="";
    $datos=array();
    $registrar=array();
    
    if(!empty($_SESSION['nomUsuario']) && !empty($_SESSION['nRol'])){
        $usuario=$_SESSION['nomUsuario'];
        $rol=$_SESSION['nRol'];
    }
    
    $datos=array();
    
    //EJECUTA EL SERVICIO WEB
    $cliente=new SoapClient(null,array('uri' => 'http://localhost/',
        'location' => 'https://deliverylions.000webhostapp.com/serviciosweb/serviciosweb.php'));
        
    $datos=$cliente->listarPedidos($_SESSION['USU']);
    
    if(isset($_POST['btnBuscarPedido'])){
        //obtener valor
        $id=htmlspecialchars($_REQUEST['txtID']);
        if(!empty($_REQUEST['txtID'])){
            $datos=$cliente->buscarPedidos($id,$_SESSION['USU']);
            if ($datos[0]["ID"] == null && $datos[0]["NEGOCIO"] == null && $datos[0]["MENU"] == null && $datos[0]["CANTIDAD"] == null && $datos[0]["TOTAL"] == null && $datos[0]["FECHA"] == null && $datos[0]["ESTATUS"] == null) {
                echo "<script>alert('El ID especificado no existe en tus pedidos.');</script>";
                $datos=$cliente->listarPedidos($_SESSION['USU']);
            }

        }
        else{
            echo "<script>alert('No puedes dejar el campo vacío, ingresa la Clave');</script>";
        }
    }
    
    if(isset($_POST['btnRegresar'])){
         $datos=$cliente->listarPedidos($_SESSION['USU']);
     }
     
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../../css/adminstyles/adminS.css">
    
    <style>
        table th{
            font-size: 13px;     font-weight: normal;     padding: 8px;   background: #964A2C;  color:#FFFFFF;
            /*border-top: 4px solid #642d00;    border-bottom: 1px solid #000000; color: rgb(0, 0, 0);*/
        }
        table td{
            padding: 8px;     background: #D48B3E;      
            color: rgb(255, 255, 255);    /*border-top: 1px solid transparent; border-bottom: 1px solid #000000;*/
        }
        tr:hover td { background: #ca6c1f; color: rgb(255, 255, 255); }

    </style>
</head>
<body>
    <?php include "../components/nav.php"; ?>
    <main>
        
        <form method="POST" id="frmUsuarios">
            <section style="margin-bottom:90px;">
               <div class="content-text">
                   <h1>Mis pedidos</h1>
                </div>
                
                
                <div class="Agregar">
                    <div class="prueba">
                        <label for="" class="Texto">Ingresar id</label>
                        <input type="text" name="txtID" class="IngresarTxt">
                    </div>
                    <input type="submit" name="btnBuscarPedido" value="Subir" class="Boton">
                    <input type="submit" name="btnRegresar" value="Regresar" class="Boton">
                </div>
                <div style="text-align: center;">
                    <?php if (!empty($datos)): ?>
                    <table class="contentTableCarla"  style="margin: 0 auto;">
                        <tr>
                            <th><b>CLAVE</b></th>
                            <th><b>NEGOCIO</b></th>
                            <th><b>MENU</b></th>
                            <th><b>CANTIDAD</b></th>
                            <th><b>TOTAL</b></th>
                            <th><b>FECHA PEDIDO</b></th>
                            <th><b>ESTATUS</b></th>
                           
                       </tr>
                       <?php
                            for($rr=0;$rr<count($datos);$rr++){
                                echo'<tr aling="center">';
                                echo'<td>'.$datos[$rr]["ID"].'</td>';
                                echo'<td>'.$datos[$rr]["NEGOCIO"].'</td>';
                                echo'<td>'.$datos[$rr]["MENU"].'</td>';
                                echo'<td>'.$datos[$rr]["CANTIDAD"].'</td>';
                                echo'<td>'.$datos[$rr]["TOTAL"].'</td>';
                                echo'<td>'.$datos[$rr]["FECHA"].'</td>';
                                echo'<td>'.$datos[$rr]["ESTATUS"].'</td>';
                                echo '</tr>';
                            }
                        ?>
                    </table>
                    <?php else: ?>
                    <h2 style="color:white">No hay pedidos realizados.</h2>
                    <?php endif; ?>
                </div>
            </section>
        </form>
        
        
    </main>
        <?php include_once '../components/footerCliente.php' ?>
        

</body>
</html>