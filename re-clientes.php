<?php session_start();

    if(isset($_SESSION['usuario'])) {
        header('location: cliente-regis.php');
    }

    
    
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        
        $nom = $_POST['nombre'];
        $tel = $_POST['telefono'];
        $dir = $_POST['direccion'];
        $cor = $_POST['correo'];
        $fec = $_POST['fecha'];
        $plan = $_POST['plan'];
        
        
        
        $error = '';
        
        
        
        if ($error == ''){
            $statement = $conexion->prepare('INSERT INTO login (id, correo, usuario, clave) VALUES (null, :correo, :usuario, :clave)');
            $statement->execute(array(
                
                ':correo' => $correo,
                ':usuario' => $usuario,
                ':clave' => $clave
                
            ));
            
            
        }
    }


    

?>