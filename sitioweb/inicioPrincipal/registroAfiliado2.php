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
    
    <style>
        .cuerpoFormulario{
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .formularioRegistro{
            position: relative;
            max-width: 700px;
            width: 100%;
            background: #D48B3E;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .formularioRegistro h3{
            font-size: 1.5rem;
            color: black;
            font-weight: 500;
            text-align: center;
        }

        .formularioRegistro .formularioCuerpo{
            /*margin-top: 30px;*/
            width: 100%;
        }
        .formularioCuerpo .inputs{
            width: 100%;
            margin-top: 20px;
            
        }

        .inputs label{
            color: black;
        }

        .formularioCuerpo :where(.inputs input, .seleccion){
            position: relative;
            height: 40px;
            width: 100%;
            outline: none;
            font-size: 1rem;
            color: black;
            background-color: #FFF7F2;
            margin-top: 8px;
            border: 1px solid #935230;
            border-radius: 6px;
            padding: 0px 5px;
        }
        
        .formularioCuerpo .inputs ::placeholder{
            color: black;
            
        }
        .formularioCuerpo .columnasFormulario{
            display: flex;
            column-gap: 20px;
        }

        .formularioCuerpo .generoCaj{
            margin-top: 20px;
        }

        .generoCaj h4{
            color: black;
            font-size: 1rem;
            font-weight: 400;
            margin-bottom: 8px;
        }

        .formularioCuerpo :where(.opcionesGenero, .genero){
            display: flex;
            align-items: center;
            column-gap: 50px;
            flex-wrap: wrap;
        }

        .formularioCuerpo .genero{
            column-gap: 5px;
            cursor: pointer;
        }

        .genero input{
            accent-color: #935230;
        }

        .seleccion select{
            position: relative;
            height:30px;
            width: 100%;
            outline: none;
            font-size: 1rem;
            color: black;
            background-color: #FFF7F2; /*ESTE SE CAMBIA SEGUN FONDO IPUT*/
            margin-top: 4px;
            border:none;
        }        

        .formularioCuerpo button{
            height: 55px;
            width: 100%;
            color: white;
            font-size: 1.2rem;
            border: none;
            margin-top: 30px;
            margin-bottom: 1px;
            cursor: pointer;
            font-weight: 400;
            border-radius: 6px;
            transition: all 0.5s ease;
            background-color: #935230;
        }

        .formularioCuerpo  button:hover {
            /*background-color: white;*/
            background-color: #362222;
            border-color: #935230;
            color: white;
        }
        .formularioCuerpo a{
            text-decoration:none;
            color:white;
        }

        @media(max-width: 800px){

        }
        @media(max-width: 450px){
            .formularioCuerpo .columnasFormulario{
                flex-wrap: wrap;
            }
            .formularioCuerpo :where(.opcionesGenero, .genero){
                row-gap: 15px;
            }
        }
    </style>

</head>
<body>
    <?php include "componentes/nav.php"; ?>
    
    <div class="cuerpoFormulario">
        <section class="formularioRegistro">
            <div>
                <h3>Registro Afiliado</h3>
            </div>
            <form action="" method="post" class="formularioCuerpo">
                <div class="columnasFormulario">
                    <div class="inputs">
                        <label for="">Nombre</label>
                        <input type="text" name="txtNombre" id="" placeholder="Ingresa tu nombre" required>
                    </div>
                    <div class="inputs">
                        <label for="">Apellido Paterno</label>
                        <input type="text" name="txtApP" id="" placeholder="Ingresa apellido paterno" required>
                    </div>
                </div>
                <div class="columnasFormulario">
                    <div class="inputs">
                        <label for="">Apellido Materno</label>
                        <input type="text" name="txtApM" id="" placeholder="Ingresa apellido materno" required>
                    </div>
                    <div class="inputs">
                        <label for="">Correo electrónico</label>
                        <input type="email" name="email" id="" placeholder="Ingresa tu correo" required>
                    </div>
                </div>
                <div class="columnasFormulario">
                    <div class="inputs">
                        <label for="">Usuario</label>
                        <input type="text" name="txtUsu" id="" placeholder="Ingresa usuario" required>
                    </div>
                    <div class="inputs">
                        <label for="">Contraseña</label>
                        <input type="password" name="contra" id="" placeholder="Ingresa contraseña" required>
                    </div>
                </div>
                <div class="generoCaj">
                    <h4>Genero</h4>
                    <div class="opcionesGenero">
                        <div class="genero">
                            <input type="radio" id="H" name="genero" value="H">
                            <label for="H">Hombre</label>
                        </div>
                        <div class="genero">
                            <input type="radio" id="M" name="genero" value="M">
                            <label for="M">Mujer</label>
                        </div>
                        <div class="genero">
                            <input type="radio" id="O" name="genero" value="O">
                            <label for="O">Otro</label>
                        </div>
                    </div>
                </div>
                <div class="columnasFormulario">
                    <div class="inputs">
                        <label for="">Teléfono</label>
                        <input type="tel" name="telefono" id="" placeholder="Número telefónico" required>
                    </div>
                    <div class="inputs">
                        <label for="">Fecha de nacimiento</label>
                        <input type="date" name="fechaNacimiento" id="" required>
                    </div>
                </div>
                <div class="inputs">
                    <label for="">Privada</label>
                    <input type="text" name="privada" id="" placeholder="Ingresa nombre privada" required>
                </div>
                <div class="columnasFormulario">
                    <div class="inputs">
                        <label for="">Seccion</label>
                        <input type="number" name="seccion" id="" placeholder="Ingresa sección numérica" required>
                    </div>
                    <div class="inputs">
                        <label for="">Número de casa</label>
                        <input type="number" name="numCasa" id="" placeholder="Ingresa número de casa" required>
                    </div>
                </div>
                <div class="columnasFormulario">
                    <div class="inputs">
                        <label for="">Nombre del negocio</label>
                        <input type="text" name="txtNegocio" id="" placeholder="Ingresa nombre del negocio" required>
                    </div>
                    <div class="inputs">
                        <label for="">Categoria de comidas</label>
                        <div class="seleccion">
                            <select name="lstTipoComida" id="">
                                <option>Seleccionar categoria</option>
                                    <?php //RECORRO LOS REGISTROS Y LOS IMPRIMO
                                    for($rr=0;$rr<count($datos);$rr++){
                                    echo '<option value="'.$datos[$rr]["ID"].'">'.$datos[$rr]["CATEGORIA"].'</option>';
                                    }
                                    ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="inputs">
                    <label for="">Dirección del negocio</label>
                    <input type="text" name="txtDireccion" id="" placeholder="Ingresa dirección del negocio" required>
                </div>
                <div class="columnasFormulario">
                    <div class="inputs">
                        <label for="">Horario Apertura</label>
                        <input type="time" name="horarioApertura" id="" required>
                    </div>
                    <div class="inputs">
                        <label for="">Horario Cierre</label>
                        <input type="time" name="horarioCierre" id="" required>
                    </div>
                </div>
                <div class="columnasFormulario">
                    <div class="inputs">
                        <button type="submit" name="btnRegistrar">Registrarse</button>
                    </div>
                    <div class="inputs">
                        <button type="reset"><a href="registroSesion.php">Cancelar</a></button>
                    </div>
                </div>
            </form>
        </section>
    </div>
    
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