<?php
    session_start();
    /*if(!empty($_SESSION['admin'])){
        header("Location: login.php");
    }*/

?>
<?php
    include_once "config/config.php";
  
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $hasil = mysqli_query($data, "SELECT * FROM admin WHERE username = '$username'");
        
        if(mysqli_num_rows($hasil) > 0){
            $perbaris = mysqli_fetch_assoc($hasil);
            
            if($perbaris['password'] == $password){
                $_SESSION['admin'] = true;
                header('Location: home.php');
            }else{
                echo "password salah";
            }
        }

    }
  ?>

<html>
<head>
<title>
</title>
<link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>

<div style="margin:auto" class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <center><img src="gambar/logo.jpg" width="120" height="120" class="rounded-circle d-inline-block align-top" alt=""></center>
            <form class="form-signin" action="" method="post">
              <div class="form-label-group">
              <label for="inputUsername">Username</label>
                <input name="username" type="text" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
              </div>

              <div style="margin-top:20px" class="form-label-group">
              <label for="inputPassword">Password</label>
                <input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                </div>

              <div class="custom-control custom-checkbox mb-3">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                </div>
              <button name="submit" type="submit" style="margin-top:25px" class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
              <hr class="my-4">
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  </body>
  </html>