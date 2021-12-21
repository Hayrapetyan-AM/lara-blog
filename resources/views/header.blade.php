<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-secondary text-white">
<header class="p-3 bg-dark text-white">
        
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <!-- <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <img src="img/logo.png" class="bi me-2" width="40" height="40" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></img>
        </a> -->

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="/" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="/reviews" class="nav-link px-2 text-white">Reviews</a></li>
          <li><a href="/about" class="nav-link px-2 text-white">About</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <a href="/signin"><button type="button" class="btn btn-outline-light me-2">Sign in</button></a>
          <a href="/sign-up"><button type="button" class="btn btn-warning">Sign-up</button></a>
        </div>
      </div>
    </div>
  </header>

  <div class="container">@yield('main_content')</div>
</body>
</html>