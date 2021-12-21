<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sign Up page</title>
  </head>
  <style type="text/css">
form{
 margin:0 auto;
 margin-top: 200px;
}
</style>
  <body class="bg-dark text-white">
    <div class="container">
      <form class="w-75">
      <div class="row">

        <img src="img/logo.png" class="col-lg-6 w-50">

        <div class="fomrdiv col-lg-6">

        
            <h1 class="mb-5">Sign Up here my friend</h1>
            <div class="mb-3">
               <div class="mb-3">
              <label for="name" class="form-label">Your name</label>
              <input type="text" class="form-control" id="name" name="name"  required>
            </div>
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" name="email"  required>
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
              <label for="pass-one" class="form-label">Password</label>
              <input type="password" class="form-control" id="pass-one" name="password"  required>
            </div>
            <!--  <div class="mb-3">
              <label for="pass-two" class="form-label">Password one more time</label>
              <input type="password" class="form-control" id="pass-two" name="password"  required>
            </div> -->
            <!-- <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <button type="submit" class="btn btn-outline-light">Submit</button>
          </div>
      </form>

</div>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>