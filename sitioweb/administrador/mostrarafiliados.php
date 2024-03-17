<?php
session_start();
$usuario="";
$rol="";
$id="";
$datos=array();
$registrar=array();
    if(!empty($_SESSION['nomUsuario']) && !empty($_SESSION['nRol'])){
        $usuario=$_SESSION['nomUsuario'];
        $rol=$_SESSION['nRol'];
    }
     $cliente=new SoapClient(null,array('uri' => 'http://localhost/',
            'location' => 'https://deliverylions.000webhostapp.com/serviciosweb/serviciosweb.php'));
     $datos=$cliente->mostrarafiliados();
     if(isset($_POST['btnBusquedaAfiliado'])){
         $id=htmlspecialchars($_REQUEST['txtID']);
         if(!empty($_REQUEST['txtID'])){
             $datos=$cliente->buscarAfiliados($id);
             
             if($datos[0]["CLAVE"] == 0){
                 echo "<script>alert('El afiliado que buscas no existe');</script>";
                 $datos=$cliente->mostrarafiliados();
             }
         }
         else{
              echo "<script>alert('No puedes dejar el campo vacío, ingresa la Clave');</script>";
         }
         
     }
     if(isset($_POST['btnRegresar'])){
         $datos=$cliente->mostrarafiliados();
     }
     if(isset($_POST['btnRegistrarA'])){
         echo"<script>document.location.href='agregarafiliado.php';</script>";
     }
     
     
     //if((int)$datos[0]["MENSAJE"]!=0){
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
           <section>
               <div class="content-text">
                   <h1>Afiliados</h1>
                </div>
                
                
            <div class="Agregar">
                <div class="prueba">
                    <label for="" class="Texto">Ingresar id</label>
                    <input type="text" name="txtID" class="IngresarTxt">
                </div>
                <input type="submit" name="btnBusquedaAfiliado" value="Subir" class="Boton">
                <input type="submit" name="btnRegresar" value="Regresar" class="Boton">
            </div>
                <div style="text-align: center;">
                    <table class="contentTableCarla"  style="margin: 0 auto;">
                        <tr>
                           
                           <th><b>Clave</b></th>
                           <th><b>Nombre Completo</b></th>
                           <th><b>Usuario</b></th>
                           <th><b>Correo</b></th>
                           <th><b>Negocio</b></th>
                           
                       </tr>
                       <?php
                       for($rr=0;$rr<count($datos);$rr++){
                           echo'<tr aling="center">';
                           echo'<td>'.$datos[$rr]["CLAVE"].'</td>';
                           echo'<td>'.$datos[$rr]["NOMBRE"].'</td>';
                           echo'<td>'.$datos[$rr]["USUARIO"].'</td>';
                           echo'<td>'.$datos[$rr]["CORREO"].'</td>';
                           echo'<td>'.$datos[$rr]["NEGOCIO"].'</td>';
                           
                       }
                       ?>
                        
                      </table>
                </div>
                
                <br>
                <div class="BusquedaID">
                    <input type="submit" value="Agregar Afiliado" name="btnRegistrarA" class="Boton">
                </div>
                
                
                
    
        </section>
           
       </form>
       <footer>
           <?php include "../inicioPrincipal/componentes/footer.php"; ?>
       </footer>
       
    </body>
</html>