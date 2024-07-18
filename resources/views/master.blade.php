<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include ('header')
   
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('add') }}">Add</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('view') }}">View</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('update') }}">Update</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
        @yield('content')
    </div>
    @include('footer')
</body>




</html>