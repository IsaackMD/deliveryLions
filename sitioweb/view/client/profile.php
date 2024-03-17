<?php 
    session_start();
    $nombre="";
    $img="";
    $usuario="";
    $email="";
    $telefono="";
    $genero="";
    $nacimiento="";
    $seccion="";
    $privada="";
    $casa="";
    $registro="";
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
        
    $datos=$cliente->listarDatos($_SESSION['USU']);
     
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.8/glider.min.css">
    <link rel="stylesheet" href="../../css/client_styles/inicio.css">
    
    <style>
        .cuerpo{
            display: flex;
            column-gap: 40px;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        .cuadros{
            position: relative;
            max-width: 500px;
            width: 100%;
            background: #D48B3E;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .cuadros h3{
            font-size: 1.5rem;
            color: black;
            font-weight: 500;
            text-align: center;
        }
        .contenido{
            width: 100%;
        }
        .contenido .datos{
            width: 100%;
            margin-top: 20px;
        }
        .datos label{
            color: black;
        }
        .contenido .datos img{
            width: 300px; 
            height: auto;
            display: block;
            margin: 0 auto;
            border-radius: 50%;
        }
        .contenido .datos input{
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
        .contenido .columnas{
            display: flex;
            column-gap: 20px;
        }
        @media(max-width: 800px){
            .cuerpo{
                flex-direction: column;
                align-items: stretch;
                justify-content: center;
            }
            .cuadros{
                max-width: 100%;
                margin-bottom: 20px;
            }
            .cuadros .contenido .datos img{
                max-width: 100%;
                height: auto;
            }
            .cuadros .contenido .datos{
                flex-wrap: wrap;
            }
        }
        @media(max-width: 450px){

            .cuadros{
                padding: 15px;
                justify-content: center;
                align-items: center;
            }
            .contenido .datos input{
                font-size: 0.9rem;
                height: 35px;
            }
            .contenido .datos label{
                font-size: 0.9rem;
            }
            .contenido .columnas{
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <?php include "../components/nav.php"; ?>
    <main>
        
        <section id="perfil" class="cuerpo" style="margin-top:40px; margin-bottom:40px;">
            <?php foreach($datos as $datosP){
            ?>
            <div class="cuadros" style="max-width: 400px;">
                <div class="contenido">
                    <div class="datos">
                        <img src="<?php echo $datosP['IMAGEN']?>" alt="Imagen Perfil">
                    </div>
                    <div class="datos">
                        <label for="">Nombre completo:</label>
                        <?php echo '<input type="text" value="'.$datosP['NOMBRE'].'" disabled>';?>
                    </div>
                </div>
            </div>
            <div class="cuadros">
                <h3>Mis datos</h3>
                <div class="contenido">
                    <div class="datos">
                        <label for="">Correo electrónico:</label>
                        <?php echo '<input type="text" value="'.$datosP['EMAIL'].'" disabled>';?>
                    </div>
                    <div class="columnas">
                        <div class="datos">
                            <label for="">Usuario:</label>
                            <?php echo '<input type="text" value="'.$datosP['USUARIO'].'" disabled>';?>
                        </div>
                        <div class="datos">
                            <label for="">Genero:</label>
                            <?php echo '<input type="text" value="'.$datosP['GENERO'].'" disabled>';?>
                        </div>
                    </div>
                    <div class="columnas">
                        <div class="datos">
                            <label for="">Teléfono:</label>
                            <?php echo '<input type="text" value="'.$datosP['TELEFONO'].'" disabled>';?>
                        </div>
                        <div class="datos">
                            <label for="">Fecha de nacimiento:</label>
                            <?php echo '<input type="text" value="'.$datosP['NACIMIENTO'].'" disabled>';?>
                        </div>
                    </div>
                    <div class="datos">
                        <label for="">Privada:</label>
                        <?php echo '<input type="text" value="'.$datosP['PRIVADA'].'" disabled>';?>
                    </div>
                    <div class="columnas">
                        <div class="datos">
                            <label for="">Seccion:</label>
                            <?php echo '<input type="text" value="'.$datosP['SECCION'].'" disabled>';?>
                        </div>
                        <div class="datos">
                            <label for="">Número de casa:</label>
                            <?php echo '<input type="text" value="'.$datosP['CASA'].'" disabled>';?>
                        </div>
                    </div>
                    <div class="datos">
                        <label for="">Fecha y hora de registro:</label>
                            <?php echo '<input type="text" value="'.$datosP['REGISTRO'].'" disabled>';?>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </section>

    </main>
    <?php include_once '../components/footerCliente.php' ?>
</body>
</html>