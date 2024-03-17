<link rel="stylesheet" href="../../css/nav.css">
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
<?php
$ruta="https://deliverylions.000webhostapp.com/sitioweb/";

// Tu código de autenticación...

if(isset($_SESSION['nRol'])){
    if ($_SESSION['nRol'] == 'Administrador') {
        ?> 
            <nav>
                <ul class="sidebar">
                    <li class="close" onclick="hideSidebar()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
                    <li class="sections"><a href="<?php echo $ruta . "administrador/InicioAdmin.php";?>">Inicio</a></li>
                    
                    <li class="sections"><a href="<?php echo $ruta . "administrador/mostrarafiliados.php";?>">Afiliado</a></li>
                    <li class="sections"><a href="<?php echo $ruta . "administrador/mostrarclientes.php";?>">Clientes</a></li>
                    <li class="sections"><a href="<?php echo $ruta . "view/html/logout.php"; ?>">Cerrar Sesión</a></li>

                </ul>
                <ul>
                    <li class="logo"><a href="#"><img src="../img/logo.jpg" alt=""></a></li>
                    <li class="sections hideOnMobile"><a href="<?php echo $ruta . "administrador/InicioAdmin.php";?>">Inicio</a></li>
                    <li class="sections hideOnMobile"><a href="<?php echo $ruta . "administrador/mostrarafiliados.php";?>">Afiliado</a></li>
                    <li class="sections hideOnMobile"><a href="<?php echo $ruta . "administrador/mostrarclientes.php";?>">Clientes</a></li>
                    <li class="sections hideOnMobile"><a href="<?php echo $ruta . "view/html/logout.php"; ?>">Cerrar Sesión</a></li>
                    <li class="sections menu-button" onclick=showSidebar()><a  href="#" ><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
                </ul>
            </nav>
        <?php
    } elseif ($_SESSION['nRol'] == 'Cliente') {
        ?>
            <nav>
                <ul class="sidebar">
                    <li class="close" onclick="hideSidebar()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
                    <li class="sections"><a href="<?php echo $ruta . "view/client/"; ?>">Inicio</a></li>
                    <li class="sections"><a href="<?php echo $ruta . "view/client/products.php"; ?>">Negocios</a></li>
                    <li class="sections"><a href="<?php echo $ruta . "view/client/orders.php" ; ?>">Pedidos</a></li>
                    <li class="sections"><a href="<?php echo $ruta . "view/client/profile.php"; ?>">Perfil</a></li>
                    <li class="sections"><a href="<?php echo $ruta ."view/html/logout.php"; ?>">Cerrar Sesión</a></li>
                </ul>
                <ul>
                    <li class="logo"><a href="#"><img src="../../img/logo.jpg" alt=""></a></li>
                    <li class="sections hideOnMobile"><a href="<?php echo $ruta . "view/client/"; ?>">Inicio</a></li>
                    <li class="sections hideOnMobile"><a  href="<?php echo $ruta . "view/client/products.php"; ?>">Negocios</a></li>
                    <li class="sections hideOnMobile"><a href="<?php echo $ruta . "view/client/orders.php" ; ?>">Pedidos</a></li>
                    <li class="sections hideOnMobile"><a href="<?php echo $ruta . "view/client/profile.php"; ?>">Perfil</a></li>
                    <li class="sections hideOnMobile"><a href="<?php echo $ruta ."view/html/logout.php"; ?>">Cerrar Sesión</a></li>
                    <li class="sections menu-button" onclick=showSidebar()><a  href="#" ><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
                </ul>
            </nav>
        <?php
    } elseif ($_SESSION['nRol'] == 'Afiliado') {
        ?>
            <nav>
                <ul class="sidebar">
                    <li class="close" onclick="hideSidebar()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg>a href="<?php echo $ruta . "administrador/inicioAfiliado.php";?>"></a></li>
                    <li class="sections"><a href="#">Inicio</a></li>
                    <li class="sections"><a href="#">Pedidos</a></li>
                    <li class="sections"><a href="#">Menú</a></li>
                    <li class="sections"><a href="#">Perfil</a></li>
                    <li class="sections"><a href="https://ingrekisb24.000webhostapp.com/DeliveryLions/view/html/logout.php">Cerrar Sesión</a></li>
                </ul>
                <ul>
                    <li class="logo"><a href="#"><img src="../../img/logo.jpg" alt=""></a></li>
                    <li class="sections hideOnMobile"><a href="#">Inicio</a></li>
                    <li class="sections hideOnMobile"><a href="#">Pedidos</a></li>
                    <li class="sections hideOnMobile"><a href="#">Menú</a></li>
                    <li class="sections hideOnMobile"><a href="#">Perfil</a></li>
                    <li class="sections hideOnMobile"><a href="https://ingrekisb24.000webhostapp.com/DeliveryLions/view/html/logout.php">Cerrar Sesión</a></li>
                    <li class="sections menu-button" onclick=showSidebar()><a  href="#" ><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
                </ul>
            </nav>
        <?php
    }
}else{
        ?>
        <nav>
            <ul class="sidebar">
                <li class="close" onclick="hideSidebar()"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
                <li class="sections"><a href="#">Inicio</a></li>
                <li class="sections"><a href="#">Nosotros</a></li>
                <li class="sections"><a href="#">Servicios</a></li>
                <li class="sections"><a href="#">Contacto</a></li>
                <li class="sections"><a href="<?php echo $ruta ."registro.php"; ?>">Registrar</a></li>
            </ul>
            <ul>
                <li class="logo"><a href="#"><img src="../../img/logo.jpg" alt=""></a></li>
                <li class="sections hideOnMobile"><a href="#">Inicio</a></li>
                <li class="sections hideOnMobile"><a href="#">Nosotros</a></li>
                <li class="sections hideOnMobile"><a href="#">Servicios</a></li>
                <li class="sections hideOnMobile"><a href="#">Contacto</a></li>
                <li class="sections hideOnMobile"><a href="<?php echo $ruta ."registro.php"; ?>">Registrar</a></li>
                <li class="sections menu-button" onclick=showSidebar()><a  href="#" ><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
            </ul>
            </nav>
            <?php
    }
?>

 
