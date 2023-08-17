<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Venta de Boletos de Baloncesto</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    h1 {
      margin: 0;
    }

    main {
      margin: 20px;
    }

    .evento {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
    }

    .evento img {
      width: 150px;
      margin-right: 20px;
    }

    .evento .informacion {
      flex-grow: 1;
    }

    .evento h2 {
      margin: 0;
    }

    .evento p {
      margin: 5px 0;
    }

    .evento .boton-comprar {
      background-color: #333;
      color: #fff;
      padding: 10px 20px;
      text-decoration: none;
      margin-right: 10px;
    }

    .evento .boton-apartar {
      background-color: #333;
      color: #fff;
      padding: 10px 20px;
      text-decoration: none;
    }

    .evento .boton-comprar:hover,
    .evento .boton-apartar:hover {
      background-color: #555;
    }
  </style>
</head>
<body>
  <nav>
  <a href="logout.php" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
  </nav>
  <header>
    <h1>Venta de Boletos de Baloncesto</h1>
  </header>

  <main>
    <div class="evento">
      <img src="NBAMX.jpg" alt="Evento 1">
      <div class="informacion">
        <h2>PLATERAS VS TIGRESAS</h2>
        <p>Fecha: 1 de Septiembrede 2023</p>
        <p>Lugar: Estadio XYZ</p>
        <p>Precio: $50</p>
       <!-- <a href="compra.html" class="boton-comprar">Comprar boletos</a>-->
        <a href="apartado.html" class="boton-apartar">Asientos</a>
      </div>
    </div>

    <div class="evento">
      <img src="NBAMX1.jpg" alt="Evento 2">
      <div class="informacion">
        <h2>MINEROS VS DURANGO</h2>
        <p>Fecha: 15 de agosto de 2023</p>
        <p>Lugar: Estadio ABC</p>
        <p>Precio: $60</p>
        <!--<a href="compra.html" class="boton-comprar">Comprar boletos</a>-->
        <a href="apartado.html" class="boton-apartar">Asientos</a>
      </div>
    </div>

    <div class="evento">
      <img src="perdidas.jpg" alt="Evento 1">
      <div class="informacion">
        <h2>Evento quien sabe de que</h2>
        <p>Fecha: 10 de Septiembre de 2023</p>
        <p>Lugar: Multiforo</p>
        <p>Precio: $ Gratis</p>
       <!-- <a href="compra.html" class="boton-comprar">Comprar boletos</a>-->
        <a href="apartado.html" class="boton-apartar">Asientos</a>
      </div>
    </div>

    <!-- Agrega más eventos aquí -->

  </main>
</body>
</html>
