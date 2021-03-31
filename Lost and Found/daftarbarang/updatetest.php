<input type="hidden" name="id" value="<?php echo $_GET['id']; ?> ">

<?php 
                if(isset($_POST['ambil'])){
                    $id=$_POST['id'];
                    $tanggal = $_POST['tanggal'];
                    
                    $query = "UPDATE formditemukan SET status = '$tanggal' WHERE id = '$id'";
                    $test = mysqli_query($data,$query);
                    header("location:daftarbarangelektronik.php");

                }
                else{
                    echo"Del";
                }?>