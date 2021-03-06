<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"> PROYECTOS </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#"> Inicio</a>
              </li>
              <li class="nav-item">
               <!-- <a class="nav-link" href="#">Link</a> -->   
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Clases de PWII
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
  </head>
  <body>
      <div class="container">
          <div class="row justify-content-center">
          <div class="col-6 p-5 bg-white shadow-lg rounded">
              <h2> Nuevo Producto con POST </h2>
            <form method="post" action="recibe_productoPOST.php">
            <div class="form-group">
            <label for="nombre"> Nombre: </label>
            <input id="nombre" class="form-control" type="text" name="nombre">

            <label for="costo"> Costo: </label>
            <input id="costo" class="form-control" type="text" name="costo">

            <label for="precio"> Precio: </label>
            <input id="precio" class="form-control" type="text" name="precio">

            <label for="stock"> Stock: </label>
            <input id="stock" class="form-control" type="text" name="stock">

            <label for="stock minimo"> StockMinimo: </label>
            <input id="stock minimo" class="form-control" type="text" name="stockminimo">

            <button class="btn btn-primary" type="submit"> ENVIAR </button>



            </form >
        </div>

          </div>
        </div>
      </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>