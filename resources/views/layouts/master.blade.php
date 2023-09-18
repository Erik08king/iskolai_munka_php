<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</head>
<body>
    
<!-- Grey with black text -->
<nav class="navbar navbar-expand-sm bg-light navbar-light">
    <div class="container-fluid">
      <ul class="navbar-nav bg-dark">
        <li class="nav-item">
          <a class="nav-link text-white" href="{{route('fooldal')}}">Lista</a>
        </li>
       <li class="nav-item">
          <a class="nav-link text-white" href="{{route('felvetel')}}">Felvétel</a>
        </li>

      </ul>
    </div>
  </nav>

  @yield('content')

<footer class="contatiner-fluid bg-dark text-white">

    <div class="container">
        <div class="row col-12">
            <div class="p-5"></div>
        </div>
    </div>

</footer>

</body>
</html>