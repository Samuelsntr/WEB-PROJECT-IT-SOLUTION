<?php
include "template.php";
require "../connection.php";

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM customers where id = $id");

?>

    <div class="card m-3" style="width: 18rem;">
    <div class="card-body">
<?php while($cust_data = mysqli_fetch_array($result)) {
    echo "<h5 class='card-title'>".$cust_data['nama']."</h5>";
    echo "<h6 class='card-subtitle mb-2 text-muted'>".$cust_data['telpon']."</h6>";
    echo "<p class='card-text'>".$cust_data['alamat']."</p>";
    echo "<p class='card-text'>".$cust_data['perangkat']."</p>";
    echo "<p class='card-text'>".$cust_data['os']."</p>";
    echo "<p class='card-text'>".$cust_data['payment']."</p>";
    echo "<p class='card-text'>".$cust_data['kerusakan']."</p>"; } ?>
    <a href="index.php" class="card-link">Back</a>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>



<?php include "footer.php"; ?>