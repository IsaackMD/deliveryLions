<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Afiliado</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/adminstyles/adminS.css">
</head>
<body>
    <?php include "../view/components/nav.php"; ?>
    <section class="content"> 
        <div class="content-text">
            <h1>BIENVENIDO ADMINISTRADOR</h1>
        </div>
        <div class="content-text">
            <h3>Vendemos Cualquier comida</h3>
        </div>
    </section>
        
    <main>
        <div class="content-text">
            <h3>Usuarios</h3>
        </div>
        <div class="TipUsuarios">
            <div class="itemAfiliado">
                <div >
                    <a href="mostrarafiliados.php">
                        <picture>
                            <img src="img/iconAfiliado.png" alt="Afiliado">
                        </picture>
                    </a>
                </div>
            </div>
        
            <div class="itemCliente">
                <div >
                    <a href="mostrarclientes.php">
                        <picture>
                            <img src="img/iconCliente.png" alt="Cliente">
                        </picture>
                    </a>
                </div>
            </div>
        </div>
    </main>
    <br>
    <?php include "../inicioPrincipal/componentes/footer.php"; ?>
</body>
</html>