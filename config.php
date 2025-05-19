<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "reservasi_sistem";
$conn = mysqli_connect($host, $user, $pass, $db);


if (!$conn) {
    die ("koneksi gagal : ". mysqli_connect_error());
} 

echo "<script>location = 'reservation.php'</script>";

?>