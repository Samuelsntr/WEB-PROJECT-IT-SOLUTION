<?php
include('server.php');
// session_start();
require 'connection.php';


// cek cookie
if ( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
  $id = $_COOKIE['id'];
  $key = $_COOKIE['key'];

  // ambil username berdasarkan id
  $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
  $row = mysqli_fetch_array($result);

  // cek cookie dan username
  if( $key === hash('sha256', $row['username']) ) {
      $_SESSION['login'] = true;
  }
}

if( isset($_SESSION["login"])){
header("Location: admin/index.php");
exit;
}



if( isset($_POST["login"]) ){
    $em = $_POST["email"];
    $psw = $_POST["password"];
    $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$em'");

    
     // cek name
    if( mysqli_num_rows($result) === 1 ){
       // cek password
      $row = mysqli_fetch_assoc($result);
      if( password_verify($psw, $row["password"]) ) {
                    // set session
                    $_SESSION["login"] = true;

                    // cek remember me
                    if ( isset($_POST['remember']) ) {
                        // set cookie
                        setcookie('id', $row['id'], time()+60);
                        setcookie('key', hash('sha256', $row['username']), time()+60);
                    }
            header("Location: user/index.php");
            exit;
        }
      }
      $error = true;
}

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Signin Template · Bootstrap v5.2</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.2/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.2/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.2/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.2/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
    <main class="form-signin w-100 m-auto">
  <form action="" method="post">
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <?php if( isset($error)) : ?>
    <div class="alert alert-danger" role="alert">
      email / password salah !!!
    </div>
    <?php endif; ?>

    <div class="form-floating">
      <input type="text" class="form-control" id="email" placeholder="name@example.com" name="email" autocomplete="off">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="password" placeholder="Password" name="password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me" name="remember"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary mb-1" name="login">Sign in</button>
    <button type="button" class="w-100 btn btn-lg btn-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Sign up</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
  </form>
  </main>
  
  



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</body>
</html>

  
          <!-- Modal -->
<form action="" method="post">
  <div class="modal fade" data-bs-backdrop="static" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title " id="exampleModalLabel">Register Form</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="container mt-2 mb-2" style="text-align: left;">
          <label for="exampleFormControlInput1" class="form-label">Username</label>
          <input type="text" class="form-control" id="exampleFormControlInput1" name="name" required autocomplete="off"><br>
          <label for="exampleFormControlInput1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email" required autocomplete="off"><br>
          <label for="exampleFormControlInput1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleFormControlInput1" name="psw" required><br>
          <label for="exampleFormControlInput1" class="form-label">Repeat Password</label>
          <input type="password" class="form-control" id="exampleFormControlInput1" name="psw2" required>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="regis">Submit</button>
        </div>
      </div>
    </div>
  </div>
</form>
