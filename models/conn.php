<?php 
$servername = "localhost";
$database   = "db_perpus";
$username   = "root";
$password   = "";

$conn = mysqli_connect($servername,$username,$password,$database);

if (!$conn){
    die("Koneksi Gagal");
}
// else{
//     // echo "berhasil konek";
// }

?>