<html>
<head>
<title>Lost And Found IT Del</title>
<style>
    .text4{
		text-shadow: 2px -1px 10px #3385ff;
    }
</style>
</head>
<link rel="stylesheet" href="../../css/bootstrap.css">
<link rel="stylesheet" href="../../css/bootstrap.min.css">
<body>
    <nav class="navbar" style="background-color: black">
    <div class="col-md-1"></div>
    <div class="col-md-2">
        <img src="../../gambar/logo.jpg" width="120" height="120" class="rounded-circle d-inline-block align-top" alt="">
    </div>
    <div class="col-md-8">
        <center style="font-family:Castellar; color: white;"><h2 class="text4">Welcome to Lost and Found Application</h2>
        <h3 class="text4">Del Institute of Technology</h3>
        </center>
    </div>
    <div class="col-md-1"></div>
    </nav>

<div class="container">
<div class="col-md-6" style="margin: auto; background-color: #c6d4e1; border-radius:5px">
<div class="col-md-12" style="margin-top:30px">
<?php
    require('../../config/config.php');
    if(isset($_POST['submit'])){
      $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
      $gambarBarang= $_FILES['gambarBarang']['name'];
      $x = explode ('.', $gambarBarang);
      $ekstensi = strtolower(end($x));
      $ukuran = $_FILES['gambarBarang']['size'];
      $file_temp = $_FILES['gambarBarang']['tmp_name'];

      $namaBarang = $_POST['namaBarang'];
      $pemilikBarang = $_POST['pemilikBarang'];
      $ciriBarang = $_POST['ciriBarang'];
      $tanggalHilang = $_POST['tanggalHilang'];
      $lokasi = $_POST['lokasi'];
      $kategori = $_POST['kategori'];
      
      if(in_array($ekstensi, $ekstensi_diperbolehkan)=== true){
        move_uploaded_file($file_temp,'gambar/hilang/'.$gambarBarang);
        $query = mysqli_query($data, "UPDATE formbaranghilang VALUES ('','$gambarBarang', '$namaBarang','$pemilikBarang','$ciriBarang','$tanggalHilang', '$lokasi', '$kategori')");

        if($query){
          echo "<script>alert('Berhasil !)</script>";
          header('location:../../home.php');
        }
        else{
          echo "<script>alert('Gagal!')</script>";

        };
      }

    }
  ?>

<form method="post" enctype="multipart/form-data">
    <br>
    <h3 style="font-family: Century751 No2 BT;">Form Edit Barang Hilang</h3><hr>
        <div class="form-group ">
           <input type="text" name="id" class="form-control" id="id" hidden>
        </div> 
        <div class="form-group ">
            <label for="gambar">Gambar Barang</label><br>
            <input type="file" id="gambar" name="gambarBarang">
        </div>
        <div class="form-group ">
            <input type="text" class="form-control" id="namaBarang" placeholder="Nama Barang" name="namaBarang">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="pemilikBarang" placeholder="Nama Penemu Barang" name="pemilikBarang">
        </div>
        <div class="form-group">
           <textarea placeholder="Masukkan ciri-ciri barang..." style="width: 100%;" name="ciriBarang" id="ciriBarang" ></textarea>
        </div>
        <div class="form-group">
            <input type="date" class="form-control" id="tanggalHilang" name="tanggalHilang">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" id="lokasiHilang" placeholder="Lokasi Barang Ditemukan" name="lokasi">
        </div>
        <div class="form-group ">
        <select id="kategori" class="form-control" name="kategori">
            <option selected>Pilih Kategori</option>
            <option>Elektronik</option>
            <option>NonElektronik</option>
            <option>Uang</option>
        </select>
        </div>
 
  <button type="submit" class="btn btn-info" name="submit">Submit</button>
  <br><br>
</form>
</div>
</div>
</div>

<nav class="navbar" style="background-color: black">
    <div class="col-md-12 text4" style="font-family:Comic Sans MS; color: white;">
        <center>
            Lost And Found IT Del<br> 
            Copyright &copy PSW2 Kelompok 7
        </center>
    </div>
</nav>

</body>
</html>
