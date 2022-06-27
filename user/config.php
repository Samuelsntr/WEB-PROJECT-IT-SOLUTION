<?php
 
     if(isset($_POST['tanya'])) {
        $nama = $_POST['nama'];
        $telpon = $_POST['notlp'];
        $keluhan = $_POST['keluhan'];
        // include database connection file
        include_once("../connection.php");
                
        // Insert user data into table
        $result = mysqli_query($conn, "INSERT INTO konsultasi(id,nama,telpon,tanya) VALUES('','$nama','$telpon','$keluhan')");
        // Show message when user added
        $suksesTanya = true;
        header("Refresh:10; url=index.php");
    }

	// Check If form submitted, insert form data into users table.
	if(isset($_POST['submit'])) {
		$nama = $_POST['nama'];
		$telpon = $_POST['notlp'];
		$alamat = $_POST['alamat'];
		$perangkat = $_POST['perangkat'];
		$os = $_POST['os'];
		$payment = $_POST['payment'];
		$kerusakan = $_POST['kerusakan'];
        $gambar = upload();
		// include database connection file
		include_once("../connection.php");
				
		// Insert user data into table
		$result = mysqli_query($conn, "INSERT INTO customers(id,nama,telpon,alamat,perangkat,os,payment,kerusakan, gambar) VALUES('','$nama','$telpon','$alamat','$perangkat','$os','$payment','$kerusakan', '$gambar')");
		// Show message when user added
        $sukses = true;
        header("Refresh:10; url=service.php");
	}

    function upload() {



        global $error;
        $namaFile = $_FILES['gambar']['name'];
        $sizeFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];
    
        //cek apakah gambar sudah di upload
            if($error === 4) {
                echo '<div class="alert alert-danger" role="alert">
                    Pilih Gambar Terlebih Dahulu !
                  </div>';
                return false;
            }
    
        // cek ekstensi file agar user tidak memasukkan gambar yang tidak disarankan
            $formatEkstensiValid = ['jpg', 'png', 'jpeg'];
            //explode untuk memecah format file menjadi array => (nama file) . (ekstensi) contoh : sandika.jpg
            $ekstensiGambar = explode('.', $namaFile);
            //strtolower => mengubah namafile huruf kecil semua
            $ekstensiGambar = strtolower(end($ekstensiGambar)); 
    
        // cek apakah gambar yang di upload sudah sesuai
            if (!in_array($ekstensiGambar, $formatEkstensiValid)) {
                echo '<div class="alert alert-danger" role="alert">
                        Format Tidak Sesuai !, Pastikan memilih telah gambar.
                      </div>';
                return false;
            }
    
        // cek apakah ukuran gambar terlalu besar
            if ($sizeFile > 1000000) {
                echo '<div class="alert alert-danger" role="alert">
                        Ukuran Gambar Terlalu Besar !
                      </div>';
                return false;
            }
    
        // jika file sesuai maka upload gambar pada lokasi file yang telah ditentukan
            // generate nama file sehingga gambar tidak tertimpa 
            $namaFileGenerate = uniqid();
            $namaFileGenerate .= '.';
            $namaFileGenerate .= $ekstensiGambar;
    
            // pindah lokasi file 
            move_uploaded_file($tmpName, '../asset/img/'.$namaFileGenerate);
    
            return $namaFileGenerate;
    }

	?>