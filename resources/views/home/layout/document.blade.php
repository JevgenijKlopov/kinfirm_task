<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    @vite('resources/css/front/app.css')
    <title>Document</title>
</head>
<body>
    <header class="navbar bg-dark" data-bs-theme="dark">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                  </li>
                  
                  @if (App\Models\User::getByToken())                    
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('logout')}}">Logout</a>
                  </li>
                  @endif
                  @if (!(App\Models\User::getByToken()) )
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">Login</a>
                  </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{route('registration')}}">Registration</a>
                  </li>  
                  @endif
                  
                  <li class="nav-item">
                      <p class="nav-link">{{App\Models\User::getByToken()->name ?? ''}}</p>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <main>
            @yield('content')           
    </main>
    @vite('resources/js/front/app.js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>