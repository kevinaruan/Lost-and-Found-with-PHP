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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<body>
    <nav class="navbar" style="background-color: black">
    <div class="col-md-1"></div>
    <div class="col-md-2">
        <img src="gambar/logo.jpg" width="120" height="120" class="rounded-circle d-inline-block align-top" alt="">
    </div>
    <div class="col-md-7">
        <center style="font-family:Castellar; color: white;"><h2 class="text4">Welcome to Lost and Found Application</h2>
        <h3 class="text4">Del Institute of Technology</h3>
        </center>
    </div>
    
    <div class="col-md-2">
    <a href="login.php"><button style="background-color:#c6d4e1" type="button" class="btn">
    Login Admin
    </button></a>

  </div>
    </div>
    </nav>

    <br>
        <div></div>
        <div class="jumbotron" style="background-color: white;">
        <div class="row">
            <div class="col-md-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background-color:#c6d4e1">
                        <li class="breadcrumb-item active" aria-current="page">Lost</li>
                    </ol>
                </nav>
                <div class="jumbotron" style="margin-top: -17px; background-color: #ebe7e0">
                    <center>
                        <a href="mahasiswa/form/formHilang.php"><button type="button" class="btn btn-outline-info">Form Barang Hilang</button></a>
                        <a href="daftarbarangUser/daftarHilang.php"><button type="button" class="btn btn-outline-info">Daftar Barang Hilang</button></a>
                    </center>
                </div>
            </div>
            <div class="col-md-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb" style="background-color:#c6d4e1">
                        <li class="breadcrumb-item active" aria-current="page">Found</li>
                    </ol>
                </nav>
                <div class="jumbotron" style="margin-top: -17px; background-color: #ebe7e0">
                    <center>
                        <a href="mahasiswa/form/formDitemukan.php"><button type="button" class="btn btn-outline-info">Form Barang Ditemukan</button></a>
                        <a href="daftarbarangUser/daftarDitemukan.php"><button type="button" class="btn btn-outline-info">Daftar Barang Ditemukan</button></a>
                    </center>
                </div>
            </div>
        </div>
        </div>
        </div>

    <div class="jumbotron" style="background-color: white">
        <div class="row">
        <div class="col-md-6">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb" style="background-color:#c6d4e1">
                <li class="breadcrumb-item active" aria-current="page">Recent Barang Hilang</li>
            </ol>
        </nav>
        <div class="jumbotron" style="margin-top: -17px; background-color: #ebe7e0">
        <?php
        include_once  "config/config.php";
        $query = mysqli_query($data, "SELECT * FROM formbaranghilang ORDER BY id DESC LIMIT 3 ");
        $hasil = [];
        while ($satu = mysqli_fetch_assoc($query)) {
            $hasil[] = $satu;
        }
        ?>

        <table class="table table-hover table-striped table-bordered" style="margin-top: -40px; background-color: white">
            <thead >
                <tr>
                    <th style = "text-align:center" scope="col">No</th>
                    <th style = "text-align:center" scope="col">Nama Barang</th>
                    <th style = "text-align:center" scope="col">Gambar Barang</th>
                </tr>
            </thead>
        
        <?php $no = 0; foreach($hasil as $baru) :  
        if($baru['kategori']) :
            $no++;
    ?>
    <tr>
        <td style= "text-align:center;"><?= $no; ?></td>
        <td style= "text-align:center;"><?= $baru['namaBarang']; ?></td>
        <td style= "text-align:center;"><img height="99" width="120s" src="gambar/hilang/<?= $baru['gambarBarang'] ?>"></td>
        <center>
            
        </center>

    </tr>
    <?php
     endif;
 endforeach;
    ?>
</table>
</div>
</div>


<?php
include_once "config/config.php";
$query = "SELECT kategori, COUNT(*) as number FROM formditemukan GROUP BY kategori";
$result = mysqli_query($data, $query);
?>



        <div class="col-md-6">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb" style="background-color:#c6d4e1">
                    <li class="breadcrumb-item active" aria-current="page">Recent Barang Ditemukan</li>
                </ol>
            </nav>
            <?php
    include_once "config/config.php";
    $query = mysqli_query($data, "SELECT * FROM formditemukan  ORDER BY id DESC LIMIT 3" );
    $hasil = [];
    while($satu = mysqli_fetch_assoc($query)){
        $hasil[] = $satu; 
    }
?>
            <div class="jumbotron" style="margin-top: -17px; background-color: #ebe7e0">
                <table class="table table-hover table-striped table-bordered" style="margin-top: -40px; background-color: white">
                    <thead>
                        <tr>
                        <th style = "text-align:center" scope="col">No</th>
                        <th style = "text-align:center" scope="col">Nama Barang</th>
                        <th style = "text-align:center" scope="col">Gambar Barang</th>
                        </tr>
                    </thead>
                    <?php $no = 0; foreach($hasil as $baru) :  
        if($baru['kategori']) :
            $no++;
    ?>

    <tr>
        <td style = "text-align:center"><?= $no; ?></td>
        <td style = "text-align:center"><?= $baru['namaBarang']; ?></td>
        <td style = "text-align:center"><img src="gambar/ditemukan/<?= $baru['gambarBarang']; ?>" alt=" " height="99px;" width="120px;"></td>
        <center>
           
           
        </center>
        </td>
            
    </tr>

    <?php
        endif; 
        endforeach; 
    ?>
                </table>
            </div>
        </div>

        </div>
        <hr class="my-4">
        <?php  
 include_once "config/config.php";  
 $query = "SELECT kategori, count(*) as number FROM formbaranghilang GROUP BY kategori";  
 $result = mysqli_query($data, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Lost and Found</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['kategori', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["kategori"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                    //   title: 'GRAFIK PERBANDINGAN BARANG HILANG IT DEL',  
                    //   is3D:true, 
                    // legend: 'none',
                    pieSliceText: 'label', 
                    //   pieHole: 0.4  
                    pieStartAngle: 90,
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  ;
           var visualization = new google.visualization.PieChart(container);
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <div>  
                <center>
                <h2>Grafik Perbandingan Barang Hilang Mahasiswa IT DEL</h2>
                <br />  
                <div id="piechart" style="width: ; height: 300px;"></center></div>  
           </div>  
           
      </body>  

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

