<?php
    session_start();
    $usuario="";
    $nombre="";
    $ap="";
    $am="";
    $usuAfiliado="";
    $email="";
    $contra="";
    $telefono="";
    $genero="";
    $fechaNacimiento="";
    $seccion=0;
    $privada="";
    $numCasa=0;
    $nomNegocio="";
    $direccionNegocio="";
    $tipoComida=0; 
    $horarioApertura="";
    $horarioCierre="";
    $datos=array();
    $registrar;
    
    if(!empty($_SESSION['nomUsuario']) && !empty($_SESSION['nRol'])){
        $usuario=$_SESSION['nomUsuario'];
        $rol=$_SESSION['nRol'];
    }
    
    //EJECUTA EL SERVICIO WEB
    //#### HACE USO DEL SERVICIO WEB QUE ESTA PUBLICADO DE MANERA LOCAL
    $cliente = new SoapClient(null, array(
        'uri' => 'http://localhost/',
        'location' => 'https://deliverylions.000webhostapp.com/serviciosweb/serviciosweb.php'
    ));
    
    $datos=$cliente->listarComidas();
    
    if(isset($_POST['btnRegistrar'])){
        //VERIFICAR QUE LOS DATOS NO ESTEN VACIOS
        if(!empty($_REQUEST['txtNombre'])&& !empty($_REQUEST['txtApP']) && !empty($_REQUEST['txtApM']) &&
        !empty($_REQUEST['txtUsu']) && !empty($_REQUEST['email']) && !empty($_REQUEST['contra']) && !empty($_REQUEST['telefono']) && !empty($_REQUEST['genero']) && !empty($_REQUEST['fechaNacimiento']) && !empty($_REQUEST['seccion']) && !empty($_REQUEST['privada']) && !empty($_REQUEST['numCasa']) && !empty($_REQUEST['txtNegocio']) && !empty($_REQUEST['txtDireccion']) && !empty($_REQUEST['lstTipoComida']) && !empty($_REQUEST['horarioApertura']) && !empty($_REQUEST['horarioCierre'])){
            //OBTIENE LOS VALORES
            $nombre=htmlspecialchars($_REQUEST['txtNombre']);
            $ap=htmlspecialchars($_REQUEST['txtApP']);
            $am=htmlspecialchars($_REQUEST['txtApM']);
            $usuAfiliado=htmlspecialchars($_REQUEST['txtUsu']);
            $contra=htmlspecialchars($_REQUEST['email']);
            $email=htmlspecialchars($_REQUEST['contra']);
            $telefono=htmlspecialchars($_REQUEST['telefono']);
            $genero=htmlspecialchars($_REQUEST['genero']);
            $fechaNacimiento=htmlspecialchars($_REQUEST['fechaNacimiento']);
            $seccion=htmlspecialchars($_REQUEST['seccion']);
            $privada=htmlspecialchars($_REQUEST['privada']);
            $numCasa=htmlspecialchars($_REQUEST['numCasa']);
            $nomNegocio=htmlspecialchars($_REQUEST['txtNegocio']);
            $direccionNegocio=htmlspecialchars($_REQUEST['txtDireccion']);
            $tipoComida=htmlspecialchars($_REQUEST['lstTipoComida']); 
            $horarioApertura=htmlspecialchars($_REQUEST['horarioApertura']);
            $horarioCierre=htmlspecialchars($_REQUEST['horarioCierre']);
            //echo $tipo.'-'.$nombre.'-'.$ap.'-'.$am.'-'.$usu.'-'.$contra;
            
            //VALIDAR QUE TODOS LOS CONTROLES TENGAN DATOS
            $registrar=$cliente->registrarAfiliados($nombre, $ap, $am, $usuAfiliado, $email, $contra, $telefono, $genero, $fechaNacimiento, $seccion, $privada, $numCasa, $nomNegocio, $direccionNegocio, $tipoComida, $horarioApertura, $horarioCierre);
            
            
            if((int)$registrar[0]["REGISTRADO"]!=0){
                $nombre="";
                $ap="";
                $am="";
                $usuAfiliado="";
                $email="";
                $contra="";
                $telefono="";
                $genero="";
                $fechaNacimiento="";
                $seccion=0;
                $privada="";
                $numCasa=0;
                $nomNegocio="";
                $direccionNegocio="";
                $tipoComida=0; 
                $horarioApertura="";
                $horarioCierre="";
                echo "<script>alert('Usuario pendiente con la clave:".$registrar[0]["REGISTRADO"]." En espera de aceptación por administrador');</script>";
            }
            else{
                echo "<script>alert('Usuario no registrado favor de verificar los datos');</script>";
            }
        }
        else{
            echo "<script>alert('Los datos marcados son obligatorios de capturarse, no puedes dejar datos vacíos!');</script>";
        }
    }
    
    //LIMPIA LOS VALORES
    if(isset($_POST["btnLimpiar"])){
        $nombre="";
        $ap="";
        $am="";
        $usuAfiliado="";
        $email="";
        $contra="";
        $telefono="";
        $genero="";
        $fechaNacimiento="";
        $seccion=0;
        $privada="";
        $numCasa=0;
        $nomNegocio="";
        $direccionNegocio="";
        $tipoComida=0; 
        $horarioApertura="";
        $horarioCierre="";
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barra Responsiva  - Delivery Lions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.8/glider.min.css">
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <?php include "componentes/nav.php"; ?>
    
    <section style="height: 680px;">
        <div class="content-text">
            <h3>Registro Afiliado</h3>
        </div>
        <div class="row" style="display: flex; justify-content: space-between;">
            <div style="position: relative; display: flex; flex-direction:column; align-items: center; width: 50%; height: 304px; padding: 10px 0px; margin: 0 auto;">
                <form action="" method="post">
                    <table style="width: 100%; max-width: 270px; height: 300px; background-color: #D48B3E; text-align: center; margin-left: 100px; padding: 30px; flex-grow: 1; align-self: center; border-radius:30px;">
                        <tr>
                            <td>
                                <input type="text" name="txtNombre" id="" placeholder="Nombre" class="caja-sesion1" value="<?php echo $nombre; ?>">
                            </td>
                            <td>
                                <input type="text" name="txtApP" id="" placeholder="Apellido Paterno" class="caja-sesion1" value="<?php echo $ap; ?>">
                            </td>
                            <td>
                                <input type="text" name="txtApM" id="" placeholder="Apellido Materno" class="caja-sesion1" value="<?php echo $am; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="txtUsu" id="" placeholder="Usuario" class="caja-sesion1" value="<?php echo $usuAfiliado; ?>">
                            </td>
                            <td>
                                <input type="email" name="email" id="" placeholder="Email" class="caja-sesion1" value="<?php echo $email; ?>">
                            </td>
                            <td>
                                <input type="password" name="contra" id="" placeholder="Contraseña" class="caja-sesion1" value="<?php echo $contra; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="tel" name="telefono" id="" placeholder="Número telefónico" class="caja-sesion1" value="<?php echo $telefono; ?>">
                            </td>
                            <td>
                                <input type="text" name="genero" id="" placeholder="Genero" class="caja-sesion1" value="<?php echo $genero; ?>">
                            </td>
                            <td style="position:relative; display:grid; grid-template-columns: 1fr 1fr; font-size:12px;">
                                <div style="width:50%; margin-right:0;">
                                    <label>Fecha de nacimiento</label>    
                                </div>
                                <div style="width:50%; margin-left:0;">
                                    <input type="date" name="fechaNacimiento" id="" placeholder="Fecha de nacimiento" class="caja-sesion1" value="<?php echo $fechaNacimiento; ?>">    
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="position:relative; display:grid; grid-template-columns: 1fr 1fr; font-size:12px; text-align:center;">
                                <div>
                                    <label>Sección</label>   
                                </div>
                                <div>
                                    <input type="number" name="seccion" id="" placeholder="Sección" class="caja-sesion1" value="<?php echo $seccion; ?>" style="width:190px;">    
                                </div>
                            </td>
                            <td>
                                <input type="text" name="privada" id="" placeholder="Privada" class="caja-sesion1" value="<?php echo $privada; ?>">
                            </td >
                            <td style="position:relative; display:grid; grid-template-columns: 1fr 1fr; font-size:12px; text-align:center;">
                                <div>
                                    <label>Num casa</label>
                                </div>
                                <div>
                                    <input type="number" name="numCasa" id="" placeholder="Número de casa" class="caja-sesion1" value="<?php echo $numCasa; ?>" style="width:200px;">    
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="txtNegocio" id="" placeholder="Nombre del negocio" class="caja-sesion1" value="<?php echo $nomNegocio; ?>">
                            </td>
                            <td>
                                <input type="text" name="txtDireccion" id="" placeholder="Dirección negocio" class="caja-sesion1" value="<?php echo $direccionNegocio; ?>">
                            </td>
                            <td>
                                <select name="lstTipoComida">
                                    <option>Seleccionar categoria</option>
                                    <?php //RECORRO LOS REGISTROS Y LOS IMPRIMO
                                    for($rr=0;$rr<count($datos);$rr++){
                                    echo '<option value="'.$datos[$rr]["ID"].'">'.$datos[$rr]["CATEGORIA"].'</option>';
                                    }
                                    ?>
                                </select>
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td style="position:relative; display:grid; grid-template-columns: 1fr 1fr; font-size:12px; text-align:center;">
                                <div>
                                    <label>Horario apertura</label>
                                </div>
                                <div>
                                    <input type="time" name="horarioApertura" id="" placeholder="Tipo de comida" class="caja-sesion1" value="<?php echo $horarioApertura; ?>" style="width:190px;"> 
                                </div>
                            </td>
                            <td></td>
                            <td style="position:relative; display:grid; grid-template-columns: 1fr 1fr; font-size:12px; text-align:center;">
                                <div>
                                    <label>Horario cierre</label>
                                </div>
                                <div>
                                    <input type="time" name="horarioCierre" id="" placeholder="Tipo de comida" class="caja-sesion1" value="<?php echo $horarioCierre; ?>" style="width:190px;">
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3" align="center">
                                <button type="submit" class="btnSesion1" name="btnRegistrar">Registrarse</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </section>
    
    <footer>
        <?php include "componentes/footer.php"; ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.8/glider.min.js"></script>
    <script>
        function showSidebar(){
           const sidebar = document.querySelector('.sidebar')
           sidebar.style.display = 'flex'
        }
        function hideSidebar() {
            const sidebar = document.querySelector('.sidebar')
           sidebar.style.display = 'none'
        }

        window.addEventListener('load', function(){
            new Glider(document.querySelector('.carrusel-track'),{
                slidesToShow: 3,
                slidesToScroll: 3,
                dots: '.carousel__indicadores',
                arrows: {
                    prev: '#button-prev',
                    next: '#button-next'
                }
            });

        })

    </script>
</body>
</html>