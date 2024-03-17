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
    
    <section>
        <div class="content-text">
            <h3>Servicios</h3>
        </div>
        <div class="serviciosContexto">
            <div id="pedidoDomicilio">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-map-pin" width="70" height="70" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff9300" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0" />
                    <path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                </svg>
                <br>
                <h3><span>Pedido a domicilio</span></h3>
            </div>
            <div>
                <p style="color: white;">Disfruta de la conveniencia de recibir tus platillos favoritos directamente en tu puerta con nuestro servicio de Pedido a Domicilio en Delivery Lions. Explora la variedad de restaurantes, selecciona tus platillos preferidos y realiza tu pedido en solo unos clics. Además, facilitamos el contacto directo con el negocio para ajustar detalles específicos de tu pedido, garantizando una experiencia personalizada y satisfactoria.</p>
            </div>
            <div id="envioExpress">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-truck" width="70" height="70" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff9300" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    <path d="M5 17h-2v-11a1 1 0 0 1 1 -1h9v12m-4 0h6m4 0h2v-6h-8m0 -5h5l3 5" />
                </svg>
                <br>
                <h3><span>Envios Express</span></h3>
            </div>
            <div>
                <p style="color: white;">En Delivery Lions, comprendemos que la velocidad es esencial para satisfacer tus antojos. Con nuestro servicio de Envíos Express, los pedidos son gestionados directamente por el negocio, asegurando la frescura y rapidez en cada entrega. Además, mantenemos la posibilidad de contactar directamente con el establecimiento para cualquier solicitud especial o modificación en tu pedido. Experimenta la eficiencia y la calidad con Envíos Express.</p>
            </div>
            <div id="reservaPedido">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-cube-send" width="70" height="70" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ff9300" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <path d="M16 12.5l-5 -3l5 -3l5 3v5.5l-5 3z" />
                    <path d="M11 9.5v5.5l5 3" />
                    <path d="M16 12.545l5 -3.03" />
                    <path d="M7 9h-5" />
                    <path d="M7 12h-3" />
                    <path d="M7 15h-1" />
                </svg>
                <br>
                <h3><span>Reserva de pedido</span></h3>
            </div>
            <div>
                <p style="color: white;">En Delivery Lions, valoramos la comunicación directa contigo y con los negocios locales. Ofrecemos la opción de contactar directamente con el establecimiento elegido para ajustar detalles específicos de tu pedido. Ya sea para personalizar tu plato, agregar instrucciones especiales o hacer cambios de última hora, la comunicación directa te brinda la flexibilidad necesaria para garantizar que tu pedido sea exactamente como lo deseas. Estamos aquí para facilitar una experiencia culinaria a tu medida. ¡Conéctate directamente con el negocio y disfruta de tus platillos preferidos de la manera que más te guste!</p>
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