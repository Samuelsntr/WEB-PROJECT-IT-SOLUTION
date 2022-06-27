<?php
session_start();

if ( !isset($_SESSION["login"])){
  header("Location: ../login.php");
}

include "../header.php";
include "config.php";
?>

<div class="container">
<main>
  <div class="container py-4">
    <!-- <header class="pb-3 mb-4 border-bottom"> -->
    <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
  <img src="../asset/img/its.png" width="40" height="32" class="me-2" viewBox="0 0 118 94" role="img"><title>Bootstrap</title><img fill-rule="evenodd" clip-rule="evenodd" d="M24.509 0c-6.733 0-11.715 5.893-11.492 12.284.214 6.14-.064 14.092-2.066 20.577C8.943 39.365 5.547 43.485 0 44.014v5.972c5.547.529 8.943 4.649 10.951 11.153 2.002 6.485 2.28 14.437 2.066 20.577C12.794 88.106 17.776 94 24.51 94H93.5c6.733 0 11.714-5.893 11.491-12.284-.214-6.14.064-14.092 2.066-20.577 2.009-6.504 5.396-10.624 10.943-11.153v-5.972c-5.547-.529-8.934-4.649-10.943-11.153-2.002-6.484-2.28-14.437-2.066-20.577C105.214 5.894 100.233 0 93.5 0H24.508zM80 57.863C80 66.663 73.436 72 62.543 72H44a2 2 0 01-2-2V24a2 2 0 012-2h18.437c9.083 0 15.044 4.92 15.044 12.474 0 5.302-4.01 10.049-9.119 10.88v.277C75.317 46.394 80 51.21 80 57.863zM60.521 28.34H49.948v14.934h8.905c6.884 0 10.68-2.772 10.68-7.727 0-4.643-3.264-7.207-9.012-7.207zM49.948 49.2v16.458H60.91c7.167 0 10.964-2.876 10.964-8.281 0-5.406-3.903-8.178-11.425-8.178H49.948z" fill="currentColor"></img>
  <span class="fs-4">IT Solution</span>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNavAltMarkup">
    <button class="btn btn-secondary" type="submit">Log out</button>
  </div>
</div>
</nav>

<?php if( isset($suksesTanya)) : ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 500px;">
<strong>Thank You! </strong> Pesan kamu sudah kami terima, tunggu yaa.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
     <?php endif; ?>

    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Custom jumbotron</h1>
        <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        <button class="btn btn-primary btn-lg" type="button">Example button</button>
      </div>

    </div>
    
    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3">
          <h2>Service Perangkat</h2>
          <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
          <a href="service.php"><button class="btn btn-outline-light" type="button">Service Perangkat</button></a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Konsultasi IT</h2>
          <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
          <button class="btn btn-outline-dark" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Tanya Kita</button>
        </div>
      </div>
    </div>
</main>

<!-- <div class="row justify-content-center">
<div class="card-group col-7">
<div class="card m-4" style="width: 18rem;">
  <img src="../asset/img/2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
<div class="card m-4" style="width: 18rem;">
  <img src="../asset/img/2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
</div>
</div>
 -->
 
 <!-- MODAL 1 -->
 
 <form action="" method="post">
   <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
       <div class="modal-content">
         <div class="modal-header">
           <h5 class="modal-title" id="exampleModalLabel">Tanya Kita</h5>
           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nama</label>
            <input type="text" class="form-control" id="recipient-name" name="nama" required>
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">No. tlp</label>
            <input type="text" class="form-control" id="recipient-name" name="notlp" required>
          </div>
          <div>
              <label for="message-text" class="col-form-label">Keluhan / Pertanyaan</label>
              <textarea class="form-control" id="message-text" name="keluhan" required></textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="tanya">Tanya</button>
        </div>
      </div>
    </div>
  
</form>

<!-- MODAL 2 -->


<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div>

<?php include "../footer.php" ?>