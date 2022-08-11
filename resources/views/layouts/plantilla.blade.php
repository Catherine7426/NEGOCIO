
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="{{asset('css/head.css')}}">
    <link rel="stylesheet"  href="{{asset('css/home.css')}}">
    <link rel="stylesheet"  href="{{asset('css/footer.css')}}">

    <title>@yield('title')</title>


</head>
<body>

    <header>
        <img src="img/logo1.png" alt="" />
    </header>



    <div>
        <ul>
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="{{route('productos.index')}}">Productos</a></li>
            <li><a href="{{route('productos.create')}}">Crear Producto</a></li>
            <li><a href="">Inventario</a></li>
            <li><a href="about.asp">Ventas</a></li>
          </ul>
    </div>
    @yield('content')

    <div id="contenedor1">
        <footer>
          <h2>PROASEO BALDWIN | Nit: 8626153156-5</h2>
          <h4>TELEFONO 321288976</h4>
          <h3>
            Todos los derechos reservados | Dirección: Calle 17 A # 68D-88 Lunes a
            Viernes de 8:00 a.m. a 6:00 p.m<br />
            contáctenos al e-mail notificaciones@proaseo.com.co
          </h3>
        </footer>
      </div>

</body>
</html>


