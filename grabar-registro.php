<?php
include ('conexion.php');   
?>

<?php
     $user=$_POST["usuario"];
     $nombre=$_POST["nombre"];
     $clave=$_POST["contraseña"];
    
    $respuestas = array();
    $conexion = new conexion();
    $respuestas= $conexion->ejecutar("INSERT INTO users (usuario, nombre, clave) VALUES ('$user', '$nombre', '$clave')");

    if($respuestas <> ''){
        
        echo "registro grabado correctamente";
        $a=0;
        for ( $i=0;$i<100000000;$i++) {
           $a++;
        }
        header ('location:index.php ');
    } 
    
    else {
        echo "el registro no se grabo";
    
    }
?>
