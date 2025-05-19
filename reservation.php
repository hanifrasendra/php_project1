<?php
include 'config.php';
if (isset($_POST['submit'])) {
    $name = $_POST['nama'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $people = $_POST['people'];
    
    $tambah = "INSERT INTO reservations (nama, tanggal_reservasi, waktu_reservasi, jumlah_orang) VALUES ('$name', '$date', '$time', '$people')";
    

    if (mysqli_query($conn, $tambah)) {
        echo "tambah data berhasil";
    } else {
        echo "Error : ".mysqli_error($conn);
    }
    
    echo "<script>alert('Data berhasil ditambahkan'); location='dashboard.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
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