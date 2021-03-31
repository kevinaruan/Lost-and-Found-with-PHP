<?php
    session_start();

    // if(empty($_SESSION['admin'])){
    //     header("Location: login.php");
    // }

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

    <div class="container">
    <br><br>
    <center>
        <a href="hilang/elektronik.php"><button type="button" class="btn btn-outline-info">Daftar Barang Elektronik</button></a>
        <a href="hilang/non.php"><button type="button" class="btn btn-outline-info">Daftar Barang NonElektronik</button></a>
        <a href="hilang/uang.php"><button type="button" class="btn btn-outline-info">Daftar Barang Uang</button></a>
        
    </center>
    </div>

    
    <br><br>
    <div class="footer" style="bottom: 0; ">
    <nav class="navbar" style="background-color: black; margin-bottom:0px;">
        <div class="col-md-12 text4" style="font-family:Comic Sans MS; color: white;">
            <center>
                Lost And Found IT Del<br>
                Copyright &copy PSW2 Kelompok 7
            </center>
        </div>
    </nav>
    </div>
</body>
</html>
