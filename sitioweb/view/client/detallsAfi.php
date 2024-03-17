<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
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
    <link rel="stylesheet" href="../../css/client_styles/detallsAfi.css">
</head>
<body>
    <?php include "../components/nav.php"; ?>
    <main>
        <div class="info-container">
            <div class="title-container">
                <h1>Detalle Del Vendedor</h1>
            </div>
            <div class="name-content">
                <h4 class="name">Afiliado</h4>
            </div>
            <div class="descr-content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, dolorum.</p>
            </div>
        </div>
        <div class="img-container">
            <div class="img-content">
                <img src="../../img/afi_img.png" alt="img afiliado">
            </div>
            <div class="btn-content">
                <button class="btn-products">Ver Productos</button>
            </div>
        </div>
    </main>
    <?php include_once '../components/footer.php' ?>
</body>
</html>