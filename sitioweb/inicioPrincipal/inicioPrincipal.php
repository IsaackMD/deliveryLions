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
    
    <section id="inicio" class="content"> 
        <div class="content-text">
            <h1>BIENVENIDO DELIVERY LIONS</h1>
        </div>
        <div class="content-text">
            <h3>Vendemos Cualquier comida</h3>
        </div>
    </section>
    <main>
        <section id="categoria">
            <div class="content-text">
                <h3>Categoría</h3>
            </div>
            <div class="carrusel">
                <div class="carrusel-list" id="carrusel-list">
                    <button class="carrusel-arrow carrusel-prev" id="button-prev" data-button="button-prev"
                        onclick="">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-left"
                            class="svg-inline--fa fa-chevron-left fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 320 512">
                            <path fill="currentColor"
                                d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z">
                            </path>
                        </svg>
                    </button>
                    <div class="carrusel-track" id="track">
                        <div class="carrusel-item">
                            <div >
                                <a href="">
                                    <picture>
                                        <img src="../img/icons/comidaRapida.png" alt="Comida rápida">
                                    </picture>
                                </a>
                            </div>
                        </div>
                        <div class="carrusel-item">
                            <div >
                                <a href="">
                                    <picture>
                                        <img src="../img/icons/comidaMexicana.png" alt="Comida mexicana">
                                    </picture>
                                </a>
                            </div>
                        </div>
                        <div class="carrusel-item">
                            <div >
                                <a href="">
                                    <picture>
                                        <img src="../img/icons/comidaExtranjera.png" alt="Comida extranjera">
                                    </picture>
                                </a>
                            </div>
                        </div>
                        <div class="carrusel-item">
                            <div >
                                <a href="">
                                    <picture>
                                        <img src="../img/icons/comidaMarina.png" alt="Comida marina">
                                    </picture>
                                </a>
                            </div>
                        </div>
                        <div class="carrusel-item">
                            <div >
                                <a href="">
                                    <picture>
                                        <img src="../img/icons/comidaVegana.png" alt="Comida vegana">
                                    </picture>
                                </a>
                            </div>
                        </div>
                        <div class="carrusel-item">
                            <div >
                                <a href="">
                                    <picture>
                                        <img src="../img/icons/comidaVegetariana.png" alt="Comida vegetariana">
                                    </picture>
                                </a>
                            </div>
                        </div>
                        <div class="carrusel-item">
                            <div >
                                <a href="">
                                    <picture>
                                        <img src="../img/icons/postres.png" alt="Postres">
                                    </picture>
                                </a>
                            </div>
                        </div>
                    </div>
                    <button class="carrusel-arrow carrusel-next" id="button-next" data-button="button-next"
                    onclick="">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right"
                        class="svg-inline--fa fa-chevron-right fa-w-10" role="img" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 320 512">
                        <path fill="currentColor"
                            d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z">
                        </path>
                    </svg>
                </button>
                </div>
                <div role="tablist" class="carousel__indicadores"></div>
            </div>
        </section>
        
        <section id="servicios">
            <div class="content-text">
                <h3>Servicios</h3>
            </div>
            <div class="servicios">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff9300" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                        <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                      </svg>
                      <br>
                    <h4 style="color: white;">Pedido a domicilio</h4>
                    <br>
                    <a class="btnSesion" href="servicios.php#pedidoDomicilio">Más información</a>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-truck" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff9300" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        <path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                      </svg>
                      <br>
                    <h4 style="color: white;">Envíos express</h4>
                    <br>
                    <a class="btnSesion" href="servicios.php#envioExpress">Más información</a>
                </div>
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cube-send" width="100" height="100" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff9300" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                        <path d="M16 12.5l-5 -3l5 -3l5 3v5.5l-5 3z" />
                        <path d="M11 9.5v5.5l5 3" />
                        <path d="M16 12.545l5 -3.03" />
                        <path d="M7 9h-5" />
                        <path d="M7 12h-3" />
                        <path d="M7 15h-1" />
                      </svg>
                      <br>
                    <h4 style="color: white;">Reserva de pedido</h4>
                    <br>
                    <a class="btnSesion" href="servicios.php#reservaPedido">Más información</a>
                </div>
            </div>
        </section>

        <section id="nosotros">
            <div class="content-text">
                <h3>Nosotros</h3>
            </div>
            <div class="nosotros">
                <div> <!--IMAGENES 1-->
                    <img src="../img/iniciosesion/img1.png" alt="" style="margin-right: 10px;">
                    <img src="../img/iniciosesion/img2.png" alt="">
                </div>    
                <div>
                    <p style="color: white; text-align:justify;">En Delivery Lions, nos enorgullece ofrecerte una plataforma intuitiva y eficiente para gestionar tus pedidos de comida con comodidad y estilo. En el corazón de nuestra misión está la pasión por brindarte un servicio de pedido de alimentos excepcional, diseñado específicamente para satisfacer tus necesidades en Asturias. Nos esforzamos por facilitar tu vida cotidiana al poner a tu alcance una selección diversa de negocios de calidad, asegurando que cada comida sea una experiencia deliciosa y sin complicaciones.</p>
                </div>
                <div>
                    <img src="../img/iniciosesion/img3.png" alt="" style="margin-right: 10px;">
                    <img src="../img/iniciosesion/img4.png" alt="">
                </div>
                <div>
                    <p style="color: white; text-align:justify;">Nuestro equipo está comprometido con la excelencia en el servicio al cliente. Explora nuestra aplicación y descubre la comodidad de tener los mejores negocios de la zona al alcance de tu mano. En Delivery Lions, estamos dedicados a hacer que tus experiencias gastronómicas en Asturias sean inolvidables.</p>
                </div>
            </div>
        </section>

        
    </main>
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
