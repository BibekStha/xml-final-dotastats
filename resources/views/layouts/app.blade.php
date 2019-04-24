<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('page_title') - DotaStats</title>
  <link rel="stylesheet" href="\css\app.css">
</head>
<body class="d-flex flex-row">
  <div class="d-flex flex-column" id="sidebar">
    @section('sidebar')
        <div id="user_container" class="d-flex flex-column align-items-center">
          <img src="/images/smiley-face.png" alt="" srcset="">
          <a href="/login/steam">Sign in using Steam</a>
        </div>
        <nav class="nav flex-column">
          <a class="nav-link active" href="/">Home</a>
          <a class="nav-link" href="/heroes">Heroes</a>
          <a class="nav-link" href="/teams">Teams</a>
          <a class="nav-link" href="/tournaments">Tournaments</a>
        </nav>
    @show
  </div>

  <div class="container main_container flex-grow-1">
    <div id="site_title">Dotastats</div>
    @yield('content')
  </div>

</body>
</html>