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
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<body style="background-color: #ebe7e0;">
    
    <nav class="navbar" style="background-color: black">
    <div class="col-md-1"></div>
    <div class="col-md-2">
        <img src="../gambar/logo.jpg" width="120" height="120" class="rounded-circle d-inline-block align-top" alt="">
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

<a href="../home.php"><input style="margin-top:5px; margin-left:5px;" type="button" class="btn btn-primary" value="kembali"></a>
<br><br>
<center>
    <h2 style="font-family:Bahnschrift Light Condensed;">
        <u>Daftar Barang Ditemukan Kategori Elektronik</u>
    </h2>
</center>
<br>
<?php
    include_once "../config/config.php";
    $query = mysqli_query($data, "SELECT * FROM formditemukan ORDER BY id DESC");
    $hasil = [];
    while($satu = mysqli_fetch_assoc($query)){
        $hasil[] = $satu; 
    }
?>

<div class="container">
<div>
    <form action="cariBarang.php" method="post">
        <input type="hidden" name="kategori" value="Elektronik">
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
        <th style = "text-align:center" scope="col">Penemu</th>
        <th style = "text-align:center" scope="col">No HP</th>
        <th style = "text-align:center" scope="col">Ciri-ciri</th>
        <th style = "text-align:center" scope="col">Tanggal</th>
        <th style = "text-align:center" scope="col">Lokasi</th>
        <th style = "text-align:center" scope="col">Status</th>
        <th style = "text-align:center" scope="col">Pengambil</th>
        <th style = "text-align:center" scope="col">Action</th>
        </tr>
    </thead>

    <?php $no = 0; foreach($hasil as $baru) :  
        if($baru['kategori'] == "Elektronik") :
            $no++;
    ?>

    <tr>
        <td style = "text-align:center"><?= $no; ?></td>
        <td style = "text-align:center"><img src="../gambar/ditemukan/<?= $baru['gambarBarang']; ?>" alt=" " width="120px;"></td>
        <td style = "text-align:center"><?= $baru['namaBarang']; ?></td>
        <td style = "text-align:center"><?= $baru['penemuBarang']; ?></td>
        <td style = "text-align:center"><?= $baru['noHp']; ?></td>
        <td style = "text-align:center"><?= $baru['ciriBarang']; ?></td>
        <td style = "text-align:center"><?= $baru['tanggalDitemukan']; ?></td>
        <td style = "text-align:center"><?= $baru['lokasi']; ?></td>
        <td>
            <?php
                if($baru['status'] == 0000-00-00){
                    echo "New";
                }else{
                    echo "Taken on   : ".$baru['status'];
                    

                }
            ?>
        </td>
        <td>
        <?php
                if($baru['status'] == 0000-00-00){
                    echo "New";
                }else{
                    echo "Taken on   : ".$baru['status'];
                    

                }
            ?>
        </td>
        <td>
            <center>
            <?php $waktu = date('Y-m-d H:i:s'); ?>
            <?php
                if($baru['status'] == 0000-00-00){
            ?>  
                <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal">Take</button>
                <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Pengambil Barang</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <input type="text" name="pengambil" class="form-control" id="pengambil" placeholder="Nama Pengambil Barang">
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
        <a href="daftarbarangelektronik.php?id=<?= $baru['id']; ?>"><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal" name="ambil">Take</button></a>
        </div>
        
      </div>
    </div>
  </div>
                <a href="daftarbarangelektronik.php?id=<?= $baru['id']; ?>"><button class="btn btn-danger" name ="ambil">Delete</button></a>
              <?php }else{ ?>
                  <input type="button" class="btn btn-secondary" value="Take" disabled></a>
                  <a href="http://localhost:8080/editproyek/daftarbarang/deletebarangelektronik.php?id=<?= $baru['id']; ?>"><input type="button" class="btn btn-danger" value="Delete"></a>

                <?php } ?>
            </center>
        </td>

    </tr>
    
<?php
    endif; 
    endforeach; 
?>
</table>
<?php
    if(!empty($_GET['id'])){
        $id = $_GET['id'];
        $status =  mysqli_query($data, "UPDATE formditemukan SET status = '$waktu' WHERE id = $id");
    
        if(mysqli_affected_rows($data) > 0){
            // header('Location: daftarbarangelektronik.php');
            echo "
                <script>
                    window.location.replace('daftarbarangelektronik.php');
                </script>
            ";
        }
}
?>
<?php
    if(!empty($_GET['id'])){
        $id = $_GET['id'];
        $status =  mysqli_query($data, "UPDATE formditemukan SET pengambil = '$pengambil' WHERE id = $id");
    
        if(mysqli_affected_rows($data) > 0){
            // header('Location: daftarbarangelektronik.php');
            echo "
                <script>
                    window.location.replace('daftarbarangelektronik.php');
                </script>
            ";
        }
}
?>
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
