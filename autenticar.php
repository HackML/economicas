<?php
session_start();
//include ('header.php');
include ('conexion.php');    
?>

<?php
    $user=$_POST["usuario"];
    $clave=$_POST["clave"];


    $conexion = new conexion();
    $respuestas= $conexion->consultar("SELECT * FROM `users` where usuario='$user' and clave='$clave'  ");

    //echo $respuestas;exit;
    ?>
        <h2 class="text-center">Listado de Usuario Ingresado</h2><br><br>
        <div class="container">
        <table class="table table-striped">
            <thead>
                <th class="text-center">Usuario</th>
                <th class="text-center">Contraseña</th>
                <th class="text-center">nombre</th>
                <th class="text-center">Acciones</th>
            </thead>
            <tbody>
            <?php
            $canti=0;
            foreach($respuestas as $respuesta){ 
                $canti++;
                ?>
                <tr>
                    <td><?php echo $respuesta['usuario'];?></td>
                    <td><?php echo $respuesta['clave'];?></td>
                    <td><?php echo $respuesta['nombre']; $nombre=$respuesta['nombre'];?></td>
                    <td class="text-center"><button class="btn btn-warning"><a href="eliminar.php?a=<? echo $respuesta['id'] ?>">Eliminar</a></button><button class="btn btn-info espaciomini"><a href="modif.php?a=<? echo $respuesta['id'] ?>"> Modificar</a></button> </td>
            </tr>

            <?php
            $_SESSION["conectado"]= $nombre;
            }
            If ($canti>0){
                echo "Hay registros";
                if ($respuesta['tipo']=='A'){
                    header('location: admin_users.php');
                }else{
                    header('Location: principal.php');
                }
            
                
            }else{
                echo "No hay registros";
                header('Location: index.php');
            }
// $nombre = $_POST['nombre'];
// $apellido = $_POST['apellido'];
// $dni = $_POST['dni'];
// $telefono = $_POST['telefono'];
// $correo = $_POST['correo'];
// $clave = $_POST['clave'];

// $sql = "insert into usuarios (nombre,apellido,documento,telefono,correo,clave,rol)
//         values ('$nombre','$apellido','$dni','$telefono','$correo','$clave','U')";
/*
$proyectos= $conexion->ejecutar($sql);
//echo $proyectos;6
$_SESSION['usuario']=$apellido+' '+$nombre;
header('Location: registrado.php');
exit;
*/
?>