<?php
session_start();
$usuario="";
$rol="";
$cve="";
$op="";
$datos=array();
$registrar=array();
    if(!empty($_SESSION['nomUsuario']) && !empty($_SESSION['nRol'])){
        $usuario=$_SESSION['nomUsuario'];
        $rol=$_SESSION['nRol'];
    }
     $cliente=new SoapClient(null,array('uri' => 'http://localhost/',
            'location' => 'https://deliverylions.000webhostapp.com/serviciosweb/serviciosweb.php'));
    $datos=$cliente->mostrarafiliadospendientes();
    
     if(isset($_POST['btnAceptar'])){
         $cve=htmlspecialchars($_REQUEST['txtClave']);
        $op=htmlspecialchars($_REQUEST['txtOpcion']);
         if(!empty($_REQUEST['txtClave']) && !empty($_REQUEST['txtOpcion'])){
             $mensaje=$cliente->ValidarAfiliados($cve,$op);
             if((int)$mensaje[0]["MENSAJE"]==0){
                echo '<script language="javascript">alert("Afiliado NO existe.");</script>';
                $datos=$cliente->mostrarafiliadospendientes();
             }
             elseif((int)$mensaje[0]["MENSAJE"]==1){
                //$datos[0] = 0;
                echo '<script language="javascript">alert("El afiliado ha sido aceptado.");</script>';
                $datos=$cliente->mostrarafiliadospendientes();
             }
             elseif((int)$mensaje[0]["MENSAJE"]==2){
                //$datos[0] = 0;
                echo '<script language="javascript">alert("El afiliado ha sido rechazado .");</script>';
                $datos=$cliente->mostrarafiliadospendientes();
             }
            
         }
         else{
              echo "<script>alert('No puedes dejar ningun campo vacio, ingresa la Clave y la Opcion');</script>";
         }
         
         
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
           <section>
               <div class="content-text">
                   <h1>Afiliados pendientes</h1>
                </div>
                
                <div style="text-align: center;">
                    <?php if (!empty($datos)):?>
                    <table class="contentTableCarla" style="margin: 0 auto;" id="tabla">
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
                      <?php else: ?>
                        <h2 style="color:white">No hay afiliados pendientes.</h2>
                       <?php endif; ?>
                </div>
                
                <br>
                 <div class="AgregarA">
                    <div class="prueba1">
                        <label for="" class="TextoA">Ingrese ID</label>
                        <input type="text" name="txtClave" class="IngresarTxtA">
                    </div>
                    <div class="prueba2">
                        <label for="" class="TextoA">Validacion</label>
                        <input type="text" name="txtOpcion" class="IngresarTxtA">
                    </div>    
                        <input type="submit" name="btnAceptar" value="Aceptar" class="BotonA">
                </div>
                
                
                
              

        </section>
           
       </form>
       <footer>
           <?php include "../inicioPrincipal/componentes/footer.php"; ?>
       </footer>
       
    </body>
    
</html>