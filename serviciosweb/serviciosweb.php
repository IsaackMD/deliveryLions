<?php
    include 'clsservicios.php';
    $soap=new SoapServer(null,array('uri'=>'http://localhost/'));
    $soap->setClass('clsservicios');
    $soap->handle();
?>