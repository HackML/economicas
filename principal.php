
    <?php
        session_start();
        include ('header.php');
        include ('conexion.php');

    ?>  
    <?
    echo $_SESSION["conectado"];
    $respuestas = array();
    ?>
    <head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
  <header>
    <!-- place navbar here -->
  </header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
              <ul class="navbar-nav">
                  <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="logout.php">Salir del sistema</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Paises
                      </a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                      </ul>
                  </li>
              </ul>
          </div>
      </div>
  </nav>
  <main>
    <!-- <h4 style="background-color: cyan; width: 100%; height: 50px;">Esta es la pagina Principal</h4> -->
    <?
    $conexion = new conexion();
    $respuestas= $conexion->consultar("SELECT * FROM `country` where name<>''  ");
    ?>
    <div class="container">
        <h2 class="text-center">Listado de paises Registrados</h2><br><br>
    
        <table class="table table-striped" border="1">
            <thead>
                <th class="text-center">Codigo</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Continente</th>
                
                <th class="text-center">Region</th>
            </thead>
            <tbody>
            <?php
            $canti=0;
            foreach($respuestas as $respuesta){ 
                $canti++;
                ?>
                <tr>
                    <td class="text-center"><?php echo $respuesta['code'];?></td>
                    <td class="text-center"><?php echo $respuesta['name'];?></td>
                    <td class="text-center"><?php echo $respuesta['continent'];?></td>
                    <td class="text-center"><?php echo $respuesta['region'];?></td>
                    <!-- <td class="text-center"><button class="btn btn-warning"><a href="eliminar.php?a=< ? echo $respuesta['id'] ?>">Eliminar</a></button><button class="btn btn-info espaciomini"><a href="modif.php?a=<? echo $respuesta['id'] ?>"> Modificar</a></button> </td> -->
            </tr>

            <?php
            }
            ?>
            </tbody>
        </tabla>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
    <h4 class="text-center" style="background-color: black; position: absolute; bottom:0;width: 100%; height: 60px;">Esto es el Footer</h4>
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
