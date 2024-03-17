<php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/adminstyles/adminS.css">
</head>
<body>
    <?php include "../view/components/navAfiliado.php"; ?>
     <section class="content"> 
        <div class="content-text">
            <h1>BIENVENIDO AFILIADO</h1>
        </div>
        <div class="content-text">
            <h3>Revisa pedidos y menus</h3>
        </div>
    </section>
    <main>
        <div class="TipUsuarios">
            <div class="itemAfiliado">
            <div class="content-text">
                <h2>Pedidos</h2>
            </div>
                <div >
                    <a href="pedidoAfiliado.php">
                        <picture>
                            <img src="img/pedidoAfiliado.jpg" alt="Pedidos">
                        </picture>
                    </a>
                </div>
            </div>
        
            <div class="itemCliente">
                <div class="content-text">
                    <h2>Menus</h2>
                </div>
                <div >
                    <a href="menuAfiliado.php">
                        <picture>
                            <img src="img/menuAfiliado.jpg" alt="Menus">
                        </picture>
                    </a>
                </div>
            </div>
        </div>
    </main>
    <br>
      <?php include "../inicioPrincipal/componentes/footer.php"; ?>
    </footer>
</body>
</html>