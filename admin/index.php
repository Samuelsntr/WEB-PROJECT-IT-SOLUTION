<?php 
$a = "customers";
include "template.php"; 
require "../connection.php";
// PAGINATION

// $result = mysqli_query($conn, "SELECT * FROM customers");
// $jumlahDataPerHalaman = 4;
// $jumlahData = mysqli_num_rows($result);

// $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
// $halamanAktif = ( isset($_GET["page"])) ? $_GET["page"] : 1;
// $awalData = ( $jumlahDataPerHalaman * $halamanAktif) - $halamanAktif;

$result = mysqli_query($conn, "SELECT * FROM customers");

$cust_data = mysqli_fetch_array($result);

if (isset($_GET['cari'])){
    $search = $_GET['keyword'];
    $result = mysqli_query($conn, "SELECT * FROM customers WHERE nama LIKE '%".$search."%'");
}

?>

<div class="container">
    <div class="row">
        <div class="m-3">
            <form action="" method="get">
            <h3>DAFTAR CUSTOMER</h3>
            <div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Cari data customer" aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword" autocomplete="off">
  <button class="btn btn-outline-secondary" type="submit" id="button-addon2" name="cari">Search</button>
    </div>
    <!-- <div> -->
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <!-- <li class="page-item"><a class="page-link" href="">2</a></li> -->
                <!-- <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
        </nav>
    <!-- </div> -->

    <!-- </form> -->
            <table class="table table-dark mt-3 table-hover">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No. tlp</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <?php  
        $j = 1;
        while($cust_data = mysqli_fetch_array($result)) : ?>
                <tbody>
                <tr>
                <th><?= $j; ?></th>
                <td><?= $cust_data["nama"]; ?></td>
                <td><?= $cust_data["telpon"]; ?></td>
                <td><a href="show.php?id=<?= $cust_data["id"]; ?>"><button type='button' class='btn btn-success btn-sm'>Detail</button></a>
                    <a href="edit.php?id=<?= $cust_data["id"]; ?>"><button type='button' class='btn btn-warning btn-sm ms-2'>Edit</button></a>
                    <a href="delete.php?id=<?= $cust_data["id"]; ?>" onclick="return confirm('yakin?');" class='btn btn-danger btn-sm ms-2'>Delete</a>
                    </td>   
                    </tr>
                </tbody>
                <?php
                $j++;
                endwhile ?>
            </table>
        </div>
    </div>
  </div>

        <!-- Button trigger modal -->


<?php include "footer.php"; ?>