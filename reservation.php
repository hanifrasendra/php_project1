<?php
include 'config.php';
if (isset($_POST['submit'])) {
    $name = $_POST['nama'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $people = $_POST['people'];
    
    $tambah = "INSERT INTO reservations (name, date, time, people) VALUES ('$name', '$date', '$time', '$people')";
    echo "<script>alert('Data berhasil ditambahkan'); location='dashboard.php'</script>";
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
            <form action="" method="post">
                <div class="form-group">
                    <label for="nama">Nama</label><br>
                    <input type="text" id="nama" name="nama" placeholder="Masukkan nama lengkap"><br>
                </div>
                <div class="form-group">
                    <label for="date">Date</label><br>
                    <input type="date" name="date" id="date"><br>
                </div>
                <div class="form-group">
                    <label for="time">Time</label><br>
                    <input type="time" name="time" id="time"><br>
                </div>
                <div class="form-group">
                    <label for="people">People</label><br>
                    <input type="number" name="people" id="people"><br>
                </div>
                <div class="form-group">
                    <label for="submit"></label>
                    <input type="submit" value="Submit" name="submit">
                </div>
            </form>
        </div>
    </main>
</body>
</html>