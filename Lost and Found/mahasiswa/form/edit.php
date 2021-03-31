<?php 
require('../../config/config.php');
$id = $_POST['id'];
$ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
$gambarBarang= $_FILES['gambarBarang']['name'];
$x = explode ('.', $gambarBarang);    
$ekstensi = strtolower(end($x));
$ukuran = $_FILES['gambarBarang']['size'];
$file_temp = $_FILES['gambarBarang']['tmp_name'];
$namaBarang = $_POST['namaBarang'];
$pemilikBarang = $_POST['pemilikBarang'];
$noHp = $_POST['noHp'];
$ciriBarang = $_POST['ciriBarang'];
$tanggalHilang = $_POST['tanggalHilang'];
$lokasi = $_POST['lokasi'];
$kategori = $_POST['kategori'];


if(in_array($ekstensi, $ekstensi_diperbolehkan)=== true){
    move_uploaded_file($file_temp,'../../gambar/ditemukan/'.$gambarBarang);
    $query = mysqli_query($data, "UPDATE formbaranghilang SET gambarBarang='$gambarBarang', namaBarang='$namaBarang', pemilikBarang='$pemilikBarang', noHp='$noHp', ciriBarang='$ciriBarang', tanggalHilang='$tanggalHilang', lokasi='$lokasi', kategori='$kategori' WHERE id ='$id'");

    
    if($query){
      echo "<script>alert('Berhasil !)</script>";
      header('location:../../index.php');
    }
    else{
      echo "<script>alert('Gagal!')</script>";

    };
  }


// mysql_query("UPDATE user SET nama='$nama', alamat='$alamat', pekerjaan='$pekerjaan' WHERE id='$id'");
 
// header("location:index.php?pesan=update");
 
?>