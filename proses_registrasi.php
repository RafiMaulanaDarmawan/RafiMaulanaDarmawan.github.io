<?php
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

include 'koneksi.php';
$query_validasi ="SELECT*FROM users WHERE username ='$username'";
$query = mysqli_query($koneksi,$query_validasi);

if(mysqli_num_rows($query)==0){
    $query_register = mysqli_query ($koneksi,"INSERT INTO users(nama,username,password) VALUES ('$nama','$username','$password')");
    if($query_register){ ?>
    <script>    
        alert("data berhasil di tambah");
        window.location.assign('login.php');
        </script>
        <?php }
    }else{?>
    <script>("username yang anda gunakan sudah terdaftar");
    windows.location.assign("register.php");
    </script>
    <?php
    }
