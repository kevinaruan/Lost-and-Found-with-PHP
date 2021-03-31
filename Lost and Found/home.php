<?php
    session_start();

    if(empty($_SESSION['admin'])){
        header("Location: login.php");
    }

?>

<html>
<head>
<title>Lost And Found IT Del</title>
<style>
    .text4{
		text-shadow: 2px -1px 10px #3385ff;
    }
</style>
</head>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<body style="background-color: #ebe7e0;">
<nav class="navbar" style="background-color: #ebe7e0; border: 5px solid #c6d4e1;">
        <?php echo "<b>".(date('l, d-M-Y'))."</b>"; ?>
        <right><a href="logout.php"><button type="button" class="btn btn-primary ">Log Out</button></a></right>
    </nav>
    <nav class="navbar" style="background-color: black">
        <div class="col-md-1"></div>
        <div class="col-md-2">
            <img src="gambar/logo.jpg" width="120" height="120" class="rounded-circle d-inline-block align-top" alt="">
        </div>
        <div class="col-md-8">
            <center style="font-family:Castellar; color: white;"><h2 class="text4">Welcome to Lost and Found Application</h2>
            <h3 class="text4">Del Institute of Technology</h3>
            </center>
        </div>
        <div class="col-md-1"></div>
    </nav>

    <div class="container">
    <br><br>
    <center>
        <a href="daftarbarang/daftarbarangelektronik.php"><button type="button" class="btn btn-outline-info">Daftar Barang Elektronik</button></a>
        <a href="daftarbarang/daftarbarangnon.php"><button type="button" class="btn btn-outline-info">Daftar Barang NonElektronik</button></a>
        <a href="daftarbarang/daftarbaranguang.php"><button type="button" class="btn btn-outline-info">Daftar Barang Uang</button></a>
        
    </center>

    <br><br>
    <div class="col-md-6" style="margin: auto; background-color: #c6d4e1; border-radius:5px">
        <div class="col-md-12" style="margin-top:30px;">

<?php
    require('config/config.php');
    if(isset($_POST['submit'])){
      $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
      $gambarBarang= $_FILES['gambarBarang']['name'];
      $x = explode ('.', $gambarBarang);
      $ekstensi = strtolower(end($x));
      $ukuran = $_FILES['gambarBarang']['size'];
      $file_temp = $_FILES['gambarBarang']['tmp_name'];

      $namaBarang = $_POST['namaBarang'];
      $penemuBarang = $_POST['penemuBarang'];
      $noHp = $_POST['noHp'];
      $ciriBarang = $_POST['ciriBarang'];
      $tanggalDitemukan = $_POST['tanggalDitemukan'];
      $lokasi = $_POST['lokasi'];
      $kategori = $_POST['kategori'];
      
      if(in_array($ekstensi, $ekstensi_diperbolehkan)=== true){
        move_uploaded_file($file_temp,'gambar/ditemukan/'.$gambarBarang);
        $query = mysqli_query($data, "INSERT INTO formditemukan VALUES ('','$gambarBarang', '$namaBarang','$penemuBarang', '$noHp','$ciriBarang','$tanggalDitemukan', '$lokasi', '$kategori','')");

        if($query){
          echo "<script>alert('Berhasil !)</script>";
          header('location:home.php');
        }
        else{
          echo "<script>alert('Gagal!')</script>";

        };
      }

    }
  ?>

            <form method="post" enctype="multipart/form-data">
                <br>
                <h3 style="font-family: Century751 No2 BT;">Form Barang Ditemukan</h3><hr>
                <div class="form-group ">
                        <input type="text" name="id" class="form-control" id="id" hidden>
                    </div> 
                    <div class="form-group ">
                        <label for="gambar">Gambar Barang</label><br>
                        <input type="file" id="gambar" name="gambarBarang">
                    </div>
                    <div class="form-group ">
                        <input type="text" name="namaBarang" class="form-control" id="namaBarang" placeholder="Nama Barang">
                    </div> 
                    <div class="form-group">
                        <input type="text" name="penemuBarang" class="form-control" id="penemu" placeholder="Nama Penemu Barang">
                    </div>
                    <div class="form-group">
                        <input type="text" name="noHp" class="form-control" id="hp" placeholder="No HP">
                    </div>
                    <div class="form-group">
                    <textarea name="ciriBarang" placeholder="Masukkan ciri-ciri barang..." style="width: 100%;" name="" id="ciri"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="date" name="tanggalDitemukan" class="form-control" id="tanggal">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="lokasi" placeholder="Lokasi Barang Ditemukan" name="lokasi">
                    </div>
                    <div class="form-group">
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

    
    <br><br>
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
