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
    <link rel="stylesheet" href="../../css/client_styles/detallsproduct.css">
</head>
<body>
    <?php include "../components/nav.php"; ?>
    <main>
        <div class="img-container">
            <img id="imgcomida" src="../../img/comida.webp" alt="imagen de comida">
        </div>
        <div class="info-container">
            <div class="title-container">
                <h1 id="NomComida">Hamburguesa</h1>
            </div>
            <div class="descr-content negocio">
                Negocio: <p id="Negocio">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, dolorum.</p>
            </div>
            <div class="descr-content">
                <p id="descp">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, dolorum.</p>
            </div>
            <div class="descr-content comid-content" id="ComiIncl">
            </div>
            
            <div class="cost-content">
                <h4 id="cost">$10</h4>
            </div>
            <div class="btn-container"><button id="btn" class="btn-buy">Comprar</button></div>
        </div>
    </main>
    <?php include_once '../components/footer.php' ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>

<script>
    function getUrlParameter(name) {
        name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
        var regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
        var results = regex.exec(location.search);
        return results === null ? '' : decodeURIComponent(results[1].replace(/\+/g, ' '));
    }
    
    $(document).ready(function(){
        var ID = getUrlParameter('ID');
        var token = getUrlParameter('token');
        // var token_rsp = sha1(ID);
    
        // if (token == token_rsp){
        $.post("procesoDetPro.php", { ID: ID }, function(data){
            data= JSON.parse(data);
            console.log("datos:");
            console.log(data);
            $("#imgcomida").attr("src", data[0]['imagen']);
            $("#Negocio").text(data[0]['Negocio']);
            $("#NomComida").text(data[0]['NomMenu']);
            $("#descp").text(data[0]['descripMenu']);
            $("#ComiIncl").html(data[0]['comidaIncluida']);
            $("#cost").html("$"+data[0]['precio']+"MXN");
            $('#btn').attr("onclick", "newFunction("+data[0]['ID']+")");
        });
        // }
    });

</script>

</html>