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
    
    <div class="cuerpoFormulario" style="margin-top:40px; margin-bottom:40px;">
        <section class="formularioRegistro">
            <div class="formularioCuerpo">
                <div class="columnasFormulario" style="margin-top: 20px; margin-bottom: 30px;">
                    <div class="inputs" style="text-align: center;">
                        <label for="" style="font-weight: bold;">Registrarse como afiliado:</label>
                        <button><a href="registroAfiliado2.php">Registrarse</a></button>
                    </div>
                    <div class="inputs" style="text-align: center;">
                        <label for="" style="font-weight: bold;">Registrarse como residente:</label>
                        <button><a href="registroResidente2.php">Registrarse</a></button>
                    </div>
                </div>
            </div>
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