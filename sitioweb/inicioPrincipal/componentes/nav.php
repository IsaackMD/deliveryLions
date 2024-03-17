<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.8/glider.min.css">
<link rel="stylesheet" href="../../css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>


<nav>
    <ul class="sidebar">
        <li class="close" onclick="hideSidebar()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
        <li class="sections"><a href="inicioPrincipal.php#inicio">Inicio</a></li>
        <li class="sections"><a href="inicioPrincipal.php#categoria">Categorias</a></li>
        <li class="sections"><a href="inicioPrincipal.php#servicios">Servicios</a></li>
        <li class="sections"><a href="inicioPrincipal.php#nosotros">Nosotros</a></li>
        <li class="sections"><a href="registroSesion.php">Registrar</a></li>
        <li class="sections"><a href="inicioSesion.php">Iniciar Sesión</a></li>
    </ul>
    <ul>
        <li class="logo"><a href="<?php echo $ruta . "../inicioPrincipal.php"; ?>"><img src="../img/logo.jpg" alt=""></a></li>
        <li class="sections hideOnMobile"><a href="inicioPrincipal.php#inicio">Inicio</a></li>
        <li class="sections hideOnMobile"><a href="inicioPrincipal.php#categoria">Categorias</a></li>
        <li class="sections hideOnMobile"><a href="inicioPrincipal.php#servicios">Servicios</a></li>
        <li class="sections hideOnMobile"><a href="inicioPrincipal.php#nosotros">Nosotros</a></li>
        <li class="sections hideOnMobile"><a href="registroSesion.php">Registrar</a></li>
        <li class="sections hideOnMobile"><a href="inicioSesion.php">Iniciar Sesión</a></li>
        <li class="sections menu-button" onclick=showSidebar()><a  href="#" ><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
    </ul>
</nav>
    