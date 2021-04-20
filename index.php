<?php session_start();

    if(isset($_SESSION['usuario'])) {
        header('location: clientes.html');
    }else{
        header('location: login.php');
    }


?>