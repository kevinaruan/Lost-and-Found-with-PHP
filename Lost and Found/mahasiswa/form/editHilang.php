    <?php
    $id = $_GET['id'];
    include_once "../../config/config.php";
    $query = mysqli_query($data, "SELECT * FROM formbaranghilang WHERE id = $id");

    $satu = mysqli_fetch_assoc($query);

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
<form method="post" enctype="multipart/form-data" action="edit.php">
    <br>
    <h3 style="font-family: Century751 No2 BT;">Form Barang Hilang</h3><hr>
    <div class="form-group ">
            <input type="text" name="id" id="id" value="<?= $satu['id']; ?>" hidden>
        </div>
        <div class="form-group ">
            <label for="gambar">Gambar Barang</label><br>
            <input type="file" name="gambarBarang" id="gambar" value="<?= $satu['gambarBarang']; ?>">
        </div>
        <div class="form-group ">
            <input type="text" name="namaBarang" class="form-control" id="namaBarang" placeholder="Nama Barang" value="<?= $satu['namaBarang']; ?>">
        </div>
        <div class="form-group">
            <input type="text" name="pemilikBarang" class="form-control" id="pemilik" placeholder="Nama yang kehilangan barang" value="<?= $satu['pemilikBarang']; ?>">
        </div>
        <div class="form-group">
            <input type="text" name="noHp" class="form-control" id="hp" placeholder="No HP" value="<?= $satu['noHp']; ?>">
        </div>
        <div class="form-group">
           <textarea placeholder="Masukkan ciri-ciri barang..." style="width: 100%;" name="ciriBarang" id="ciri" ><?= $satu['ciriBarang']; ?></textarea>
        </div>
        <div class="form-group">
            <input type="date" name="tanggalHilang" class="form-control" id="tanggal" value="<?= $satu['tanggalHilang']; ?>">
        </div>
        <div class="form-group">
            <input type="text" name="lokasi" class="form-control" id="lokasi" placeholder="Lokasi Barang Hilang" value="<?= $satu['lokasi']; ?>">
        </div>
        <div class="form-group ">
        <select id="kategori" name="kategori" class="form-control" >
            <option selected><?= $satu['kategori']; ?></option>
            <option>Elektronik</option>
            <option>NonElektronik</option>
            <option>Uang</option>
        </select>
        </div>
 
  <button type="submit" class="btn btn-info">Submit</button>
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
