<?php
    session_start();
    $usuario="";
    $nombre="";
    $ap="";
    $am="";
    $usuCliente="";
    $email="";
    $contra="";
    $telefono="";
    $genero="";
    $fechaNacimiento="";
    $seccion=0;
    $privada="";
    $numCasa=0;
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
    
    if(isset($_POST['btnRegistrar'])){
        //VERIFICAR QUE LOS DATOS NO ESTEN VACIOS
        if(!empty($_REQUEST['txtNombre'])&& !empty($_REQUEST['txtApP']) && !empty($_REQUEST['txtApM']) &&
        !empty($_REQUEST['txtUsu']) && !empty($_REQUEST['email']) && !empty($_REQUEST['contra']) && !empty($_REQUEST['telefono']) && !empty($_REQUEST['txtGenero']) && !empty($_REQUEST['txtNacimiento']) && !empty($_REQUEST['txtSeccion']) && !empty($_REQUEST['txtPrivada']) && !empty($_REQUEST['numCasa'])){
            //OBTIENE LOS VALORES
            $nombre=htmlspecialchars($_REQUEST['txtNombre']);
            $ap=htmlspecialchars($_REQUEST['txtApP']);
            $am=htmlspecialchars($_REQUEST['txtApM']);
            $usuCliente=htmlspecialchars($_REQUEST['txtUsu']);
            $contra=htmlspecialchars($_REQUEST['email']);
            $email=htmlspecialchars($_REQUEST['contra']);
            $telefono=htmlspecialchars($_REQUEST['telefono']);
            $genero=htmlspecialchars($_REQUEST['txtGenero']);
            $fechaNacimiento=htmlspecialchars($_REQUEST['txtNacimiento']);
            $seccion=htmlspecialchars($_REQUEST['txtSeccion']);
            $privada=htmlspecialchars($_REQUEST['txtPrivada']);
            $numCasa=htmlspecialchars($_REQUEST['numCasa']);
            //echo $tipo.'-'.$nombre.'-'.$ap.'-'.$am.'-'.$usu.'-'.$contra;
            
            //VALIDAR QUE TODOS LOS CONTROLES TENGAN DATOS
            $registrar=$cliente->registrarClientes($nombre,$ap,$am,$usuCliente,$email,$contra,$telefono,$genero,$fechaNacimiento,$seccion,$privada,$numCasa);
            
            if((int)$registrar[0]["REGISTRADO"]!=0){
                $nombre="";
                $ap="";
                $am="";
                $usuCliente="";
                $email="";
                $contra="";
                $telefono="";
                $genero="";
                $fechaNacimiento="";
                $seccion=0;
                $privada="";
                $numCasa=0;
                echo "<script>alert('Usuario registrado correctamente con la clave:".$registrar[0]["REGISTRADO"]."');</script>";
            }
            else{
                echo "<script>alert('Usuario no registrado favor de verificar los datos');</script>";
            }
        }
        else{
            echo "<script>alert('Los datos marcados con * son obligatorios de capturarse, no puedes dejar datos vacíos!');</script>";
        }
    }
    
    //LIMPIA LOS VALORES
    if(isset($_POST["btnLimpiar"])){
        $nombre="";
        $ap="";
        $am="";
        $usuCliente="";
        $email="";
        $contra="";
        $telefono="";
        $genero="";
        $fechaNacimiento="";
        $seccion=0;
        $privada="";
        $numCasa=0;
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
    
    <section style="height: 600px;">
        <div class="content-text">
            <h3>Registro Residente</h3>
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
                                <input type="text" name="txtUsu" id="" placeholder="Usuario" class="caja-sesion1" value="<?php echo $usuCliente; ?>">
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
                                <input type="text" name="txtGenero" id="" placeholder="Genero: M H" class="caja-sesion1" value="<?php echo $genero; ?>">
                            </td>
                            <td>
                                <input type="date" name="txtNacimiento" id="" placeholder="Nombre" class="caja-sesion1" value="<?php echo $fechaNacimiento; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" name="txtSeccion" id="" placeholder="Sección" class="caja-sesion1" value="<?php echo $seccion; ?>">
                            </td>
                            <td>
                                <input type="text" name="txtPrivada" id="" placeholder="Privada" class="caja-sesion1" value="<?php echo $privada; ?>">
                            </td>
                            <td>
                                <input type="number" name="numCasa" id="" placeholder="Número de casa" class="caja-sesion1" value="<?php echo $numCasa; ?>">
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