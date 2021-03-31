<?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        include_once "../config/config.php";
        mysqli_query($data, "DELETE FROM formditemukan WHERE id = $id");

    if(mysqli_affected_rows($data) > 0){
        echo"
            <script>
                alert('Berhasil');
                window.location.replace('http://localhost:8080/editproyek/daftarbarang/daftarbarangelektronik.php');
            </script>
        ";
    }
    }

?>