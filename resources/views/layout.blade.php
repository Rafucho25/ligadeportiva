<html>
  @php
    $visitas = DB::table('visitas')->find(1)->cantidad;
    //$visitas = 10;
  @endphp
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/custom.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>    
    @yield('head')
    <title>Liga de Beisbol Uasdiana</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <a class="navbar-brand" href="/">
              <img src="/images/logo.png" width="40" height="40" alt="" loading="lazy">
            </a>
            <li class="nav-item">
              <a class="nav-link" href="/">Liga deportiva Uasdiana</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('avg')}}">Avg. Equipo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('find')}}">Buscar Jugador</a>
            </li>
          </ul>
          <form class="d-flex">
            <a class="navbar-brand" href="{{route('equipo.agronomica.index')}}">
              <img src="/images/agronomica/logo.png" width="40" height="40" alt="" loading="lazy">
            </a>
            <a class="navbar-brand" href="{{route('equipo.ciencias.index')}}">
              <img src="/images/ciencias/logo.png" width="40" height="40" alt="" loading="lazy">
            </a>
            <a class="navbar-brand" href="{{route('equipo.economia.index')}}">
              <img src="/images/economia/logo.png" width="40" height="40" alt="" loading="lazy">
            </a>
            <a class="navbar-brand" href="{{route('equipo.educacion.index')}}">
              <img src="/images/educacion/logo.png" width="40" height="40" alt="" loading="lazy">
            </a>
            <a class="navbar-brand" href="{{route('equipo.ingenieria.index')}}">
              <img src="/images/ingenieria/logo.png" width="40" height="40" alt="" loading="lazy">
            </a>
            <a class="navbar-brand" href="{{route('equipo.salud.index')}}">
              <img src="/images/salud/logo.png" width="40" height="40" alt="" loading="lazy">
            </a>
          </form>
        </div>
      </div>
    </nav>
    @yield('body')
    <!-- Footer -->
    <br><br>
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Rafael Tavarez 100401245 seccion 07 2020</p>
        <p class="m-0 text-center text-white">Cantidad de Visitas: {{$visitas}}</p>
      </div>
      <!-- /.container -->
    </footer>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/color-thief/2.3.0/color-thief.umd.js"></script>    
@yield('script')
</html>