<?php $a = "konsultasi";include "template.php"; ?>
<div class="container">
    <div class="row">
        <div class="m-3">
            <h3>DAFTAR KONSULTASI</h3>
            <table class="table table-dark table-striped mt-3">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">No. tlp</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th>1</th>
                    <td>Samuel</td>
                    <td>087861446159</td>
                    <td><button type="button" class="btn btn-success btn-sm">Detail</button>
                    <button type="button" class="btn btn-warning btn-sm">Edit</button>
                    <button type="button" class="btn btn-danger btn-sm">Delete</button>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
  </div>

  <?php include "footer.php"; ?>