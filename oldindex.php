<?php include('server.php');
// session_start();

if(isset($_GET["true"]))
{
      echo "<script>
      alert('Berhasil daftar');
      </script>";
      header("Refresh:0; url=index.php");
}

// if ( !isset($_SESSION["login"])){
//   header("Location: login.php");
//   exit;
// }


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- <meta content="10" http-equiv="refresh"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-md">
          <a class="navbar-brand" href="#">IT Solution</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Services</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <a href="login.php">
                <button type="button" class="btn btn-success ms-2">Sign in</button>
              </a>
              <!-- <a href="signup.php"> -->
                <button type="button" class="btn btn-secondary ms-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Sign up</button>
              <!-- </a> -->
            </form>
          </div>
        </div>
      </nav>

      <!-- Modal -->
      <form action="" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="container mt-2 mb-2">
        <label for="exampleFormControlInput1" class="form-label">Username</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name"><br>
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email"><br>
        <label for="exampleFormControlInput1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleFormControlInput1" name="psw"><br>
        <label for="exampleFormControlInput1" class="form-label">Repeat Password</label>
        <input type="password" class="form-control" id="exampleFormControlInput1" name="psw2">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="regis">Submit</button>
      </div>
    </div>
  </div>
</div>
</form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>