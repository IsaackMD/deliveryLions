<?php
session_start();
$usuario = "";
$contra = "";

if (isset($_POST["btnEntrar"])) {
    if (!empty($_REQUEST['txtUsuario']) && !empty($_REQUEST['txtContrasena'])) {
        $usuario = htmlspecialchars($_REQUEST['txtUsuario']);
        $contra = htmlspecialchars($_REQUEST['txtContrasena']);

        $cliente = new SoapClient(null, array(
            'uri' => 'http://localhost/',
            'location' => 'https://deliverylions.000webhostapp.com/serviciosweb/serviciosweb.php'
        ));
        echo $usuario."-".$contra;
        $datos = $cliente->acceso($usuario, $contra);
        if ((int)$datos[0]["ID"] != 0) {
            if (!isset($_SESSION['ID'])) $_SESSION['ID'] = $datos[0]["ID"];
            if (!isset($_SESSION['NOMBRE'])) $_SESSION['NOMBRE'] = $datos[1]["NOMBRE"];
             $_SESSION['nRol'] = $datos[2]["ROL"];
             $_SESSION['USU']= $datos[3]['USU'];
          echo '<script language="javascript">alert("Bienvenido al sistema '.$datos[1]["NOMBRE"].', estás accediendo como '.$_SESSION['nRol'].'");</script>';
            echo '<script language="javascript">';
            echo 'var nRol = "' . $_SESSION['nRol'] . '";';
            
            echo 'if (nRol === "Administrador") {';
            echo '    alert("Bienvenido al sistema '.$datos[1]["NOMBRE"].', estás accediendo como Administrador");';
            echo '    window.location.href = "https://deliverylions.000webhostapp.com/sitioweb/administrador/InicioAdmin.php";';
            echo '} else if (nRol === "Afiliado") {';
            echo '    alert("Bienvenido al sistema '.$datos[1]["NOMBRE"].', estás accediendo como Afiliado");';
            echo '    window.location.href = "https://deliverylions.000webhostapp.com/sitioweb/afiliado/inicioAfiliado.php";';
            echo '} else if (nRol === "Cliente") {';
            echo '    alert("Bienvenido al sistema '.$datos[1]["NOMBRE"].', estás accediendo como Cliente");';
            echo '    window.location.href = "https://deliverylions.000webhostapp.com/sitioweb/view/client/";';
            echo '}';
            echo '</script>';
        } else {
            $datos[0] = 0;
            echo '<script language="javascript">alert("Acceso denegado, los datos son incorrectos o tu perfil de afiliado no ha sido dado de alta.");</script>';
        }
    } else {
        echo '<script language="javascript">alert("Se deben ingresar los datos de acceso!");</script>';
    }
}
?>
<!--AQUII VA LO DE HTML 5-->
<!DOCTYPE html>
<!--LENGUAKJE ESPAÑOL-->
<html lang="es">
    <!--CONFIGURACION DE PROPIEDADES DE LA PAGINA -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registrar</title>
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
                /*background-color: #FF914D;*/
                padding: 25px;
                border-radius: 8px;
                box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
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
                text-decoration: none;
            }
            .formularioCuerpo  button:hover {
                /*background-color: white;*/
                background-color: #362222;
                border-color: #935230;
                color: white;
            }
            .formularioCuerpo a{
                text-decoration:none;
                color:#362222;
                font-weight: bold;
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
        <!-- Menu -->
        <?php include "componentes/nav.php"; ?>
        
        <div class="cuerpoFormulario">
            <section class="formularioRegistro" style="max-width: 500px;">
                <form action="" method="POST" class="formularioCuerpo" style="margin-top: 40px; margin-bottom: 40px;">
                    <div style="margin-bottom: 10px;">
                        <h3>Iniciar sesión</h3>
                    </div>
                    <div class="columnasFormulario">
                        <div class="inputs">
                            <label for="">Usuario:</label>
                            <input type="text" name="txtUsuario" placeholder="Usuario" required>
                        </div>
                        <div class="inputs">
                            <label for="">Contraseña:</label>
                            <input type="password" name="txtContrasena" placeholder="Contraseña" required>
                        </div>
                    </div>
                    <div class="columnasFormulario">
                        <div class="inputs">
                            <button type="submit" name="btnEntrar" value="Entrar" id="btnEntrar">Entrar</button>
                        </div>
                        <div class="inputs">
                            <button type="reset" name="btnCancelar" value="Cancelar" id="btnCancelar">Cancelar</button>
                        </div>
                    </div>        
                    <div class="columnasFormulario" style="text-align: center;">
                        <div class="inputs">
                            <p>¿No tienes cuenta? <a href="registroSesion.php">Registrate</a></p>
                        </div>
                    </div>   
                </form>
            </section>
        </div>
        
        <br>
    
        <form id="frmAcceso" method="POST">
           
            <!--CUERPO DE LA PAGINA, CONTROLES DE LA PAGINA -->
            <!-- Inicio de sesión -->
            <main>
                    <div class="h3Sesion">
                        <h3>⸺⸺⸺ Inicio de sesión ⸺⸺⸺</h3>
                    </div>
                    <br>
                    <div class="cont1">
                      <form id=inicioSesion> 
                        <div class="contenedor" style="height: 400px">
                            <div>
                                <div>
                                    <input type="text" class="caja-sesion" name="txtUsuario" placeholder="Usuario">
                                </div>
                                <br>
                                <div>
                                    <input type="password" class="caja-sesion" name="txtContrasena" placeholder="Contraseña">
                                </div>
                                <br>
                                <input type="submit" class="btnSesion" name="btnEntrar" value="Entrar" id="btnEntrar">
                                <br>
                                <input type="reset" class="btnSesion" name="btnCancelar" value="Cancelar" id="btnCancelar">
                                <br>
                                <br>
                                <a class="btnSesion" href="registroSesion.php">Registrarse</a>
                            </div>
                          </div>
                          <div class="contenedor2">
                             <img src="../img/iniciosesion/comida1.png" alt="Comida1" class="imgS"; style="width: auto;">                  
                          </div>
                       </form>
                    </div>
            </main>
        </form>
        <footer>
            <?php include "componentes/footer.php"; ?>
        </footer>
    </body>
</html>
