<?php
include 'config.php';
if (isset($_POST['submit'])) {
    $name = $_POST['nama'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $people = $_POST['people'];
    
    $tambah = "INSERT INTO reservations (nama, tanggal_reservasi, waktu_reservasi, jumlah_orang) VALUES ('$name', '$date', '$time', '$people')";

    if (mysqli_query($conn, $tambah)) {
    echo "<script>alert('Data ditambahkan!'); location='dashboard.php';</script>";
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/output.css">
    <title>Document</title>
</head>
<body>
    <header class="bg-white sticky top-0 z-0 mx-0 items-center">
        <div class="flex justify-between w-[90%] mx-auto h-15">
            <div class=""></div>
            <nav class="flex items-center">
                <ul class="flex gap-x-20">
                    <li class="link-list"><a href="">Home</a></li>
                    <li class="link-list"><a href="">Service</a></li>
                    <li class="link-list"><a href="">About Us</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="container1">
            <form method="POST">
                <div class="form-group">
                    <label for="nama">Nama</label><br>
                    <input type="text" name="nama" placeholder="Masukkan nama lengkap"><br>
                </div>
                <div class="form-group">
                    <label for="date">Date</label><br>
                    <input type="date" name="date"><br>
                </div>
                <div class="form-group">
                    <label for="time">Time</label><br>
                    <input type="time" name="time"><br>
                </div>
                <div class="form-group">
                    <label for="people">People</label><br>
                    <input type="number" name="people" ><br>
                </div>
                <div class="form-group">
                    <label for="submit"></label>
                    <input type="submit" name="submit">
                </div>
            </form>
        </div>
    </main>
</body>
</html>