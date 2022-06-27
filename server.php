<?php
require "connection.php";
session_start();

// $usernameLanding = $_SESSION['username'];

// initializing variables
$email = "";
$errors = array(); 

// connect to the database
// REGISTER USER
if (isset($_POST['regis'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password_1 = mysqli_real_escape_string($conn, $_POST['psw']);
  $password_2 = mysqli_real_escape_string($conn, $_POST['psw2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($email)) { array_push($errors, "email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
    echo "<script>
    alert('Password tidak sesuai');
  </script>";  
    return false;
}

  // first check the database to make sure 
  // a user does not already exist with the same email$email and/or email
  $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  // if user exists
  if ($user['email'] == $email) {
      echo "<script>
              alert('email already exist');
            </script>";
      return false;
    }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = password_hash($password_1, PASSWORD_DEFAULT);
  	$query = "INSERT INTO users (id, name, email, password)
  			  VALUES('', '$name', '$email', '$password')";
  	mysqli_query($conn, $query);
      echo "<script>
      alert('Berhasil daftar');
      </script>";
      header("Refresh:0; url=login.php");
  }
}

// ... 
