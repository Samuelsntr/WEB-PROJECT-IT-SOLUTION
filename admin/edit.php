<?php
// include database connection file
include "template.php";
 
// Check if form is submitted for user update, then redirect to homepage after update
if( isset($_POST['update']))
{	
	$id = $_GET['id'];
	
    $nama = $_POST['nama'];
    $telpon = $_POST['notlp'];
    $alamat = $_POST['alamat'];
    $perangkat = $_POST['perangkat'];
    $os = $_POST['os'];
    $payment = $_POST['payment'];
    $kerusakan = $_POST['kerusakan'];
		
	// update user data
	$result = mysqli_query($conn, "UPDATE customers SET nama='$nama', telpon='$telpon', alamat='$alamat', perangkat='$perangkat', os='$os', payment='$payment', kerusakan='$kerusakan' WHERE id=$id");
	
    $sukses = true;
	// Redirect to homepage to display updated user in list
    // header("/edit.php");
}

?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($conn, "SELECT * FROM customers WHERE id=$id");
 
while($cust_data = mysqli_fetch_array($result))
{
	$nama = $cust_data['nama'];
	$telpon = $cust_data['telpon'];
	$alamat = $cust_data['alamat'];
	$perangkat = $cust_data['perangkat'];
	$os = $cust_data['os'];
	$payment = $cust_data['payment'];
	$kerusakan = $cust_data['kerusakan'];
}
?>
<div class="container">
    <div class="row">
        <div class="m-3">
	<form name="update_user" method="post" action="">
        <div style="display: flex;">
    <a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
  <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
</svg></a>
<h3 class="ms-2">EDIT DATA CUSTOMER</h3></div>
    <?php if(isset($sukses)): ?>
    <div class="alert alert-success" role="alert">
        Data berhasil diubah
    </div>
    <?php endif ?>
		<table class="table table-dark table-striped">
			<tr> 
				<td>Nama: </td>
				<td><input type="text" name="nama" value=<?php echo $nama;?>></td>
			</tr>
			<tr> 
				<td>No.tlp: </td>
				<td><input type="text" name="notlp" value=<?php echo $telpon;?>></td>
			</tr>
			<tr> 
				<td>Alamat: </td>
				<td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
			</tr>
			<tr> 
				<td>Perangkat: </td>
				<td><input type="text" name="perangkat" value=<?php echo $perangkat;?>></td>
			</tr>
			<tr> 
				<td>Sistem Operasi: </td>
				<td><input type="text" name="os" value=<?php echo $os;?>></td>
			</tr>
			<tr> 
				<td>Payment Method: </td>
				<td><input type="text" name="payment" value=<?php echo $payment;?>></td>
			</tr>
			<tr> 
				<td>Kerusakan</td>
				<td><textarea type="text" name="kerusakan"><?= $kerusakan ?></textarea>
			</tr>
			<tr>
				<td><input type="hidden" name="id" placeholder=<?php echo $_GET['id'];?>></td>
				<td><input class="btn btn-success btn-sm "type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
    </div>
    </div>
</div>

<?php include "footer.php"; ?>