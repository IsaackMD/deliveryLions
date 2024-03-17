<?php
session_start();
$usuario="";
$rol="";
    if(!empty($_SESSION['nomUsuario']) && !empty($_SESSION['nRol'])){
        $usuario=$_SESSION['nomUsuario'];
        $rol=$_SESSION['nRol'];
    }
$datos=array();
     $cliente=new SoapClient(null,array('uri' => 'http://localhost/',
            'location' => 'https://deliverylions.000webhostapp.com/serviciosweb/serviciosweb.php'));
     $datos=$cliente->mostrarclientes();
      if(isset($_POST['btnBusquedaCliente'])){
         //obtener valor
        $id=htmlspecialchars($_REQUEST['txtID']);
        if(!empty($_REQUEST['txtID'])){
             $datos=$cliente->buscarClientes($id); 
             
             if($datos[0]["CLAVE"] == 0){
                 echo "<script>alert('El cliente que buscas no existe');</script>";
                 $datos=$cliente->mostrarclientes();
             }
         }
         else{
              echo "<script>alert('No puedes dejar el campo vacío, ingresa la Clave');</script>";
         }
        
     }
     if(isset($_POST['btnRegresar'])){
         $datos=$cliente->mostrarclientes();
     }
     
?>
<!DOCTYPE html>
<!--LENGUAKJE ESPAÑOL-->
<html lang="es">
    <!--CONFIGURACION DE PROPIEDADES DE LA PAGINA -->
    <head>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/adminstyles/adminS.css">
    </head>
    <body>
        <?php include "../view/components/nav.php"; ?>
        <form method="POST" id="frmUsuarios">
           <section
               <div class="content-text">
                   <h1>Clientes</h1>
                </div>
                
                
                 <div class="Agregar">
                    <div class="prueba">
                        <label for="" class="Texto">Ingresar id</label>
                        <input type="text" name="txtID" class="IngresarTxt">
                    </div>
                    <input type="submit" name="btnBusquedaCliente" value="Subir" class="Boton">
                    <input type="submit" name="btnRegresar" value="Regresar" class="Boton">
                </div>
            
                <div style="text-align: center;">
                    <table class="contentTableCarla" style="margin: 0 auto;">
                        <tr>
                           
                           <td><b>Clave</b></td>
                           <td><b>Nombre Completo</b></td>
                           <td><b>Usuario</b></td>
                           <td><b>Correo</b></td>
                           <td><b>Teléfono</b></td>
                           
                       </tr>
                       <?php
                       for($rr=0;$rr<count($datos);$rr++){
                           echo'<tr aling="center">';
                           echo'<td>'.$datos[$rr]["CLAVE"].'</td>';
                           echo'<td>'.$datos[$rr]["NOMBRE"].'</td>';
                           echo'<td>'.$datos[$rr]["USUARIO"].'</td>';
                           echo'<td>'.$datos[$rr]["CORREO"].'</td>';
                           echo'<td>'.$datos[$rr]["TELEFONO"].'</td>';
                           
                       }
                       ?>
                        
                      </table>
                </div>
                <br>
                
                
    
        </section>
           
       </form>
       <footer>
           <?php include "../inicioPrincipal/componentes/footer.php"; ?>
       </footer>
       
    </body>
</html>