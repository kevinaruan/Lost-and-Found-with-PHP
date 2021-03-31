<?php 
        if (isset($_POST['search'])) {
            $nama_barang = $_POST['barang'];
            $kategori = $_POST['kategori'];
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
<link rel="stylesheet" href="../../css/bootstrap.css">
<link rel="stylesheet" href="../../css/bootstrap.min.css">
<body style="background-color: #ebe7e0;">
    
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
</body>
</html>

<br><br>
<center>
    <h2 style="font-family:Bahnschrift Light Condensed;">
        <u>Daftar Barang Hilang Kategori <?php echo($kategori) ?></u>
    </h2>
</center>
<br>
<?php
    include_once "../../config/config.php";
    $query = mysqli_query($data, "SELECT * FROM formbaranghilang ORDER BY id DESC");
    $hasil = [];
    while($satu = mysqli_fetch_assoc($query)){
        $hasil[] = $satu; 
    }
?>

<div class="container">
<div>
    <form action="cariBarang.php" method="post">
        <input type="hidden" name="kategori" value="<?php echo($kategori); ?>">
        <input type="text" style="border-radius:6px; width: 350px; height:35px" name="barang" placeholder="Nama Barang">
        <input class="btn btn-info btn-sm" style="height:34px; margin-top: -6px;" type="submit" name="search" value="Cari" >
    </form>           
</div>
<table class="table table-hover table-striped table-bordered" style="background-color:#c6d4e1">
    <thead>
        <tr>
        <th style = "text-align:center" scope="col">No</th>
        <th style = "text-align:center" scope="col">Gambar</th>
        <th style = "text-align:center" scope="col">Nama</th>
        <th style = "text-align:center" scope="col">Pemilik</th>
        <th style = "text-align:center" scope="col">No HP</th>
        <th style = "text-align:center" scope="col">Ciri-ciri</th>
        <th style = "text-align:center" scope="col">Tanggal</th>
        <th style = "text-align:center" scope="col">Lokasi</th>

        <th style = "text-align:center" scope="col">Action</th>
        </tr>
    </thead>

    <?php $no = 0; foreach($hasil as $baru) :  
        if($baru['namaBarang'] == $nama_barang && $baru['kategori'] == $kategori) :
            $no++;
    ?>

    <tr>
        <td style = "text-align:center"><?= $no; ?></td>
        <td style = "text-align:center"><img src="../../gambar/ditemukan/<?= $baru['gambarBarang']; ?>" alt=" " width="120px;"></td>
        <td style = "text-align:center"><?= $baru['namaBarang']; ?></td>
        <td style = "text-align:center"><?= $baru['pemilikBarang']; ?></td>
        <td style = "text-align:center"><?= $baru['noHp']; ?></td>
        <td style = "text-align:center"><?= $baru['ciriBarang']; ?></td>
        <td style = "text-align:center"><?= $baru['tanggalHilang']; ?></td>
        <td style = "text-align:center"><?= $baru['lokasi']; ?></td>
        <!-- <td>

        </td> -->
        <td>
            <center>
              
                
                <a href="../../mahasiswa/form/editHilang.php?id=<?= $baru['id']; ?>"><input class="btn btn-primary" type="button" value="Edit"></a>
            
            </center>
        </td>
    </tr>
    
<?php
    endif; 
    endforeach; 
?>
</table>

</div>

<html>
<head>
<title></title>
</head>
<body>
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
