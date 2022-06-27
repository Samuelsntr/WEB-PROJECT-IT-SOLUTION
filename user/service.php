<?php 
include "config.php";
include "../header.php"; 


?>
<div class="container">
<form action="" method="post" enctype="multipart/form-data">
<div class="card text-center m-5">
  <div class="card-header">
    IT Solution
  </div>
  <div class="card-body m-3" style="text-align: left;">
    <h5 class="card-title text-uppercase">Service Perangkat</h5>
    <?php if( isset($sukses)) : ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 500px;">
<strong>Thank You! </strong> Pesan kamu sudah kami terima, tunggu yaa.
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
     <?php endif; ?>
    <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Nama:</label>
            <input type="text" class="form-control" id="recipient-name" name="nama" required>
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">No. tlp:</label>
            <input type="text" class="form-control" id="recipient-name" name="notlp" required>
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Alamat:</label>
            <input type="text" class="form-control" id="recipient-name" name="alamat" required>
          </div>
          <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="perangkat" required>
              <option selected>Perangkat</option>
              <option>Laptop</option>
              <option>Komputer / PC</option>
            </select>
          </div>
          <div class="mb-3">
            <select class="form-select" id="os" aria-label="Default select example" name="os" required>
              <option selected>Sistem Operasi</option>
              <option>Windows</option>
              <option>Mac OS</option>
              <option>Linux</option>
            </select>
          </div>
          <div class="mb-3">
            <select class="form-select" aria-label="Default select example" name="payment" required>
              <option selected>Metode Pembayaran</option>
              <option>COD</option>
              <option>Tranfer Bank</option>
              <option>Lainnya</option>
            </select>
            <div class="mb-3">
              <label for="message-text" class="col-form-label">Kerusakan:</label>
              <textarea class="form-control" id="message-text" name="kerusakan" required></textarea>
            </div>
            <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Gambar:</label>
            <input type="file" class="form-control" id="recipient-name" name="gambar">
          </div>

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </div>
  <div class="card-footer text-muted" style="text-align: center;">
    Your IT Solution
  </div>
</div>
</form>
</div>

<?php include "../footer.php"; ?>
